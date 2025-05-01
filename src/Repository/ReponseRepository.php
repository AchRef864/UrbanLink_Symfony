<?php

namespace App\Repository;

use App\Entity\Reponse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reponse>
 */
class ReponseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reponse::class);
    }

    public function getGlobalRatingStats(): array
    {
        $qb = $this->createQueryBuilder('r')
            ->select('r.rate as rating, COUNT(r.id) as count')
            ->where('r.rate IS NOT NULL')
            ->groupBy('r.rate');
    
        $results = $qb->getQuery()->getResult();
    
        $stats = array_fill_keys(range(1, 5), 0);
        
        foreach ($results as $result) {
            $rating = (int)$result['rating'];
            if (isset($stats[$rating])) {
                $stats[$rating] = (int)$result['count'];
            }
        }
    
        return $stats;
    }

    //    /**
    //     * @return Reponse[] Returns an array of Reponse objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Reponse
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
