<?php

namespace App\Repository;

use App\Entity\CnpEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CnpEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method CnpEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method CnpEntity[]    findAll()
 * @method CnpEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CnpEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CnpEntity::class);
    }

    // /**
    //  * @return CnpEntity[] Returns an array of CnpEntity objects
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
    public function findOneBySomeField($value): ?CnpEntity
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
