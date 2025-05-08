<?php

namespace App\Entity;

use App\Repository\BusRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;


#[Assert\Callback('validateDates')]
#[ORM\Entity(repositoryClass: BusRepository::class)]
class Bus
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
  
    #[ORM\Column]
    private ?int $imatriculation = null;

    #[ORM\ManyToOne(targetEntity: Station::class)]
    #[ORM\JoinColumn(name: "id_station", referencedColumnName: "id_s")]
    #[Assert\NotNull(message: "Choisissez une station.")]
    private ?Station $station = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le nombre de places est requis.")]
    #[Assert\LessThanOrEqual(
        value: 30,
        message: "Le nombre de places ne peut pas dépasser 30."
    )]
    private ?int $nb_place = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date de sortie est requise.")]

    private ?\DateTimeInterface $date_arrive = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date de sortie est requise.")]

    private ?\DateTimeInterface $date_sortie = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: "La catégorie est requise.")]
    #[Assert\Choice(choices: ['confort', 'normale'], message: "La catégorie doit être soit 'confort' soit 'normale'.")]
    private ?string $categorie = null;

   

    public function getImatriculation(): ?int
    {
        return $this->imatriculation;
    }

    public function getStation(): ?Station
    {
        return $this->station;
    }

    public function setStation(?Station $station): static
    {
        $this->station = $station;

        return $this;
    }

   
    public function getIdStation(): ?int
    {
        return $this->station ? $this->station->getIdS() : null;
    }

  
    public function setIdStation($idStation): static
    {
        if ($idStation instanceof Station) {
            $this->station = $idStation;
        } else if (is_numeric($idStation)) {
            
        }
        return $this;
    }

    public function getNbPlace(): ?int
    {
        return $this->nb_place;
    }

    public function setNbPlace(int $nb_place): static
    {
        $this->nb_place = $nb_place;

        return $this;
    }

    public function getDateArrive(): ?\DateTimeInterface
    {
        return $this->date_arrive;
    }

    public function setDateArrive(\DateTimeInterface $date_arrive): static
    {
        $this->date_arrive = $date_arrive;

        return $this;
    }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->date_sortie;
    }

    public function setDateSortie(\DateTimeInterface $date_sortie): static
    {
        $this->date_sortie = $date_sortie;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function validateDates(ExecutionContextInterface $context): void
{
    if ($this->date_arrive && $this->date_sortie) {
        if ($this->date_arrive > $this->date_sortie) {
            $context->buildViolation('La date d\'arrivée doit être antérieure à la date de sortie.')
                ->atPath('date_arrive')
                ->addViolation();

            $context->buildViolation('La date de sortie doit être postérieure à la date d\'arrivée.')
                ->atPath('date_sortie')
                ->addViolation();
        }
    }
}

}
