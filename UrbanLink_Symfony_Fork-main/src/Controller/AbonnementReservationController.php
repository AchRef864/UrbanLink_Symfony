<?php

namespace App\Controller;

use App\Entity\Abonnement;
use App\Entity\AbonnementReservation;
use App\Entity\User;
use App\Form\AbonnementReservationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted; // Changed import

#[Route('/abonnementR')]
class AbonnementReservationController extends AbstractController
{
    #[Route('/', name: 'app_abonnement_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $abonnements = $entityManager
            ->getRepository(Abonnement::class)
            ->findBy(['etat' => 'actif'], ['type' => 'ASC']);

        return $this->render('abonnement_reservation/index.html.twig', [
            'abonnements' => $abonnements,
        ]);
    }

    #[Route('/{id}/reserve', name: 'app_abonnement_reserve', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')] // Now using Symfony's native attribute
    public function reserve(
        Request $request,
        Abonnement $abonnement,
        EntityManagerInterface $entityManager
    ): Response {
        /** @var User $user */
        $user = $this->getUser();
        
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Invalid user type');
        }
    
        if ($abonnement->getEtat() !== 'actif') {
            $this->addFlash('danger', 'Cet abonnement n\'est plus disponible.');
            return $this->redirectToRoute('app_abonnement_index');
        }
    
        $reservation = new AbonnementReservation();
        $reservation->setAbonnement($abonnement);
        $reservation->setUser($user);
        $reservation->setStatut('en attente');
    
        // More robust date handling
        try {
            $dateDebut = new \DateTime('tomorrow');
            $dateFin = clone $dateDebut;
            $dateFin->modify('+1 month');
            
            $reservation->setDateDebut($dateDebut);
            $reservation->setDateFin($dateFin);
        } catch (\Exception $e) {
            $this->addFlash('danger', 'Erreur dans les dates: ' . $e->getMessage());
            return $this->redirectToRoute('app_abonnement_index');
        }
    
        // Create form with user's name
        $form = $this->createForm(AbonnementReservationType::class, $reservation, [
            'abonnement' => $abonnement,
            'user_name' => $user->getName()
        ]);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->persist($reservation);
                $entityManager->flush();
                $this->addFlash('success', 'Réservation réussie!');
                return $this->redirectToRoute('app_abonnement_index');
            } catch (\Exception $e) {
                $this->addFlash('danger', 'Erreur: ' . $e->getMessage());
            }
        }
    
        return $this->render('abonnement_reservation/reserve.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form->createView(),
        ]);
    }
}