<?php

namespace App\Repository;

use App\Entity\Discussion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Discussion>
 *
 * @method Discussion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Discussion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Discussion[]    findAll()
 * @method Discussion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DiscussionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Discussion::class);
    }

    /**
     * Sauvegarde une entité Discussion.
     */
    public function save(Discussion $discussion, bool $flush = false): void
    {
        $this->_em->persist($discussion);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * Supprime une entité Discussion.
     */
    public function remove(Discussion $discussion, bool $flush = false): void
    {
        $this->_em->remove($discussion);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * Récupère toutes les discussions liées à une réclamation donnée.
     *
     * @param int $reclamationId
     * @return Discussion[]
     */
    public function findByReclamationId(int $reclamationId): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.reclamation = :reclamationId')
            ->setParameter('reclamationId', $reclamationId)
            ->orderBy('d.date', 'ASC') // Tri par date croissante
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère toutes les discussions liées à une réclamation donnée avec un join explicite.
     *
     * @param int $reclamationId
     * @return array
     */
    public function findByReclamationIdWithJoin(int $reclamationId): array
    {
        // Use a completely native query to avoid Doctrine ORM issues
        $conn = $this->getEntityManager()->getConnection();
        $sql = '
            SELECT d.id, d.message, d.auteur, d.date, d.reclamation_id 
            FROM discussion d 
            JOIN reclamation r ON d.reclamation_id = r.id_reclamation
            WHERE r.id_reclamation = :reclamationId
            ORDER BY d.date ASC
        ';
        
        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery(['reclamationId' => $reclamationId]);
        
        return $result->fetchAllAssociative();
    }
}