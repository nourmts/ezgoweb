<?php

namespace App\Entity;

use App\Repository\LocationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: LocationRepository::class)]
class Location
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_location", type: "integer")]
    private ?int $idLocation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date de début est obligatoire")]
    #[Assert\GreaterThanOrEqual(
        "today",
        message: "La date de début doit être aujourd'hui ou dans le futur"
    )]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date de fin est obligatoire")]
    #[Assert\GreaterThan(
        propertyPath: "dateDebut",
        message: "La date de fin doit être après la date de début"
    )]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le service est obligatoire")]
    private ?string $service = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La marque est obligatoire")]
    private ?string $marque = null;

    #[ORM\Column(type: Types::FLOAT)]
    private ?float $prixTotal = null;

    #[ORM\ManyToOne(targetEntity: Partenaire::class, inversedBy: 'locations')]
    #[ORM\JoinColumn(name: "id_partenaire", referencedColumnName: "id_partenaire", nullable: false)]
    #[Assert\NotNull(message: "Un partenaire doit être sélectionné")]
    private ?Partenaire $partenaire = null;

    #[ORM\Column(type: Types::BOOLEAN, nullable: false, options: ["default" => false])]
    private bool $confirmed = false;

    #[ORM\ManyToOne(targetEntity: CodePromo::class)]
    #[ORM\JoinColumn(name: 'code_promo', referencedColumnName: 'id', nullable: true)]
    private ?CodePromo $codePromo = null;

    // Getters et Setters

    public function getIdLocation(): ?int
    {
        return $this->idLocation;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): static
    {
        $this->dateFin = $dateFin;
        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(string $service): static
    {
        $this->service = $service;
        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): static
    {
        $this->marque = $marque;
        return $this;
    }

    public function getPrixTotal(): ?float
    {
        return $this->prixTotal;
    }

    public function setPrixTotal(float $prixTotal): static
    {
        $this->prixTotal = $prixTotal;
        return $this;
    }

    public function getPartenaire(): ?Partenaire
    {
        return $this->partenaire;
    }

    public function setPartenaire(?Partenaire $partenaire): static
    {
        $this->partenaire = $partenaire;
        return $this;
    }

    public function isConfirmed(): bool
    {
        return $this->confirmed;
    }

    public function setConfirmed(bool $confirmed): static
    {
        $this->confirmed = $confirmed;
        return $this;
    }

    public function getCodePromo(): ?CodePromo
    {
        return $this->codePromo;
    }

    public function setCodePromo(?CodePromo $codePromo): static
    {
        $this->codePromo = $codePromo;
        return $this;
    }

    public function calculatePrixTotal(): void
    {
        if ($this->dateDebut && $this->dateFin && $this->partenaire) {
            $interval = $this->dateDebut->diff($this->dateFin);
            $days = $interval->days + 1; // Inclut le premier et le dernier jour
            $prixBase = $days * $this->partenaire->getTarif();
            
            // Appliquer la réduction si un code promo est présent
            if ($this->codePromo) {
                $reduction = $prixBase * ($this->codePromo->getPourcentage() / 100);
                $prixBase -= $reduction;
            }

            $this->prixTotal = $prixBase;
        } else {
            $this->prixTotal = 0.0;
        }
    }
}
