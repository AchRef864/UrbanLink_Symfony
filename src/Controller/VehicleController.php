<?php

namespace App\Controller;

use App\Entity\User; // Import the Driver entity, not the Controller
use App\Entity\Vehicle;
use App\Service\ImageUploadService;
use App\Form\VehicleType;
use App\Repository\VehicleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use App\Repository\MaintenanceRepository;

#[Route('/vehicles')]
class VehicleController extends AbstractController
{
    #[Route('/', name: 'vehicle_index', methods: ['GET'])]
    public function index(Request $request, VehicleRepository $repository): Response
    {
        // Retrieve the search category and search query parameter
        $category = $request->query->get('category', '');
        $searchTerm = $request->query->get('search', '');

        // Query the vehicles based on the search category and term
        if ($category && $searchTerm) {
            $vehicles = $repository->createQueryBuilder('v')
                ->where("v.$category LIKE :searchTerm")
                ->setParameter('searchTerm', '%' . $searchTerm . '%')
                ->getQuery()
                ->getResult();
        } else {
            // No search term or category, fetch all vehicles
            $vehicles = $repository->findAll();
        }

        return $this->render('vehicle/index.html.twig', [
            'vehicles' => $vehicles,
            'searchTerm' => $searchTerm, // Pass the search term to the template
            'category' => $category, // Pass the category to the template
        ]);
    }

    #[Route('/new', name: 'vehicle_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, ImageUploadService $imageUploader): Response
    {
        $drivers = $em->getRepository(User::class)->findAll();

        if ($request->isMethod('POST')) {
            $vehicle = new Vehicle();

            // Validate required fields
            $requiredFields = ['type', 'model', 'brand', 'licensePlate', 'driverId'];
            foreach ($requiredFields as $field) {
                if (empty($request->request->get($field))) {
                    $this->addFlash('error', "The field {$field} is required");
                    return $this->redirectToRoute('vehicle_new');
                }
            }

            // Validate image
            $imageFile = $request->files->get('image');
            if (!$imageFile) {
                $this->addFlash('error', 'Vehicle image is required');
                return $this->redirectToRoute('vehicle_new');
            }

            $vehicle->setType($request->request->get('type', ''));
            $vehicle->setModel($request->request->get('model', ''));
            $vehicle->setBrand($request->request->get('brand', ''));
            $vehicle->setLicenseplate($request->request->get('licensePlate', ''));
            $vehicle->setSeats((int) $request->request->get('seats', 1));
            $vehicle->setColor($request->request->get('color', null));
            $vehicle->setYear((int) $request->request->get('year', 2020));
            $vehicle->setAirconditioning($request->request->getBoolean('airConditioning', false));
            $vehicle->setIsavailable(true);
            $vehicle->setIsverified($request->request->getBoolean('isVerified', false));

            // Image upload
            try {
                $imageUrl = $imageUploader->uploadImage($imageFile);
                $vehicle->setImage($imageUrl);
            } catch (\Exception $e) {
                $this->addFlash('error', 'Image upload failed: ' . $e->getMessage());
                return $this->redirectToRoute('vehicle_new');
            }

            // Set driver
            $driverId = $request->request->get('driverId');
            if ($driverId) {
                $driver = $em->getRepository(User::class)->find($driverId);
                if ($driver) {
                    $vehicle->setDriver($driver);
                }
            }

            $vehicle->validateAvailability($vehicle->getIsverified());

            $em->persist($vehicle);
            $em->flush();

            $this->addFlash('success', 'Vehicle created successfully');
            return $this->redirectToRoute('vehicle_index');
        }

        return $this->render('vehicle/new.html.twig', [
            'drivers' => $drivers,
        ]);
    }

    #[Route('/{id}', name: 'vehicle_show', methods: ['GET'])]
    public function show(int $id, VehicleRepository $vehicleRepository, MaintenanceRepository $maintenanceRepository): Response
    {
        $vehicle = $vehicleRepository->find($id);

        if (!$vehicle) {
            return new Response('Vehicle not found', Response::HTTP_NOT_FOUND);
        }

        // Option 1: If there's no relation in the Vehicle entity
        $maintenances = $maintenanceRepository->findBy(['vehicle' => $vehicle]);

        // Option 2: If the Vehicle entity has a relation like: /** @OneToMany(targetEntity="Maintenance", mappedBy="vehicle") */
        // $maintenances = $vehicle->getMaintenances();

        return $this->render('vehicle/show.html.twig', [
            'vehicle' => $vehicle,
            'maintenances' => $maintenances,
        ]);
    }

    #[Route('/{id}/edit', name: 'vehicle_edit', methods: ['GET', 'POST'])]
    public function edit(int $id, Request $request, VehicleRepository $repository, EntityManagerInterface $em, ImageUploadService $imageUploader): Response
    {
        // Find the vehicle by its ID
        $vehicle = $repository->find($id);

        if (!$vehicle) {
            return new Response('Vehicle not found', Response::HTTP_NOT_FOUND);
        }

        // Get all users (drivers)
        $drivers = $em->getRepository(User::class)->findAll();

        if ($request->isMethod('POST')) {
            // Update vehicle details
            $vehicle->setType($request->request->get('type', $vehicle->getType()));
            $vehicle->setModel($request->request->get('model', $vehicle->getModel()));
            $vehicle->setBrand($request->request->get('brand', $vehicle->getBrand()));
            $vehicle->setLicenseplate($request->request->get('licensePlate', $vehicle->getLicenseplate()));
            $vehicle->setSeats((int) $request->request->get('seats', $vehicle->getSeats()));
            $vehicle->setColor($request->request->get('color', $vehicle->getColor()));
            $vehicle->setYear((int) $request->request->get('year', $vehicle->getYear()));
            $vehicle->setAirconditioning($request->request->getBoolean('airConditioning', $vehicle->getAirconditioning()));
            $vehicle->setIsavailable($request->request->getBoolean('isAvailable', $vehicle->getIsavailable()));
            $vehicle->setIsverified($request->request->getBoolean('isVerified', $vehicle->getIsverified()));

            // Handle image upload if a new image is uploaded
            /** @var UploadedFile|null $imageFile */
            $imageFile = $request->files->get('image');
            if ($imageFile) {
                try {
                    $imageUrl = $imageUploader->uploadImage($imageFile);  // Call the upload service
                    $vehicle->setImage($imageUrl);  // Save the image URL
                } catch (\Exception $e) {
                    return $this->render('vehicle/error.html.twig', [
                        'message' => 'Image upload failed: ' . $e->getMessage(),
                    ]);
                }
            }

            // Handle driver update
            $driverId = $request->request->get('driverId');
            if ($driverId) {
                $driver = $em->getRepository(User::class)->find($driverId);
                if ($driver) {
                    $vehicle->setDriver($driver);  // Set the driver as an object
                }
            }

            $vehicle->validateAvailability($vehicle->getIsverified());

            // Persist the changes
            $em->flush();

            return $this->redirectToRoute('vehicle_index');
        }

        // Render the edit form and pass the vehicle and the list of drivers
        return $this->render('vehicle/edit.html.twig', [
            'vehicle' => $vehicle,
            'drivers' => $drivers,
        ]);
    }

    #[Route('/{id}', name: 'vehicle_delete', methods: ['DELETE'])]
    public function delete(int $id, VehicleRepository $repository, EntityManagerInterface $em): Response
    {
        $vehicle = $repository->find($id);
        if (!$vehicle) {
            return new Response('Vehicle not found', Response::HTTP_NOT_FOUND);
        }

        $em->remove($vehicle);
        $em->flush();

        return $this->redirectToRoute('vehicle_index');
    }

    #[Route('/my-vehicle', name: 'my_vehicle', methods: ['GET'])]
public function myVehicle(EntityManagerInterface $em): Response
{
    // Get the currently logged-in user
    $user = $this->getUser();
    
    if (!$user) {
        throw $this->createAccessDeniedException('You must be logged in to view your vehicle');
    }

    // Find vehicles assigned to this user
    $vehicles = $em->getRepository(Vehicle::class)->findBy(['driver' => $user]);

    return $this->render('vehicle/my_vehicle.html.twig', [
        'vehicles' => $vehicles,
        'user' => $user,
    ]);
}



#[Route('/driver/vehicle/new', name: 'driver_vehicle_new', methods: ['GET', 'POST'])]
public function driverAddVehicle(Request $request, EntityManagerInterface $em, ImageUploadService $imageUploader): Response
{
    // Ensure only drivers can access this
    $this->denyAccessUnlessGranted('ROLE_DRIVER');

    if ($request->isMethod('POST')) {
        $vehicle = new Vehicle();

        // Validate required fields
        $requiredFields = ['type', 'model', 'brand', 'licensePlate'];
        foreach ($requiredFields as $field) {
            if (empty($request->request->get($field))) {
                $this->addFlash('error', "The field {$field} is required");
                return $this->redirectToRoute('driver_vehicle_new');
            }
        }

        // Validate image
        $imageFile = $request->files->get('image');
        if (!$imageFile) {
            $this->addFlash('error', 'Vehicle image is required');
            return $this->redirectToRoute('driver_vehicle_new');
        }

        $vehicle->setType($request->request->get('type', ''));
        $vehicle->setModel($request->request->get('model', ''));
        $vehicle->setBrand($request->request->get('brand', ''));
        $vehicle->setLicenseplate($request->request->get('licensePlate', ''));
        $vehicle->setSeats((int) $request->request->get('seats', 1));
        $vehicle->setColor($request->request->get('color', null));
        $vehicle->setYear((int) $request->request->get('year', date('Y')));
        $vehicle->setAirconditioning($request->request->getBoolean('airConditioning', false));
        $vehicle->setIsavailable(true);
        $vehicle->setIsverified(false); // Needs admin verification

        // Set current user as driver
        $vehicle->setDriver($this->getUser());

        // Image upload
        try {
            $imageUrl = $imageUploader->uploadImage($imageFile);
            $vehicle->setImage($imageUrl);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Image upload failed: ' . $e->getMessage());
            return $this->redirectToRoute('driver_vehicle_new');
        }

        $em->persist($vehicle);
        $em->flush();

        $this->addFlash('success', 'Vehicle registered successfully! It will be available after admin verification.');
        return $this->redirectToRoute('my_vehicle');
    }

    return $this->render('vehicle/driver_new.html.twig');
}







}


