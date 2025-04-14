<?php

namespace App\Controller;

use App\Entity\Trajet;
use App\Form\TrajetType;
use App\Repository\TrajetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrajetController extends AbstractController
{
    // src/Controller/TrajetController.php
#[Route('/trajet/ajouter', name: 'trajet_ajouter')]
public function ajouter(Request $request, EntityManagerInterface $em): Response
{
    $trajet = new Trajet();
    $form = $this->createForm(TrajetType::class, $trajet);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        try {
            // Calculate arrival time if not provided
            if (!$trajet->getArrivalTime()) {
                $trajet->setArrivalTime($trajet->calculateArrivalTime());
            }
            
            $em->persist($trajet);
            $em->flush();
            
            $this->addFlash('success', 'Trajet ajouté avec succès!');
            return $this->redirectToRoute('trajet_affichage');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Une erreur est survenue: '.$e->getMessage());
        }
    }

    return $this->render('trajet/ajouter.html.twig', [
        'form' => $form->createView(),
    ]);
}




#[Route('/trajet/affichage', name: 'trajet_affichage')]
public function affichage(Request $request, TrajetRepository $trajetRepository): Response
{
    $searchTerm = $request->query->get('search');
    $filterType = $request->query->get('filter_type');
    
    $trajets = $trajetRepository->findBySearchAndFilter($searchTerm, $filterType);
    
    // Debug 1 : vérifiez les paramètres reçus
    dump($searchTerm, $filterType);
    
    // Debug 2 : vérifiez les résultats
    dump($trajets);

    return $this->render('trajet/affichage.html.twig', [
        'trajets' => $trajets,
        'current_filter' => $filterType,
        'search_term' => $searchTerm
    ]);
}

  

#[Route('/trajet/modifier/{id}', name: 'trajet_modifier')]
public function modifier(
    Request $request, 
    EntityManagerInterface $em, 
    int $id
): Response {
    // Find the Trajet by ID
    $trajet = $em->getRepository(Trajet::class)->find($id);

    // Check if the Trajet exists
    if (!$trajet) {
        $this->addFlash('error', 'Trajet non trouvé!');
        return $this->redirectToRoute('trajet_affichage');
    }

    // Check if the departure is null or empty before binding the form
    if ($trajet->getDeparture() === null) {
        $trajet->setDeparture(''); // Set a default empty string to prevent null
    }

    // Create the form with the existing Trajet data
    $form = $this->createForm(TrajetType::class, $trajet);
    $form->handleRequest($request);

    // Debugging - Check if form fields are properly populated
    if ($form->isSubmitted() && !$form->get('departure')->getData()) {
        error_log('Departure field is empty or null');
    }

    if ($form->isSubmitted()) {
        if ($form->isValid()) {
            try {
                // Recalculate arrival time in case duration or departure time changed
                $trajet->setArrivalTime($trajet->calculateArrivalTime());
                
                // Persist the changes
                $em->flush();
                
                $this->addFlash('success', 'Trajet modifié avec succès!');
                return $this->redirectToRoute('trajet_affichage');
            } catch (\Exception $e) {
                // Log and display error if there's an issue with arrival time calculation
                $this->addFlash('error', 'Erreur technique: '.$e->getMessage());
                error_log($e->getMessage());
                error_log($e->getTraceAsString());
            }
        } else {
            // If form is invalid, log and display validation errors
            $errors = $form->getErrors(true);
            foreach ($errors as $error) {
                // Log the error messages
                error_log($error->getMessage());
                $this->addFlash('error', $error->getMessage());
            }
        }
    }

    return $this->render('trajet/modifier.html.twig', [
        'form' => $form->createView(),
        'trajet' => $trajet,
    ]);
}




   #[Route('/trajet/supprimer/{id}', name: 'trajet_supprimer')]
public function supprimer(int $id, EntityManagerInterface $em): Response
{
    // Find the Trajet by ID
    $trajet = $em->getRepository(Trajet::class)->find($id);

    // Check if the Trajet exists
    if (!$trajet) {
        // Redirect to a page with an error message if the Trajet doesn't exist
        $this->addFlash('error', 'Trajet not found!');
        return $this->redirectToRoute('trajet_affichage');
    }

    // Remove the Trajet from the database
    $em->remove($trajet);
    $em->flush();
    
    // Add a success message and redirect to the list page
    $this->addFlash('success', 'Trajet deleted successfully!');
    return $this->redirectToRoute('trajet_affichage');
}



}
