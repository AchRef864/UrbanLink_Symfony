<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\User;
use App\Entity\Trajet;
use App\Form\ReservationType;
use App\Repository\TrajetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class ReservationController extends AbstractController
{
    #[Route('/reservation', name: 'app_reservation')]
    public function index(): Response
    {
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }

    #[Route('/reservation/affichage', name: 'reservation_affichage')]
    public function affichage(Request $request, TrajetRepository $trajetRepository): Response
    {
        // Ensure no access control or authentication checks here if the route is public
        $searchTerm = $request->query->get('search');
        $filterType = $request->query->get('filter_type');
        
        $trajets = $trajetRepository->findBySearchAndFilter($searchTerm, $filterType);
        
        return $this->render('reservation/affichage.html.twig', [
            'trajets' => $trajets,
            'current_filter' => $filterType,
            'search_term' => $searchTerm
        ]);
    }

    #[Route('/reservation/new/{trajetId}', name: 'reservation_new')]
    public function new(Request $request, EntityManagerInterface $entityManager, int $trajetId): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    
        $trajet = $entityManager->getRepository(Trajet::class)->find($trajetId);
        if (!$trajet) {
            throw $this->createNotFoundException('Trajet non trouvé');
        }
    
        $reservation = new Reservation();
        $reservation->setTrajet($trajet);
        $reservation->setReservationDate(new \DateTime());
        $reservation->setStatus('Pending');
    
        // Pass the trajet to the form options
        $form = $this->createForm(ReservationType::class, $reservation, [
            'trajet' => $trajet
        ]);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $totalPrice = $trajet->getPrice() * $reservation->getNumberOfSeats();
                $reservation->setTotalPrice(number_format($totalPrice, 2, '.', ''));
    
                if ($reservation->getNumberOfSeats() > $trajet->getAvailableSeats()) {
                    $this->addFlash('error', 'Pas assez de places disponibles');
                    return $this->redirectToRoute('reservation_new', ['trajetId' => $trajetId]);
                }
    
                $entityManager->persist($reservation);
                $entityManager->flush();
    
                $this->addFlash('success', 'Réservation créée avec succès!');
                return $this->redirectToRoute('reservation_payment', ['id' => $reservation->getId()]);
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue: ' . $e->getMessage());
            }
        }
    
        return $this->render('reservation/new.html.twig', [
            'form' => $form->createView(),
            'trajet' => $trajet
        ]);
    }

    #[Route('/reservation/success/{id}', name: 'reservation_success')]
    public function success(Reservation $reservation): Response
    {
        // Check if the user is the owner of the reservation
        if ($reservation->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette réservation');
        }

        return $this->render('reservation/success.html.twig', [
            'reservation' => $reservation
        ]);
    }

    #[Route('/reservation/cancel/{id}', name: 'reservation_cancel')]
    public function cancel(Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        // Check if the user is the owner of the reservation
        if ($reservation->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette réservation');
        }

        // Return available seats
        $trajet = $reservation->getTrajet();
        $trajet->setAvailableSeats($trajet->getAvailableSeats() + $reservation->getNumberOfSeats());
        
        $reservation->setStatus('Canceled');
        $entityManager->flush();

        return $this->render('reservation/cancel.html.twig', [
            'reservation' => $reservation
        ]);
    }

    #[Route('/reservation/payment/{id}', name: 'reservation_payment')]
    public function payment(Reservation $reservation): Response
    {
        // Get the authenticated user
        $user = $this->getUser();
        
        // Ensure the user is authenticated and is of the expected type
        if (!$user instanceof \App\Entity\User) {
            return $this->redirectToRoute('app_login'); // Redirect to login if user is not authenticated
        }
        
        // Optionally handle unauthenticated access to payment
        if (!$user) {
            return $this->redirectToRoute('app_reservation'); // Or any page for unauthenticated users
        }
    
        // Check if the reservation belongs to this user
        if ($reservation->getUser() !== $user) {
            throw $this->createAccessDeniedException('Cette réservation ne vous appartient pas');
        }
    
        // Ensure user has an email before proceeding
        if (!$user->getEmail()) {
            throw new \LogicException('L\'utilisateur ne possède pas d\'adresse email.');
        }
    
        // Process payment logic...
        Stripe::setApiKey($this->getParameter('stripe_secret_key'));
    
        // Check for reservation total price and ensure it's valid
        if ($reservation->getTotalPrice() <= 0) {
            throw new \LogicException('Le montant total de la réservation est incorrect.');
        }
    
        $checkout_session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Trajet ' . $reservation->getTrajet()->getDeparture() . ' - ' . $reservation->getTrajet()->getDestination(),
                    ],
                    'unit_amount' => (int)($reservation->getTotalPrice() * 100), // Convert to cents
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl(
                'reservation_payment_success',
                ['id' => $reservation->getId()],
                UrlGeneratorInterface::ABSOLUTE_URL
            ),
            'cancel_url' => $this->generateUrl(
                'reservation_payment_cancel',
                ['id' => $reservation->getId()],
                UrlGeneratorInterface::ABSOLUTE_URL
            ),
            'customer_email' => $user->getEmail(),
            'metadata' => [
                'reservation_id' => $reservation->getId(),
            ],
        ]);
    
        return $this->redirect($checkout_session->url);
    }

    #[Route('/reservation/payment/success/{id}', name: 'reservation_payment_success')]
    public function paymentSuccess(Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($reservation->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette réservation');
        }

        $reservation->setStatus('Confirmed');
        $entityManager->flush();

        return $this->render('reservation/payment_success.html.twig', [
            'reservation' => $reservation
        ]);
    }

    #[Route('/reservation/payment/cancel/{id}', name: 'reservation_payment_cancel')]
    public function paymentCancel(Reservation $reservation): Response
    {
        if ($reservation->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette réservation');
        }

        return $this->render('reservation/payment_cancel.html.twig', [
            'reservation' => $reservation
        ]);
    }

    #[Route('/reservation/list', name: 'reservation_list')]
    public function list(): Response
    {
        // Optionally skip the authentication check for this route as well
        $user = $this->getUser();
        
        if (!$user instanceof User) {
            throw new \Exception('L\'utilisateur actuel n\'est pas un utilisateur valide.');
        }
    
        $reservations = $user->getReservations();
    
        return $this->render('reservation/list.html.twig', [
            'reservations' => $reservations
        ]);
    }
}
