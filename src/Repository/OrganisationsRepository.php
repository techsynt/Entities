<?php

namespace App\Repository;

use App\Entity\Organisations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Organisations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Organisations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Organisations[]    findAll()
 * @method Organisations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrganisationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Organisations::class);
    }

    // /**
    //  * @return Organisations[] Returns an array of Organisations objects
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
    public function findOneBySomeField($value): ?Organisations
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
