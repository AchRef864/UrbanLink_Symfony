<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<User>
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function searchUsers(string $searchTerm, ?string $role = null)
    {
        $qb = $this->createQueryBuilder('u');

        if ($searchTerm) {
            $qb->andWhere('u.name LIKE :search OR u.email LIKE :search')
                ->setParameter('search', '%'.$searchTerm.'%');
        }

        if ($role) {
            $qb->andWhere('u.role = :role')
                ->setParameter('role', $role);
        }

        return $qb->getQuery()->getResult();
    }

    public function findByFilters(string $role = 'all', string $status = 'all'): array
    {
        $qb = $this->createQueryBuilder('u');

        if ($role !== 'all') {
            $qb->andWhere('u.role = :role')
                ->setParameter('role', $role);
        }

        if ($status !== 'all') {
            $isBlocked = $status === 'blocked' ? 1 : 0;
            $qb->andWhere('u.isBlocked = :isBlocked')
                ->setParameter('isBlocked', $isBlocked);
        }

        return $qb->orderBy('u.name', 'ASC')
            ->getQuery()
            ->getResult();
    }


//    /**
//     * @return User[] Returns an array of User objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?User
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
