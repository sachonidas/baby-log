<?php

namespace App\Repository;

use App\Entity\Nap;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Nap|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nap|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nap[]    findAll()
 * @method Nap[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NapRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nap::class);
    }

    // /**
    //  * @return Nap[] Returns an array of Nap objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nap
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
