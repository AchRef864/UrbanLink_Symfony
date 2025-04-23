<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'avis')]
    #[ORM\JoinColumn(name: "user_id", referencedColumnName: "user_id", nullable: false)]
    private ?User $user = null;
    
    #[ORM\Column(length: 50)]
    #[Assert\NotNull]
    #[Assert\Choice(
        choices: ["taxi complaint", "subscription complaint", "vehicle complaint"],
        message: 'Type must be either "taxi complaint", "subscription complaint" or "vehicle complaint".'
    )]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'The comment must not be empty')]
    #[Assert\Length(
        max: 255,
        maxMessage: 'Comment cannot exceed {{ limit }} characters',
    )]
    private ?string $commentaire = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull]
    private ?\DateTimeInterface $date_avis = null;

    #[ORM\OneToMany(mappedBy: 'avis', targetEntity: Reponse::class, cascade: ['persist', 'remove'])]
    private Collection $reponses;

    #[ORM\Column(length: 50)]
    #[Assert\NotNull]
    #[Assert\Choice(
        choices: ["processed", "not processed"],
        message: 'Status must be either "processed" or "not processed".'
    )]
    private ?string $statut = null;
    
    #[ORM\ManyToOne(targetEntity: Taxi::class)]
    #[ORM\JoinColumn(
        name: "taxi_id", 
        referencedColumnName: "id", 
        nullable: true, 
        onDelete: "SET NULL" // Add this line
    )]
    private ?Taxi $taxi = null;

    #[ORM\ManyToOne(targetEntity: Vehicle::class)]
    #[ORM\JoinColumn(name: "vehicle_id", referencedColumnName: "id", nullable: true)]
    private ?Vehicle $vehicle = null;


    public function __construct()
    {
        $this->date_avis = new \DateTime(); // Set current date automatically
        $this->reponses = new ArrayCollection(); // Initialize the collection
        $this->statut = 'not processed';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;
        return $this;
    }

    public function getDateAvis(): ?\DateTimeInterface
    {
        return $this->date_avis;
    }

    public function setDateAvis(\DateTimeInterface $date_avis): self
    {
        $this->date_avis = $date_avis;
        return $this;
    }

    /**
     * @return Collection<int, Reponse>
     */
    public function getReponses(): Collection
    {
        return $this->reponses;
    }

    public function addReponse(Reponse $reponse): self
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses[] = $reponse;
            $reponse->setAvis($this);
        }
        return $this;
    }

    public function removeReponse(Reponse $reponse): self
    {
        if ($this->reponses->removeElement($reponse)) {
            if ($reponse->getAvis() === $this) {
                $reponse->setAvis(null);
            }
        }
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    public function getTaxi(): ?Taxi
    {
        return $this->taxi;
    }

    public function setTaxi(?Taxi $taxi): self
    {
        $this->taxi = $taxi;
        return $this;
    }

    public function getVehicle(): ?Vehicle
    {
        return $this->vehicle;
    }

    public function setVehicle(?Vehicle $vehicle): self
    {
        $this->vehicle = $vehicle;
        return $this;
    }
}
