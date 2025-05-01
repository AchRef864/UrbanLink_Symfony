<?php

namespace App\Repository;

use App\Entity\Course;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class CourseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Course::class);
    }
    /**
     * Retourne les stats (nb de courses, somme des distances, somme des montants)
     * pour un taxi donné.
     *
     * @return array{courseCount:int, totalDistance:string, totalAmount:string}
     */
    public function getStatsForTaxi(int $taxiId): array
    {
        $qb = $this->createQueryBuilder('c')
            ->select(
                'COUNT(c.id)       AS courseCount',
                'SUM(c.distanceKm) AS totalDistance',
                'SUM(c.montant)    AS totalAmount'
            )
            ->andWhere('c.taxi = :taxiId')
            ->setParameter('taxiId', $taxiId);

        return $qb->getQuery()->getSingleResult();
    }
}
