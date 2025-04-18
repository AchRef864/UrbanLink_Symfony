<?php
// src/Repository/TaxiRepository.php

namespace App\Repository;

use App\Entity\Taxi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class TaxiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Taxi::class);
    }

    /**
     * Retourne la liste des taxis situés dans un rayon donné (en km) autour d'un point.
     *
     * @param float $longitude
     * @param float $latitude
     * @param float $radius
     * @return array
     */
    public function findNearbyTaxis(float $longitude, float $latitude, float $radius = 5): array
    {
        $conn = $this->getEntityManager()->getConnection();
        // La formule de Haversine calcule la distance en km
        $sql = "
            SELECT id, immatriculation, tarif_base AS tarifBase, longitude, latitude,
            (6371 * acos(
                cos(radians(:lat)) * cos(radians(latitude)) *
                cos(radians(longitude) - radians(:lng)) +
                sin(radians(:lat)) * sin(radians(latitude))
            )) AS distance
            FROM taxi
            WHERE longitude IS NOT NULL AND latitude IS NOT NULL
            HAVING distance < :radius
            ORDER BY distance ASC
        ";

        // Utilise executeQuery() qui renvoie directement un Statement approprié
        $stmt = $conn->executeQuery($sql, [
            'lat'    => $latitude,
            'lng'    => $longitude,
            'radius' => $radius,
        ]);

        // Utilise fetchAllAssociative() pour récupérer un tableau associatif
        return $stmt->fetchAllAssociative();
    }
}
