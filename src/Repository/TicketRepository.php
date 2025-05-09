<?php

namespace App\Repository;

use App\Entity\Ticket;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @extends ServiceEntityRepository<Ticket>
 */
class TicketRepository extends ServiceEntityRepository
{
    private $entityManager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, Ticket::class);
        $this->entityManager = $entityManager;
    }

    /**
     * @return Ticket[] Returns an array of Ticket objects
     */
    public function findAll(): array
    {
        return $this->entityManager->createQueryBuilder()
            ->select('t')
            ->from(Ticket::class, 't')
            ->orderBy('t.ticketid', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Ticket|null Returns a single Ticket object
     */
    public function find($id, $lockMode = null, $lockVersion = null): ?Ticket
    {
        return $this->entityManager->getRepository(Ticket::class)
            ->find($id);
    }

    //    /**
    //     * @return Ticket[] Returns an array of Ticket objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Ticket
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
