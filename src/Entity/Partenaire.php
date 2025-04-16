<?php

namespace App\Entity;

use App\Repository\PartenaireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PartenaireRepository::class)]
class Partenaire
{
    public const REGIONS = [
        'Ariana',
        'Béja',
        'Ben Arous',
        'Bizerte',
        'Gabès',
        'Gafsa',
        'Jendouba',
        'Kairouan',
        'Kasserine',
        'Kébili',
        'Kef',
        'Mahdia',
        'Manouba',
        'Médenine',
        'Monastir',
        'Nabeul',
        'Sfax',
        'Sidi Bouzid',
        'Siliana',
        'Sousse',
        'Tataouine',
        'Tozeur',
        'Tunis',
        'Zaghouan'
    ];

    public const SPECIALITES = [
        'Location voitures',
        'Location motos',
        'Location utilitaires',
        'Location mini-bus',
        'Location luxe'
    ];

    public const LANGUES = [
        'Arabe',
        'Français',
        'Anglais',
        'Allemand',
        'Italien',
        'Espagnol'
    ];

    public const SERVICES = [
        'Livraison véhicule',
        'Conducteur optionnel',
        'Siège bébé',
        'GPS intégré',
        'Assurance tous risques',
        'Service 24h/24'
    ];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_partenaire", type: "integer")]
    private ?int $idPartenaire = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le nom est obligatoire")]
    #[Assert\Regex(
        pattern: "/^[A-Z][a-zA-ZÀ-ÿ -]*$/",
        message: "Doit commencer par une majuscule (lettres et espaces seulement)"
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 15)]
    #[Assert\NotBlank(message: "Le téléphone est obligatoire")]
    #[Assert\Regex(
        pattern: "/^\\+216\\d{8}$/",
        message: "Format: +216XXXXXXXX (8 chiffres)"
    )]
    private ?string $telephone = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "L'email est obligatoire")]
    #[Assert\Email(message: "Format email invalide (exemple@domaine.com)")]
    private ?string $email = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    #[Assert\NotBlank(message: "Au moins une région doit être sélectionnée")]
    #[Assert\Count(min: 1, minMessage: "Au moins une région doit être sélectionnée")]
    private ?array $regions = [];

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "La spécialité est obligatoire")]
    private ?string $specialite = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "Les marques disponibles sont obligatoires")]
    private ?string $marquesDisponibles = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "Les horaires d'ouverture sont obligatoires")]
    private ?string $horairesOuverture = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "Les langues parlées sont obligatoires")]
    private ?string $languesParlees = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "Les services sont obligatoires")]
    private ?string $services = null;

    #[ORM\Column(type: Types::FLOAT, nullable: true)]
    #[Assert\Type(type: 'float', message: 'Le tarif doit être un nombre')]
    #[Assert\GreaterThanOrEqual(value: 0, message: 'Le tarif ne peut pas être négatif')]
    private ?float $tarif = null;

    #[ORM\OneToMany(mappedBy: 'partenaire', targetEntity: Location::class, orphanRemoval: true)]
    private Collection $locations;

    public function __construct()
    {
        $this->locations = new ArrayCollection();
        $this->regions = [];
    }

    #[ORM\PostLoad]
    public function postLoad(): void
    {
        if ($this->regions === null) {
            $this->regions = [];
        }
    }

    public function getIdPartenaire(): ?int
    {
        return $this->idPartenaire;
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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getRegions(): array
    {
        return $this->regions ?? [];
    }

    public function setRegions(array $regions): static
    {
        $this->regions = $regions;
        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): static
    {
        $this->specialite = $specialite;
        return $this;
    }

    public function getMarquesDisponibles(): array
    {
        if ($this->marquesDisponibles === null) {
            return [];
        }
        return is_array($this->marquesDisponibles) ? $this->marquesDisponibles : explode(',', $this->marquesDisponibles);
    }

    public function setMarquesDisponibles($marquesDisponibles): static
    {
        if (is_array($marquesDisponibles)) {
            $this->marquesDisponibles = implode(',', $marquesDisponibles);
        } else {
            $this->marquesDisponibles = $marquesDisponibles;
        }
        return $this;
    }

    public function getHorairesOuverture(): ?string
    {
        return $this->horairesOuverture;
    }

    public function setHorairesOuverture(string $horairesOuverture): static
    {
        $this->horairesOuverture = $horairesOuverture;
        return $this;
    }

    public function getLanguesParlees(): array
    {
        if ($this->languesParlees === null) {
            return [];
        }
        return is_array($this->languesParlees) ? $this->languesParlees : explode(',', $this->languesParlees);
    }

    public function setLanguesParlees($languesParlees): static
    {
        if (is_array($languesParlees)) {
            $this->languesParlees = implode(',', $languesParlees);
        } else {
            $this->languesParlees = $languesParlees;
        }
        return $this;
    }

    public function getServices(): array
    {
        if ($this->services === null) {
            return [];
        }
        return is_array($this->services) ? $this->services : explode(',', $this->services);
    }

    public function setServices($services): static
    {
        if (is_array($services)) {
            $this->services = implode(',', $services);
        } else {
            $this->services = $services;
        }
        return $this;
    }

    public function getTarif(): ?float
    {
        return $this->tarif;
    }

    public function setTarif(?float $tarif): static
    {
        $this->tarif = $tarif;
        return $this;
    }

    public function getLocations(): Collection
    {
        return $this->locations;
    }

    public function addLocation(Location $location): static
    {
        if (!$this->locations->contains($location)) {
            $this->locations->add($location);
            $location->setPartenaire($this);
        }

        return $this;
    }

    public function removeLocation(Location $location): static
    {
        if ($this->locations->removeElement($location)) {
            if ($location->getPartenaire() === $this) {
                $location->setPartenaire(null);
            }
        }

        return $this;
    }
}