<?php

namespace App\Entity;

use App\Repository\AbonnementReservationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: AbonnementReservationRepository::class)]
class AbonnementReservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message: "Le nom complet est obligatoire")]
    #[Assert\Regex(
        pattern: '/^[a-zA-ZÀ-ÿ\s\-]+$/',
        message: "Seules les lettres, espaces et traits d'union sont autorisés"
    )]
    private ?string $fullname = null;

    #[ORM\ManyToOne(inversedBy: 'abonnementReservations')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "L'abonnement est obligatoire")]
    private ?Abonnement $abonnement = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le statut est obligatoire")]
    #[Assert\Choice(
        choices: ["confirmé", "en attente", "annulé"], 
        message: "Le statut doit être 'confirmé', 'en attente' ou 'annulé'"
    )]
    private ?string $statut = 'en attente';

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: "La date de début est obligatoire")]
    #[Assert\GreaterThan(
        "today", 
        message: "La date de début doit être postérieure à aujourd'hui"
    )]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: "La date de fin est obligatoire")]
    #[Assert\GreaterThan(
        propertyPath: "dateDebut",
        message: "La date de fin doit être postérieure à la date de début"
    )]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(length: 8, unique: true)]
    private ?string $reference = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'abonnementReservations')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: false)]
    private ?User $user = null;

    public function __construct()
    {
        $this->reference = $this->generateReference();
    }

    private function generateReference(): string
    {
        return str_pad(mt_rand(0, 99999999), 8, '0', STR_PAD_LEFT);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullname(): ?string
    {
        return $this->fullname;
    }

    public function setFullname(string $fullname): self
    {
        $this->fullname = trim($fullname);
        return $this;
    }

    public function getAbonnement(): ?Abonnement
    {
        return $this->abonnement;
    }

    public function setAbonnement(?Abonnement $abonnement): self
    {
        $this->abonnement = $abonnement;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = strtolower(trim($statut));
        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        if ($dateFin <= $this->dateDebut) {
            throw new \InvalidArgumentException("La date de fin doit être postérieure à la date de début");
        }
        $this->dateFin = $dateFin;
        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;
        return $this;
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

    public function getTotalPrice(): float
    {
        if (!$this->abonnement) {
            return 0;
        }

        $interval = $this->dateDebut->diff($this->dateFin);
        $days = $interval->days + 1; // Include both start and end days

        return $this->abonnement->getPrix() * ($days / 30); // Pro-rated monthly price
    }
}