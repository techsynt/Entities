<?php

namespace App\Repository;

use App\Entity\OrdersStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OrdersStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdersStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdersStatus[]    findAll()
 * @method OrdersStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdersStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdersStatus::class);
    }

    // /**
    //  * @return OrdersStatus[] Returns an array of OrdersStatus objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OrdersStatus
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
