<?php
namespace App\Repository;

use App\Entity\User;
use App\Entity\Course;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class CourseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Course::class);
    }

    public function getTodayStats(User $user): array
    {
        $todayStart = new \DateTime('today');
        $todayEnd = new \DateTime('tomorrow');

        return $this->createStatsQuery($user, $todayStart, $todayEnd);
    }

    public function getWeekStats(User $user): array
    {
        $weekStart = new \DateTime('monday this week');
        $weekEnd = new \DateTime('sunday this week 23:59:59');

        return $this->createStatsQuery($user, $weekStart, $weekEnd);
    }

    private function createStatsQuery(User $user, \DateTimeInterface $start, \DateTimeInterface $end): array
    {
        $qb = $this->createQueryBuilder('c');
        
        $count = (int) $qb->select('COUNT(c.id)')
            ->where('c.taxi IN (:taxis)')
            ->andWhere('c.dateCourse BETWEEN :start AND :end')
            ->setParameter('taxis', $user->getTaxis())
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->getQuery()
            ->getSingleScalarResult();

        $earnings = (float) $qb->select('COALESCE(SUM(c.montant), 0)')
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'count' => $count,
            'earnings' => $earnings
        ];
    }

    // ... [D'autres méthodes personnalisées si nécessaire] ...
}