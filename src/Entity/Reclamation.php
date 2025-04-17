<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

use App\Repository\ReclamationRepository;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
#[ORM\Table(name: 'reclamation')]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer', name: 'id_reclamation')]
    private ?int $idReclamation = null;

    public function __construct()
    {
        $this->discussions = new ArrayCollection();
        $this->date = new \DateTime();
        $this->etat = "non traité"; // État par défaut
    }

    /**
     * Alias property for compatibility with Doctrine naming conventions
     */
    public function getId(): ?int
    {
        return $this->idReclamation;
    }

    public function getIdReclamation(): ?int
    {
        return $this->idReclamation;
    }

    public function setIdReclamation(int $idReclamation): self
    {
        $this->idReclamation = $idReclamation;
        return $this;
    }

    #[ORM\Column(type: 'text', nullable: false)]
    #[Assert\NotBlank(message: "Le texte de la réclamation ne peut pas être vide")]
    #[Assert\Length(min: 10, minMessage: "La réclamation doit faire au moins {{ limit }} caractères")]
    private ?string $reclamation = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "La catégorie ne peut pas être vide")]
    #[Assert\Choice(choices: ["Technique", "Commercial", "Autre","financier","services velo","services bus","services taxi"], message: "La catégorie invalid")]
    private ?string $categorie = null;

    #[ORM\Column(type: 'string', length: 50, options: ['default' => 'en cours'])]
    private string $etat = 'en cours';

    #[ORM\Column(type: 'date', nullable: false)]
    #[Assert\NotNull(message: "La date ne peut pas être vide")]
    #[Assert\Type("\DateTimeInterface")]
    private ?\DateTimeInterface $date = null;

    #[ORM\OneToMany(targetEntity: Discussion::class, mappedBy: 'reclamation', cascade: ['remove'], orphanRemoval: true)]
    private Collection $discussions;    

    public function getReclamation(): ?string
    {
        return $this->reclamation;
    }

    public function setReclamation(?string $reclamation): self
    {
        $this->reclamation = $reclamation;
        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(?string $categorie): self
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function getEtat(): string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;
        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return Collection<int, Discussion>
     */
    public function getDiscussions(): Collection
    {
        if (!$this->discussions instanceof Collection) {
            $this->discussions = new ArrayCollection();
        }
        return $this->discussions;
    }

    public function addDiscussion(Discussion $discussion): self
    {
        if (!$this->getDiscussions()->contains($discussion)) {
            $this->getDiscussions()->add($discussion);
        }
        return $this;
    }

    public function removeDiscussion(Discussion $discussion): self
    {
        $this->getDiscussions()->removeElement($discussion);
        return $this;
    }

    /**
     * Marque la réclamation comme traitée
     */
    public function marquerCommeTraite(): self
    {
        $this->etat = "traité";
        return $this;
    }
}
