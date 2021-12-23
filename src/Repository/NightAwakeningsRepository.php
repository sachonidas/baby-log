<?php

namespace App\Repository;

use App\Entity\NightAwakenings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NightAwakenings|null find($id, $lockMode = null, $lockVersion = null)
 * @method NightAwakenings|null findOneBy(array $criteria, array $orderBy = null)
 * @method NightAwakenings[]    findAll()
 * @method NightAwakenings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NightAwakeningsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NightAwakenings::class);
    }

    // /**
    //  * @return NightAwakenings[] Returns an array of NightAwakenings objects
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
    public function findOneBySomeField($value): ?NightAwakenings
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
