<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

/**
 * @extends ServiceEntityRepository<Reclamation>
 *
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }
    
    /**
     * Récupère toutes les réclamations triées par date de création (plus récentes en premier)
     * 
     * @return Reclamation[]
     */
    public function findAllSorted()
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.date', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Crée la requête de base pour les réclamations, prête à être paginée
     * 
     * @return QueryBuilder
     */
    public function getReclamationsQuery(): QueryBuilder
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.date', 'DESC');
    }
    
    /**
     * Récupère les réclamations dans une plage de dates spécifique
     * 
     * @param \DateTime|null $startDate
     * @param \DateTime|null $endDate
     * @return Reclamation[]
     */
    public function findByDateRange(?\DateTime $startDate, ?\DateTime $endDate): array
    {
        $qb = $this->createQueryBuilder('r');
        
        if ($startDate !== null) {
            $qb->andWhere('r.date >= :startDate')
               ->setParameter('startDate', $startDate->format('Y-m-d 00:00:00'));
        }
        
        if ($endDate !== null) {
            $qb->andWhere('r.date <= :endDate')
               ->setParameter('endDate', $endDate->format('Y-m-d 23:59:59'));
        }
        
        return $qb->orderBy('r.date', 'ASC')
                  ->getQuery()
                  ->getResult();
    }
    
    /**
     * Recherche des réclamations par texte et/ou catégorie
     * 
     * @param string|null $searchTerm Terme de recherche
     * @param string|null $category Catégorie pour filtrer
     * @return Reclamation[]
     */
    public function searchReclamations(?string $searchTerm = null, ?string $category = null): array
    {
        $qb = $this->createQueryBuilder('r')
            ->orderBy('r.date', 'DESC');
            
        if ($searchTerm) {
            $qb->andWhere('r.reclamation LIKE :search OR r.idReclamation = :id')
               ->setParameter('search', '%' . $searchTerm . '%')
               ->setParameter('id', is_numeric($searchTerm) ? (int)$searchTerm : -1);
        }
        
        if ($category) {
            $qb->andWhere('r.categorie = :category')
               ->setParameter('category', $category);
        }
        
        return $qb->getQuery()->getResult();
    }
    
    /**
     * Récupère les statistiques de réclamations groupées par catégorie
     * 
     * @return array
     */
    public function getStatsByCategory(): array
    {
        return $this->createQueryBuilder('r')
            ->select('r.categorie, COUNT(r.idReclamation) as count')
            ->groupBy('r.categorie')
            ->getQuery()
            ->getResult();
    }
    
    /**
     * Récupère les statistiques de réclamations groupées par état
     * 
     * @return array
     */
    public function getStatsByStatus(): array
    {
        return $this->createQueryBuilder('r')
            ->select('r.etat, COUNT(r.idReclamation) as count')
            ->groupBy('r.etat')
            ->getQuery()
            ->getResult();
    }
    
    /**
     * Récupère toutes les catégories distinctes
     * 
     * @return array
     */
    public function findAllCategories(): array
    {
        $result = $this->createQueryBuilder('r')
            ->select('DISTINCT r.categorie')
            ->getQuery()
            ->getResult();
            
        return array_map(function($item) {
            return $item['categorie'];
        }, $result);
    }
} 