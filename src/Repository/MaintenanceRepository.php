<?php

namespace App\Repository;

use App\Entity\Maintenance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Maintenance>
 *
 * @method Maintenance|null find($id, $lockMode = null, $lockVersion = null)
 * @method Maintenance|null findOneBy(array $criteria, array $orderBy = null)
 * @method Maintenance[]    findAll()
 * @method Maintenance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MaintenanceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Maintenance::class);
    }

    // 🟢 CREATE
    public function add(Maintenance $entity, bool $flush = true): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    // 🔴 DELETE
    public function remove(Maintenance $entity, bool $flush = true): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    // 🔵 READ - All Maintenances (sorted by date)
    public function findAllOrderedByDate(): array
    {
        return $this->createQueryBuilder('m')
            ->orderBy('m.maintenanceDate', 'DESC')
            ->getQuery()
            ->getResult();
    }

    // 🔍 SEARCH - Advanced search by category and term
    public function findBySearch(string $category, string $searchTerm): array
    {
        $qb = $this->createQueryBuilder('m')
            ->orderBy('m.maintenanceDate', 'DESC');

        switch ($category) {
            case 'vehicle':
                $qb->join('m.vehicle', 'v')
                   ->andWhere('v.id = :searchTerm')
                   ->setParameter('searchTerm', $searchTerm);
                break;
                
            case 'service':
                $qb->andWhere('m.serviceType LIKE :searchTerm')
                   ->setParameter('searchTerm', '%' . $searchTerm . '%');
                break;
                
            case 'provider':
                $qb->andWhere('m.serviceProvider LIKE :searchTerm')
                   ->setParameter('searchTerm', '%' . $searchTerm . '%');
                break;
                
            case 'status':
                $qb->andWhere('m.status = :searchTerm')
                   ->setParameter('searchTerm', $searchTerm);
                break;
        }

        return $qb->getQuery()->getResult();
    }

    // 🔍 SEARCH - By Status with count
    public function countByStatus(int $status): int
    {
        return $this->createQueryBuilder('m')
            ->select('COUNT(m.id)')
            ->andWhere('m.status = :status')
            ->setParameter('status', $status)
            ->getQuery()
            ->getSingleScalarResult();
    }

    // 📊 STATS - Get maintenance statistics
    public function getMaintenanceStats(): array
    {
        return [
            'total' => $this->count([]),
            'not_in_maintenance' => $this->countByStatus(Maintenance::STATUS_NOT_IN_MAINTENANCE),
            'in_maintenance' => $this->countByStatus(Maintenance::STATUS_IN_MAINTENANCE),
            'reserved' => $this->countByStatus(Maintenance::STATUS_RESERVED),
        ];
    }

    // 📅 UPCOMING - Get upcoming maintenances
    public function findUpcomingMaintenances(int $days = 7): array
    {
        $date = new \DateTimeImmutable("+{$days} days");

        return $this->createQueryBuilder('m')
            ->where('m.maintenanceDate BETWEEN :now AND :future')
            ->setParameter('now', new \DateTimeImmutable())
            ->setParameter('future', $date)
            ->orderBy('m.maintenanceDate', 'ASC')
            ->getQuery()
            ->getResult();
    }
}