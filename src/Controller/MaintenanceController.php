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
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;

#[Route('/admin/maintenances')]
class MaintenanceController extends AbstractController
{
    private function getBaseTemplate(Security $security): string
    {
        return $security->isGranted('ROLE_ADMIN') ? 'base.html.twig' : 'basef.html.twig';
    }

    #[Route('/', name: 'admin_maintenances_index', methods: ['GET'])]
    public function index(
        MaintenanceRepository $maintenanceRepository,
        VehicleRepository $vehicleRepository,
        Request $request,
        EntityManagerInterface $em,
        Security $security
    ): Response {
        $category = $request->query->get('category');
        $searchTerm = $request->query->get('search');
        $sort = $request->query->get('sort', 'date_desc'); // Default to newest first

        // Get maintenances based on search if provided
        $maintenances = $category && $searchTerm 
            ? $maintenanceRepository->findBySearch($category, $searchTerm)
            : $maintenanceRepository->findAll();

        // Apply sorting
        switch ($sort) {
            case 'date_asc':
                usort($maintenances, function($a, $b) {
                    return $a->getMaintenanceDate() <=> $b->getMaintenanceDate();
                });
                break;
            case 'date_desc':
                usort($maintenances, function($a, $b) {
                    return $b->getMaintenanceDate() <=> $a->getMaintenanceDate();
                });
                break;
            case 'price_asc':
                usort($maintenances, function($a, $b) {
                    return $a->getCost() <=> $b->getCost();
                });
                break;
            case 'price_desc':
                usort($maintenances, function($a, $b) {
                    return $b->getCost() <=> $a->getCost();
                });
                break;
        }

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
            'services' => $this->getServiceTypesData(),
            'category' => $category,
            'searchTerm' => $searchTerm,
            'sort' => $sort,
            'baseTemplate' => $this->getBaseTemplate($security),
        ]);
    }

    #[Route('/new', name: 'admin_maintenances_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, Security $security): Response
    {
        $maintenance = new Maintenance();
        $form = $this->createForm(MaintenanceType::class, $maintenance);
        $form->handleRequest($request);

        // Handle AJAX requests differently
        if ($request->isXmlHttpRequest()) {
            if ($form->isSubmitted() && $form->isValid()) {
                try {
                    // Process the form data (same as before)
                    $serviceType = $maintenance->getServiceType();
                    $serviceTypes = $this->getServiceTypesData();
                    
                    if (isset($serviceTypes[$serviceType])) {
                        $maintenance->setCost($serviceTypes[$serviceType]['price']);
                        if (empty($maintenance->getServiceProvider())) {
                            $maintenance->setServiceProvider($serviceTypes[$serviceType]['providers'][0]);
                        }
                    }

                    // Set status based on date
                    $today = new \DateTimeImmutable();
                    $maintenanceDateOnly = $maintenance->getMaintenanceDate()->format('Y-m-d');
                    $todayDate = $today->format('Y-m-d');
                    
                    if ($maintenanceDateOnly < $todayDate) {
                        $maintenance->setStatus(Maintenance::STATUS_NOT_IN_MAINTENANCE);
                    } elseif ($maintenanceDateOnly === $todayDate) {
                        $maintenance->setStatus(Maintenance::STATUS_IN_MAINTENANCE);
                    } else {
                        $maintenance->setStatus(Maintenance::STATUS_RESERVED);
                    }

                    $em->persist($maintenance);
                    $em->flush();

                    // Initialize Stripe
                    \Stripe\Stripe::setApiKey($this->getParameter('stripe_secret_key'));
                    $checkout_session = \Stripe\Checkout\Session::create([
                        'payment_method_types' => ['card'],
                        'line_items' => [[
                            'price_data' => [
                                'currency' => 'eur',
                                'product_data' => [
                                    'name' => 'Maintenance Service: ' . $serviceType,
                                ],
                                'unit_amount' => (int)($maintenance->getCost() * 100),
                            ],
                            'quantity' => 1,
                        ]],
                        'mode' => 'payment',
                        'success_url' => $this->generateUrl(
                            'payment_success',
                            ['id' => $maintenance->getId()],
                            UrlGeneratorInterface::ABSOLUTE_URL
                        ),
                        'cancel_url' => $this->generateUrl(
                            'payment_fail',
                            ['id' => $maintenance->getId()],
                            UrlGeneratorInterface::ABSOLUTE_URL
                        ),
                        'metadata' => [
                            'maintenance_id' => $maintenance->getId(),
                        ],
                    ]);

                    return $this->json([
                        'success' => true,
                        'redirectUrl' => $checkout_session->url
                    ]);
                } catch (\Exception $e) {
                    return $this->json([
                        'success' => false,
                        'error' => 'Payment initiation failed: ' . $e->getMessage()
                    ], 400);
                }
            }

            // Form is not valid
            $errors = [];
            foreach ($form->getErrors(true) as $error) {
                $errors[$error->getOrigin()->getName()] = $error->getMessage();
            }

            return $this->json([
                'success' => false,
                'errors' => $errors
            ], 400);
        }

        // Regular non-AJAX request handling
        if ($form->isSubmitted() && $form->isValid()) {
            // ... (same logic as above, but with regular redirects/flash messages)
        }

        return $this->render('maintenance/new.html.twig', [
            'form' => $form->createView(),
            'services' => $this->getServiceTypesData(),
            'baseTemplate' => $this->getBaseTemplate($security),
        ]);
    }

    #[Route('/payment/success/{id}', name: 'payment_success', methods: ['GET'])]
    public function paymentSuccess(Request $request, EntityManagerInterface $em, int $id, Security $security): Response
    {
        $maintenance = $em->getRepository(Maintenance::class)->find($id);
        
        if (!$maintenance) {
            throw $this->createNotFoundException('Maintenance record not found');
        }
        
        // You might want to verify the payment with Stripe here
        // For production, you should set up a webhook to verify payments
        
        $em->flush();
        
        $this->addFlash('success', 'Payment completed successfully.');
        return $this->redirectToRoute('my_vehicle');
    }
    
    #[Route('/payment/fail/{id}', name: 'payment_fail', methods: ['GET'])]
    public function paymentFail(Request $request, EntityManagerInterface $em, int $id, Security $security): Response
    {
        $maintenance = $em->getRepository(Maintenance::class)->find($id);
        
        if ($maintenance) {
            $em->remove($maintenance);
            $em->flush();
        }
        
        $this->addFlash('error', 'Payment failed or was cancelled.');
        return $this->redirectToRoute('my_vehicle');
    }

    #[Route('/edit/{id}', name: 'admin_maintenances_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request, 
        Maintenance $maintenance, 
        EntityManagerInterface $em,
        Security $security
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
            'baseTemplate' => $this->getBaseTemplate($security),
        ]);
    }

    #[Route('/delete/{id}', name: 'admin_maintenances_delete', methods: ['POST'])]
    public function delete(
        Request $request, 
        Maintenance $maintenance, 
        EntityManagerInterface $em,
        Security $security
    ): Response {
        if ($this->isCsrfTokenValid('delete'.$maintenance->getId(), $request->request->get('_token'))) {
            $em->remove($maintenance);
            $em->flush();
            $this->addFlash('success', 'Maintenance deleted successfully!');
        }

        if ($security->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin_maintenances_index');
        } else{
            // Get the vehicle ID from the maintenance record
            $vehicleId = $maintenance->getVehicle()->getId();
            return $this->redirectToRoute('my_vehicle');
        }
    }

    #[Route('/{id}', name: 'maintenance_show', methods: ['GET'])]
    public function show(int $id, MaintenanceRepository $repository, EntityManagerInterface $em, Security $security): Response
    {
        $maintenance = $repository->find($id);

        if (!$maintenance) {
            return $this->render('maintenance/error.html.twig', [
                'message' => 'Maintenance not found',
                'baseTemplate' => $this->getBaseTemplate($security),
            ]);
        }

        // Update status before showing
        $this->updateMaintenanceStatus($maintenance);
        $em->flush();

        return $this->render('maintenance/show.html.twig', [
            'maintenance' => $maintenance,
            'baseTemplate' => $this->getBaseTemplate($security),
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
    public function findByVehicleId(int $vehicleId, MaintenanceRepository $repository, Security $security): Response
    {
        $maintenances = $repository->findBy(['vehicleId' => $vehicleId]);

        if (!$maintenances) {
            return $this->render('maintenance/error.html.twig', [
                'message' => 'No maintenance records found for this vehicle',
                'baseTemplate' => $this->getBaseTemplate($security),
            ]);
        }

        return $this->render('maintenance/by_vehicle.html.twig', [
            'maintenances' => $maintenances,
            'baseTemplate' => $this->getBaseTemplate($security),
        ]);
    }
    
    #[Route('/maintenance/export/pdf/{id}', name: 'maintenance_export_pdf', methods: ['GET'])]
    public function exportToPdf(Maintenance $maintenance, Security $security): Response
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
            'generationDate' => new \DateTime(),
            'baseTemplate' => $this->getBaseTemplate($security),
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

    #[Route('/maintenance/export/excel', name: 'maintenance_export_excel', methods: ['GET'])]
    public function exportToExcel(MaintenanceRepository $maintenanceRepository, Security $security): Response
    {
        $maintenances = $maintenanceRepository->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set headers
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Vehicle');
        $sheet->setCellValue('C1', 'Date');
        $sheet->setCellValue('D1', 'Type');
        $sheet->setCellValue('E1', 'Provider');
        $sheet->setCellValue('F1', 'Cost');
        $sheet->setCellValue('G1', 'Status');

        // Add data
        $row = 2;
        foreach ($maintenances as $maintenance) {
            $sheet->setCellValue('A'.$row, $maintenance->getId());
            $sheet->setCellValue('B'.$row, $maintenance->getVehicle()->getBrand().' '.$maintenance->getVehicle()->getModel());
            $sheet->setCellValue('C'.$row, $maintenance->getMaintenanceDate()->format('Y-m-d'));
            $sheet->setCellValue('D'.$row, $maintenance->getServiceType());
            $sheet->setCellValue('E'.$row, $maintenance->getServiceProvider());
            $sheet->setCellValue('F'.$row, $maintenance->getCost());
            
            $status = match($maintenance->getStatus()) {
                0 => 'Not in maintenance',
                1 => 'In maintenance',
                2 => 'Reserved',
                default => 'Unknown'
            };
            $sheet->setCellValue('G'.$row, $status);
            
            $row++;
        }

        // Create Excel file
        $writer = new Xlsx($spreadsheet);
        $fileName = 'maintenance_records_'.date('Y-m-d').'.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        $writer->save($temp_file);

        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }

    #[Route('/driver', name: 'driver_maintenances_index', methods: ['GET'])]
    public function driverIndex(
        MaintenanceRepository $maintenanceRepository,
        EntityManagerInterface $em,
        Security $security
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_DRIVER');
        
        $driver = $this->getUser();
        $vehicles = $em->getRepository(Vehicle::class)->findBy(['driver' => $driver]);
        
        $maintenances = [];
        foreach ($vehicles as $vehicle) {
            $vehicleMaintenances = $maintenanceRepository->findBy(
                ['vehicle' => $vehicle],
                ['maintenanceDate' => 'DESC']
            );
            $maintenances = array_merge($maintenances, $vehicleMaintenances);
        }

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
        
        $em->flush();

        return $this->render('maintenance/driver_index.html.twig', [
            'maintenances' => $maintenances,
            'serviceTypes' => $this->getServiceTypesData(),
            'baseTemplate' => $this->getBaseTemplate($security),
        ]);
    }

    #[Route('/driver/new/{vehicle_id}', name: 'driver_maintenances_new', methods: ['GET', 'POST'])]
    public function driverNew(
        Request $request, 
        EntityManagerInterface $em,
        int $vehicle_id,
        Security $security
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_DRIVER');
        
        $driver = $this->getUser();
        $maintenance = new Maintenance();
        
        // If vehicle_id is provided, set it
        if ($vehicle_id) {
            $vehicle = $em->getRepository(Vehicle::class)->find($vehicle_id);
            if ($vehicle && $vehicle->getDriver() === $driver) {
                $maintenance->setVehicle($vehicle);
            }
        }
        
        $form = $this->createForm(MaintenanceType::class, $maintenance, [
            'driver_vehicles' => $em->getRepository(Vehicle::class)->findBy(['driver' => $driver])
        ]);
        
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

            $this->updateMaintenanceStatus($maintenance);

            $em->persist($maintenance);
            $em->flush();

            $this->addFlash('success', 'Maintenance record created successfully!');
            return $this->redirectToRoute('driver_maintenances_index');
        }

        return $this->render('maintenance/driver_new.html.twig', [
            'form' => $form->createView(),
            'services' => $this->getServiceTypesData(),
            'baseTemplate' => $this->getBaseTemplate($security),
        ]); 
    }

    #[Route('/driver/edit/{id}', name: 'driver_maintenances_edit', methods: ['GET', 'POST'])]
    public function driverEdit(
        Request $request, 
        Maintenance $maintenance, 
        EntityManagerInterface $em,
        Security $security
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_DRIVER');
        
        $driver = $this->getUser();
        
        // Verify the maintenance belongs to one of the driver's vehicles
        if ($maintenance->getVehicle()->getDriver() !== $driver) {
            throw $this->createAccessDeniedException('You can only edit maintenance for your own vehicles.');
        }
        
        $form = $this->createForm(MaintenanceType::class, $maintenance, [
            'driver_vehicles' => [$maintenance->getVehicle()] // Only show the current vehicle
        ]);
        
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
            return $this->redirectToRoute('driver_maintenances_index');
        }

        return $this->render('maintenance/driver_edit.html.twig', [
            'form' => $form->createView(),
            'maintenance' => $maintenance,
            'serviceTypes' => $this->getServiceTypesData(),
            'baseTemplate' => $this->getBaseTemplate($security),
        ]);
    }

    #[Route('/driver/{id}', name: 'driver_maintenance_show', methods: ['GET'])]
    public function driverShow(int $id, MaintenanceRepository $repository, EntityManagerInterface $em, Security $security): Response
    {
        $this->denyAccessUnlessGranted('ROLE_DRIVER');
        
        $driver = $this->getUser();
        $maintenance = $repository->find($id);

        if (!$maintenance || $maintenance->getVehicle()->getDriver() !== $driver) {
            throw $this->createAccessDeniedException('You can only view maintenance for your own vehicles.');
        }

        // Update status before showing
        $this->updateMaintenanceStatus($maintenance);
        $em->flush();

        return $this->render('maintenance/show.html.twig', [
            'maintenance' => $maintenance,
            'baseTemplate' => $this->getBaseTemplate($security),
        ]);
    }

    // In your MaintenanceController.php

    #[Route('/clear-history/{vehicle_id}', name: 'clear_vehicle_maintenance_history', methods: ['POST'])]
    public function clearVehicleMaintenanceHistory(
        Request $request,
        EntityManagerInterface $em,
        int $vehicle_id,
        Security $security
    ): Response {
        $vehicle = $em->getRepository(Vehicle::class)->find($vehicle_id);
        
        if (!$vehicle) {
            throw $this->createNotFoundException('Vehicle not found');
        }

        // Check permissions - admin or vehicle owner
        if (!$security->isGranted('ROLE_ADMIN') && 
            ($security->getUser() !== $vehicle->getDriver())) {
            throw $this->createAccessDeniedException('You can only clear maintenance for your own vehicles.');
        }

        if ($this->isCsrfTokenValid('clear_history_'.$vehicle_id, $request->request->get('_token'))) {
            $maintenances = $em->getRepository(Maintenance::class)
                ->findBy(['vehicle' => $vehicle]);
            
            foreach ($maintenances as $maintenance) {
                $em->remove($maintenance);
            }
            
            $em->flush();
            
            $this->addFlash('success', 'Maintenance history cleared successfully!');
        }

        // Redirect back to appropriate page based on user role
        if ($security->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin_maintenances_index');
        } else {
            return $this->redirectToRoute('my_vehicle');
        }
    }
}