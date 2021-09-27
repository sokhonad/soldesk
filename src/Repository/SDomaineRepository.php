<?php

namespace App\Repository;

use App\Entity\SDomaine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SDomaine|null find($id, $lockMode = null, $lockVersion = null)
 * @method SDomaine|null findOneBy(array $criteria, array $orderBy = null)
 * @method SDomaine[]    findAll()
 * @method SDomaine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SDomaineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SDomaine::class);
    }

    // /**
    //  * @return SDomaine[] Returns an array of SDomaine objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SDomaine
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
