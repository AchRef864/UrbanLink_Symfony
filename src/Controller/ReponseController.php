<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Avis;
use App\Service\TwilioService;

#[Route('/reponse')]
final class ReponseController extends AbstractController
{
    #[Route('', name: 'app_reponse_index', methods: ['GET'])]
    public function index(ReponseRepository $reponseRepository): Response
    {
        return $this->render('reponse/index.html.twig', [
            'reponses' => $reponseRepository->findAll(),
        ]);
    }

    // Responses for a specific complaint
    #[Route('/avis/{id}', name: 'app_avis_reponsess', methods: ['GET'])]
    public function reponsesForAvis(ReponseRepository $reponseRepository, int $id): Response
    {
        $reponses = $reponseRepository->findBy(['avis' => $id]);
        $globalRatingStats = $reponseRepository->getGlobalRatingStats();
    
        return $this->render('avis/reponses.html.twig', [
            'reponses' => $reponses,
            'avis_id' => $id,
            'globalRatingStats' => $globalRatingStats
        ]);
    }

    #[Route('/new/{avisId}', name: 'app_reponse_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, int $avisId, TwilioService $twilioService): Response
    {
        $user = $this->getUser();

        if (!$user || !in_array('ROLE_ADMIN', $user->getRoles(), true)) {
            throw $this->createAccessDeniedException('Only admins can create a response.');
        }

        $avis = $entityManager->getRepository(Avis::class)->find($avisId);

        if (!$avis) {
            throw $this->createNotFoundException('Complaint not found.');
        }

        $reponse = new Reponse();
        $reponse->setAvis($avis);

        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reponse->setUser($user);
            $avis->setStatut('processed');

            $entityManager->persist($reponse);
            $entityManager->flush();

            // Send SMS if user's phone exists
            $avisUser = $avis->getUser();
            if ($avisUser && $avisUser->getPhone()) {
                $smsMessage = sprintf(
                    "Your complaint has been processed.\n\nComplaint Type: %s\nComplaint: %s\nResponse: %s",
                    $avis->getType(),
                    $avis->getCommentaire(),
                    $reponse->getCommentaire()
                );
                try {
                    $twilioService->sendSms($avisUser->getPhone(), $smsMessage);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Failed to send SMS notification.');
                }
            }
            return $this->redirectToRoute('app_avis_reponsess', ['id' => $avisId]);
        }

        return $this->render('reponse/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_show', methods: ['GET'])]
    public function show(Reponse $reponse): Response
    {
        return $this->render('reponse/show.html.twig', [
            'reponse' => $reponse,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reponse_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reponse $reponse, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
    
        if (!$user || !in_array('ROLE_ADMIN', $user->getRoles(), true)) {
            throw $this->createAccessDeniedException('Only admins can edit responses.');
        }
    
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_avis_reponsess', ['id' => $reponse->getAvis()->getId()]);
        }

        return $this->render('reponse/edit.html.twig', [
            'reponse' => $reponse,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_delete', methods: ['POST'])]
    public function delete(Request $request, Reponse $reponse, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reponse->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reponse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_avis_reponsess', ['id' => $reponse->getAvis()->getId()]);
    }

    #[Route('/{id}/rate', name: 'app_reponse_rate', methods: ['POST'])]
    public function rate(
        Request $request,
        ReponseRepository $repo,
        EntityManagerInterface $em,
        int $id
    ): Response {
        $reponse = $repo->find($id);
        if (!$reponse) {
            throw $this->createNotFoundException('Response not found.');
        }

        $rate = (int) $request->request->get('rate', 0);
        if ($rate >= 1 && $rate <= 5) {
            $reponse->setRate($rate);

            // ——— NEW: mark complaint closed ———
            $avis = $reponse->getAvis();
            $avis->setStatut('closed');

            $em->flush();
            $this->addFlash('success', 'Thank you for your rating!');
        }

        return $this->redirectToRoute('app_avis_reponsess', [
            'id' => $reponse->getAvis()->getId(),
        ]);
    }

    
    #[Route('/stats/global', name: 'app_reponse_global_stats', methods: ['GET'])]
    public function globalStats(ReponseRepository $reponseRepository): Response
    {
        return $this->json([
            'stats' => $reponseRepository->getGlobalRatingStats()
        ]);
    }

}