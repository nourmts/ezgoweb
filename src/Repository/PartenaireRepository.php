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
}