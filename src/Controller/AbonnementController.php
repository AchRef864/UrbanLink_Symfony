<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Abonnement;
use App\Form\AbonnementType;
use App\Repository\AbonnementRepository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

final class AbonnementController extends AbstractController
{
    private const PRICES = [
        'mensuel' => 50,
        'trimestriel' => 140,
        'annuel' => 200
    ];

    #[Route('/abonnement', name: 'app_abonnement')]
    public function index(): Response
    {
        return $this->render('abonnement/index.html.twig');
    }

    #[Route('/abonnement/add', name: 'abonnement_add')]
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $abonnement = new Abonnement();
        
        // Set initial values if type is provided
        if ($request->isMethod('GET') && $request->query->has('type')) {
            $type = $request->query->get('type');
            if (array_key_exists($type, self::PRICES)) {
                $abonnement->setType($type);
                $abonnement->setPrix(self::PRICES[$type]);
                $abonnement->setDateDebut(new \DateTime());
                $abonnement->setDateFin($this->calculateEndDate(new \DateTime(), $type));
            }
        }
        
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $type = $abonnement->getType();
            $abonnement->setPrix(self::PRICES[$type]);
            
            if ($abonnement->getDateDebut()) {
                $abonnement->setDateFin($this->calculateEndDate(
                    $abonnement->getDateDebut(),
                    $type
                ));
            }
            
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $abonnement->setImageFile($imageFile);
            }
    
            $entityManager->persist($abonnement);
            $entityManager->flush();
    
            $this->addFlash('success', 'Abonnement créé avec succès!');
            return $this->redirectToRoute('abonnement_list');
        }
    
        return $this->render('abonnement/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/abonnements', name: 'abonnement_list')]
    public function list(Request $request, AbonnementRepository $abonnementRepository): Response
    {
        $searchTerm = $request->query->get('search', '');
        $minPrice = $request->query->has('min_price') ? (float)$request->query->get('min_price') : null;
        $maxPrice = $request->query->has('max_price') ? (float)$request->query->get('max_price') : null;
    
        $abonnements = $abonnementRepository->findWithFilters(
            $searchTerm,
            $minPrice,
            $maxPrice
        );
    
        return $this->render('abonnement/list.html.twig', [
            'abonnements' => $abonnements,
            'searchTerm' => $searchTerm,
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
        ]);
    }

    #[Route('/abonnement/{id}', name: 'abonnement_show')]
    public function show(Abonnement $abonnement): Response
    {
        try {
            if (!$abonnement->getDateDebut()) {
                throw new NotFoundHttpException('La propriété "date_debut" est manquante.');
            }
    
            return $this->render('abonnement/show.html.twig', [
                'abonnement' => $abonnement,
            ]);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur : ' . $e->getMessage());
            return $this->redirectToRoute('abonnement_list');
        }
    }

    #[Route('/abonnement/edit/{id}', name: 'abonnement_edit')]
    public function edit(Request $request, Abonnement $abonnement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $type = $abonnement->getType();
            $abonnement->setPrix(self::PRICES[$type]);
            
            if ($abonnement->getDateDebut()) {
                $abonnement->setDateFin($this->calculateEndDate(
                    $abonnement->getDateDebut(),
                    $type
                ));
            }
            
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $abonnement->setImageFile($imageFile);
            }
    
            $entityManager->flush();
            $this->addFlash('success', 'Abonnement modifié avec succès!');
            return $this->redirectToRoute('abonnement_list');
        }
    
        return $this->render('abonnement/edit.html.twig', [
            'form' => $form->createView(),
            'abonnement' => $abonnement,
        ]);
    }

    #[Route('/abonnement/delete/{id}', name: 'abonnement_delete', methods: ['POST'])]
    public function delete(Request $request, Abonnement $abonnement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $abonnement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($abonnement);
            $entityManager->flush();
            $this->addFlash('success', 'Abonnement supprimé avec succès!');
        } else {
            $this->addFlash('error', 'Jeton CSRF invalide.');
        }

        return $this->redirectToRoute('abonnement_list');
    }

    private function calculateEndDate(\DateTimeInterface $startDate, string $type): \DateTimeInterface
    {
        $endDate = \DateTime::createFromInterface($startDate);
        
        switch ($type) {
            case 'mensuel':
                $endDate->modify('+1 month');
                break;
            case 'trimestriel':
                $endDate->modify('+3 months');
                break;
            case 'annuel':
                $endDate->modify('+1 year');
                break;
        }
        
        return $endDate;
    }
}