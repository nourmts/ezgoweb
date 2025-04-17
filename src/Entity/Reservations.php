<?php

namespace App\Entity;

use App\Repository\ReservationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReservationsRepository::class)]
#[ORM\Table(name: 'reservations')]
class Reservations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'IdRes')]
    private ?int $id = null;

    #[ORM\Column(name: 'NameRes', length: 255)]
    #[Assert\NotBlank(message: "Name is required")]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: "Name must be at least {{ limit }} characters long",
        maxMessage: "Name cannot be longer than {{ limit }} characters"
    )]
    private ?string $nameRes = null;

    #[ORM\Column(name: 'DateRes', type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: "Date is required")]
    #[Assert\GreaterThanOrEqual(
        "today",
        message: "The date must be today or later"
    )]
    private ?\DateTimeInterface $dateRes = null;

    #[ORM\Column(name: 'statut', length: 50)]
    #[Assert\NotBlank(message: "Status is required")]
    #[Assert\Choice(
        choices: ['en attente', 'confirmé', 'annulé'],
        message: 'Choose a valid status: en attente, confirmé, or annulé'
    )]
    private ?string $statut = 'en attente';

    #[ORM\ManyToOne(targetEntity: Voiture::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'IdVoiture', referencedColumnName: 'IdVoiture', nullable: false)]
    #[Assert\NotNull(message: "Car selection is required")]
    private ?Voiture $car = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameRes(): ?string
    {
        return $this->nameRes;
    }

    public function setNameRes(string $nameRes): static
    {
        $this->nameRes = $nameRes;
        return $this;
    }

    public function getDateRes(): ?\DateTimeInterface
    {
        return $this->dateRes;
    }

    public function setDateRes(\DateTimeInterface $dateRes): static
    {
        $this->dateRes = $dateRes;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;
        return $this;
    }

    public function getCar(): ?Voiture
    {
        return $this->car;
    }

    public function setCar(?Voiture $car): static
    {
        $this->car = $car;
        return $this;
    }

    public function __toString(): string
    {
        return sprintf(
            'Reservation #%d - %s (%s)',
            $this->id ?? 0,
            $this->nameRes ?? 'Unknown',
            $this->dateRes ? $this->dateRes->format('Y-m-d H:i') : 'No date'
        );
    }

    // For compatibility with database column names
    public function getIdRes(): ?int
    {
        return $this->id;
    }
} 