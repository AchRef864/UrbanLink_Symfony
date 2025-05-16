<?php

namespace App\Controller;

use App\Entity\Maintenance;
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
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\JsonResponse;

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
    public function new(
        Request $request, 
        EntityManagerInterface $em,
        ImageUploadService $imageUploader,
        Security $security
    ): Response {
        // Set base template - make sure this path is correct
        $baseTemplate = $security->isGranted('ROLE_ADMIN') ? 'base.html.twig' : 'basef.html.twig';
        
        // Prepare base template variables
        $templateVariables = [
            'base_template' => $baseTemplate,
            'drivers' => $em->getRepository(User::class)->findAll(),
        ];

        // Handle GET request
        if (!$request->isMethod('POST')) {
            return $this->render('vehicle/new.html.twig', $templateVariables);
        }

        // Handle POST request
        $formData = $request->request->all();
        $templateVariables['form_data'] = $formData;

        // Validate required fields
        $requiredFields = ['type', 'model', 'brand', 'licensePlate', 'driverId'];
        foreach ($requiredFields as $field) {
            if (empty($formData[$field])) {
                $this->addFlash('error', "Field {$field} is required");
                return $this->render('vehicle/new.html.twig', $templateVariables);
            }
        }

        // Validate image
        $imageFile = $request->files->get('image');
        if (!$imageFile) {
            $this->addFlash('error', 'Vehicle image is required');
            return $this->render('vehicle/new.html.twig', $templateVariables);
        }

        try {
            $imageUrl = $imageUploader->uploadImage($imageFile);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Image upload failed: '.$e->getMessage());
            return $this->render('vehicle/new.html.twig', $templateVariables);
        }

        // Create and persist vehicle
        $vehicle = (new Vehicle())
            ->setType($formData['type'])
            ->setModel($formData['model'])
            ->setBrand($formData['brand'])
            ->setLicenseplate($formData['licensePlate'])
            ->setSeats((int)($formData['seats'] ?? 1))
            ->setColor($formData['color'] ?? null)
            ->setYear((int)($formData['year'] ?? date('Y')))
            ->setAirconditioning($request->request->getBoolean('airConditioning', false))
            ->setIsavailable(true)
            ->setIsverified($request->request->getBoolean('isVerified', false))
            ->setImage($imageUrl);

        if ($driver = $em->getRepository(User::class)->find($formData['driverId'])) {
            $vehicle->setDriver($driver);
        }

        $em->persist($vehicle);
        $em->flush();

        $this->addFlash('success', 'Vehicle created successfully');
        return $this->redirectToRoute('vehicle_index');
    }

    #[Route('/{id}', name: 'vehicle_show', methods: ['GET'])]
    public function show(
        int $id,
        VehicleRepository $vehicleRepository,
        MaintenanceRepository $maintenanceRepository,
        Security $security // Inject the Security service
    ): Response {
        $vehicle = $vehicleRepository->find($id);

        if (!$vehicle) {
            return new Response('Vehicle not found', Response::HTTP_NOT_FOUND);
        }

        $maintenances = $maintenanceRepository->findBy(['vehicle' => $vehicle]);

        // Determine which base template to use
        $baseTemplate = $security->isGranted('ROLE_ADMIN') ? 'base.html.twig' : 'basef.html.twig';

        return $this->render('vehicle/show.html.twig', [
            'vehicle' => $vehicle,
            'maintenances' => $maintenances,
            'base_template' => $baseTemplate,
        ]);
    }

    #[Route('/{id}/edit', name: 'vehicle_edit', methods: ['GET', 'POST'])]
    public function edit(int $id, Request $request, VehicleRepository $repository, EntityManagerInterface $em, ImageUploadService $imageUploader, Security $security): Response
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
        $baseTemplate = $security->isGranted('ROLE_ADMIN') ? 'base.html.twig' : 'basef.html.twig';

        // Render the edit form and pass the vehicle and the list of drivers
        return $this->render('vehicle/edit.html.twig', [
            'vehicle' => $vehicle,
            'drivers' => $drivers,
            'base_template' => $baseTemplate
        ]);
    }

    #[Route('/{id}', name: 'vehicle_delete', methods: ['DELETE'])]
    public function delete(
        int $id,
        VehicleRepository $repository,
        EntityManagerInterface $em,
        Security $security
    ): Response {
        $vehicle = $repository->find($id);
    
        if (!$vehicle) {
            return new Response('Vehicle not found', Response::HTTP_NOT_FOUND);
        }
    
        $em->remove($vehicle);
        $em->flush();
    
        // Check the role of the logged-in user
        if ($security->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('vehicle_index');
        } elseif ($security->isGranted('ROLE_DRIVER')) {
            return $this->redirectToRoute('my_vehicle');
        }
        $baseTemplate = $security->isGranted('ROLE_ADMIN') ? 'base.html.twig' : 'basef.html.twig';
    
        return $this->redirectToRoute('app_login',[
            'base_template' => $baseTemplate,
        ]); // fallback if role not matched
    }
    
    #[Route('/my-vehicle', name: 'my_vehicle', methods: ['GET'])]
    public function myVehicle(Request $request, EntityManagerInterface $em): Response
    {
        // Get the currently logged-in user
        $user = $this->getUser();
        
        if (!$user) {
            throw $this->createAccessDeniedException('You must be logged in to view your vehicle');
        }

        // Get search term and sort direction from request
        $searchTerm = $request->query->get('search', '');
        $sortDirection = $request->query->get('sort', '');

        // Find vehicles assigned to this user, optionally filtered by license plate
        $queryBuilder = $em->getRepository(Vehicle::class)
            ->createQueryBuilder('v')
            ->where('v.driver = :user')
            ->setParameter('user', $user);

        if ($searchTerm) {
            $queryBuilder->andWhere('v.licensePlate LIKE :searchTerm')
                ->setParameter('searchTerm', '%' . $searchTerm . '%');
        }

        $queryBuilder->orderBy('v.brand', 'ASC');
        $vehicles = $queryBuilder->getQuery()->getResult();

        // For each vehicle, fetch its maintenance records
        $vehiclesWithMaintenance = [];
        foreach ($vehicles as $vehicle) {
            $maintenances = $em->getRepository(Maintenance::class)->findBy(
                ['vehicle' => $vehicle],
                ['maintenanceDate' => 'DESC'] // Sort by date descending
            );

            // Calculate total maintenance cost
            $totalMaintenanceCost = array_reduce(
                $maintenances,
                fn(float $total, Maintenance $m) => $total + $m->getCost(),
                0.0
            );

            $vehiclesWithMaintenance[] = [
                'vehicle' => $vehicle,
                'maintenances' => $maintenances,
                'totalMaintenanceCost' => $totalMaintenanceCost
            ];
        }

        // Sort vehicles by total maintenance cost if requested
        if ($sortDirection) {
            usort($vehiclesWithMaintenance, function($a, $b) use ($sortDirection) {
                if ($sortDirection === 'asc') {
                    return $a['totalMaintenanceCost'] <=> $b['totalMaintenanceCost'];
                } else {
                    return $b['totalMaintenanceCost'] <=> $a['totalMaintenanceCost'];
                }
            });
        }

        return $this->render('vehicle/my_vehicle.html.twig', [
            'vehiclesWithMaintenance' => $vehiclesWithMaintenance,
            'user' => $user,
            'searchTerm' => $searchTerm
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
            $vehicle->setIsverified(false); 

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

        return $this->render('vehicle/new.html.twig');
    }

    #[Route('/my-vehicle/{id}/edit', name: 'my_vehicle_edit', methods: ['GET', 'POST'])]
    public function editMyVehicle(
        int $id,
        Request $request,
        EntityManagerInterface $em,
        VehicleRepository $vehicleRepository,
        ImageUploadService $imageUploader
    ): Response {
        $user = $this->getUser();

        if (!$user) {
            throw $this->createAccessDeniedException('You must be logged in.');
        }

        $vehicle = $vehicleRepository->find($id);

        if (!$vehicle || $vehicle->getDriver() !== $user) {
            throw $this->createAccessDeniedException('You can only edit your own vehicles.');
        }

        if ($request->isMethod('POST')) {
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

            /** @var UploadedFile|null $imageFile */
            $imageFile = $request->files->get('image');
            if ($imageFile) {
                try {
                    $imageUrl = $imageUploader->uploadImage($imageFile);
                    $vehicle->setImage($imageUrl);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Image upload failed: ' . $e->getMessage());
                    return $this->redirectToRoute('my_vehicle_edit', ['id' => $vehicle->getId()]);
                }
            }

            $vehicle->validateAvailability($vehicle->getIsverified());

            $em->flush();

            $this->addFlash('success', 'Vehicle updated successfully.');
            return $this->redirectToRoute('my_vehicle');
        }

        return $this->render('vehicle/my_vehicle_edit.html.twig', [
            'vehicle' => $vehicle,
        ]);
    }

    #[Route('/{id}/verify-page', name: 'vehicle_verify_page', methods: ['GET'])]
public function verifyPage(int $id, VehicleRepository $vehicleRepository): Response
{
    $vehicle = $vehicleRepository->find($id);
    if (!$vehicle) {
        throw $this->createNotFoundException('Vehicle not found');
    }

    return $this->render('vehicle/verify.html.twig', [
        'vehicle' => $vehicle,
    ]);
}

#[Route('/{id}/verify', name: 'vehicle_verify', methods: ['POST'])]
public function verifyVehicle(
    int $id,
    Request $request,
    VehicleRepository $vehicleRepository,
    EntityManagerInterface $em
): Response
{
    $vehicle = $vehicleRepository->find($id);
    if (!$vehicle) {
        $this->addFlash('error', 'Vehicle not found');
        return $this->redirectToRoute('vehicle_index');
    }

    $plateImage = $request->files->get('plate_image');
    if (!$plateImage) {
        $this->addFlash('error', 'Please upload an image of the license plate');
        return $this->redirectToRoute('vehicle_verify_page', ['id' => $id]);
    }

    try {
        $apiResult = $this->callPlateRecognizerApi($plateImage);
        
        // Check if we got any results
        if (empty($apiResult['results'])) {
            throw new \RuntimeException('No license plate could be recognized in the image');
        }

        $recognizedPlate = $apiResult['results'][0]['plate'] ?? '';
        
        // Normalize both plates for comparison
        $normalizedRecognized = $this->normalizeLicensePlate($recognizedPlate);
        $normalizedVehicle = $this->normalizeLicensePlate($vehicle->getLicensePlate());

        if (empty($normalizedRecognized)) {
            throw new \RuntimeException('Could not extract license plate from image');
        }

        if ($normalizedRecognized !== $normalizedVehicle) {
            $this->addFlash('error', sprintf(
                'License plate verification failed. Recognized: %s, Expected: %s',
                $recognizedPlate ?: 'None',
                $vehicle->getLicensePlate()
            ));
            return $this->redirectToRoute('vehicle_verify_page', ['id' => $id]);
        }

        $vehicle->setIsVerified(true);
        $vehicle->validateAvailability(true);
        $em->flush();

        $this->addFlash('success', 'Vehicle verified successfully! Plate matched: ' . $vehicle->getLicensePlate());
        return $this->redirectToRoute('vehicle_show', ['id' => $id]);
    } catch (\Exception $e) {
        $this->addFlash('error', 'Verification failed: ' . $e->getMessage());
        return $this->redirectToRoute('vehicle_verify_page', ['id' => $id]);
    }
}

private function callPlateRecognizerApi(UploadedFile $image): array
{
    $apiKey = $this->getParameter('plate_recognizer_api_key');
    $apiUrl = 'https://api.platerecognizer.com/v1/plate-reader/';

    $client = HttpClient::create();
    $response = $client->request('POST', $apiUrl, [
        'headers' => [
            'Authorization' => 'Token ' . $apiKey,
        ],
        'body' => [
            'upload' => fopen($image->getPathname(), 'r'),
            'regions' => ['us'], // Focus on US plates
        ],
    ]);

    $data = $response->toArray();

    // Check if we got valid results
    if (!isset($data['results']) || empty($data['results'])) {
        throw new \RuntimeException('No license plate could be recognized in the image');
    }

    return $data;
}

private function normalizeLicensePlate(string $plate): string
{
    // Remove all non-alphanumeric characters and convert to uppercase
    return strtoupper(preg_replace('/[^A-Z0-9]/', '', $plate));
}
}