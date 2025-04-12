<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Form\AvisType;
use App\Repository\AvisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ReponseRepository;
use App\Entity\Reponse;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/avis')]
final class AvisController extends AbstractController
{
    #[Route(name: 'app_avis_index', methods: ['GET'])]
    public function index(AvisRepository $avisRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $queryBuilder = $avisRepository->createQueryBuilder('a');
        $pagination = $paginator->paginate(
            $queryBuilder, // Query or QueryBuilder
            $request->query->getInt('page', 1), // Current page number
            5 // Items per page
        );

        return $this->render('avis/index.html.twig', [
            'avis' => $pagination,
        ]);
    }

    #[Route('/new', name: 'app_avis_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $avi = new Avis(); // Create new Avis entity
    
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            if (!$user) {
                $this->addFlash('error', 'You must be logged in to leave a review.');
                return $this->redirectToRoute('app_login');
            }
    
            $avi->setUser($user);
            $avi->setStatut('not processed'); // Default status
    
            $entityManager->persist($avi);
            $entityManager->flush();
    
            $this->addFlash('success', 'Your review has been submitted successfully.');
    
            return $this->redirectToRoute('app_avis_index');
        }
    
        return $this->render('avis/new.html.twig', [
            'form' => $form->createView(), // only pass form to the view, no need to pass avi
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
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('avis/edit.html.twig', [
            'avi' => $avi,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_avis_delete', methods: ['POST'])]
    public function delete(Request $request, Avis $avi, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $avi->getId(), $request->request->get('_token'))) {
            // Remove associated responses
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
            'avis_id' => $id,
        ]);
    }
}