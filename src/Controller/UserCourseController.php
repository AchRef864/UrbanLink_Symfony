<?php

namespace App\Controller;

use App\Entity\Course;
use App\Form\CourseType;
use App\Repository\CourseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user/courses')]
class UserCourseController extends AbstractController
{
    #[Route('/', name: 'user_courses')]
    public function index(CourseRepository $courseRepository): Response
    {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté.');
        }
        
        // Récupérer uniquement les courses de l'utilisateur connecté
        $courses = $courseRepository->findBy(['user' => $user]);

        return $this->render('front_office/course/index.html.twig', [
            'courses' => $courses,
        ]);
    }

    #[Route('/new', name: 'user_course_new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $course = new Course();
        $course->setDateCourse(new \DateTime());

        // Le formulaire CourseType doit être adapté pour le front-office :
        // par exemple, masquer le champ du statut et calculer automatiquement le montant.
        $form = $this->createForm(CourseType::class, $course, [
            'show_statut' => false,
            'auto_calculate_montant' => true,
        ]);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $course->setStatut('En attente');
            $course->setUser($this->getUser());
            $taxi = $course->getTaxi();
            if ($taxi) {
                $taxi->setStatut('Occupé');
                // Calcul du montant en fonction du tarif par km et de la distance indiquée
                $montant = $taxi->getTarifKm() * $course->getDistanceKm();
                $course->setMontant($montant);
            }
            $em->persist($course);
            $em->flush();

            $this->addFlash('success', 'Votre course a été réservée.');
            return $this->redirectToRoute('user_courses');
        }

        return $this->render('front_office/course/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/cancel', name: 'user_course_cancel', methods: ['POST'])]
    public function cancel(Request $request, Course $course, EntityManagerInterface $em): Response
    {
        if ($course->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Action non autorisée.');
        }
        
        // Remettre le taxi disponible en cas d'annulation
        $taxi = $course->getTaxi();
        if ($taxi) {
            $taxi->setStatut('Disponible');
        }
        $em->remove($course);
        $em->flush();

        $this->addFlash('success', 'Votre course a été annulée.');
        return $this->redirectToRoute('user_courses');
    }
}
