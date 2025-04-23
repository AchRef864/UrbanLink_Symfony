<?php

namespace App\Repository;

use App\Entity\Trajet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Trajet>
 */
class TrajetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Trajet::class);
    }

   // src/Repository/TrajetRepository.php

public function findBySearchAndFilter(?string $searchTerm = null, ?string $typeTransport = null): array
{
    $qb = $this->createQueryBuilder('t')
        ->orderBy('t.departureTime', 'ASC');

    if ($searchTerm) {
        $qb->andWhere('LOWER(t.departure) LIKE LOWER(:searchTerm) OR 
                      LOWER(t.destination) LIKE LOWER(:searchTerm)')
           ->setParameter('searchTerm', '%'.$searchTerm.'%');
    }

    if ($typeTransport) {
        $qb->andWhere('t.typeTransport = :typeTransport')
           ->setParameter('typeTransport', $typeTransport);
    }

    $results = $qb->getQuery()->getResult();
    
    // Debug : vérifiez ce que retourne réellement la requête
    dump($results);
    
    return $results;
}

  
}