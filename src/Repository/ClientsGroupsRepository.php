<?php

namespace App\Repository;

use App\Entity\ClientsGroups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ClientsGroups|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientsGroups|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientsGroups[]    findAll()
 * @method ClientsGroups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientsGroupsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientsGroups::class);
    }

    // /**
    //  * @return ClientsGroups[] Returns an array of ClientsGroups objects
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
    public function findOneBySomeField($value): ?ClientsGroups
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
