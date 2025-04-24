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

#[Route('/admin/maintenances')]
class MaintenanceController extends AbstractController
{
    #[Route('/', name: 'admin_maintenances_index', methods: ['GET'])]
    public function index(
        MaintenanceRepository $maintenanceRepository,
        VehicleRepository $vehicleRepository,
        Request $request
    ): Response {
        $category = $request->query->get('category');
        $searchTerm = $request->query->get('search');

        $maintenances = $category && $searchTerm 
            ? $maintenanceRepository->findBySearch($category, $searchTerm)
            : $maintenanceRepository->findAllOrderedByDate();

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



    #[Route('/{id}', name: 'maintenance_show', methods: ['GET'])]
    public function show(int $id, MaintenanceRepository $repository): Response
    {
        $maintenance = $repository->find($id);

        if (!$maintenance) {
            return $this->render('maintenance/error.html.twig', [
                'message' => 'Maintenance not found'
            ]);
        }

        return $this->render('maintenance/show.html.twig', [
            'maintenance' => $maintenance,
        ]);
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

}