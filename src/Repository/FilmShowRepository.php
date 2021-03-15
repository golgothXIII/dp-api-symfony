<?php

namespace App\Repository;

use App\Entity\FilmShow;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FilmShow|null find($id, $lockMode = null, $lockVersion = null)
 * @method FilmShow|null findOneBy(array $criteria, array $orderBy = null)
 * @method FilmShow[]    findAll()
 * @method FilmShow[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FilmShowRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FilmShow::class);
    }

    // /**
    //  * @return FilmShow[] Returns an array of FilmShow objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FilmShow
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
