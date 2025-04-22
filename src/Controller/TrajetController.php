<?php

namespace App\Controller;

use App\Entity\Trajet;
use App\Form\TrajetType;
use App\Repository\TrajetRepository;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class TrajetController extends AbstractController
{
    #[Route('/trajet/ajouter', name: 'trajet_ajouter')]
    public function ajouter(Request $request, EntityManagerInterface $em): Response
    {
        $trajet = new Trajet();
        $form = $this->createForm(TrajetType::class, $trajet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                if (!$trajet->getArrivalTime()) {
                    $trajet->setArrivalTime($trajet->calculateArrivalTime());
                }
                
                $em->persist($trajet);
                $em->flush();
                
                $this->addFlash('success', 'Trajet ajouté avec succès!');
                return $this->redirectToRoute('trajet_affichage');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue: '.$e->getMessage());
            }
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
        Request $request, 
        EntityManagerInterface $em, 
        int $id
    ): Response {
        $trajet = $em->getRepository(Trajet::class)->find($id);

        if (!$trajet) {
            $this->addFlash('error', 'Trajet non trouvé!');
            return $this->redirectToRoute('trajet_affichage');
        }

        if ($trajet->getDeparture() === null) {
            $trajet->setDeparture('');
        }

        $form = $this->createForm(TrajetType::class, $trajet);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                try {
                    $trajet->setArrivalTime($trajet->calculateArrivalTime());
                    $em->flush();
                    
                    $this->addFlash('success', 'Trajet modifié avec succès!');
                    return $this->redirectToRoute('trajet_affichage');
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur technique: '.$e->getMessage());
                    error_log($e->getMessage());
                    error_log($e->getTraceAsString());
                }
            } else {
                $errors = $form->getErrors(true);
                foreach ($errors as $error) {
                    error_log($error->getMessage());
                    $this->addFlash('error', $error->getMessage());
                }
            }
        }

        return $this->render('trajet/modifier.html.twig', [
            'form' => $form->createView(),
            'trajet' => $trajet,
        ]);
    }

    #[Route('/trajet/supprimer/{id}', name: 'trajet_supprimer')]
    public function supprimer(
        int $id,
        EntityManagerInterface $em,
        Request $request,
        MailerInterface $mailer
    ): Response {
        $trajet = $em->getRepository(Trajet::class)->find($id);
    
        if (!$trajet) {
            $this->addFlash('error', 'Trajet non trouvé!');
            return $this->redirectToRoute('trajet_affichage');
        }
    
        // Store trajet info before deletion
        $trajetInfo = [
            'departure' => $trajet->getDeparture(),
            'destination' => $trajet->getDestination(),
            'date' => $trajet->getDepartureTime()->format('d/m/Y H:i'),
            'price' => $trajet->getPrice(),
            'seats' => $trajet->getAvailableSeats()
        ];
    
        // Update all related reservations
        foreach ($trajet->getReservations() as $reservation) {
            $reservation->setTrajetDeleted(true);
            $reservation->setTrajetDeletedAt(new \DateTime());
            $reservation->setTrajetDeletedInfo(json_encode($trajetInfo));
            
            // Send email notification
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