<?php

namespace App\Controller;

use App\Entity\Taxi;
use App\Entity\Course;
use App\Form\TaxiType;
use App\Repository\TaxiRepository;
use App\Repository\UserRepository;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/admin/taxi')]
class TaxiController extends AbstractController
{
    #[Route('/users', name: 'taxi_user_list')]
    public function userList(UserRepository $userRepo): Response
    {
        // On récupère tous les users ayant role = 'taxi'
        $drivers = $userRepo->findBy(['role' => 'taxi']);

        return $this->render('taxiste/liste.html.twig', [
            'drivers' => $drivers,
        ]);
    }

    // 2) Page d'accueil des taxis existants
    #[Route('/', name: 'taxi_index')]
    public function index(TaxiRepository $taxiRepository): Response
    {
        return $this->render('back_office/taxi/index.html.twig', [
            'taxis' => $taxiRepository->findAll(),
        ]);
    }

    // 3) Création d'un taxi pour un user donné
    #[Route('/new/{userId}', name: 'taxi_new', methods: ['GET','POST'])]
    public function new(
        int $userId,
        UserRepository $userRepo,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $user = $userRepo->find($userId);
        if (!$user instanceof User) {
            throw $this->createNotFoundException('Utilisateur introuvable.');
        }

        $taxi = new Taxi();
        $taxi->setUser($user);

        $form = $this->createForm(TaxiType::class, $taxi, [
            'user' => $user,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($taxi);
            try {
                $em->flush();
                $this->addFlash('success', 'Taxi créé pour ' . $user->getName());
                return $this->redirectToRoute('taxi_user_list');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Immatriculation ou licence déjà utilisée.');
            }
        }

        return $this->render('back_office/taxi/new.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    // 4) Modification d'un taxi existant
    #[Route('/{id}/edit', name: 'taxi_edit', methods: ['GET','POST'])]
    public function edit(
        Taxi $taxi,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $form = $this->createForm(TaxiType::class, $taxi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $em->flush();
                $this->addFlash('success', 'Taxi mis à jour.');
                return $this->redirectToRoute('taxi_user_list');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Immatriculation ou licence déjà utilisée.');
            }
        }

        return $this->render('back_office/taxi/edit.html.twig', [
            'form' => $form->createView(),
            'taxi' => $taxi,
        ]);
    }
    #[Route('/taxiste/dashboard', name: 'taxiste_dashboard')]
    public function taxisteDashboard(EntityManagerInterface $em): Response
    {
        $user = $this->getUser();

        if (!in_array('ROLE_TAXI', $user->getRoles())) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }

        $taxi = $em->getRepository(Taxi::class)->findOneBy(['user' => $user]);
        $courses = $em->getRepository(Course::class)->findBy(['taxi' => $taxi]);

        return $this->render('taxiste/dashboard.html.twig', [
            'taxi' => $taxi,
            'courses' => $courses,
        ]);
    }

    #[Route('/user/taxis', name: 'user_taxis')]
    public function listAvailableTaxis(TaxiRepository $taxiRepository): Response
    {
        $taxis = $taxiRepository->findBy(['statut' => 'Disponible']);

        return $this->render('front_office/taxis.html.twig', [
            'taxis' => $taxis,
        ]);
    }

    #[Route('/admin/taxi/get-models', name: 'get_models', methods: ['GET', 'POST'])]
    public function getModels(Request $request): JsonResponse
    {
        $marque = $request->request->get('marque');
        $models = [
            'Toyota' => ['Corolla', 'Yaris', 'Land Cruiser', 'Camry', 'Hilux'],
            'BMW' => ['Series 3', 'Series 5', 'X5', 'X3', 'Z4'],
            'Peugeot' => ['208', '3008', '508', 'Partner', '3008 GT'],
            'Renault' => ['Clio', 'Megane', 'Kadjar', 'Twingo', 'Captur'],
            'Ford' => ['Focus', 'Fiesta', 'Mustang', 'Kuga', 'Explorer'],
            'Mercedes' => ['C-Class', 'E-Class', 'S-Class', 'GLA', 'CLA'],
            'Audi' => ['A3', 'A4', 'Q5', 'Q7', 'A6'],
            'Volkswagen' => ['Golf', 'Passat', 'Tiguan', 'Jetta', 'Polo'],
            'Honda' => ['Civic', 'Accord', 'CR-V', 'Jazz', 'HR-V'],
            'Nissan' => ['Micra', 'Qashqai', 'Juke', 'X-Trail', 'Leaf'],
        ];

        return new JsonResponse($models[$marque] ?? []);
    }

    #[Route('/{id}', name: 'taxi_delete', methods: ['POST'])]
    public function delete(Request $request, Taxi $taxi, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $taxi->getId(), $request->request->get('_token'))) {
            $em->remove($taxi);
            $em->flush();
            $this->addFlash('success', 'Taxi supprimé avec succès.');
            //supprimer la course associée
            $courses = $em->getRepository(Course::class)->findBy(['taxi' => $taxi]);
            foreach ($courses as $course) {
                $em->remove($course);
            }
            $em->flush();
            $this->addFlash('success', 'Course associée supprimée avec succès.');
        } else {
            $this->addFlash('error', 'Erreur lors de la suppression du taxi.');

        }

        return $this->redirectToRoute('taxi_index');
    }
    #[Route('/taxis/nearby', name: 'get_nearby_taxis')]
    public function getNearbyTaxis(Request $request, TaxiRepository $taxiRepository): JsonResponse
    {
        $longitude = (float) $request->query->get('longitude');
        $latitude  = (float) $request->query->get('latitude');

        if (!$longitude || !$latitude) {
            return new JsonResponse(['error' => 'Coordonnées manquantes.'], 400);
        }

        // Définir un rayon de recherche (par exemple 5 km)
        $radius = 5;

        $taxis = $taxiRepository->findNearbyTaxis($longitude, $latitude, $radius);

        return $this->json($taxis);
    }
}