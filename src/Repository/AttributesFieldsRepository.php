<?php

namespace App\Repository;

use App\Entity\AttributesFields;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AttributesFields|null find($id, $lockMode = null, $lockVersion = null)
 * @method AttributesFields|null findOneBy(array $criteria, array $orderBy = null)
 * @method AttributesFields[]    findAll()
 * @method AttributesFields[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AttributesFieldsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AttributesFields::class);
    }

    // /**
    //  * @return AttributesFields[] Returns an array of AttributesFields objects
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
    public function findOneBySomeField($value): ?AttributesFields
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
