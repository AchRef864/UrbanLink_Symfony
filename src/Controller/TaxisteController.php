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
public function acceptCourse(Request $request, Course $course, EntityManagerInterface $em, MailerInterface $mailer): Response
{
    $user = $this->getUser();
    if (!in_array('ROLE_TAXISTE', $user->getRoles())) {
        throw $this->createAccessDeniedException('Accès refusé.');
    }
    
    $taxi = $course->getTaxi();
    if ($taxi->getUser() !== $user) {
        throw $this->createAccessDeniedException('Action non autorisée.');
    }
    
    // Mise à jour des statuts
    $course->setStatut('Acceptée');
    $taxi->setStatut('En course');
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

    
    #[Route('/taxiste/taxi/{id}/change-status', name: 'taxiste_taxi_change_status', methods: ['POST'])]
public function changeTaxiStatus(Request $request, Taxi $taxi, EntityManagerInterface $em): Response
{
    $user = $this->getUser();

    if ($taxi->getUser() !== $user) {
        throw $this->createAccessDeniedException('Action non autorisée.');
    }

    // Bascule entre les statuts
    $currentStatus = $taxi->getStatut();

    switch ($currentStatus) {
        case 'Disponible':
            $newStatus = 'En course';
            break;
        case 'En course':
            $newStatus = 'Indisponible';
            break;
        case 'Indisponible':
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

}
