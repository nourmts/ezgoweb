<?php

namespace App\Repository;

use App\Entity\Reservations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservations>
 *
 * @method Reservations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservations[]    findAll()
 * @method Reservations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservations::class);
    }

    public function save(Reservations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Reservations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return Reservations[] Returns an array of Reservations objects
     */
    public function findByStatus(string $status): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.statut = :status')
            ->setParameter('status', $status)
            ->orderBy('r.DateRes', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Reservations[] Returns an array of Reservations objects
     */
    public function findRecentReservations(int $limit = 10): array
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.DateRes', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Reservations[] Returns an array of Reservations objects
     */
    public function findByUser($user): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.user = :user')
            ->setParameter('user', $user)
            ->orderBy('r.DateRes', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function search(string $searchTerm): array
    {
        try {
            error_log('Starting search with term: ' . $searchTerm);
            
            $qb = $this->createQueryBuilder('r');
            $qb->select('r')
               ->where('r.nameRes LIKE :searchTerm')
               ->setParameter('searchTerm', '%' . $searchTerm . '%');
            
            $query = $qb->getQuery();
            $sql = $query->getSQL();
            $params = $query->getParameters()->toArray();
            
            error_log('Generated SQL: ' . $sql);
            error_log('Parameters: ' . print_r($params, true));
            
            $result = $query->getResult();
            error_log('Found ' . count($result) . ' results');
            
            return $result;
        } catch (\Exception $e) {
            error_log('Repository search error: ' . $e->getMessage());
            error_log('Stack trace: ' . $e->getTraceAsString());
            throw $e;
        }
    }

    /**
     * @return array Returns an array of the most reserved cars
     */
    public function findMostReservedCars(): array
    {
        return $this->createQueryBuilder('r')
            ->select('c.marque as carBrand, COUNT(r.id) as reservationCount')
            ->join('r.car', 'c')
            ->groupBy('c.marque')
            ->orderBy('reservationCount', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return array Returns an array of reservation statistics by status
     */
    public function findReservationStats(): array
    {
        return $this->createQueryBuilder('r')
            ->select('r.statut as status', 'COUNT(r.id) as count')
            ->groupBy('r.statut')
            ->getQuery()
            ->getResult();
    }
} 