<?php
// src/Service/ReportService.php

namespace App\Service;

use App\Repository\CourseRepository;
use App\Repository\RatingRepository;
use App\Repository\UserRepository;
use App\Repository\TaxiRepository;
use App\Entity\Taxi;
use App\Entity\Course;
use App\Entity\Rating;

class ReportService
{
    public function __construct(
        private RatingRepository $ratingRepository,
        private CourseRepository $courseRepository,
        private UserRepository   $userRepository,
        private CourseRepository $courseRepo,
        private RatingRepository $ratingRepo,
        private UserRepository   $userRepo,
    ) {}

    /**
     * Retourne la note moyenne (AVG) par taxi.
     */
    public function getTaxiRatings(): array
{
    return $this->ratingRepository->createQueryBuilder('r')
        ->select(
            'IDENTITY(r.taxi) AS taxiId',
            't.immatriculation AS immatriculation',
            't.marque AS marque',
            't.modele AS modele',
            'AVG(r.note) AS avgRating'
        )
        ->join('r.taxi', 't')
        ->groupBy('r.taxi')
        ->orderBy('avgRating', 'DESC')
        ->getQuery()
        ->getArrayResult();
}


    /**
     * Retourne le top 5 des taxis les plus réservés.
     */
    public function getTopTaxis(int $limit = 5): array
{
    return $this->courseRepository->createQueryBuilder('c')
        ->select(
            'IDENTITY(c.taxi) AS taxiId',
            't.immatriculation AS immatriculation',
            't.marque AS marque',
            't.modele AS modele',
            'COUNT(c.id) AS reservationsCount'
        )
        ->join('c.taxi', 't')
        ->groupBy('c.taxi')
        ->orderBy('reservationsCount','DESC')
        ->setMaxResults($limit)
        ->getQuery()
        ->getArrayResult();
}


   // src/Service/ReportService.php



    public function getUserCourseReports(int $userId): array
    {
        $user = $this->userRepo->find($userId);
        if (!$user) {
            return [];
        }

        $courses = $this->courseRepo->findBy(
            ['user' => $user],
            ['dateCourse' => 'DESC']
        );

        $report = [];
        foreach ($courses as $c) {
            $taxi    = $c->getTaxi();
            $driver  = $taxi->getUser(); // le chauffeur lié
            $rating  = $this->ratingRepo->findOneBy([
                'taxi' => $taxi,
                'user' => $user,
            ]);
            $note = $rating ? $rating->getNote() : null;

            $report[] = [
                'id'             => $c->getId(),
                'dateCourse'     => $c->getDateCourse(),
                'montant'        => $c->getMontant(),
                'villeDepart'    => $c->getVilleDepart(),
                'villeArrivee'   => $c->getVilleArrivee(),
                'distanceKm'     => $c->getDistanceKm(),
                'statut'         => $c->getStatut(),
                'immatriculation'=> $taxi->getImmatriculation(),
                'marque'         => $taxi->getMarque(),
                'modele'         => $taxi->getModele(),
                'chauffeur'      => $driver ? $driver->getName() : '—',
                'userRating'     => $note,
            ];
        }

        return $report;
    }
    public function getUserCourses(int $userId): array
    {
        $user = $this->userRepo->find($userId);
        if (!$user) {
            return [];
        }

        $courses = $this->courseRepo->findBy(
            ['user' => $user],
            ['dateCourse' => 'DESC']
        );

        return array_map(function (Course $course) {
            return [
                'id'             => $course->getId(),
                'dateCourse'     => $course->getDateCourse(),
                'montant'        => $course->getMontant(),
                'villeDepart'    => $course->getVilleDepart(),
                'villeArrivee'   => $course->getVilleArrivee(),
                'distanceKm'     => $course->getDistanceKm(),
                'statut'         => $course->getStatut(),
            ];
        }, $courses);
    }
}


