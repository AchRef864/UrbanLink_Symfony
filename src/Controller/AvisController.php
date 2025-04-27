<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Form\AvisType;
use App\Repository\AvisRepository;
use App\Repository\ReponseRepository;
use App\Service\GeminiService;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/avis')]
final class AvisController extends AbstractController
{
    #[Route('', name: 'app_avis_index', methods: ['GET'])]
    public function index(
        AvisRepository $avisRepository,
        PaginatorInterface $paginator,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $searchTerm = $request->query->get('search', '');

        $qb = $avisRepository->createQueryBuilder('a')
            ->leftJoin('a.taxi', 't')->addSelect('t')
            ->leftJoin('a.vehicle', 'v')->addSelect('v')
            ->where('t.id IS NOT NULL OR a.taxi IS NULL')
            ->andWhere('v.id IS NOT NULL OR a.vehicle IS NULL');

        if ($searchTerm) {
            $qb->andWhere(
                'a.type LIKE :search OR
                 a.commentaire LIKE :search OR
                 a.statut LIKE :search OR
                 a.date_avis LIKE :search OR
                 t.immatriculation LIKE :search OR
                 v.licensePlate LIKE :search'
            )
            ->setParameter('search', '%'.$searchTerm.'%');
        }

        $pagination = $paginator->paginate(
            $qb,
            $request->query->getInt('page', 1),
            5
        );

        // Statistiques par type
        $dql = 'SELECT a.type AS type, COUNT(a.id) AS cnt
                FROM App\Entity\Avis a
                GROUP BY a.type';
        $rawStats = $em->createQuery($dql)->getResult();

        $stats = [
            'taxi complaint'         => 0,
            'subscription complaint' => 0,
            'vehicle complaint'      => 0,
        ];
        foreach ($rawStats as $row) {
            if (isset($stats[$row['type']])) {
                $stats[$row['type']] = (int) $row['cnt'];
            }
        }
        $totalComplaints = array_sum($stats);

        // Comptage processed / pending
        $processedCount = $avisRepository->count(['statut' => 'processed']);
        $pendingCount   = $avisRepository->count(['statut' => 'not processed']);

        return $this->render('avis/index.html.twig', [
            'avis'             => $pagination,
            'search'           => $searchTerm,
            'stats'            => $stats,
            'totalComplaints'  => $totalComplaints,
            'processedCount'   => $processedCount,
            'pendingCount'     => $pendingCount,
        ]);
    }

    #[Route('/new', name: 'app_avis_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_CLIENT')) {
            throw $this->createAccessDeniedException('Only clients can add a new complaint.');
        }

        $avi  = new Avis();
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            if (!$user) {
                throw $this->createAccessDeniedException('You must be logged in to leave a complaint.');
            }

            $avi->setUser($user)
                ->setStatut('not processed');

            $entityManager->persist($avi);
            $entityManager->flush();

            $this->addFlash('success', 'Your complaint has been submitted successfully.');

            return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('avis/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/avisFront', name: 'app_avis_front', methods: ['GET', 'POST'])]
    public function indexFront(
        AvisRepository $avisRepository,
        PaginatorInterface $paginator,
        Request $request,
        GeminiService $geminiService
    ): Response {
        $user       = $this->getUser();
        $searchTerm = $request->query->get('search', '');

        $qb = $avisRepository->createQueryBuilder('a')
            ->leftJoin('a.taxi', 't')->addSelect('t')
            ->leftJoin('a.vehicle', 'v')->addSelect('v')
            ->where('a.user = :user')
            ->andWhere('t.id IS NOT NULL OR a.taxi IS NULL')
            ->andWhere('v.id IS NOT NULL OR a.vehicle IS NULL')
            ->setParameter('user', $user);

        if ($searchTerm) {
            $qb->andWhere(
                'a.type LIKE :search OR
                 a.commentaire LIKE :search OR
                 a.statut LIKE :search OR
                 a.date_avis LIKE :search OR
                 t.immatriculation LIKE :search OR
                 v.licensePlate LIKE :search'
            )
            ->setParameter('search', '%'.$searchTerm.'%');
        }

        $pagination = $paginator->paginate(
            $qb,
            $request->query->getInt('page', 1),
            5
        );

        // ==== Chatbot ====
        $chatMessage = '';
        $botResponse = null;
        if ($request->isMethod('POST')) {
            $chatMessage = $request->request->get('chat_message', '');
            if ($chatMessage) {
                $botResponse = $geminiService->getChatResponse($chatMessage);
            }
        }

        return $this->render('front_office/Avis/index.html.twig', [
            'avis'        => $pagination,
            'search'      => $searchTerm,
            'chatMessage' => $chatMessage,
            'botResponse' => $botResponse,
        ]);
    }

    #[Route('/avisFront/new', name: 'app_avis_new_front', methods: ['GET', 'POST'])]
    public function newFront(Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_CLIENT')) {
            throw $this->createAccessDeniedException('Only clients can add a new complaint.');
        }

        $avi  = new Avis();
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            if (!$user) {
                throw $this->createAccessDeniedException('You must be logged in to leave a complaint.');
            }

            $avi->setUser($user)
                ->setStatut('not processed');

            $entityManager->persist($avi);
            $entityManager->flush();

            $this->addFlash('success', 'Your complaint has been submitted successfully.');

            return $this->redirectToRoute('app_avis_front', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('front_office/Avis/_form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_avis_show', methods: ['GET'])]
    public function show(Avis $avi): Response
    {
        return $this->render('avis/show.html.twig', [
            'avi' => $avi,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_avis_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Avis $avi, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_CLIENT')) {
            throw $this->createAccessDeniedException('Only clients can edit complaints.');
        }
        if ($avi->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('You can only edit your own complaints.');
        }

        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Your complaint has been updated successfully.');

            return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('avis/edit.html.twig', [
            'avi'  => $avi,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_avis_delete', methods: ['POST'])]
    public function delete(Request $request, Avis $avi, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$avi->getId(), $request->request->get('_token'))) {
            $reponses = $entityManager->getRepository(Reponse::class)->findBy(['avis' => $avi->getId()]);
            foreach ($reponses as $reponse) {
                $entityManager->remove($reponse);
            }
            $entityManager->remove($avi);
            $entityManager->flush();
        }
        $this->addFlash('success', 'Avis deleted successfully.');

        return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/reponses', name: 'app_avis_reponses', methods: ['GET'])]
    public function viewReponses(int $id, ReponseRepository $reponseRepository): Response
    {
        $reponses = $reponseRepository->findBy(['avis' => $id]);
        return $this->render('avis/reponses.html.twig', [
            'reponses' => $reponses,
            'avis_id'  => $id,
        ]);
    }

    #[Route('/export/pdf', name: 'app_avis_pdf', methods: ['GET'])]
    public function exportPdf(AvisRepository $avisRepository, Pdf $knpSnappyPdf): Response
    {
        $avis     = $avisRepository->findAll();
        $html     = $this->renderView('avis/pdf.html.twig', ['avis' => $avis]);
        $filename = 'complaints_'.date('Ymd_His').'.pdf';

        return new Response(
            $knpSnappyPdf->getOutputFromHtml($html),
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => ResponseHeaderBag::DISPOSITION_ATTACHMENT.'; filename="'.$filename.'"',
            ]
        );
    }
}
