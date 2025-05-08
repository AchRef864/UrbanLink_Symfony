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
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;


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

    #[Route('/course/new', name: 'course_new')]
    public function new(
        Request $request,
        EntityManagerInterface $em,
        HubInterface $hub        // ← Injection correcte du Hub Mercure
    ): Response {
        $course = new Course();
        $course->setDateCourse(new \DateTime());

        $form = $this->createForm(CourseType::class, $course, [
            'show_statut'            => false,
            'auto_calculate_montant' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Hydratation de la Course
            $course->setVilleDepart($form->get('villeDepart')->getData());
            $course->setVilleArrivee($form->get('villeArrivee')->getData());
            $course->setStatut('En attente');
            $course->setUser($this->getUser());
            if ($taxi = $course->getTaxi()) {
                $course->setMontant($taxi->getTarifKm() * $course->getDistanceKm());
            }

            $em->persist($course);
            $em->flush();

            // ——— Publication Mercure ———
            if ($taxi) {
                $topic = "/taxi/{$taxi->getId()}/notifications";
                $data  = [
                    'message'  => 'Nouvelle course planifiée !',
                    'courseId' => $course->getId(),
                ];
                // Crée et publie l’Update
                //$update = new Update(
                 //   $topic,
                 //   json_encode($data)
                //);
                //$hub->publish($update);
            }
            // ——————————————————————————

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
    #[Route('/admin/course/zones', name: 'course_zones_map')]
    public function zonesMap(CourseRepository $courseRepository): Response
    {
        // 1. Récupérer toutes les courses
        $courses = $courseRepository->findAll();

        // 2. Compter les occurences de chaque coordonnée (départ+arrivée)
        $counts = [];
        foreach ($courses as $course) {
            foreach (['getVilleDepart', 'getVilleArrivee'] as $getter) {
                $coord = $course->{$getter}();      // ex. "36.82,10.17"
                if ($coord && strpos($coord, ',') !== false) {
                    [$lat, $lon] = array_map('trim', explode(',', $coord));
                    $key = "{$lat},{$lon}";
                    $counts[$key] = ($counts[$key] ?? 0) + 1;
                }
            }
        }

        // 3. Construire le tableau de points agrégés
        $points    = [];
        $objectId  = 1;
        foreach ($counts as $key => $count) {
            [$lat, $lon] = explode(',', $key);
            $points[] = [
                'objectId'  => $objectId++,
                'lat'       => (float) $lat,
                'lon'       => (float) $lon,
                'count'     => $count,
            ];
        }

        // 4. Trouver le maximum pour l'échelle de taille/couleur
        $maxCount = !empty($counts) ? max($counts) : 1;

        // 5. Rendre le template avec les données
        return $this->render('back_office/course/map.html.twig', [
            'zonePoints' => $points,
            'maxCount'   => $maxCount,
        ]);
    }

    #[Route('/admin/course/stats', name: 'course_stats')]
    public function stats(CourseRepository $courseRepository): Response
    {
        $courses = $courseRepository->findAll();

        // 1. Top chauffeurs (count & revenue)
        $drivers = [];
        foreach ($courses as $c) {
            if (!$c->getTaxi()) {
                continue;
            }
            $user = $c->getTaxi()->getUser();
            $id   = $user->getId();
            $name = $user->getName();

            if (!isset($drivers[$id])) {
                $drivers[$id] = [
                    'name'    => $name,
                    'count'   => 0,
                    'revenue' => 0.0,
                ];
            }
            $drivers[$id]['count']++;
            $drivers[$id]['revenue'] += (float) $c->getMontant();
        }
        // trier et prendre top 5 par count
        $byCount   = $drivers;
        usort($byCount, fn($a, $b) => $b['count'] <=> $a['count']);
        $topCount  = array_slice($byCount, 0, 5);
        // trier et prendre top 5 par revenue
        $byRevenue  = $drivers;
        usort($byRevenue, fn($a, $b) => $b['revenue'] <=> $a['revenue']);
        $topRevenue = array_slice($byRevenue, 0, 5);

        // 2. Taxis sous‑performants (dernier 7 jours, seuil = 3)
        $oneWeekAgo = new \DateTime('-7 days');
        $weekCounts = [];
        foreach ($courses as $c) {
            if ($c->getDateCourse() < $oneWeekAgo || !$c->getTaxi()) {
                continue;
            }
            $uid = $c->getTaxi()->getUser()->getId();
            $weekCounts[$uid] = ($weekCounts[$uid] ?? 0) + 1;
        }
        // seuil
        $threshold = 3;
        $underperformers = [];
        foreach ($drivers as $uid => $info) {
            $count = $weekCounts[$uid] ?? 0;
            if ($count < $threshold) {
                $underperformers[] = [
                    'name'  => $info['name'],
                    'count' => $count,
                ];
            }
        }

        // 3. Taux d’acceptation vs refus
        $accepted = 0;
        $refused  = 0;
        foreach ($courses as $c) {
            if ($c->getStatut() === 'Acceptée') {
                $accepted++;
            } elseif ($c->getStatut() === 'Refusée') {
                $refused++;
            }
        }

        return $this->render('back_office/course/stats.html.twig', [
            'topCount'        => $topCount,
            'topRevenue'      => $topRevenue,
            'underperformers' => $underperformers,
            'accepted'        => $accepted,
            'refused'         => $refused,
        ]);
    }
    
}
