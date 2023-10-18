<?php

namespace App\Repository;

use App\Entity\Pproducts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pproducts>
 *
 * @method Pproducts|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pproducts|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pproducts[]    findAll()
 * @method Pproducts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PproductsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pproducts::class);
    }

//    /**
//     * @return Pproducts[] Returns an array of Pproducts objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Pproducts
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
