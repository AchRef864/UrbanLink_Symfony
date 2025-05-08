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
use App\Service\OpenCageGeocoder;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Mercure\PublisherInterface;
use Symfony\Component\Mercure\Update;



#[Route('/user/courses')]
class UserCourseController extends AbstractController
{
    #[Route('/', name: 'user_courses')]
    public function index(
        CourseRepository $courseRepository,
        OpenCageGeocoder $geocoder
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté.');
        }

        // Récupérer uniquement les courses de l’utilisateur
        $courses = $courseRepository->findBy(
            ['user' => $user],
            ['dateCourse' => 'DESC']
        );

        // Construire le tableau de présentation (city - road) pour chaque course
        $presentation = [];
        foreach ($courses as $course) {
            // Valeurs par défaut
            $departLabel  = 'Coordonnées invalides';
            $arriveeLabel = 'Coordonnées invalides';

            // Ville départ
            $posDep = $course->getVilleDepart();
            if ($posDep && strpos($posDep, ',') !== false) {
                list($lat, $lon) = explode(',', $posDep);
                $departLabel = $geocoder->reverseGeocode(
                    trim($lat),
                    trim($lon)
                );
            }

            // Ville arrivée
            $posArr = $course->getVilleArrivee();
            if ($posArr && strpos($posArr, ',') !== false) {
                list($lat, $lon) = explode(',', $posArr);
                $arriveeLabel = $geocoder->reverseGeocode(
                    trim($lat),
                    trim($lon)
                );
            }

            $presentation[$course->getId()] = [
                'depart'  => $departLabel,
                'arrivee' => $arriveeLabel,
            ];
        }

        return $this->render('front_office/course/index.html.twig', [
            'courses'      => $courses,
            'presentation' => $presentation,
        ]);
    }

    #[Route('/new', name: 'user_course_new')]
    public function new(
        Request $request,
        EntityManagerInterface $em,
    ): Response {
        $course = new Course();
        $course->setDateCourse(new \DateTime());

        $form = $this->createForm(CourseType::class, $course, [
            'show_statut'            => false,
            'auto_calculate_montant' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $course->setStatut('En attente');
            $course->setUser($this->getUser());

            if ($taxi = $course->getTaxi()) {
                $montant = $taxi->getTarifKm() * $course->getDistanceKm();
                $course->setMontant($montant);
            }

            $em->persist($course);
            $em->flush();

            // Publication Mercure
            $topic = sprintf('/taxi/%d/notifications', $taxi->getId());
            $data = [
                'message'  => sprintf('Course %s → %s', $course->getVilleDepart(), $course->getVilleArrivee()),
                'courseId' => $course->getId(),
                'statut'   => $course->getStatut(),
            ];

            $this->addFlash('success', 'Course ajoutée et taxiste notifié.');
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
        $em->remove($course);
        $em->flush();

        $this->addFlash('success', 'Votre course a été annulée.');
        return $this->redirectToRoute('user_courses');
    }
}
