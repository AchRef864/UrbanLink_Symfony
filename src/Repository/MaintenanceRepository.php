<?php

namespace App\Repository;

use App\Entity\Maintenance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Maintenance>
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

    // 🔵 READ - All Maintenances
    public function findAllMaintenances(): array
    {
        return $this->createQueryBuilder('m')
            ->orderBy('m.maintenanceDate', 'DESC')
            ->getQuery()
            ->getResult();
    }

    // 🔵 READ - By ID
    public function findMaintenanceById(int $id): ?Maintenance
    {
        return $this->find($id);
    }

    // 🟡 UPDATE
    public function update(Maintenance $maintenance, bool $flush = true): void
    {
        $this->getEntityManager()->persist($maintenance);

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

    // 🔍 SEARCH - by Vehicle ID
    public function findByVehicleId(int $vehicleId): array
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.vehicleId = :vehicleId')
            ->setParameter('vehicleId', $vehicleId)
            ->orderBy('m.maintenanceDate', 'DESC')
            ->getQuery()
            ->getResult();
    }

    // 🔍 SEARCH - by Service Type (partial match)
    public function searchByServiceType(string $keyword): array
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.serviceType LIKE :keyword')
            ->setParameter('keyword', '%' . $keyword . '%')
            ->orderBy('m.maintenanceDate', 'DESC')
            ->getQuery()
            ->getResult();
    }

    // 🔍 SEARCH - by Status
    public function findByStatus(int $status): array
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.status = :status')
            ->setParameter('status', $status)
            ->orderBy('m.maintenanceDate', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
