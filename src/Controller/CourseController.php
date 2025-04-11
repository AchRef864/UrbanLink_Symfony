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

#[Route('/course')]
class CourseController extends AbstractController
{
    #[Route('/', name: 'course_index')]
    public function index(CourseRepository $courseRepository): Response
    {
        return $this->render('back_office/course/index.html.twig', [
            'courses' => $courseRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'course_new')]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $course = new Course();

        // Initialisation de la date de réservation à l'instant présent.
        $course->setDateCourse(new \DateTime());

        // Création du formulaire avec statut masqué et montant en lecture seule (calcul automatique)
        $form = $this->createForm(CourseType::class, $course, [
            'show_statut' => false,
            'auto_calculate_montant' => true,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Définition automatique du statut de la course.
            $course->setStatut('En attente');

            // Affectation de l'utilisateur connecté.
            $course->setUser($this->getUser());

            // Récupération du taxi sélectionné et mise à jour de son statut.
            $taxi = $course->getTaxi();
            if ($taxi) {

                // Calcul automatique du montant : tarif par km * distance
                $montant = $taxi->getTarifKm() * $course->getDistanceKm();
                $course->setMontant($montant);
            }

            $em->persist($course);
            $em->flush();

            return $this->redirectToRoute('course_index');
        }

        return $this->render('back_office/course/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'course_edit')]
    public function edit(Request $request, Course $course, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(CourseType::class, $course, [
            'show_statut' => true,
            'auto_calculate_montant' => false,
        ]);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $taxi = $course->getTaxi();
    
            if ($taxi) {
                switch ($course->getStatut()) {
                    case 'En course':
                        $taxi->setStatut('En course');
                        break;
    
                    case 'Terminée':
                        $taxi->setStatut('Disponible');
                        break;
                }
            }
    
            $em->flush();
            return $this->redirectToRoute('course_index');
        }
    
        return $this->render('back_office/course/edit.html.twig', [
            'form' => $form->createView(),
            'course' => $course,
        ]);
    }
    

    #[Route('/{id}', name: 'course_delete', methods: ['POST'])]
    public function delete(Request $request, Course $course, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $course->getId(), $request->request->get('_token'))) {
            // Réinitialiser le statut du taxi à "Disponible" lors de la suppression de la course.
            $taxi = $course->getTaxi();

            $em->remove($course);
            $em->flush();
            $this->addFlash('success', 'Course supprimée avec succès.');
        } else {
            $this->addFlash('error', 'Erreur lors de la suppression de la course.');
        }


        return $this->redirectToRoute('course_index');
    }

    #[Route('/admin/courses', name: 'admin_courses')]
    public function listUserCourses(CourseRepository $courseRepository): Response
    {
        $user = $this->getUser();
        $courses = $courseRepository->findBy(['user' => $user]);

        return $this->render('back_office/course/index.html.twig', [
            'courses' => $courses,
        ]);
    }

    #[Route('/taxiste/courses', name: 'taxiste_courses')]
    public function listTaxisteCourses(CourseRepository $courseRepository): Response
    {
        $user = $this->getUser();

        if (!$user instanceof \App\Entity\User) {
            throw $this->createAccessDeniedException('Utilisateur non valide.');
        }

        if (!in_array('ROLE_TAXI', $user->getRoles())) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }

        $taxis = $user->getTaxis();

        if ($taxis->isEmpty()) {
            return $this->render('taxiste/courses.html.twig', [
                'courses' => [],
            ]);
        }

        $courses = $courseRepository->createQueryBuilder('c')
            ->where('c.taxi IN (:taxis)')
            ->setParameter('taxis', $taxis)
            ->getQuery()
            ->getResult();

        return $this->render('taxiste/courses.html.twig', [
            'courses' => $courses,
        ]);
    }
}
