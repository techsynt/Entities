<?php

namespace App\Repository;

use App\Entity\CrmSync;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CrmSync|null find($id, $lockMode = null, $lockVersion = null)
 * @method CrmSync|null findOneBy(array $criteria, array $orderBy = null)
 * @method CrmSync[]    findAll()
 * @method CrmSync[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CrmSyncRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CrmSync::class);
    }

    // /**
    //  * @return CrmSync[] Returns an array of CrmSync objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CrmSync
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
