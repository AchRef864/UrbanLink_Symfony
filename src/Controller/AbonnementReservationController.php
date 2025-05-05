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
    use Dompdf\Dompdf;
    use Dompdf\Options;
    use Symfony\Component\HttpFoundation\ResponseHeaderBag;
    use Stripe\Checkout\Session;
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
        // Set your secret key
        Stripe::setApiKey($this->getParameter('stripe_secret_key'));

        // User authentication check
        $user = $this->getUser();
        if (!$user instanceof User) {
            $this->addFlash('warning', 'Vous devez être connecté pour réserver.');
            return $this->redirectToRoute('app_login');
        }

        // Abonnement availability check
        if ($abonnement->getEtat() !== 'actif') {
            $this->addFlash('danger', 'Cet abonnement n\'est plus disponible.');
            return $this->redirectToRoute('app_abonnement_index');
        }

        // Create reservation
        $reservation = new AbonnementReservation();
        $reservation->setAbonnement($abonnement);
        $reservation->setUser($user);
        $reservation->setStatut('en attente');
        $reservation->setDateDebut($abonnement->getDateDebut());
        $reservation->setDateFin($abonnement->getDateFin());

        $form = $this->createForm(AbonnementReservationType::class, $reservation, [
            'user_name' => $user->getName() ?? 'Nom non défini',
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->persist($reservation);
                $entityManager->flush();

                // Create Stripe Checkout Session
                $checkoutSession = Session::create([
                    'payment_method_types' => ['card'],
                    'line_items' => [[
                        'price_data' => [
                            'currency' => 'eur',
                            'product_data' => [
                                'name' => $abonnement->getType() . ' Subscription',
                            ],
                            'unit_amount' => $abonnement->getPrix() * 100,
                        ],
                        'quantity' => 1,
                    ]],
                    'mode' => 'payment',
                    'success_url' => $urlGenerator->generate('app_abonnement_reserve_success', [
                        'id' => $abonnement->getId(),
                        'reservation_id' => $reservation->getId()
                    ], UrlGeneratorInterface::ABSOLUTE_URL),
                    'cancel_url' => $urlGenerator->generate('app_abonnement_reserve_cancel', [
                        'id' => $abonnement->getId()
                    ], UrlGeneratorInterface::ABSOLUTE_URL),
                    'customer_email' => $user->getEmail(),
                    'metadata' => [
                        'reservation_id' => $reservation->getId()
                    ]
                ]);

                return $this->redirect($checkoutSession->url);
                
            } catch (\Exception $e) {
                $this->addFlash('danger', 'Payment error: ' . $e->getMessage());
            }
        }

        return $this->render('abonnement_reservation/reserve.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form->createView(),
            'stripe_key' => $this->getParameter('stripe_public_key')
        ]);
    }




    #[Route('/{id}/reserve/success/{reservation_id}', name: 'app_abonnement_reserve_success')]
    public function reserveSuccess(Abonnement $abonnement, int $reservation_id, EntityManagerInterface $entityManager, Request $request): Response
    {
        $reservation = $entityManager->getRepository(AbonnementReservation::class)->find($reservation_id);
        
        if (!$reservation) {
            throw $this->createNotFoundException('Reservation not found');
        }

        $reservation->setStatut('payé');
        $entityManager->flush();

        // Check if PDF download was requested
        if ($request->query->get('download') === 'pdf') {
            return $this->generateSubscriptionPdf($reservation);
        }

        return $this->render('abonnement_reservation/success.html.twig', [
            'abonnement' => $abonnement,
            'reservation' => $reservation
        ]);
    }

    private function generateSubscriptionPdf(AbonnementReservation $reservation): Response
    {
        // Configure Dompdf
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isRemoteEnabled', true);
        
        $dompdf = new Dompdf($pdfOptions);
        
        // Generate HTML for PDF
        $html = $this->renderView('abonnement_reservation/pdf.html.twig', [
            'reservation' => $reservation,
            'abonnement' => $reservation->getAbonnement(),
            'user' => $reservation->getUser()
        ]);
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        // Generate file name
        $fileName = sprintf('abonnement-%s-%s.pdf', 
            $reservation->getAbonnement()->getType(),
            $reservation->getUser()->getName()
        );
        
        // Create response
        $response = new Response($dompdf->output());
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $fileName
        );
        
        $response->headers->set('Content-Disposition', $disposition);
        $response->headers->set('Content-Type', 'application/pdf');
        
        return $response;
    }

    #[Route('/{id}/reserve/cancel', name: 'app_abonnement_reserve_cancel')]
    public function reserveCancel(Abonnement $abonnement): Response
    {
        $this->addFlash('warning', 'Payment was cancelled. You can try again if you wish.');
        return $this->redirectToRoute('app_abonnement_reserve', ['id' => $abonnement->getId()]);
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


    #[Route('/admin/reservation/{id}', name: 'app_admin_reservation_show', methods: ['GET'])]
#[IsGranted('ROLE_ADMIN')]
public function show(AbonnementReservation $reservation): Response
{
    return $this->render('abonnement_reservation/Detail.html.twig', [
        'reservation' => $reservation,
    ]);
}

    }
