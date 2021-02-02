<?php

namespace App\Repository;

use App\Entity\ECnp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ECnp|null find($id, $lockMode = null, $lockVersion = null)
 * @method ECnp|null findOneBy(array $criteria, array $orderBy = null)
 * @method ECnp[]    findAll()
 * @method ECnp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ECnpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ECnp::class);
    }

    // /**
    //  * @return ECnp[] Returns an array of ECnp objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ECnp
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
