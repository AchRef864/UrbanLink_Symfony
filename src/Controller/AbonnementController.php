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
    #[Route('/abonnement', name: 'app_abonnement')]
    public function index(): Response
    {
        return $this->render('abonnement/index.html.twig');
    }

    #[Route('/abonnement/add', name: 'abonnement_add')]
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $abonnement = new Abonnement();
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageFile')->getData();
    
            if ($imageFile) {
                // VichUploader will handle the file upload automatically
                // No need to manually move the file
                $abonnement->setImageFile($imageFile);
            }
    
            // Save the Abonnement entity (VichUploader will handle the image upload)
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
    public function list(AbonnementRepository $abonnementRepository): Response
    {
        $abonnements = $abonnementRepository->findAll();
        return $this->render('abonnement/list.html.twig', [
            'abonnements' => $abonnements,
        ]);
    }

    #[Route('/abonnement/{id}', name: 'abonnement_show')]
    public function show(Abonnement $abonnement): Response
    {
        try {
            // This assumes the field `date_debut` is being accessed somewhere in the controller logic
            if (!$abonnement->getDateDebut()) {
                throw new NotFoundHttpException('La propriété "date_debut" est manquante dans l\'entité Abonnement.');
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


}
