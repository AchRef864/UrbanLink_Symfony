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

            $vehicle->setType($request->request->get('type', ''));
            $vehicle->setModel($request->request->get('model', ''));
            $vehicle->setBrand($request->request->get('brand', ''));
            $vehicle->setLicenseplate($request->request->get('licensePlate', ''));
            $vehicle->setSeats((int) $request->request->get('seats', 1));
            $vehicle->setColor($request->request->get('color', null));
            $vehicle->setYear((int) $request->request->get('year', 2020));
            $vehicle->setAirconditioning(airConditioning: $request->request->getBoolean('airConditioning', false));
            $vehicle->setIsavailable(true);
            $vehicle->setIsverified($request->request->getBoolean('isVerified', false));

            // Image upload
            /** @var UploadedFile|null $imageFile */
            $imageFile = $request->files->get('image');
            if ($imageFile) {
                try {
                    $imageUrl = $imageUploader->uploadImage($imageFile);
                    $vehicle->setImage($imageUrl);
                } catch (\Exception $e) {
                    return $this->render('vehicle/error.html.twig', [
                        'message' => 'Image upload failed: ' . $e->getMessage(),
                    ]);
                }
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

            return $this->redirectToRoute('vehicle_index');
        }

        return $this->render('vehicle/new.html.twig', [
            'drivers' => $drivers,
        ]);
    }

    #[Route('/{id}', name: 'vehicle_show', methods: ['GET'])]
    public function show(int $id, VehicleRepository $repository): Response
    {
        $vehicle = $repository->find($id);

        if (!$vehicle) {
            return new Response('Vehicle not found', Response::HTTP_NOT_FOUND);
        }

        return $this->render('vehicle/show.html.twig', [
            'vehicle' => $vehicle,
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
}
