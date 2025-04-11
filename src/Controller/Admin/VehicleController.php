<?php

namespace App\Controller\Admin;

use App\Entity\Vehicle;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Repository\VehicleRepository;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\Null_;
use App\Service\ImageUploadService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpClient\HttpClient;

#[Route('/Admin/vehicle')]
class VehicleController extends AbstractController
{
    // Inject HttpClientInterface via constructor

    #[Route('/', name: 'app_vehicle_index', methods: ['GET'])]
    public function index(VehicleRepository $vehicleRepository): Response
    {
        $vehicles = $vehicleRepository->findAll();
        return $this->render('Admin/vehicle/index.html.twig', [
            'vehicles' => $vehicles,
            'currentIndex' => 0, // Valeur par défaut
        ]);
    }

    #[Route('/create', name: 'app_vehicle_create', methods: ['POST'])]
    public function create(
        Request $request,
        EntityManagerInterface $em,
        SluggerInterface $slugger,
        HttpClientInterface $httpClient,
        imageUploadService $imageUploadService
    ): Response {
        // Debug incoming data
        dump($request->request->all());
        dump($request->files->all());
        
        try {
            $vehicle = new Vehicle();
            $vehicle->setType($request->request->get('type'));
            $vehicle->setModel($request->request->get('model'));
            $vehicle->setBrand($request->request->get('brand'));
            $vehicle->setLicensePlate($request->request->get('licensePlate1') . ' TUN ' . $request->request->get('licensePlate2'));
            $vehicle->setSeats((int)$request->request->get('seats'));
            $vehicle->setColor($request->request->get('color'));
            $vehicle->setYear((int)$request->request->get('year'));
            $vehicle->setAirConditioning($request->request->has('airConditioning'));

            $vehicle->setIsAvailable($request->request->has('isAvailable') ? true : false); // Default to false if not set
            $vehicle->setDriverID($request->request->get('driverID') ?: Null); // Null if not provided

            // Handle image upload with the ImageUploadService
            $imageFile = $request->files->get('image');
            try {
                $imageFile = $request->files->get('image');
                if ($imageFile) {
                    // Log original details about the file
                    $this->addFlash('info', 'Processing image: ' . $imageFile->getClientOriginalName() . 
                                    ' (' . $imageFile->getSize() . ' bytes)');
                    
                    // Upload the image and get the URL
                    //$imagePath = $imageFile->getPathname();
                    //$imageUrl = $imageUploadService->uploadImage($imagePath);
                    $imageUrl = $imageUploadService->uploadImage($imageFile);
                    
                    // Set the image URL in the vehicle entity
                    $vehicle->setImage($imageUrl);
                    $this->addFlash('success', 'Image uploaded successfully to: ' . $imageUrl);
                } else {
                    // No image uploaded
                    $this->addFlash('error', 'No image file found in request');
                    return $this->redirectToRoute('app_vehicle_index');
                }
            } catch (\Exception $e) {
                // Log the error and display to user
                $this->addFlash('error', 'Image upload failed: ' . $e->getMessage());
                return $this->redirectToRoute('app_vehicle_index');
            }
            // $vehicle->setImage('https://placehold.co/600x400'); 
            $vehicle->setIsverified(false);
            
            $em->persist($vehicle);
            $em->flush();

            $this->addFlash('success', 'Vehicle added successfully.');
            return $this->redirectToRoute('app_vehicle_index');
        } catch (\Exception $e) {
            // Catch any other exceptions
            var_dump('General error: ' . $e->getMessage());
            $this->addFlash('error', 'Failed to add vehicle: ' . $e->getMessage());
            return $this->redirectToRoute('app_vehicle_index');
        }
    }

    #[Route('/{id}', name: 'app_vehicle_show', methods: ['GET'])]
    public function show(Vehicle $vehicle, VehicleRepository $vehicleRepository, SessionInterface $session): Response
    {
        // Get all vehicles to build the slider
        $vehicles = $vehicleRepository->findAll();

        // Find the index of the current vehicle
        $currentIndex = 0;
        foreach ($vehicles as $index => $v) {
            if ($v->getId() === $vehicle->getId()) {
                $currentIndex = $index;
                break;
            }
        }

        // Store the current index in session
        $session->set('current_slide', $currentIndex);

        return $this->render('Admin/vehicle/index.html.twig', [
            'vehicles' => $vehicles,
            'currentIndex' => $currentIndex,
        ]);
    }

    #[Route('/Admin/vehicle/{id}', name: 'app_vehicle_carousel')]
    public function carousel(
        Vehicle $vehicle, 
        Request $request, 
        VehicleRepository $vehicleRepository
    ): Response {
        $vehicles = $vehicleRepository->findAll();
        $currentIndex = array_search($vehicle, $vehicles);

        $action = $request->query->get('action');
        $goToIndex = $request->query->getInt('index');

        if ($action === 'next') {
            $currentIndex = ($currentIndex + 1) % count($vehicles);
        } elseif ($action === 'prev') {
            $currentIndex = ($currentIndex - 1 + count($vehicles)) % count($vehicles);
        } elseif ($action === 'goTo' && $goToIndex >= 0 && $goToIndex < count($vehicles)) {
            $currentIndex = $goToIndex;
        }

        return $this->render('Admin/vehicle/index.html.twig', [
            'vehicles' => $vehicles,
            'currentIndex' => $currentIndex,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_vehicle_delete', methods: ['POST'])]
    public function delete(
        Vehicle $vehicle, 
        EntityManagerInterface $em
    ): Response {
        try {
            $em->remove($vehicle);
            $em->flush();

            $this->addFlash('success', 'Vehicle deleted successfully.');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Failed to delete vehicle: ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_vehicle_index');
    }

    #[Route('/edit/{id}', name: 'app_vehicle_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Vehicle $vehicle,
        EntityManagerInterface $em,
        ImageUploadService $imageUploadService
    ): Response {
        if ($request->isMethod('POST')) {
            if (!$this->isCsrfTokenValid('vehicle_form', $request->request->get('_token'))) {
                $this->addFlash('error', 'Invalid CSRF token');
                return $this->redirectToRoute('app_vehicle_index');
            }

            try {
                // Update basic fields
                $vehicle->setType($request->request->get('type'));
                $vehicle->setModel($request->request->get('model'));
                $vehicle->setBrand($request->request->get('brand'));
                
                // License plate
                $licensePlate1 = trim($request->request->get('licensePlate1'));
                $licensePlate2 = trim($request->request->get('licensePlate2'));
                if (empty($licensePlate1) || empty($licensePlate2)) {
                    throw new \Exception('License plate parts cannot be empty');
                }
                $vehicle->setLicensePlate($licensePlate1 . ' TUN ' . $licensePlate2);
                
                // Other fields
                $vehicle->setSeats((int)$request->request->get('seats'));
                $vehicle->setColor($request->request->get('color'));
                $vehicle->setYear((int)$request->request->get('year'));
                $vehicle->setAirConditioning($request->request->has('airConditioning'));

                // Handle image upload if provided
                $imageFile = $request->files->get('image');
                if ($imageFile) {
                    $imageUrl = $imageUploadService->uploadImage($imageFile);
                    $vehicle->setImage($imageUrl);
                }

                $em->flush();
                $this->addFlash('success', 'Vehicle updated successfully.');
                return $this->redirectToRoute('app_vehicle_index');
                
            } catch (\Exception $e) {
                $this->addFlash('error', 'Failed to update vehicle: ' . $e->getMessage());
            }
        }

        return $this->render('Admin/vehicle/modal.html.twig', [
            'vehicle' => $vehicle,
        ]);
    }
    
}
