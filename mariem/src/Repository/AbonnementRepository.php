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

    public function save(Abonnement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Abonnement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function searchByFullnameOrStatutOrDate(?string $searchTerm)
    {
        $qb = $this->createQueryBuilder('r');

        if ($searchTerm) {
            $qb->where('r.fullname LIKE :searchTerm')
               ->orWhere('r.statut LIKE :searchTerm')
               ->orWhere('r.dateDebut = :dateSearch')
               ->orWhere('r.dateFin = :dateSearch')
               ->setParameter('searchTerm', '%' . $searchTerm . '%')
               ->setParameter('dateSearch', \DateTime::createFromFormat('Y-m-d', $searchTerm) ?: null);
        }

        return $qb->getQuery()->getResult();
    }

}
