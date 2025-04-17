<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: VoitureRepository::class)]
#[ORM\Table(name: 'voiture')]
class Voiture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'IdVoiture')]
    private ?int $id = null;

    #[ORM\Column(name: 'image', length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(name: 'immatriculation', length: 255)]
    #[Assert\NotBlank(message: "Registration number is required")]
    #[Assert\Regex(
        pattern: '/^\d{3}-TUN-\d{3}$/',
        message: 'Registration number must be in format: XXX-TUN-XXX'
    )]
    private ?string $immatriculation = null;

    #[ORM\Column(name: 'marque', length: 255)]
    #[Assert\NotBlank(message: "Brand is required")]
    private ?string $marque = null;

    #[ORM\Column(name: 'etat', length: 50)]
    #[Assert\NotBlank(message: "State is required")]
    #[Assert\Choice(
        choices: ['disponible', 'en maintenance', 'réservé'],
        message: 'Choose a valid state: disponible, en maintenance, or réservé'
    )]
    private ?string $etat = 'disponible';

    #[ORM\Column(name: 'contrat', length: 50)]
    #[Assert\NotBlank(message: "Contract type is required")]
    #[Assert\Choice(
        choices: ['premium', 'standard', 'economique'],
        message: 'Choose a valid contract type: premium, standard, or economique'
    )]
    private ?string $contrat = null;

    #[ORM\OneToMany(mappedBy: 'car', targetEntity: Reservations::class, cascade: ['persist'], orphanRemoval: true)]
    private Collection $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
        $this->etat = 'disponible';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;
        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(string $immatriculation): static
    {
        $this->immatriculation = $immatriculation;
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

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;
        return $this;
    }

    public function getContrat(): ?string
    {
        return $this->contrat;
    }

    public function setContrat(string $contrat): static
    {
        $this->contrat = $contrat;
        return $this;
    }

    /**
     * @return Collection<int, Reservations>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservations $reservation): static
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations->add($reservation);
            $reservation->setCar($this);
        }
        return $this;
    }

    public function removeReservation(Reservations $reservation): static
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getCar() === $this) {
                $reservation->setCar(null);
            }
        }
        return $this;
    }

    public function isAvailable(): bool
    {
        return $this->etat === 'disponible';
    }

    public function __toString(): string
    {
        return $this->marque . ' (' . $this->immatriculation . ')';
    }
}