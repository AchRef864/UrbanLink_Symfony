<?php
// src/Repository/VehicleRepository.php
namespace App\Repository;

use App\Entity\Vehicle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Vehicle>
 */
class VehicleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vehicle::class);
    }

    // 🟢 CREATE
    public function add(Vehicle $entity, bool $flush = true): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    // 🔵 READ - All Vehicles
    public function findAllVehicles(): array
    {
        return $this->createQueryBuilder('v')
            ->orderBy('v.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    // 🔵 READ - By ID
    public function findVehicleById(int $id): ?Vehicle
    {
        return $this->find($id);
    }

    // 🟡 UPDATE
    public function update(Vehicle $vehicle, bool $flush = true): void
    {
        $this->getEntityManager()->persist($vehicle);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    // 🔴 DELETE
    public function remove(Vehicle $entity, bool $flush = true): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    // 🔍 Optional: Find all vehicles by driver
    public function findByDriver(int $driverId): array
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.driverID = :driverId')
            ->setParameter('driverId', $driverId)
            ->orderBy('v.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findAvailableVehicles(): array
{
    return $this->createQueryBuilder('v')
        ->where('v.seats > 0') // Use the correct field name here
        ->getQuery()
        ->getResult();
}
    
}
