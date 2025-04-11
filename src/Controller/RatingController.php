<?php

namespace App\Controller;

use App\Entity\Taxi;
use App\Entity\Rating;
use App\Repository\RatingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RatingController extends AbstractController
{
    #[Route('/user/taxi/{id}/rate', name: 'taxi_rate', methods: ['GET', 'POST'])]
    public function rateTaxi(
        Request $request, 
        Taxi $taxi, 
        EntityManagerInterface $em, 
        RatingRepository $ratingRepository
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour noter.');
        }

        // Vérifier si l'utilisateur a déjà noté ce taxi
        $rating = $ratingRepository->findOneByTaxiAndUser($taxi, $user);
        if (!$rating) {
            $rating = new Rating();
            $rating->setTaxi($taxi);
            $rating->setUser($user);
        }

        if ($request->isMethod('POST')) {
            $note = (int) $request->request->get('note');
            $commentaire = $request->request->get('commentaire');

            // Vérification que la note est comprise entre 1 et 10
            if ($note < 1 || $note > 10) {
                $this->addFlash('error', 'La note doit être comprise entre 1 et 10.');
                return $this->redirectToRoute('taxi_rate', ['id' => $taxi->getId()]);
            }

            $rating->setNote($note);
            $rating->setCommentaire($commentaire);
            $rating->setDateRating(new \DateTime());

            $em->persist($rating);
            $em->flush();

            $this->addFlash('success', 'Merci pour votre évaluation.');
            return $this->redirectToRoute('user_courses'); // ou une page de détails du taxi
        }

        // Récupérer les statistiques de notation pour le taxi
        $stats = $ratingRepository->getRatingStatsForTaxi($taxi);

        return $this->render('front_office/taxi/rate.html.twig', [
            'taxi' => $taxi,
            'rating' => $rating,
            'avgRating' => $stats['avgRating'],
            'totalRatings' => $stats['totalRatings'],
        ]);
    }
}
