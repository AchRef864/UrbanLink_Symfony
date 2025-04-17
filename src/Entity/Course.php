<?php
// src/Entity/Course.php

namespace App\Entity;

use App\Repository\CourseRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CourseRepository::class)]
#[ORM\Table(name: 'course')]
class Course
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: \App\Entity\User::class, inversedBy: 'courses')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: false, onDelete: 'CASCADE')]
    private ?\App\Entity\User $user = null;

    #[ORM\ManyToOne(targetEntity: \App\Entity\Taxi::class, inversedBy: 'courses')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: "Veuillez sélectionner un taxi.")]
    private ?\App\Entity\Taxi $taxi = null;

    #[ORM\Column(type: 'datetime', options: ['default' => 'CURRENT_TIMESTAMP'])]
    private \DateTimeInterface $dateReservation;

    #[ORM\Column(type: 'datetime')]
    #[Assert\NotNull(message: "La date de course est obligatoire.")]
    #[Assert\GreaterThan("now", message: "La date de course doit être dans le futur.")]
    private \DateTimeInterface $dateCourse;

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\NotBlank(message: "La ville de départ est obligatoire.")]
    private ?string $villeDepart = null;

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\NotBlank(message: "La ville d'arrivée est obligatoire.")]
    private ?string $villeArrivee = null;

    #[ORM\Column(type: 'decimal', precision: 6, scale: 2)]
    #[Assert\NotBlank(message: "La distance est obligatoire.")]
    #[Assert\Positive(message: "La distance doit être supérieure à 0.")]
    private ?string $distanceKm = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    #[Assert\NotBlank(message: "Le montant est obligatoire.")]
    #[Assert\PositiveOrZero(message: "Le montant ne peut être négatif.")]
    private ?string $montant = null;

    #[ORM\Column(type: 'string', length: 20, options: ['default' => 'En attente'])]
    private string $statut = 'En attente';
    #[ORM\PrePersist]
    public function prePersistCheck(): void
    {
        if (null === $this->villeDepart || null === $this->villeArrivee) {
            throw new \LogicException('Les villes de départ et d\'arrivée doivent être définies');
        }
    
        if (!preg_match('/^-?\d+\.\d+,-?\d+\.\d+$/', $this->villeDepart)) {
            throw new \InvalidArgumentException('Format de coordonnées invalide pour le départ');
        }
    
        if (!preg_match('/^-?\d+\.\d+,-?\d+\.\d+$/', $this->villeArrivee)) {
            throw new \InvalidArgumentException('Format de coordonnées invalide pour l\'arrivée');
        }
    }
    public function __construct()
    {
        $this->dateReservation = new \DateTime();
    }

    // Getters et setters…

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?\App\Entity\User
    {
        return $this->user;
    }

    public function setUser(?\App\Entity\User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getTaxi(): ?\App\Entity\Taxi
    {
        return $this->taxi;
    }

    public function setTaxi(?\App\Entity\Taxi $taxi): self
    {
        $this->taxi = $taxi;
        return $this;
    }

    public function getDateReservation(): \DateTimeInterface
    {
        return $this->dateReservation;
    }

    public function setDateReservation(\DateTimeInterface $dateReservation): self
    {
        $this->dateReservation = $dateReservation;
        return $this;
    }

    public function getDateCourse(): \DateTimeInterface
    {
        return $this->dateCourse;
    }

    public function setDateCourse(\DateTimeInterface $dateCourse): self
    {
        $this->dateCourse = $dateCourse;
        return $this;
    }

    public function getVilleDepart(): ?string
    {
        return $this->villeDepart;
    }

    public function setVilleDepart(?string $villeDepart): self
    {
        $this->villeDepart = $villeDepart;
        return $this;
    }

    public function getVilleArrivee(): ?string
    {
        return $this->villeArrivee;
    }

    public function setVilleArrivee(?string $villeArrivee): self
    {
        $this->villeArrivee = $villeArrivee;
        return $this;
    }

    public function getDistanceKm(): ?string
    {
        return $this->distanceKm;
    }

    public function setDistanceKm(?string $distanceKm): self
    {
        $this->distanceKm = $distanceKm;
        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(?string $montant): self
    {
        $this->montant = $montant;
        return $this;
    }

    public function getStatut(): string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }
}
