<?php

namespace App\Entity;

use App\Repository\CodePromoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CodePromoRepository::class)]
#[UniqueEntity(
    fields: ['code'],
    message: 'Ce code promo existe déjà. Veuillez en choisir un autre.'
)]
class CodePromo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, unique: true)]
    #[Assert\NotBlank(message: 'Le code promo ne peut pas être vide')]
    private ?string $code = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Le pourcentage ne peut pas être vide')]
    #[Assert\Range(
        min: 0,
        max: 100,
        notInRangeMessage: 'Le pourcentage doit être entre {{ min }}% et {{ max }}%'
    )]
    private ?int $pourcentage = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateExpiration = null;

    #[ORM\Column(nullable: true)]
    #[Assert\PositiveOrZero(message: 'Le nombre maximum d\'utilisations doit être positif ou nul')]
    private ?int $utilisationsMax = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    #[Assert\PositiveOrZero(message: 'Le nombre d\'utilisations doit être positif ou nul')]
    private ?int $utilisations = 0;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getPourcentage(): ?int
    {
        return $this->pourcentage;
    }

    public function setPourcentage(int $pourcentage): static
    {
        $this->pourcentage = $pourcentage;
        return $this;
    }

    public function getDateExpiration(): ?\DateTimeInterface
    {
        return $this->dateExpiration;
    }

    public function setDateExpiration(?\DateTimeInterface $dateExpiration): static
    {
        $this->dateExpiration = $dateExpiration;
        return $this;
    }

    public function getUtilisationsMax(): ?int
    {
        return $this->utilisationsMax;
    }

    public function setUtilisationsMax(?int $utilisationsMax): static
    {
        $this->utilisationsMax = $utilisationsMax;
        return $this;
    }

    public function getUtilisations(): ?int
    {
        return $this->utilisations;
    }

    public function setUtilisations(?int $utilisations): static
    {
        $this->utilisations = $utilisations;
        return $this;
    }
} 