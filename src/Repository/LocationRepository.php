<?php

namespace App\Repository;

use App\Entity\Location;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Location>
 */
class LocationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Location::class);
    }

    //    /**
    //     * @return Location[] Returns an array of Location objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('l.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Location
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    public function getLocationsParPartenaire(): array
    {
        $qb = $this->createQueryBuilder('l')
            ->select('p.idPartenaire as partenaire_id, p.nom as partenaire, COUNT(l.idLocation) as nombre_locations')
            ->leftJoin('l.partenaire', 'p')
            ->groupBy('p.idPartenaire, p.nom')
            ->orderBy('nombre_locations', 'DESC');

        return $qb->getQuery()->getResult();
    }

    public function getServicesParPartenaire(): array
    {
        $qb = $this->createQueryBuilder('l')
            ->select('p.idPartenaire as partenaire_id, p.nom as partenaire, COUNT(DISTINCT l.service) as nombre_services')
            ->leftJoin('l.partenaire', 'p')
            ->groupBy('p.idPartenaire, p.nom')
            ->orderBy('nombre_services', 'DESC');

        return $qb->getQuery()->getResult();
    }

    public function getMarquesPlusDemandees(): array
    {
        $qb = $this->createQueryBuilder('l')
            ->select('l.marque, COUNT(l.idLocation) as nombre_locations')
            ->groupBy('l.marque')
            ->orderBy('nombre_locations', 'DESC')
            ->setMaxResults(10);

        return $qb->getQuery()->getResult();
    }

    public function getRepartitionServices(): array
    {
        $qb = $this->createQueryBuilder('l')
            ->select('l.service, COUNT(l.idLocation) as nombre_locations')
            ->groupBy('l.service')
            ->orderBy('nombre_locations', 'DESC');

        return $qb->getQuery()->getResult();
    }
}
