<?php

namespace App\Repository;

use App\Entity\Carpro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Carpro>
 *
 * @method Carpro|null find($id, $lockMode = null, $lockVersion = null)
 * @method Carpro|null findOneBy(array $criteria, array $orderBy = null)
 * @method Carpro[]    findAll()
 * @method Carpro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarproRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Carpro::class);
    }

//    /**
//     * @return Carpro[] Returns an array of Carpro objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Carpro
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
