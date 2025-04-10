<?php

namespace App\Controller;

use App\Entity\Abonnement;
use App\Entity\AbonnementReservation;
use App\Form\AbonnementType;
use App\Form\AbonnementReservationType;
use App\Repository\AbonnementRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Knp\Component\Pager\PaginatorInterface;


class AbonnementController extends AbstractController
{



    #[Route('/indexx', name: 'app_indexx')]
    public function indexx(): Response
    {

        return $this->render('client/index.html.twig');
    }
    #[Route('/abonnement', name: 'app_abonnement')]
    public function index(): Response
    {
        return $this->render('admin.html.twig', [
            'controller_name' => 'AbonnementController',
        ]);
    }
    #[Route('/add_abonnement', name: 'add_abonnement')]

    public function Add(Request  $request , ManagerRegistry $doctrine ,SluggerInterface $slugger) : Response {

        $Abonnement =  new Abonnement() ;
        $form =  $this->createForm(AbonnementType::class,$Abonnement) ;
        $form->add('Ajouter' , SubmitType::class) ;
        $form->handleRequest($request) ;

        if($form->isSubmitted()&& $form->isValid()){
            $brochureFile = $form->get('image')->getData();
            $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
            $brochureFile->move(
                $this->getParameter('upload_directory'),
                $newFilename
            );
            $Abonnement->setImage(($newFilename));
            
            $em= $doctrine->getManager() ;
            $em->persist($Abonnement);
            $em->flush();
            return $this ->redirectToRoute('afficher_abonnementAdmin') ;
        }
        return $this->render('abonnement/addabonnements.html.twig' , [
            'form' => $form->createView()
        ]) ;
    }

    #[Route('/afficher_abonnement', name: 'afficher_abonnement')]
    public function afficheAbonnement(AbonnementRepository $repo, PaginatorInterface $paginator, Request $request): Response
    {
        dump($request->headers->all());
        $abonnements = $repo->findAll();
        $pagination = $paginator->paginate(
            $abonnements,
            $request->query->getInt('page', 1),
            4 // éléments par page


        );

        return $this->render('abonnement/index.html.twig', [
            'abonnements' => $pagination,
        ]);
    }
    #[Route('/afficher_abonnementAdmin', name: 'afficher_abonnementAdmin')]
    public function afficher(AbonnementRepository $abonnementRepository): Response
    {
        $abonnements = $abonnementRepository->findAll();
        
        // Debug: Check one abonnement's image path
        if (!empty($abonnements)) {
            $firstAbonnement = $abonnements[0];
            $imagePath = 'uploads/' . $firstAbonnement->getImage();
            $fullPath = $this->getParameter('kernel.project_dir') . '/public/' . $imagePath;
            
            if (!file_exists($fullPath)) {
                // This will help you identify if the file exists
                dump([
                    'expected_path' => $fullPath,
                    'file_exists' => file_exists($fullPath),
                    'abonnement_image' => $firstAbonnement->getImage()
                ]);
            }
        }
        
        return $this->render('abonnement/indexAdmin.html.twig', [
            'abonnements' => $abonnements,
        ]);
    }
   #[Route('/delete_ab/{id}', name: 'delete_ab', methods: ['POST', 'DELETE'])]
public function delete(Request $request, Abonnement $abonnement, AbonnementRepository $abonnementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$abonnement->getId(), $request->request->get('_token'))) {
            $abonnementRepository->remove($abonnement, true);
            $this->addFlash('success', 'Abonnement supprimé avec succès');
        } else {
            $this->addFlash('error', 'Token CSRF invalide');
        }
    
        return $this->redirectToRoute('afficher_abonnementAdmin');
    }
    
    
    #[Route('/update_ab/{id}', name: 'update_ab')]
    function update(AbonnementRepository $repo, $id, Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger)
    {
        $abonnement = $repo->find($id);
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->add('update', SubmitType::class, ['label' => 'Mettre à jour']);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            
            // Only process if a new image was uploaded
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
                
                $imageFile->move(
                    $this->getParameter('upload_directory'),
                    $newFilename
                );
                $abonnement->setImage($newFilename);
            }
    
            $em = $doctrine->getManager();
            $em->flush();
            
            $this->addFlash('success', 'Abonnement mis à jour avec succès');
            return $this->redirectToRoute('afficher_abonnementAdmin');
        }
    
        return $this->render('abonnement/updateabonnement.html.twig', [
            'form' => $form->createView(),
            'abonnement' => $abonnement
        ]);
    }

 
    #[Route('/reserver/{id}', name: 'reserver')]
    
public function reserver(Request  $request , ManagerRegistry $doctrine): Response
 {
     $AbonnementReservation =  new AbonnementReservation() ;
        $form =  $this->createForm(AbonnementReservationType::class,$AbonnementReservation) ;
        $form->add('Ajouter' , SubmitType::class) ;
        $form->handleRequest($request) ;
        if($form->isSubmitted()&& $form->isValid()){
            $AbonnementReservation = $form->getData();
            $em= $doctrine->getManager() ;
            $em->persist($AbonnementReservation);
            $em->flush();
            return $this ->redirectToRoute('add_AbonnementReservation') ;
        }
        return $this->render('abonnementReservation/frontadd.html.twig' , [
            'form' => $form->createView()
        ]) ;
 }
  
}


