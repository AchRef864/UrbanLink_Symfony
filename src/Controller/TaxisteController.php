<?php

namespace App\Controller;

use App\Entity\Taxi;
use App\Entity\Course;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Repository\UserRepository;
use App\Repository\TaxiRepository;
use App\Repository\CourseRepository;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Service\OpenCageGeocoder;
use Symfony\Component\Mercure\PublisherInterface;

class TaxisteController extends AbstractController
{
    #[Route('/dashboard', name: 'taxi_dashboard')]
    public function dashboard(
        EntityManagerInterface $em,
        OpenCageGeocoder $geocoder,
        CourseRepository $courseRepo
    ): Response {
        $user = $this->getUser();
        if (!in_array('ROLE_TAXI', $user->getRoles())) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }

        // Récupération du taxi associé
        $taxi = $em->getRepository(Taxi::class)->findOneBy(['user' => $user]);
        
        // Récupération des courses
        $courses = $taxi ? $em->getRepository(Course::class)->findBy(
            ['taxi' => $taxi],
            ['dateCourse' => 'DESC']
        ) : [];

        // Géocodage inversé
        $presentation = [];
        foreach ($courses as $c) {
            $dep = $this->getFormattedAddress($geocoder, $c->getVilleDepart());
            $arr = $this->getFormattedAddress($geocoder, $c->getVilleArrivee());
            
            $presentation[$c->getId()] = [
                'depart'  => $dep,
                'arrivee' => $arr,
            ];
        }

        // Statistiques
        $todayStats = $courseRepo->getTodayStats($user);
        $weekStats = $courseRepo->getWeekStats($user);

        return $this->render('taxiste/dashboard.html.twig', [
            'taxi' => $taxi,
            'courses' => $courses,
            'presentation' => $presentation,
            'stats' => [
                'today' => [
                    'courses' => $todayStats['count'],
                    'earnings' => $todayStats['earnings']
                ],
                'week' => [
                    'courses' => $weekStats['count'],
                    'earnings' => $weekStats['earnings']
                ]
            ]
        ]);
    }

    private function getFormattedAddress(OpenCageGeocoder $geocoder, ?string $coords): string
    {
        if (!$coords || strpos($coords, ',') === false) {
            return 'Adresse inconnue';
        }

        [$lat, $lon] = explode(',', $coords);
        return $geocoder->reverseGeocode(trim($lat), trim($lon)) ?? 'Adresse inconnue';
    }
    #[Route('/admin/taxiste', name: 'taxiste_liste')]
    public function taxiste(UserRepository $userRepo): Response
    {
        // On récupère tous les users dont le champ "role" vaut "taxi"
        $drivers = $userRepo->findBy(['role' => 'taxi']);

        return $this->render('taxiste/liste.html.twig', [
            'drivers' => $drivers,
        ]);
    }
    
    #[Route('/taxiste/course/{id}/accept', name: 'taxiste_course_accept', methods: ['POST'])]
    public function acceptCourse(Request $request, Course $course, EntityManagerInterface $em, MailerInterface $mailer): Response
    {
        $user = $this->getUser();
        if (!in_array('ROLE_TAXI', $user->getRoles())) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }
        
        $taxi = $course->getTaxi();
        if ($taxi->getUser() !== $user) {
            throw $this->createAccessDeniedException('Action non autorisée.');
        }
        
        // Mise à jour des statuts
        $course->setStatut('Acceptée');
        $em->flush();
        
        // Préparation de l'email structuré au client
        $client = $course->getUser();
        $emailContent = '
        <!DOCTYPE html>
        <html lang="fr">
        <head>
          <meta charset="UTF-8">
          <title>Course Acceptée - Urbanlink</title>
          <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; margin: 0; padding: 0; }
            .header { background-color: #3B82F6; color: #fff; padding: 20px; text-align: center; }
            .content { padding: 20px; }
            .footer { background-color: #f4f4f4; color: #555; padding: 10px; text-align: center; font-size: 12px; }
            .btn { background-color: #3B82F6; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px; }
            .logo { max-width: 150px; margin-bottom: 10px; }
          </style>
        </head>
        <body>
          <div class="header">
            <img class="logo" src="https://urbanlink.com/assets/img/logo.png" alt="Urbanlink Logo">
            <h1>Votre course a été acceptée</h1>
          </div>
          <div class="content">
            <p>Bonjour ' . htmlspecialchars($client->getEmail()) . ',</p>
            <p>Votre course prévue le <strong>' . $course->getDateCourse()->format("d/m/Y H:i") . '</strong> a été acceptée par le taxiste.</p>
            <p><strong>Détails de votre course :</strong></p>
            <ul>
              <li><strong>Taxi :</strong> ' . htmlspecialchars($taxi->getMarque() . " " . $taxi->getModele()) . ' (' . htmlspecialchars($taxi->getImmatriculation()) . ')</li>
              <li><strong>Ville de départ :</strong> ' . htmlspecialchars($course->getVilleDepart()) . '</li>
              <li><strong>Ville d\'arrivée :</strong> ' . htmlspecialchars($course->getVilleArrivee()) . '</li>
              <li><strong>Distance :</strong> ' . htmlspecialchars($course->getDistanceKm()) . ' km</li>
              <li><strong>Montant estimé :</strong> ' . htmlspecialchars($course->getMontant()) . ' TND</li>
            </ul>
            <p>Nous vous remercions pour votre confiance.</p>
            <p><a class="btn" href="https://urbanlink.com/mes-courses">Consulter mes courses</a></p>
          </div>
          <div class="footer">
            <p>&copy; ' . date("Y") . ' Urbanlink - Tous droits réservés.</p>
          </div>
        </body>
        </html>';
        
        $email = (new Email())
            ->from('noreply@urbanlink.com')
            ->to($client->getEmail())
            ->subject('Votre course a été acceptée - Urbanlink')
            ->html($emailContent);
        
        $mailer->send($email);
        
        $this->addFlash('success', 'La course a été acceptée et un email a été envoyé au client.');
        return $this->redirectToRoute('taxiste_dashboard');
    }

    #[Route('/taxiste/course/{id}/refuse', name: 'taxiste_course_refuse', methods: ['POST'])]
    public function refuseCourse(Request $request, Course $course, EntityManagerInterface $em, MailerInterface $mailer): Response
    {
        $user = $this->getUser();
        if (!in_array('ROLE_TAXI', $user->getRoles())) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }
        
        $taxi = $course->getTaxi();
        if ($taxi->getUser() !== $user) {
            throw $this->createAccessDeniedException('Action non autorisée.');
        }
        
        $course->setStatut('Refusée');
        $taxi->setStatut('Disponible');
        $em->flush();
        
        // Préparation de l'email structuré au client
        $client = $course->getUser();
        $emailContent = '
        <!DOCTYPE html>
        <html lang="fr">
        <head>
          <meta charset="UTF-8">
          <title>Course Refusée - Urbanlink</title>
          <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; margin: 0; padding: 0; }
            .header { background-color: #EF4444; color: #fff; padding: 20px; text-align: center; }
            .content { padding: 20px; }
            .footer { background-color: #f4f4f4; color: #555; padding: 10px; text-align: center; font-size: 12px; }
            .btn { background-color: #EF4444; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px; }
            .logo { max-width: 150px; margin-bottom: 10px; }
          </style>
        </head>
        <body>
          <div class="header">
            <img class="logo" src="https://urbanlink.com/assets/img/logo.png" alt="Urbanlink Logo">
            <h1>Votre course a été refusée</h1>
          </div>
          <div class="content">
            <p>Bonjour ' . htmlspecialchars($client->getEmail()) . ',</p>
            <p>Nous sommes désolés de vous informer que votre course prévue le <strong>' . $course->getDateCourse()->format("d/m/Y H:i") . '</strong> a été refusée par le taxiste.</p>
            <p><strong>Détails de votre course :</strong></p>
            <ul>
              <li><strong>Taxi :</strong> ' . htmlspecialchars($taxi->getMarque() . " " . $taxi->getModele()) . ' (' . htmlspecialchars($taxi->getImmatriculation()) . ')</li>
              <li><strong>Ville de départ :</strong> ' . htmlspecialchars($course->getVilleDepart()) . '</li>
              <li><strong>Ville d\'arrivée :</strong> ' . htmlspecialchars($course->getVilleArrivee()) . '</li>
              <li><strong>Distance :</strong> ' . htmlspecialchars($course->getDistanceKm()) . ' km</li>
              <li><strong>Montant estimé :</strong> ' . htmlspecialchars($course->getMontant()) . ' TND</li>
            </ul>
            <p>Nous vous invitons à reprogrammer votre course ou à contacter notre service client pour plus d\'informations.</p>
            <p><a class="btn" href="https://urbanlink.com/mes-courses">Consulter mes courses</a></p>
          </div>
          <div class="footer">
            <p>&copy; ' . date("Y") . ' Urbanlink - Tous droits réservés.</p>
          </div>
        </body>
        </html>';
        
        $email = (new Email())
            ->from('noreply@urbanlink.com')
            ->to($client->getEmail())
            ->subject('Votre course a été refusée - Urbanlink')
            ->html($emailContent);
        
        $mailer->send($email);
        
        $this->addFlash('success', 'La course a été refusée et un email a été envoyé au client.');
        return $this->redirectToRoute('taxiste_dashboard');
    }
    
    #[Route('/taxiste/course/{id}/start', name: 'taxiste_course_start', methods: ['POST'])]
public function startCourse(Request $request, Course $course, EntityManagerInterface $em): Response
{
    $user = $this->getUser();
    if (!in_array('ROLE_TAXI', $user->getRoles())) {
        throw $this->createAccessDeniedException('Accès refusé.');
    }
    
    $taxi = $course->getTaxi();
    if ($taxi->getUser() !== $user) {
        throw $this->createAccessDeniedException('Action non autorisée.');
    }
    
    // Vérifier que la course est dans l'état "Acceptée" en utilisant mb_strtolower
    if (mb_strtolower($course->getStatut(), 'UTF-8') !== 'acceptée') {
        $this->addFlash('error', 'La course ne peut être déclenchée que si elle est acceptée.');
        return $this->redirectToRoute('taxiste_dashboard');
    }
    
    // Mise à jour du statut de la course
    $course->setStatut('En course');
    $taxi->setStatut('En course');
    $em->flush();
    
    $this->addFlash('success', 'La course a été déclenchée.');
    return $this->redirectToRoute('taxiste_dashboard');
}

    
#[Route('/taxiste/course/{id}/finish', name: 'taxiste_course_finish', methods: ['POST'])]
public function finishCourse(Request $request, Course $course, EntityManagerInterface $em): Response
{
    $user = $this->getUser();
    if (!in_array('ROLE_TAXI', $user->getRoles())) {
        throw $this->createAccessDeniedException('Accès refusé.');
    }
    
    $taxi = $course->getTaxi();
    if ($taxi->getUser() !== $user) {
        throw $this->createAccessDeniedException('Action non autorisée.');
    }
    
    // Vérifier que la course est bien en cours en utilisant mb_strtolower pour gérer les accents
    if (mb_strtolower($course->getStatut(), 'UTF-8') !== 'en course') {
        $this->addFlash('error', 'La course ne peut être terminée que si elle est en cours.');
        return $this->redirectToRoute('taxiste_dashboard');
    }
    
    // Mise à jour du statut de la course et du taxi
    $course->setStatut('Terminée');
    $taxi->setStatut('Disponible');
    $em->flush();
    
    $this->addFlash('success', 'La course a été terminée.');
    return $this->redirectToRoute('taxiste_dashboard');
}

    
    #[Route('/taxiste/taxi/{id}/change-status', name: 'taxiste_taxi_change_status', methods: ['POST'])]
    public function changeTaxiStatus(Request $request, Taxi $taxi, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();

        if ($taxi->getUser() !== $user) {
            throw $this->createAccessDeniedException('Action non autorisée.');
        }

        // Récupérer le statut actuel du taxi
        $currentStatus = $taxi->getStatut();

        // Changement de statut en fonction du statut actuel, en utilisant les valeurs du TaxiType
        switch ($currentStatus) {
            case 'Disponible':
                $newStatus = 'Occupé';
                break;
            case 'En course':
                $newStatus = 'Occupé';
                break;
            case 'Occupé':
                $newStatus = 'Disponible';
                break;  
            default:
                $newStatus = 'Disponible';
                break;
        }

        $taxi->setStatut($newStatus);
        $em->flush();

        $this->addFlash('success', "Votre taxi est maintenant : $newStatus.");
        return $this->redirectToRoute('taxiste_dashboard');
    }
    #[Route('/taxiste/notifications', name: 'taxiste_notifications_ajax', methods: ['GET'])]
    public function notifications(
        CourseRepository $courseRepo,
        OpenCageGeocoder $geocoder
    ): JsonResponse {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $taxi = $user->getTaxis()->first();

        if (!$taxi) {
            return $this->json([]);
        }

        // Ne garder que les 10 dernières courses en attente
        $pending = $courseRepo->findBy(
            ['taxi' => $taxi, 'statut' => 'En attente'],
            ['dateReservation' => 'DESC'],
            10
        );

        $data = [];
        foreach ($pending as $c) {
            // même reverse-geocoding
            $dep = 'Coordonnées invalides';
            if (strpos($c->getVilleDepart(), ',') !== false) {
                list($lat, $lon) = explode(',', $c->getVilleDepart());
                $dep = $geocoder->reverseGeocode(trim($lat), trim($lon));
            }
            $arr = 'Coordonnées invalides';
            if (strpos($c->getVilleArrivee(), ',') !== false) {
                list($lat2, $lon2) = explode(',', $c->getVilleArrivee());
                $arr = $geocoder->reverseGeocode(trim($lat2), trim($lon2));
            }

            $data[] = [
                'id'       => $c->getId(),
                'depart'   => $dep,
                'arrivee'  => $arr,
                'dateRes'  => $c->getDateReservation()->format('d/m/Y H:i'),
            ];
        }

        return $this->json($data);
    }
}
