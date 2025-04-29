<?php

namespace App\Controller;

use App\Entity\Maintenance;
use App\Entity\Vehicle;
use App\Form\MaintenanceType;
use App\Repository\MaintenanceRepository;
use App\Repository\VehicleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Doctrine\Persistence\ManagerRegistry;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;

#[Route('/admin/maintenances')]
class MaintenanceController extends AbstractController
{
    #[Route('/', name: 'admin_maintenances_index', methods: ['GET'])]
    public function index(
        MaintenanceRepository $maintenanceRepository,
        VehicleRepository $vehicleRepository,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $category = $request->query->get('category');
        $searchTerm = $request->query->get('search');

        $maintenances = $category && $searchTerm 
            ? $maintenanceRepository->findBySearch($category, $searchTerm)
            : $maintenanceRepository->findAllOrderedByDate();

        // Update statuses based on current date
        $today = new \DateTimeImmutable();
        $todayDate = $today->format('Y-m-d');
        
        foreach ($maintenances as $maintenance) {
            $maintenanceDate = $maintenance->getMaintenanceDate();
            $maintenanceDateOnly = $maintenanceDate->format('Y-m-d');
            
            $newStatus = match(true) {
                $maintenanceDateOnly < $todayDate => Maintenance::STATUS_NOT_IN_MAINTENANCE,
                $maintenanceDateOnly === $todayDate => Maintenance::STATUS_IN_MAINTENANCE,
                default => Maintenance::STATUS_RESERVED
            };

            // Only update and persist if status changed
            if ($maintenance->getStatus() !== $newStatus) {
                $maintenance->setStatus($newStatus);
                $em->persist($maintenance);
            }
        }
        
        // Flush all changes at once
        $em->flush();

        return $this->render('maintenance/index.html.twig', [
            'maintenances' => $maintenances,
            'vehicles' => $vehicleRepository->findAll(),
            'serviceTypes' => $this->getServiceTypesData(),
            'category' => $category,
            'searchTerm' => $searchTerm,
        ]);
    }

    #[Route('/new', name: 'admin_maintenances_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $maintenance = new Maintenance();
        $form = $this->createForm(MaintenanceType::class, $maintenance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Set cost based on service type
            $serviceType = $maintenance->getServiceType();
            $serviceTypes = $this->getServiceTypesData();
            
            if (isset($serviceTypes[$serviceType])) {
                $maintenance->setCost($serviceTypes[$serviceType]['price']);
                
                // Set default provider if not set
                if (empty($maintenance->getServiceProvider())) {
                    $maintenance->setServiceProvider($serviceTypes[$serviceType]['providers'][0]);
                }
            }

            $today = new \DateTimeImmutable();
            $maintenanceDate = $maintenance->getMaintenanceDate();

            // Compare just the date portions (ignore time)
            $todayDate = $today->format('Y-m-d');
            $maintenanceDateOnly = $maintenanceDate->format('Y-m-d');

            if ($maintenanceDateOnly < $todayDate) {
                // Past maintenance - consider it completed (Not in maintenance)
                $maintenance->setStatus(Maintenance::STATUS_NOT_IN_MAINTENANCE);
            } elseif ($maintenanceDateOnly === $todayDate) {
                // Maintenance happening today
                $maintenance->setStatus(Maintenance::STATUS_IN_MAINTENANCE);
            } else {
                // Future maintenance - reserved
                $maintenance->setStatus(Maintenance::STATUS_RESERVED);
            }

            $em->persist($maintenance);
            $em->flush();

            $this->addFlash('success', 'Maintenance created successfully!');
            return $this->redirectToRoute('admin_maintenances_index');
        }

        return $this->render('maintenance/new.html.twig', [
            'form' => $form->createView(),
            'services' => $this->getServiceTypesData(),
        ]); 
    }

    #[Route('/edit/{id}', name: 'admin_maintenances_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request, 
        Maintenance $maintenance, 
        EntityManagerInterface $em
    ): Response {
        $form = $this->createForm(MaintenanceType::class, $maintenance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Update cost if service type changed
            $serviceType = $maintenance->getServiceType();
            $serviceTypes = $this->getServiceTypesData();
            
            if (isset($serviceTypes[$serviceType])) {
                $maintenance->setCost($serviceTypes[$serviceType]['price']);
                
                // Update provider if empty
                if (empty($maintenance->getServiceProvider())) {
                    $maintenance->setServiceProvider($serviceTypes[$serviceType]['providers'][0]);
                }
            }

            // Update status based on date
            $this->updateMaintenanceStatus($maintenance);
            
            $em->flush();
            $this->addFlash('success', 'Maintenance updated successfully!');
            return $this->redirectToRoute('admin_maintenances_index');
        }

        return $this->render('maintenance/edit.html.twig', [
            'form' => $form->createView(),
            'maintenance' => $maintenance,
            'serviceTypes' => $this->getServiceTypesData(),
        ]);
    }

    #[Route('/delete/{id}', name: 'admin_maintenances_delete', methods: ['POST'])]
    public function delete(
        Request $request, 
        Maintenance $maintenance, 
        EntityManagerInterface $em
    ): Response {
        if ($this->isCsrfTokenValid('delete'.$maintenance->getId(), $request->request->get('_token'))) {
            $em->remove($maintenance);
            $em->flush();
            $this->addFlash('success', 'Maintenance deleted successfully!');
        }

        return $this->redirectToRoute('admin_maintenances_index');
    }

    #[Route('/{id}', name: 'maintenance_show', methods: ['GET'])]
    public function show(int $id, MaintenanceRepository $repository, EntityManagerInterface $em): Response
    {
        $maintenance = $repository->find($id);

        if (!$maintenance) {
            return $this->render('maintenance/error.html.twig', [
                'message' => 'Maintenance not found'
            ]);
        }

        // Update status before showing
        $this->updateMaintenanceStatus($maintenance);
        $em->flush();

        return $this->render('maintenance/show.html.twig', [
            'maintenance' => $maintenance,
        ]);
    }

    private function getServiceTypesData(): array
    {
        return [
            'Oil Change' => [
                'price' => 50.00,
                'providers' => ['Quick Lube', 'Auto Service Center']
            ],
            'Tire Rotation' => [
                'price' => 30.00,
                'providers' => ['Tire Shop', 'Car Dealership']
            ],
            'Brake Service' => [
                'price' => 150.00,
                'providers' => ['Auto Service Center', 'Brake Specialists']
            ],
            'Engine Tune-up' => [
                'price' => 200.00,
                'providers' => ['Auto Service Center', 'Engine Masters']
            ],
            'Air Conditioning' => [
                'price' => 120.00,
                'providers' => ['Climate Control Shop', 'Auto Service Center']
            ]
        ];
    }

    private function updateMaintenanceStatus(Maintenance $maintenance): void
    {
        $today = new \DateTimeImmutable();
        $maintenanceDate = $maintenance->getMaintenanceDate();

        // Compare just the date portions (ignore time)
        $todayDate = $today->format('Y-m-d');
        $maintenanceDateOnly = $maintenanceDate->format('Y-m-d');

        if ($maintenanceDateOnly < $todayDate) {
            // Past maintenance - consider it completed (Not in maintenance)
            $maintenance->setStatus(Maintenance::STATUS_NOT_IN_MAINTENANCE);
        } elseif ($maintenanceDateOnly === $todayDate) {
            // Maintenance happening today
            $maintenance->setStatus(Maintenance::STATUS_IN_MAINTENANCE);
        } else {
            // Future maintenance - reserved
            $maintenance->setStatus(Maintenance::STATUS_RESERVED);
        }
    }

    // 🔍 Optional: Find by vehicle ID
    #[Route('/vehicle/{vehicleId}', name: 'maintenance_by_vehicle', methods: ['GET'])]
    public function findByVehicleId(int $vehicleId, MaintenanceRepository $repository): Response
    {
        $maintenances = $repository->findBy(['vehicleId' => $vehicleId]);

        if (!$maintenances) {
            return $this->render('maintenance/error.html.twig', [
                'message' => 'No maintenance records found for this vehicle'
            ]);
        }

        return $this->render('maintenance/by_vehicle.html.twig', [
            'maintenances' => $maintenances,
        ]);
    }
    
    #[Route('/maintenance/export/pdf/{id}', name: 'maintenance_export_pdf', methods: ['GET'])]
    public function exportToPdf(Maintenance $maintenance): Response
    {
        // Generate QR code
        $qrContent = sprintf(
            "UrbanLink Maintenance Report\nID: %d\nVehicle: %s %s\nPlate: %s\nDate: %s",
            $maintenance->getId(),
            $maintenance->getVehicle()->getBrand(),
            $maintenance->getVehicle()->getModel(),
            $maintenance->getVehicle()->getLicensePlate(),
            $maintenance->getMaintenanceDate()->format('Y-m-d')
        );

        $qrCode = Builder::create()
            ->writer(new PngWriter())
            ->data($qrContent)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(new \Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh())
            ->size(150)
            ->margin(10)
            ->roundBlockSizeMode(new \Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin())
            ->build();

        $qrCodeDataUri = $qrCode->getDataUri();

        // Rest of your PDF generation code remains the same...
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isRemoteEnabled', true);
        
        $dompdf = new Dompdf($pdfOptions);
        $html = $this->renderView('maintenance/export_pdf.html.twig', [
            'maintenance' => $maintenance,
            'qrCode' => $qrCodeDataUri,
            'generationDate' => new \DateTime()
        ]);
        
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        $response = new Response($dompdf->output());
        $response->headers->set('Content-Type', 'application/pdf');
        $filename = sprintf('UrbanLink_Maintenance_%d_%s.pdf', 
            $maintenance->getId(),
            (new \DateTime())->format('Y-m-d')
        );
        $response->headers->set('Content-Disposition', 'attachment; filename="'.$filename.'"');
        
        return $response;
    }

}