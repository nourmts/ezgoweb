<?php

namespace App\Repository;

use App\Entity\Bus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bus>
 */
class BusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bus::class);
    }

    /**
     * @return Bus[] Returns an array of Bus objects for a given station
     */
    public function findByStation(int $stationId): array
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.idStation = :stationId')
            ->setParameter('stationId', $stationId)
            ->getQuery()
            ->getResult();
    }
    public function countByCategorie(): array
    {
        $qb = $this->createQueryBuilder('b')
            ->select('b.categorie AS categorie, COUNT(b.imatriculation) AS count') 
            ->groupBy('b.categorie')
            ->getQuery();
    
        $results = $qb->getArrayResult();
        
       
        $stats = [];
        foreach ($results as $result) {
            $stats[$result['categorie']] = $result['count'];
        }
    
        return $stats;
    }
    //    /**
    //     * @return Bus[] Returns an array of Bus objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('b.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Bus
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
