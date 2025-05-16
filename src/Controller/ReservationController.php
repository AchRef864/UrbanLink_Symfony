<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\User;
use App\Entity\Trajet;
use App\Form\ReservationType;
use App\Repository\TrajetRepository;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\Writer\SvgWriter;
use Endroid\QrCode\Writer\PngWriter;
use Dompdf\Dompdf;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Dompdf\Options;

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
        
        // Calculate initial total price
        $reservation->setTotalPrice($trajet->getPrice() * $reservation->getNumberOfSeats());

        $form = $this->createForm(ReservationType::class, $reservation, [
            'trajet' => $trajet,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Recalculate total price in case seats changed
            $reservation->setTotalPrice($trajet->getPrice() * $reservation->getNumberOfSeats());
            
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






    // src/Controller/ReservationController.php

#[Route('/reservation/trajet-supprime/{id}', name: 'reservation_trajet_supprime')]
public function showDeletedTrajetDetails(Reservation $reservation): Response
{
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    
    // Verify the reservation belongs to the current user
    if ($reservation->getUser() !== $this->getUser()) {
        throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette réservation');
    }

    // Verify the trajet was deleted
    if (!$reservation->isTrajetDeleted()) {
        throw $this->createNotFoundException('Ce trajet n\'a pas été supprimé');
    }

    // Decode the stored trajet info
    $trajetInfo = json_decode($reservation->getTrajetDeletedInfo(), true);

    return $this->render('reservation/trajet_supprime.html.twig', [
        'reservation' => $reservation,
        'trajetInfo' => $trajetInfo,
    ]);
}





    #[Route('/reservation/success/{id}', name: 'reservation_success')]
    public function success(Reservation $reservation): Response
    {

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
            return $this->redirectToRoute('reservation_affichage');
        }

        if (!$user->getEmail()) {
            throw new \LogicException('L\'utilisateur ne possède pas d\'adresse email.');
        }

        Stripe::setApiKey($this->getParameter('stripe_secret_key'));

        
        // Ensure the price is correct
        $totalPrice = $reservation->getTrajet()->getPrice() * $reservation->getNumberOfSeats();
        $reservation->setTotalPrice($totalPrice);

        if ($totalPrice <= 0) {
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
                    'unit_amount' => (int)($totalPrice * 100), // Convert to cents
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
    
        // Mettre à jour le statut uniquement si ce n’est pas déjà confirmé
        if ($reservation->getStatus() !== 'Confirmed') {
            $reservation->setStatus('Confirmed');
            $entityManager->flush();
        }
    
        $this->addFlash('success', 'Paiement effectué avec succès !');
    
        // Rediriger vers la même vue que success()
        return $this->render('reservation/success.html.twig', [
            'reservation' => $reservation
        ]);
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


#[Route('/reservation/pdf/{id}', name: 'reservation_pdf')]
public function generatePdf(Reservation $reservation): Response
{
    // 1. Require login
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

    // 2. Check if the current user owns the reservation
    if ($reservation->getUser() !== $this->getUser()) {
        throw $this->createAccessDeniedException("You don't have access to this reservation.");
    }

    // 3. Check if the reservation is confirmed
    if ($reservation->getStatus() !== 'Confirmed') {
        throw $this->createAccessDeniedException("This reservation is not confirmed.");
    }

    // 4. Check if the trajet still exists
    if (!$reservation->getTrajet()) {
        throw $this->createNotFoundException("The associated trajet no longer exists.");
    }
    
    $qrContent = sprintf(
        "Reservation #%d\nRoute: %s → %s\nDate: %s\nSeats: %d\nPrice: %d€",
        $reservation->getId(),
        $reservation->getTrajet()->getDeparture(),
        $reservation->getTrajet()->getDestination(),
        $reservation->getTrajet()->getDepartureTime()->format('d/m/Y H:i'),
        $reservation->getNumberOfSeats(),
        $reservation->getTotalPrice()
    );

  $qrCode = Builder::create()
    ->writer(new PngWriter()) // Changed from SvgWriter to PngWriter
    ->data($qrContent)
    ->encoding(new Encoding('UTF-8'))
    ->errorCorrectionLevel(new \Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh())  
    ->size(300)
    ->margin(6)
    ->roundBlockSizeMode(new \Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin())  
    ->build();

$qrCodeImage = $qrCode->getDataUri();

    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isRemoteEnabled', true);

    $dompdf = new Dompdf($options);

    $html = $this->renderView('reservation/pdf.html.twig', [
        'reservation' => $reservation,
        'qrCodeImage' => $qrCodeImage,
    ]);

    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    $filename = sprintf('reservation-%d-%s.pdf', 
        $reservation->getId(),
        (new \DateTime())->format('Y-m-d')
    );

    return new Response(
        $dompdf->output(),
        Response::HTTP_OK,
        [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
        ]
    );
}
    
    #[Route('/admin/reservations', name: 'admin_reservations')]
#[IsGranted('ROLE_ADMIN')]
public function indexAdmin(Request $request, ReservationRepository $reservationRepository): Response
{
    $status = $request->query->get('status');
    $page = $request->query->get('page', 1);
    $limit = 10;
    
    $paginator = $reservationRepository->getPaginatedReservations($status, $page, $limit);
    $totalReservations = count($paginator);

    return $this->render('reservation/reservations.html.twig', [
        'reservations' => $paginator,
        'total' => $totalReservations,
        'currentPage' => $page,
        'limit' => $limit,
        'statusFilter' => $status,
        'current_menu' => 'admin_reservations'
    ]);
}


    #[Route('/admin/reservations/{id}', name: 'show_reservation')]
    public function showReservation(Reservation $reservation): Response
    {
        return $this->render('reservation/reservation_show.html.twig', [
            'reservation' => $reservation,
        ]);
    }


    #[Route('/wathercontroller', name: 'app_wathercontroller')]
    public function wather(): Response
    {
        return $this->render('wathercontroller/index.html.twig', [
            'controller_name' => 'WathercontrollerController',
        ]);
    }
    #[Route('/map', name: 'app_mapcontroller')]
    public function map(): Response
    {
        return $this->render('reservation/map.html.twig');
    }
}
