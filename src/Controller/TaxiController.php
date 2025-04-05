<?php

namespace App\Controller;

use App\Entity\Taxi;
use App\Entity\Course;
use App\Form\TaxiType;
use App\Repository\TaxiRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/admin/taxi')]
class TaxiController extends AbstractController
{
    #[Route('/', name: 'taxi_index')]
    public function index(TaxiRepository $taxiRepository): Response
    {
        return $this->render('back_office/taxi/index.html.twig', [
            'taxis' => $taxiRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'taxi_new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $taxi = new Taxi();
        $form = $this->createForm(TaxiType::class, $taxi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            if (!$user) {
                throw $this->createAccessDeniedException('Vous devez être connecté pour ajouter un taxi.');
            }

            $taxi->setUser($user);
            $em->persist($taxi);

            try {
                $em->flush();
                return $this->redirectToRoute('taxi_index');
            } catch (\Doctrine\DBAL\Exception\UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Une erreur est survenue : une immatriculation ou un numéro de licence existe déjà.');
            }
        }

        return $this->render('back_office/taxi/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'taxi_edit')]
    public function edit(Request $request, Taxi $taxi, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(TaxiType::class, $taxi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $em->flush();
                return $this->redirectToRoute('taxi_index');
            } catch (\Doctrine\DBAL\Exception\UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Une erreur est survenue : une immatriculation ou un numéro de licence existe déjà.');
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

        if (!in_array('ROLE_TAXISTE', $user->getRoles())) {
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
        }

        return $this->redirectToRoute('taxi_index');
    }
}