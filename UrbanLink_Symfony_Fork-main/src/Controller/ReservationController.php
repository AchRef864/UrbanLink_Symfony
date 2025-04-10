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

        $user = $this->getUser();
        $trajet = $entityManager->getRepository(Trajet::class)->find($trajetId);

        if (!$trajet) {
            throw $this->createNotFoundException('Trajet not found');
        }

        $reservation = new Reservation();
        $reservation->setNumberOfSeats(1);
        $reservation->setUser($user);
        $reservation->setTrajet($trajet);
        $reservation->setReservationDate(new \DateTime());
        $reservation->setStatus('Pending');
        $reservation->setTotalPrice($trajet->getPrice() * $reservation->getNumberOfSeats());

        // ✅ FIXED: pass 'trajet' to the form options
        $form = $this->createForm(ReservationType::class, $reservation, [
            'trajet' => $trajet,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $trajet->setAvailableSeats($trajet->getAvailableSeats() - $reservation->getNumberOfSeats());

            $entityManager->persist($reservation);
            $entityManager->flush();

            return $this->redirectToRoute('reservation_payment', ['id' => $reservation->getId()]);
        }

        return $this->render('reservation/new.html.twig', [
            'form' => $form->createView(),
            'trajet' => $trajet
        ]);
    }

    #[Route('/reservation/success/{id}', name: 'reservation_success')]
    public function success(Reservation $reservation): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var User $user */
        $user = $this->getUser();

        if ($reservation->getUser() !== $user) {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette réservation');
        }

        return $this->render('reservation/success.html.twig', [
            'reservation' => $reservation
        ]);
    }

    #[Route('/reservation/cancel/{id}', name: 'reservation_cancel')]
    public function cancel(Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var User $user */
        $user = $this->getUser();

        if ($reservation->getUser() !== $user) {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette réservation');
        }

        $trajet = $reservation->getTrajet();
        $trajet->setAvailableSeats($trajet->getAvailableSeats() + $reservation->getNumberOfSeats());

        $reservation->setStatus('Canceled');
        $entityManager->flush();

        $this->addFlash('success', 'Réservation annulée avec succès');
        return $this->redirectToRoute('reservation_list');
    }

    #[Route('/reservation/payment/{id}', name: 'reservation_payment')]
    public function payment(Reservation $reservation): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var User $user */
        $user = $this->getUser();

        if ($reservation->getUser() !== $user) {
            throw $this->createAccessDeniedException('Cette réservation ne vous appartient pas');
        }

        if ($reservation->getStatus() !== 'Pending') {
            $this->addFlash('error', 'Cette réservation a déjà été traitée');
            return $this->redirectToRoute('reservation_list');
        }

        if (!$user->getEmail()) {
            throw new \LogicException('L\'utilisateur ne possède pas d\'adresse email.');
        }

        Stripe::setApiKey($this->getParameter('stripe_secret_key'));

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
                    'unit_amount' => (int)($reservation->getTotalPrice() * 100),
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
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var User $user */
        $user = $this->getUser();

        if ($reservation->getUser() !== $user) {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette réservation');
        }

        $reservation->setStatus('Confirmed');
        $entityManager->flush();

        $this->addFlash('success', 'Paiement effectué avec succès!');
        return $this->redirectToRoute('reservation_success', ['id' => $reservation->getId()]);
    }

    #[Route('/reservation/payment/cancel/{id}', name: 'reservation_payment_cancel')]
    public function paymentCancel(Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var User $user */
        $user = $this->getUser();

        if ($reservation->getUser() !== $user) {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette réservation');
        }

        $trajet = $reservation->getTrajet();
        $trajet->setAvailableSeats($trajet->getAvailableSeats() + $reservation->getNumberOfSeats());

        $entityManager->remove($reservation);
        $entityManager->flush();

        $this->addFlash('warning', 'Paiement annulé, la réservation a été supprimée');
        return $this->redirectToRoute('reservation_list');
    }

    #[Route('/reservation/list', name: 'reservation_list')]
    public function list(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var User $user */
        $user = $this->getUser();

        return $this->render('reservation/list.html.twig', [
            'reservations' => $user->getReservations()
        ]);
    }
}
