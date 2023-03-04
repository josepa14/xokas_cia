<?php

namespace App\Repository;

use App\Entity\Reservas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservas>
 *
 * @method Reservas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservas[]    findAll()
 * @method Reservas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservas::class);
    }

    public function save(Reservas $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Reservas $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Reservas[] Returns an array of Reservas objects
//     */
   public function findByExampleField($fecha,$hora): array
   {
       return $this->createQueryBuilder('r')
           ->andWhere('r.fecha = :val1')
           ->andWhere('r.hora = :val2')
           ->setParameter('val1', $fecha)
           ->setParameter('val2', $hora)
           ->orderBy('r.id', 'ASC')
           ->setMaxResults(10)
           ->getQuery()
           ->getResult()
       ;
   }
   public function findByUser($id): array
   {
       return $this->createQueryBuilder('r')
           ->andWhere('r.numUser = :val1')
           ->setParameter('val1', $id)
           ->orderBy('r.id', 'ASC')
           ->setMaxResults(10)
           ->getQuery()
           ->getResult()
       ;
   }

//    public function findOneBySomeField($value): ?Reservas
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
