<?php

namespace App\Controller;

use App\Entity\Maintenance;
use App\Entity\Vehicle;
use App\Entity\ServiceTypes;
use App\Repository\MaintenanceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry; 

$servicesMap = ServiceTypes::getServicesMap();
#[Route('/maintenance')]
class MaintenanceController extends AbstractController
{
    // ✅ Get all maintenances
    #[Route('/', name: 'maintenance_index', methods: ['GET'])]
    public function index(
        Request $request,
        MaintenanceRepository $maintenanceRepository,
        ManagerRegistry $doctrine
    ): Response {
        $category = $request->query->get('category');
        $searchTerm = $request->query->get('search');
    
        $queryBuilder = $maintenanceRepository->createQueryBuilder('m');
    
        if ($category && $searchTerm) {
            switch ($category) {
                case 'vehicle':
                    $queryBuilder->andWhere('m.vehicle = :searchTerm')
                                 ->setParameter('searchTerm', $searchTerm);
                    break;
    
                case 'service':
                    $queryBuilder->andWhere('m.serviceType = :searchTerm')
                                 ->setParameter('searchTerm', $searchTerm);
                    break;
    
                case 'provider':
                    $queryBuilder->andWhere('m.serviceProvider = :searchTerm')
                                 ->setParameter('searchTerm', $searchTerm);
                    break;
            }
        }
    
        $maintenances = $queryBuilder->getQuery()->getResult();
    
        return $this->render('maintenance/index.html.twig', [
            'maintenances' => $maintenances,
            'category' => $category,
            'searchTerm' => $searchTerm,
            'vehicles' => $doctrine->getRepository(Vehicle::class)->findAll(),
            'services' => ServiceTypes::getServicesMap(),
        ]);
    }

    // ✅ Create new maintenance
    #[Route('/new', name: 'maintenance_new', methods: ['GET', 'POST'])]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $vehicles = $em->getRepository(Vehicle::class)->findAll();
        $servicesMap = ServiceTypes::getServicesMap();
    
        if ($request->isMethod('POST')) {
            $maintenance = new Maintenance();
    
            // Retrieve Vehicle by ID
            $vehicleId = $request->request->get('vehicleId');
            $vehicle = $em->getRepository(Vehicle::class)->find($vehicleId);
    
            if (!$vehicle) {
                return $this->render('maintenance/error.html.twig', [
                    'message' => 'Vehicle not found'
                ]);
            }
    
            $maintenance->setVehicle($vehicle);
    
            // Set the other maintenance fields
            $serviceType = $request->request->get('serviceType');
            $maintenance->setMaintenanceDate(new \DateTime($request->request->get('maintenanceDate')));
            $maintenance->setServiceType($serviceType);
            $maintenance->setDescription($request->request->get('description'));
    
            if (isset($servicesMap[$serviceType])) {
                $service = $servicesMap[$serviceType];
                $cost = $service['price'];
                $maintenance->setCost($cost);
    
                // Handle service provider (now as single selection)
                $serviceProviderId = $request->request->get('serviceProvider');
                if ($serviceProviderId) {
                    // Find the provider name by ID
                    $providerName = null;
                    foreach ($service['providers'] as $provider) {
                        if ($provider['id'] == $serviceProviderId) {
                            $providerName = $provider['name'];
                            break;
                        }
                    }
                    
                    if ($providerName) {
                        $maintenance->setServiceProvider($providerName);
                    } else {
                        return $this->render('maintenance/error.html.twig', [
                            'message' => 'Invalid service provider'
                        ]);
                    }
                }
            } else {
                return $this->render('maintenance/error.html.twig', [
                    'message' => 'Invalid service type'
                ]);
            }
    
            $maintenance->setStatus(); // Déduit automatiquement à partir de la date
    
            $em->persist($maintenance);
            $em->flush();
    
            return $this->redirectToRoute('maintenance_index', ['id' => $maintenance->getId()]);
        }
    
        return $this->render('maintenance/new.html.twig', [
            'vehicles' => $vehicles,
            'services' => $servicesMap,
        ]);
    }

    // ✅ Update existing maintenance
    #[Route('/{id}/edit', name: 'maintenance_edit', methods: ['GET', 'POST'])]
    public function update(int $id, Request $request, MaintenanceRepository $repository, EntityManagerInterface $em): Response
    {
        $vehicles = $em->getRepository(Vehicle::class)->findAll();
        $servicesMap = ServiceTypes::getServicesMap();
        $maintenance = $repository->find($id);

        if (!$maintenance) {
            return $this->render('maintenance/error.html.twig', [
                'message' => 'Maintenance not found'
            ]);
        }

        if ($request->isMethod('POST')) {
            // Retrieve Vehicle by ID
            $vehicleId = $request->request->get('vehicleId');
            $vehicle = $em->getRepository(Vehicle::class)->find($vehicleId);

            if (!$vehicle) {
                return $this->render('maintenance/error.html.twig', [
                    'message' => 'Vehicle not found'
                ]);
            }

            // Set the related vehicle to the maintenance
            $maintenance->setVehicle($vehicle);

            // Set the other maintenance fields
            $serviceType = $request->request->get('serviceType');
            $maintenance->setMaintenanceDate(new \DateTime($request->request->get('maintenanceDate')));
            $maintenance->setServiceType($serviceType);
            $maintenance->setDescription($request->request->get('description'));

            // Ensure the service type is valid
            if (isset($servicesMap[$serviceType])) {
                // Set the cost based on the service type
                $service = $servicesMap[$serviceType];
                $cost = $service['price'];
                $maintenance->setCost($cost);

                // Handle service provider (single selection)
                $serviceProviderId = $request->request->get('serviceProvider');
                if ($serviceProviderId) {
                    // Find the provider name by ID
                    $providerName = null;
                    foreach ($service['providers'] as $provider) {
                        if ($provider['id'] == $serviceProviderId) {
                            $providerName = $provider['name'];
                            break;
                        }
                    }
                    
                    if ($providerName) {
                        $maintenance->setServiceProvider($providerName);
                    } else {
                        return $this->render('maintenance/error.html.twig', [
                            'message' => 'Invalid service provider'
                        ]);
                    }
                }
            } else {
                return $this->render('maintenance/error.html.twig', [
                    'message' => 'Invalid service type'
                ]);
            }

            $maintenance->setStatus(); // Déduit automatiquement à partir de la date

            $em->flush();

            return $this->redirectToRoute('maintenance_index', ['id' => $maintenance->getId()]);
        }

        // Find the current provider ID for the selected service
        $currentProviderId = null;
        if ($maintenance->getServiceType() && isset($servicesMap[$maintenance->getServiceType()])) {
            foreach ($servicesMap[$maintenance->getServiceType()]['providers'] as $provider) {
                if ($provider['name'] === $maintenance->getServiceProvider()) {
                    $currentProviderId = $provider['id'];
                    break;
                }
            }
        }

        return $this->render('maintenance/edit.html.twig', [
            'maintenance' => $maintenance,
            'vehicles' => $vehicles,
            'services' => $servicesMap,
            'currentProviderId' => $currentProviderId,
        ]);
    }
    
    // ✅ Delete maintenance
    #[Route('/{id}', name: 'maintenance_delete', methods: ['DELETE'])]
    public function delete(int $id, MaintenanceRepository $repository, EntityManagerInterface $em): Response
    {
        $maintenance = $repository->find($id);

        if (!$maintenance) {
            return $this->render('maintenance/error.html.twig', [
                'message' => 'Maintenance not found'
            ]);
        }

        $em->remove($maintenance);
        $em->flush();

        return $this->redirectToRoute('maintenance_index');
    }

    // Show maintenance details
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
