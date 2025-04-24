<?php

namespace App\Repository;

use App\Entity\Rating;
use App\Entity\Taxi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class RatingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rating::class);
    }

    /**
     * Retourne la note moyenne et le nombre total d'évaluations pour un taxi donné.
     */
    public function getRatingStatsForTaxi(Taxi $taxi): array
    {
        $qb = $this->createQueryBuilder('r')
            ->select('AVG(r.note) as avgRating, COUNT(r.id) as totalRatings')
            ->where('r.taxi = :taxi')
            ->setParameter('taxi', $taxi);

        return $qb->getQuery()->getSingleResult();
    }

    /**
     * Recherche une évaluation existante pour un taxi par un utilisateur donné.
     */
    public function findOneByTaxiAndUser(Taxi $taxi, $user): ?Rating
    {
        return $this->findOneBy([
            'taxi' => $taxi,
            'user' => $user,
        ]);
    }
}
