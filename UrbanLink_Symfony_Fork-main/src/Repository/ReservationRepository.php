<?php
namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservation>
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    public function save(Reservation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Reservation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Find reservations by status
     * @return Reservation[]
     */
    public function findByStatus(string $status): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.status = :status')
            ->setParameter('status', $status)
            ->orderBy('r.reservation_date', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find reservations for a specific trajet
     * @return Reservation[]
     */
    public function findByTrajetId(int $trajetId): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.trajet = :trajetId')
            ->setParameter('trajetId', $trajetId)
            ->orderBy('r.reservation_date', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Count available seats for a trajet
     */
    public function countReservedSeatsForTrajet(int $trajetId): int
    {
        return (int) $this->createQueryBuilder('r')
            ->select('SUM(r.number_of_seats)')
            ->andWhere('r.trajet = :trajetId')
            ->andWhere('r.status = :confirmed')
            ->setParameter('trajetId', $trajetId)
            ->setParameter('confirmed', 'Confirmed')
            ->getQuery()
            ->getSingleScalarResult() ?? 0;
    }

    /**
     * Update reservation status in bulk
     */
    public function bulkUpdateStatus(array $reservationIds, string $status): int
    {
        return $this->createQueryBuilder('r')
            ->update()
            ->set('r.status', ':status')
            ->where('r.reservation_id IN (:ids)')
            ->setParameter('status', $status)
            ->setParameter('ids', $reservationIds)
            ->getQuery()
            ->execute();
    }
}