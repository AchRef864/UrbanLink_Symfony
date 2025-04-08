<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

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
    public function new(Request $request, EntityManagerInterface $entityManager, int $avisId): Response
    {
        $reponse = new Reponse();
        $reponse->setAvisId($avisId); // Set avis_id programmatically
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reponse);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_avis_reponses', ['id' => $avisId], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('reponse/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
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

        return $this->redirectToRoute('app_avis_reponses', ['id' => $reponse->getAvisId()], Response::HTTP_SEE_OTHER);
    }

    return $this->render('reponse/edit.html.twig', [
        'reponse' => $reponse,
        'form' => $form,
    ]);
}

#[Route('/{id}', name: 'app_reponse_delete', methods: ['POST'])]
public function delete(Request $request, Reponse $reponse, EntityManagerInterface $entityManager): Response
{
    $avisId = $reponse->getAvisId(); // Get the avis_id before deleting

    if ($this->isCsrfTokenValid('delete'.$reponse->getId(), $request->request->get('_token'))) {
        $entityManager->remove($reponse);
        $entityManager->flush();
    }

    return $this->redirectToRoute('app_avis_reponses', ['id' => $avisId], Response::HTTP_SEE_OTHER);
}
}
