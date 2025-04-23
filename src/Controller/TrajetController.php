<?php
// src/Controller/TrajetController.php

namespace App\Controller;

use App\Entity\Trajet;
use App\Entity\Vehicle;
use App\Form\TrajetType;
use App\Repository\TrajetRepository;
use App\Repository\VehicleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

class TrajetController extends AbstractController
{
    #[Route('/trajet/ajouter', name: 'trajet_ajouter')]
    public function add(Request $request, VehicleRepository $vehicleRepository, EntityManagerInterface $entityManager): Response
    {
        $trajet = new Trajet();
        $form = $this->createForm(TrajetType::class, $trajet, [
            'vehicles' => $vehicleRepository->findAll(),
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($trajet);
            $entityManager->flush();

            $this->addFlash('success', 'Trajet ajouté avec succès!');
            return $this->redirectToRoute('trajet_affichage');
        }

        return $this->render('trajet/ajouter.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/trajet/affichage', name: 'trajet_affichage')]
    public function affichage(Request $request, TrajetRepository $trajetRepository): Response
    {
        $searchTerm = $request->query->get('search');
        $filterType = $request->query->get('filter_type');
        $trajets = $trajetRepository->findBySearchAndFilter($searchTerm, $filterType);

        return $this->render('trajet/affichage.html.twig', [
            'trajets' => $trajets,
            'current_filter' => $filterType,
            'search_term' => $searchTerm
        ]);
    }

    #[Route('/trajet/modifier/{id}', name: 'trajet_modifier')]
public function modifier(
    int $id,
    Request $request,
    TrajetRepository $trajetRepository,
    VehicleRepository $vehicleRepository,
    EntityManagerInterface $em
): Response {
    $trajet = $trajetRepository->find($id);

    if (!$trajet) {
        throw $this->createNotFoundException('Trajet non trouvé');
    }

    // 🛠️ Pass the 'vehicles' option like in your add() method
    $form = $this->createForm(TrajetType::class, $trajet, [
        'vehicles' => $vehicleRepository->findAll(),
    ]);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->flush();
        $this->addFlash('success', 'Trajet modifié avec succès');
        return $this->redirectToRoute('trajet_affichage');
    }

    return $this->render('trajet/modifier.html.twig', [
        'form' => $form->createView(),
        'trajet' => $trajet,
    ]);
}

    
    #[Route('/trajet/supprimer/{id}', name: 'trajet_supprimer')]
    public function supprimer(int $id, EntityManagerInterface $em, Request $request, MailerInterface $mailer): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $trajet = $em->getRepository(Trajet::class)->find($id);

        if (!$trajet) {
            $this->addFlash('error', 'Trajet non trouvé!');
            return $this->redirectToRoute('trajet_affichage');
        }

        if ($trajet->getVehicle() && $trajet->getVehicle()->getDriver() !== $this->getUser()) {
            $this->addFlash('error', 'Vous ne pouvez pas supprimer ce trajet');
            return $this->redirectToRoute('trajet_affichage');
        }

        $trajetInfo = [
            'departure' => $trajet->getDeparture(),
            'destination' => $trajet->getDestination(),
            'date' => $trajet->getDepartureTime()->format('d/m/Y H:i'),
            'price' => $trajet->getPrice(),
            'seats' => $trajet->getAvailableSeats()
        ];

        foreach ($trajet->getReservations() as $reservation) {
            $reservation->setTrajetDeleted(true);
            $reservation->setTrajetDeletedAt(new \DateTime());
            $reservation->setTrajetDeletedInfo(json_encode($trajetInfo));

            $user = $reservation->getUser();
            if ($user && $user->getEmail()) {
                try {
                    $email = (new Email())
                        ->from('no-reply@covoiturage.com')
                        ->to($user->getEmail())
                        ->subject('Trajet supprimé')
                        ->html($this->renderView('emails/trajet_supprime.html.twig', [
                            'user' => $user,
                            'trajet' => $trajet
                        ]));
                    $mailer->send($email);
                } catch (\Exception $e) {
                    error_log('Failed to send email: '.$e->getMessage());
                }
            }
        }

        $em->remove($trajet);
        $em->flush();

        $this->addFlash('success', 'Trajet supprimé avec succès!');
        return $this->redirectToRoute('trajet_affichage');
    }
}
