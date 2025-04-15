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
        $searchTerm = $request->query->get('search', '');
    
        $queryBuilder = $avisRepository->createQueryBuilder('a')
        ->leftJoin('a.taxi', 't');
    
        if (!empty($searchTerm)) {
            $queryBuilder->where('a.type LIKE :search OR a.commentaire LIKE :search OR a.statut LIKE :search OR a.date_avis LIKE :search OR t.immatriculation LIKE :search')
                        ->setParameter('search', '%' . $searchTerm . '%');
        }
    
        $pagination = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1), // Current page number
            5 // Items per page
        );
    
        return $this->render('avis/index.html.twig', [
            'avis' => $pagination,
            'search' => $searchTerm
        ]);
    }
    
    

    #[Route('/new', name: 'app_avis_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Check that the current user is a client
        if (!$this->isGranted('ROLE_CLIENT')) {
            throw $this->createAccessDeniedException('Only clients can add a new complaint.');
        }
    
        $avi = new Avis(); // Create new Avis entity
    
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            if (!$user) {
                throw $this->createAccessDeniedException('You must be logged in to leave a complaint.');
            }
            // Here we assume that the user is a client based on our security check.
            $avi->setUser($user);
            $avi->setStatut('not processed'); // Default status is set
    
            $entityManager->persist($avi);
            $entityManager->flush();
    
            $this->addFlash('success', 'Your complaint has been submitted successfully.');
    
            return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('avis/new.html.twig', [
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
        // Check that the current user is a client
        if (!$this->isGranted('ROLE_CLIENT')) {
            throw $this->createAccessDeniedException('Only clients can edit complaints.');
        }
        
        // Also, check that the current user owns this Avis.
        $user = $this->getUser();
        if ($avi->getUser() !== $user) {
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