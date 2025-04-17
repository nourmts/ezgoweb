<?php

namespace App\Entity;

use App\Repository\TicketRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use App\Entity\Bus;

#[ORM\Entity(repositoryClass: TicketRepository::class)]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $ticketid = null;

    #[ORM\Column]
    private ?int $bus_id = null;

    #[ORM\ManyToOne(targetEntity: Bus::class)]
    #[ORM\JoinColumn(name: 'bus_id', referencedColumnName: 'imatriculation', nullable: true)]
    private ?Bus $bus = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le nombre de places est requis.")]
    #[Assert\Positive(message: "Le nombre de places doit être positif.")]
    #[Assert\LessThanOrEqual(
        value: 150,
        message: "Le nombre de places ne peut pas dépasser 30."
    )]
    private ?float $prix = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date d'achat est requise.")]
#[Assert\LessThanOrEqual(
    value: "today",
    message: "La date d'achat ne peut pas être dans le futur."
)]
    private ?\DateTimeInterface $dateAchat = null;

    public function getticketid(): ?int
    {
        return $this->ticketid;
    }

    public function getBus(): ?Bus
    {
        return $this->bus;
    }

    public function setBus(?Bus $bus): static
    {
        $this->bus = $bus;
        if ($bus) {
            $this->bus_id = $bus->getImatriculation();
        }
        return $this;
    }

    public function getBusId(): ?int
    {
        return $this->bus_id;
    }

    public function setBusId(int $bus_id): static
    {
        $this->bus_id = $bus_id;
        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->dateAchat;
    }

    public function setDateAchat(\DateTimeInterface $dateAchat): static
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }
}
