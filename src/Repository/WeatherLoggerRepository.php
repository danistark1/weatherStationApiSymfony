<?php

namespace App\Repository;

use App\Entity\WeatherLoggerEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WeatherLoggerEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method WeatherLoggerEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method WeatherLoggerEntity[]    findAll()
 * @method WeatherLoggerEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WeatherLoggerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WeatherLoggerEntity::class);
    }

    // /**
    //  * @return WeatherLogger[] Returns an array of WeatherLogger objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WeatherLogger
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
