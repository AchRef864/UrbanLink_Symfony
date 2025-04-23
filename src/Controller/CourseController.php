<?php

namespace App\Controller;

use App\Entity\Course;
use App\Service\OpenCageGeocoder;
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
    public function index(CourseRepository $courseRepository, OpenCageGeocoder $geocoder): Response
{
    $courses = $courseRepository->findAll();

    $presentationData = [];

    foreach ($courses as $course) {
        $villeDepartLabel = "Coordonnées invalides";
        $villeArriveeLabel = "Coordonnées invalides";

        $posDepart = $course->getVilleDepart();
        if ($posDepart && strpos($posDepart, ',') !== false) {
            list($lat, $lon) = explode(',', $posDepart);
            $villeDepartLabel = $geocoder->reverseGeocode(trim($lat), trim($lon));
        }

        $posArrivee = $course->getVilleArrivee();
        if ($posArrivee && strpos($posArrivee, ',') !== false) {
            list($lat, $lon) = explode(',', $posArrivee);
            $villeArriveeLabel = $geocoder->reverseGeocode(trim($lat), trim($lon));
        }

        $presentationData[$course->getId()] = [
            'depart' => $villeDepartLabel,
            'arrivee' => $villeArriveeLabel,
        ];
    }

    return $this->render('back_office/course/index.html.twig', [
        'courses' => $courses,
        'presentation' => $presentationData,
    ]);
}

    /**
     * Effectue un reverse geocoding via Nominatim pour retourner l'adresse au format "City - Road".
     *
     * @param string $lat Latitude
     * @param string $lon Longitude
     * @return string L'adresse formatée ou un message d'erreur
     */
    public function reverseGeocode(string $lat, string $lon): string
    {
        // URL de l'API Nominatim avec les paramètres de format JSON et les coordonnées
        $url = "https://nominatim.openstreetmap.org/reverse?format=json&lat={$lat}&lon={$lon}&accept-language=en";        
        // Création d'un contexte HTTP avec un User-Agent (requis par Nominatim)
        $options = [
            'http' => [
                'method' => 'GET',
                'header' => "User-Agent: VotreNomApplication\r\n"
            ]
        ];
        $context = stream_context_create($options);

        // Récupération de la réponse JSON depuis Nominatim
        $response = file_get_contents($url, false, $context);
        if ($response === false) {
            return "Erreur de géolocalisation";
        }

        $data = json_decode($response, true);
        $address = $data['address'] ?? [];
        // Nominatim peut renvoyer 'city', 'town' ou 'village'
        $city = $address['city'] ?? $address['town'] ?? $address['village'] ?? 'Ville inconnue';
        $road = $address['road'] ?? 'Rue inconnue';

        return "$city - $road";
    }

    #[Route('/new', name: 'course_new')]
public function new(Request $request, EntityManagerInterface $em): Response
{
    $course = new Course();
    $course->setDateCourse(new \DateTime());

    $form = $this->createForm(CourseType::class, $course, [
        'show_statut' => false,
        'auto_calculate_montant' => true,
    ]);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Récupération des données du formulaire
        $villeDepart = $form->get('villeDepart')->getData();
        $villeArrivee = $form->get('villeArrivee')->getData();
        
        $course->setVilleDepart($villeDepart);
        $course->setVilleArrivee($villeArrivee);
        $course->setStatut('En attente');
        $course->setUser($this->getUser());

        $taxi = $course->getTaxi();
        if ($taxi) {
            $montant = $taxi->getTarifKm() * $course->getDistanceKm();
            $course->setMontant($montant);
        }

        $em->persist($course);
        $em->flush();

        $this->addFlash('success', 'Course créée avec succès');
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
