<?php

namespace App\Repository;

use App\Entity\Veteran;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Veteran|null find($id, $lockMode = null, $lockVersion = null)
 * @method Veteran|null findOneBy(array $criteria, array $orderBy = null)
 * @method Veteran[]    findAll()
 * @method Veteran[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VeteranRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Veteran::class);
    }

    // /**
    //  * @return Veteran[] Returns an array of Veteran objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Veteran
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
