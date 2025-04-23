<?php

namespace App\Repository;

use App\Entity\AbonnementReservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AbonnementReservation>
 *
 * @method AbonnementReservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method AbonnementReservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method AbonnementReservation[]    findAll()
 * @method AbonnementReservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AbonnementReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AbonnementReservation::class);
    }

    public function save(AbonnementReservation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(AbonnementReservation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    

   


}
