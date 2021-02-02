<?php

namespace App\Repository;

use App\Entity\Cnp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cnp|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cnp|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cnp[]    findAll()
 * @method Cnp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CnpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cnp::class);
    }

    // /**
    //  * @return Cnp[] Returns an array of Cnp objects
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
    public function findOneBySomeField($value): ?Cnp
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
