<?php

namespace App\Repository;

use App\Entity\AdminUsersProfile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AdminUsersProfile|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminUsersProfile|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminUsersProfile[]    findAll()
 * @method AdminUsersProfile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminUsersProfileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdminUsersProfile::class);
    }

    // /**
    //  * @return AdminUsersProfile[] Returns an array of AdminUsersProfile objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AdminUsersProfile
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
