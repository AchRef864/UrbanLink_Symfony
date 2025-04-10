<?php

namespace App\Controller;

use App\Entity\AbonnementReservation;
use App\Form\AbonnementReservationType;
use App\Repository\AbonnementReservationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
class AbonnementReservationController extends AbstractController
{
    #[Route('/abonnementReservation', name: 'app_abonnementReservation')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'AbonnementReservationController',
        ]);
    }
    #[Route('/add_AbonnementReservation', name: 'add_AbonnementReservation')]

    public function Add(Request  $request , ManagerRegistry $doctrine ) : Response {
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
    #[Route('/afficher_abonnementReservation', name: 'afficher_abonnementReservation')]
    public function AfficheAbonnementReservation(AbonnementReservationRepository $repo, PaginatorInterface $paginator, Request $request): Response
    {
        $AbonnementReservation = $repo->findAll();
        
        // Grouper les reservations par type d'abonnement
        $groupedAbonnementReservations = [];
        foreach ($AbonnementReservation as $abonnementReservation) {
            $abonnementName = $abonnementReservation->getAbonnement()->getType();
            if (!isset($groupedAbonnementReservations[$abonnementName])) {
                $groupedAbonnementReservations[$abonnementName] = [];
            }
            $groupedAbonnementReservations[$abonnementName][] = $abonnementReservation;
        }
    
        // Pagination (si nécessaire)
        $pagination = $paginator->paginate(
            $AbonnementReservation,
            $request->query->getInt('page', 1),
            3 // items per page
        );
    
        return $this->render('abonnementReservation/index.html.twig', [
            'groupedAbonnementReservations' => $groupedAbonnementReservations,
            'AbonnementReservation' => $pagination,
            'ajoutA' => $AbonnementReservation
        ]);
    }


    #[Route('/afficher_abonnementReservationFront', name: 'afficher_abonnementReservationFront')]
    public function AfficheAbonnementReservationFront(AbonnementReservationRepository $repo, PaginatorInterface $paginator, Request $request): Response
    {
        $AbonnementReservation = $repo->findAll();
        
        // Grouper les reservations par type d'abonnement
        $groupedAbonnementReservations = [];
        foreach ($AbonnementReservation as $abonnementReservation) {
            $abonnementName = $abonnementReservation->getAbonnement()->getType();
            if (!isset($groupedAbonnementReservations[$abonnementName])) {
                $groupedAbonnementReservations[$abonnementName] = [];

            }
            $groupedAbonnementReservations[$abonnementName][] = $abonnementReservation;
        }
    
        // Pagination (si nécessaire)
        $pagination = $paginator->paginate(
            $AbonnementReservation,
            $request->query->getInt('page', 1),
            3 // items per page
        );
    
        return $this->render('abonnementReservation/indexFront.html.twig', [
            'groupedAbonnementReservations' => $groupedAbonnementReservations,
            'AbonnementReservation' => $pagination,
            'ajoutA' => $AbonnementReservation
        ]);
    }

    #[Route('/delete/{id}', name: 'delete')]
    public function Delete($id,AbonnementReservationRepository $repository , ManagerRegistry $doctrine) : Response {
        $AbonnementReservation=$repository->find(id:$id) ;
        $em=$doctrine->getManager() ;
        $em->remove($AbonnementReservation);
        $em->flush();
        return $this->redirectToRoute("afficher_abonnementReservation") ;

    }
    #[Route('/update/{id}', name: 'update')]
    function update(AbonnementReservationRepository $repo,$id,Request $request , ManagerRegistry $doctrine){
        $AbonnementReservation = $repo->find($id) ;
        $form=$this->createForm(AbonnementReservationType::class,$AbonnementReservation) ;
        $form->add('update' , SubmitType::class) ;
        $form->handleRequest($request) ;
        if($form->isSubmitted()&& $form->isValid()){

            $AbonnementReservation = $form->getData();
            $em=$doctrine->getManager() ;
            $em->flush();
            return $this ->redirectToRoute('afficher_abonnementReservation') ;
        }
        return $this->render('abonnementReservation/update.html.twig' , [
            'form' => $form->createView()
        ]) ;

    }
    



}
