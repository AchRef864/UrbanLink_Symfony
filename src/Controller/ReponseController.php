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
    #[Route(name: 'app_reponse_index', methods: ['GET'])]
    public function index(ReponseRepository $reponseRepository): Response
    {
        return $this->render('reponse/index.html.twig', [
            'reponses' => $reponseRepository->findAll(),
        ]);
    }
    #[Route('/new/{avisId}', name: 'app_reponse_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, int $avisId, TwilioService $twilioService): Response
    {
        $reponse = new Reponse();
    
        // Fetch the Avis and set it on the Reponse immediately.
        $avis = $entityManager->getRepository(Avis::class)->find($avisId);
        if (!$avis) {
            throw $this->createNotFoundException('Avis not found.');
        }
        $reponse->setAvis($avis);
    
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            if (!$user) {
                throw $this->createAccessDeniedException('You must be logged in to create a Reponse.');
            }
    
            $reponse->setUser($user);
    
            // Set the statut of Avis to "processed"
            $avis->setStatut('processed');
    
            $entityManager->persist($reponse);
            $entityManager->flush();
    
            // ✅ Send SMS to the Avis owner
            $avisUser = $avis->getUser();
            if ($avisUser && $avisUser->getPhone()) {
                $phoneNumber = $avisUser->getPhone();
    
                // Get the content of Avis and Reponse
                $avisCommentaire = $avis->getCommentaire();  // Assuming Avis has a `getCommentaire()` method
                $avisType = $avis->getType();  // Assuming Avis has a `getType()` method
                $reponseCommentaire = $reponse->getCommentaire();  // Assuming Reponse has a `getCommentaire()` method
    
                // Compose the SMS message
                $smsMessage = sprintf(
                    "Your complaint has been processed.\n\nComplaint type: %s\nComplaint description: %s\nResponse: %s",
                    $avisType,
                    $avisCommentaire,
                    $reponseCommentaire
                );
    
                // Send SMS using Twilio service
                $twilioService->sendSms($phoneNumber, $smsMessage);
            }
    
            // After processing the form, redirect to avoid resubmission
            return $this->redirectToRoute('app_avis_reponses', ['id' => $avisId], Response::HTTP_SEE_OTHER);
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
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_avis_reponses', ['id' => $reponse->getAvis()->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reponse/edit.html.twig', [
            'reponse' => $reponse,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_delete', methods: ['POST'])]
    public function delete(Request $request, Reponse $reponse, EntityManagerInterface $entityManager): Response
    {
        $avisId = $reponse->getAvis()->getId(); // Get the Avis ID before deleting

        if ($this->isCsrfTokenValid('delete' . $reponse->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reponse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_avis_reponses', ['id' => $avisId], Response::HTTP_SEE_OTHER);
    }
}
