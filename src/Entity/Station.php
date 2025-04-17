<?php

namespace App\Entity;

use App\Repository\StationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: StationRepository::class)]
class Station
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idS = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message :"le nom ne doit pas etre vide")]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ\s\-]+$/u",
        message: "Le nom ne doit contenir que des lettres."
    )]
        private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message :"le nom ne doit pas etre vide")]
    #[Assert\Choice(
        choices: [
            'Ariana', 'Béja', 'Ben Arous', 'Bizerte', 'Gabès', 'Gafsa', 'Jendouba',
            'Kairouan', 'Kasserine', 'Kebili', 'Kef', 'Mahdia', 'La Manouba',
            'Médenine', 'Monastir', 'Nabeul', 'Sfax', 'Sidi Bouzid', 'Siliana',
            'Sousse', 'Tataouine', 'Tozeur', 'Tunis', 'Zaghouan'
        ],
        message: "La région sélectionnée n'est pas valide."
    )]

    private ?string $region = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Les coordonnées sont requises.")]
    #[Assert\Positive(message: "Les coordonnées doivent être un nombre positif.")]
    #[Assert\LessThanOrEqual(
        value: 9999,
        message: "Les coordonnées doivent contenir au maximum 4 chiffres."
    )]
    private ?int $cordonnes = null;

    public function getidS(): ?int
    {
        return $this->idS;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): static
    {
        $this->region = $region;

        return $this;
    }

    public function getCordonnes(): ?int
    {
        return $this->cordonnes;
    }

    public function setCordonnes(int $cordonnes): static
    {
        $this->cordonnes = $cordonnes;

        return $this;
    }
}
