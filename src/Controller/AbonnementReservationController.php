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
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Stripe\Stripe;
use Knp\Component\Pager\PaginatorInterface;


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
public function reserve(
    Request $request,
    Abonnement $abonnement,
    EntityManagerInterface $entityManager,
    UrlGeneratorInterface $urlGenerator
): Response {
    $user = $this->getUser();
    if (!$user instanceof User) {
        $this->addFlash('warning', 'Vous devez être connecté pour réserver.');
        return $this->redirectToRoute('app_login');
    }

    if ($abonnement->getEtat() !== 'actif') {
        $this->addFlash('danger', 'Cet abonnement n\'est plus disponible.');
        return $this->redirectToRoute('app_abonnement_index');
    }

    $reservation = new AbonnementReservation();
    $reservation->setAbonnement($abonnement);
    $reservation->setUser($user);
    $reservation->setStatut('en attente');

    $dateDebut = new \DateTime('tomorrow');
    $dateFin = (clone $dateDebut)->modify('+1 month');
    $reservation->setDateDebut($dateDebut);
    $reservation->setDateFin($dateFin);

    $form = $this->createForm(AbonnementReservationType::class, $reservation, [
        'abonnement' => $abonnement,
        'user_name' => $user->getName()
    ]);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($reservation);
        $entityManager->flush();

        // Get Stripe keys from parameters
        $stripeSecretKey = $this->getParameter('stripe_secret_key');
        $stripePublicKey = $this->getParameter('stripe_public_key');
        
        \Stripe\Stripe::setApiKey($stripeSecretKey);

        $checkoutSession = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Abonnement ' . $abonnement->getType(),
                    ],
                    'unit_amount' => $reservation->getTotalPrice() * 100, // in cents
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $urlGenerator->generate('app_payment_success', [
                'id' => $reservation->getId()
            ], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $urlGenerator->generate('app_abonnement_index', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'customer_email' => $user->getEmail(),
            'metadata' => [
                'reservation_id' => $reservation->getId(),
            ],
        ]);

        return $this->redirect($checkoutSession->url, 303);
    }

    // Get Stripe public key for the template
    $stripePublicKey = $this->getParameter('stripe_public_key');

    return $this->render('abonnement_reservation/reserve.html.twig', [
        'abonnement' => $abonnement,
        'form' => $form->createView(),
        'stripe_key' => $stripePublicKey
    ]);
}

    #[Route('/mes-reservations', name: 'app_abonnement_mes_reservations', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function mesReservations(EntityManagerInterface $entityManager): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        if (!$user instanceof User) {
            $this->addFlash('warning', 'Vous devez être connecté pour voir vos réservations.');
            return $this->redirectToRoute('app_login');
        }

        $reservations = $entityManager
            ->getRepository(AbonnementReservation::class)
            ->findBy(['user' => $user]);

        return $this->render('abonnement_reservation/mes_reservations.html.twig', [
            'reservations' => $reservations,
        ]);
    }
    #[Route('/{id}/pay', name: 'app_abonnement_pay')]
    #[IsGranted('ROLE_USER')]
    public function pay(
        AbonnementReservation $reservation,
        EntityManagerInterface $entityManager
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_USER');
        
        /** @var User $user */
        $user = $this->getUser();
    
        if ($reservation->getUser() !== $user) {
            throw $this->createAccessDeniedException('Cette réservation ne vous appartient pas');
        }
    
        if ($reservation->getStatut() !== 'Pending') { // Adjust this based on your status logic
            $this->addFlash('error', 'Cette réservation a déjà été traitée');
            return $this->redirectToRoute('app_abonnement_mes_reservations');
        }
    
        $stripeSecretKey = $this->getParameter('stripe_secret_key');
        \Stripe\Stripe::setApiKey($stripeSecretKey);
    
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'TND',
                    'unit_amount' => intval($reservation->getTotalPrice() * 100), // in cents
                    'product_data' => [
                        'name' => 'Abonnement: ' . $reservation->getAbonnement()->getType(),
                    ],
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('app_payment_success', ['id' => $reservation->getId()], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('app_abonnement_mes_reservations', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'customer_email' => $user->getEmail(), // Add customer email
            'metadata' => [
                'reservation_id' => $reservation->getId(), // Add metadata
            ],
        ]);
    
        return $this->redirect($session->url, 303);
    }
#[Route('/payment/success/{id}', name: 'app_payment_success')]
public function paymentSuccess(AbonnementReservation $reservation, EntityManagerInterface $entityManager): Response
{
    $reservation->setStatut('confirmé');
    $entityManager->flush();

    $this->addFlash('success', 'Paiement réussi. Réservation confirmée !');

    return $this->redirectToRoute('app_abonnement_index');
}



#[Route('/admin/reservations', name: 'app_admin_reservations')]
#[IsGranted('ROLE_ADMIN')]
public function adminReservations(
    EntityManagerInterface $entityManager,
    Request $request,
    PaginatorInterface $paginator
): Response {
    $query = $entityManager
        ->getRepository(AbonnementReservation::class)
        ->createQueryBuilder('r')
        ->orderBy('r.dateDebut', 'DESC')
        ->getQuery();

    $page = $request->query->getInt('page', 1);
    $reservations = $paginator->paginate(
        $query,
        $page,
        10 // Items per page
    );

    return $this->render('abonnement_reservation/admin_reservations.html.twig', [
        'reservations' => $reservations,
    ]);
}

}
