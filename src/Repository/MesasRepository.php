<?php

namespace App\Repository;

use App\Entity\Mesas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Mesas>
 *
 * @method Mesas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mesas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mesas[]    findAll()
 * @method Mesas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MesasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mesas::class);
    }

    public function save(Mesas $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Mesas $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

   /**
    * @return Mesas[] Returns an array of Mesas objects
    */
   public function findByExampleField($value): array
   {
       return $this->createQueryBuilder('m')
           ->andWhere('m.fecha_reservas = :val')
           ->setParameter('val', $value)
           ->orderBy('m.id', 'ASC')
           ->setMaxResults(10)
           ->getQuery()
           ->getResult()
       ;
   }

//    public function findOneBySomeField($value): ?Mesas
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val') //cambiar por m.fecha y val por fechas
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
