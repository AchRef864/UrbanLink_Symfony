<?php

namespace App\Controller;

use App\Entity\Taxi;
use App\Entity\Course;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaxisteController extends AbstractController
{
    #[Route('/taxiste/dashboard', name: 'taxiste_dashboard')]
    public function dashboard(EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!in_array('ROLE_TAXISTE', $user->getRoles())) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }
        
        $taxi = $em->getRepository(Taxi::class)->findOneBy(['user' => $user]);
        $courses = $em->getRepository(Course::class)->findBy(['taxi' => $taxi]);
        
        return $this->render('taxiste/dashboard.html.twig', [
            'taxi' => $taxi,
            'courses' => $courses,
        ]);
    }
    
    #[Route('/taxiste/course/{id}/accept', name: 'taxiste_course_accept', methods: ['POST'])]
    public function acceptCourse(Request $request, Course $course, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!in_array('ROLE_TAXISTE', $user->getRoles())) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }
        
        $taxi = $course->getTaxi();
        if ($taxi->getUser() !== $user) {
            throw $this->createAccessDeniedException('Action non autorisée.');
        }
        
        $course->setStatut('Acceptée');
        $taxi->setStatut('Occupé');
        $em->flush();
        
        $this->addFlash('success', 'La course a été acceptée.');
        return $this->redirectToRoute('taxiste_dashboard');
    }
    
    #[Route('/taxiste/course/{id}/refuse', name: 'taxiste_course_refuse', methods: ['POST'])]
    public function refuseCourse(Request $request, Course $course, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!in_array('ROLE_TAXISTE', $user->getRoles())) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }
        
        $taxi = $course->getTaxi();
        if ($taxi->getUser() !== $user) {
            throw $this->createAccessDeniedException('Action non autorisée.');
        }
        
        $course->setStatut('Refusée');
        $taxi->setStatut('Disponible');
        $em->flush();
        
        $this->addFlash('success', 'La course a été refusée.');
        return $this->redirectToRoute('taxiste_dashboard');
    }
    
    #[Route('/taxiste/taxi/{id}/change-status', name: 'taxiste_taxi_change_status', methods: ['POST'])]
    public function changeTaxiStatus(Request $request, Taxi $taxi, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if ($taxi->getUser() !== $user) {
            throw $this->createAccessDeniedException('Action non autorisée.');
        }
        
        $newStatus = $taxi->getStatut() === 'Disponible' ? 'Occupé' : 'Disponible';
        $taxi->setStatut($newStatus);
        $em->flush();
        
        $this->addFlash('success', "Votre taxi est maintenant $newStatus.");
        return $this->redirectToRoute('taxiste_dashboard');
    }
}
