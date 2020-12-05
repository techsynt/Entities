<?php

namespace App\Repository;

use App\Entity\PromoCatalog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PromoCatalog|null find($id, $lockMode = null, $lockVersion = null)
 * @method PromoCatalog|null findOneBy(array $criteria, array $orderBy = null)
 * @method PromoCatalog[]    findAll()
 * @method PromoCatalog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PromoCatalogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PromoCatalog::class);
    }

    // /**
    //  * @return PromoCatalog[] Returns an array of PromoCatalog objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PromoCatalog
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
