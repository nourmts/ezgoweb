<?php

namespace App\Repository;

use App\Entity\Partenaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PartenaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Partenaire::class);
    }

    // Méthode pour récupérer tous les partenaires avec leurs régions normalisées (si nécessaire)
    public function findAllWithNormalizedRegions()
    {
        $partenaires = $this->createQueryBuilder('p')
            ->getQuery()
            ->getResult();

        foreach ($partenaires as $partenaire) {
            if ($partenaire->getRegions() === null) {
                $partenaire->setRegions([]);
            }
        }

        return $partenaires;
    }

    // Méthode pour récupérer tous les partenaires avec leurs évaluations
    public function findAllWithRatings()
    {
        return $this->createQueryBuilder('p')
            ->leftJoin('p.ratings', 'r')
            ->addSelect('r')
            ->getQuery()
            ->getResult();
    }

    // Méthode pour calculer la moyenne des évaluations d'un partenaire
    public function findAverageRating(int $partenaireId): float
    {
        // Requête pour calculer la moyenne des évaluations d'un partenaire donné
        $average = $this->createQueryBuilder('p')
            ->select('AVG(r.note) as average')
            ->leftJoin('p.ratings', 'r')
            ->where('p.idPartenaire = :id')
            ->setParameter('id', $partenaireId)
            ->getQuery()
            ->getSingleScalarResult();

        // Si aucune évaluation n'est trouvée, retourner 0
        return $average ?? 0.0;
    }
}
