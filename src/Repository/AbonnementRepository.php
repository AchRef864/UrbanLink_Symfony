<?php

namespace App\Repository;

use App\Entity\Abonnement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Abonnement>
 *
 * @method Abonnement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Abonnement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Abonnement[]    findAll()
 * @method Abonnement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AbonnementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Abonnement::class);
    }




    public function findWithFilters(
        string $searchTerm = '', 
        ?float $minPrice = null, 
        ?float $maxPrice = null
    ) {
        $qb = $this->createQueryBuilder('a');
        
        if ($searchTerm) {
            $qb->andWhere('a.type LIKE :searchTerm OR a.description LIKE :searchTerm')
               ->setParameter('searchTerm', '%'.$searchTerm.'%');
        }
        
        if ($minPrice !== null) {
            $qb->andWhere('a.prix >= :minPrice')
               ->setParameter('minPrice', $minPrice);
        }
        
        if ($maxPrice !== null) {
            $qb->andWhere('a.prix <= :maxPrice')
               ->setParameter('maxPrice', $maxPrice);
        }
        
        return $qb->getQuery()->getResult();
    }





}
