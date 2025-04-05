<?php
// src/Entity/Taxi.php

namespace App\Entity;

use App\Repository\TaxiRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TaxiRepository::class)]
#[ORM\Table(name: 'taxi')]
#[UniqueEntity(
    fields: ['immatriculation'],
    message: "Cette immatriculation existe déjà. Veuillez en choisir une autre."
)]
#[UniqueEntity(
    fields: ['licenceNumero'],
    message: "Ce numéro de licence existe déjà. Veuillez en choisir un autre."
)]
class Taxi
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 20, unique: true)]
    #[Assert\NotBlank(message: "L'immatriculation est obligatoire.")]
    private string $immatriculation;

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\NotBlank(message: "La marque est obligatoire.")]
    private string $marque = '';

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\NotBlank(message: "Le modèle est obligatoire.")]
    private string $modele;

    #[ORM\Column(type: 'integer', nullable: true)]
    #[Assert\Positive(message: "L'année doit être un nombre positif.")]
    private ?int $anneeFabrication = null;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank(message: "La capacité est obligatoire.")]
    #[Assert\Range(
        min: 1,
        max: 9,
        notInRangeMessage: "La capacité doit être comprise entre {{ min }} et {{ max }}."
    )]
    private int $capacite;

    #[ORM\Column(type: 'string', length: 100)]
    #[Assert\NotBlank(message: "La zone de desserte est obligatoire.")]
    private string $zoneDesserte;

    #[ORM\Column(type: 'string', length: 20, options: ['default' => 'Disponible'])]
    private string $statut = 'Disponible';

    #[ORM\Column(type: 'string', length: 50, unique: true)]
    #[Assert\NotBlank(message: "Le numéro de licence est obligatoire.")]
    private string $licenceNumero;

    #[ORM\Column(type: 'date')]
    #[Assert\NotNull(message: "La date d'obtention de la licence est obligatoire.")]
    private \DateTimeInterface $licenceDateObtention;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    #[Assert\NotBlank(message: "Le tarif de base est obligatoire.")]
    #[Assert\Positive(message: "Le tarif de base doit être positif.")]
    private string $tarifBase;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'taxis')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\OneToMany(mappedBy: 'taxi', targetEntity: Course::class, cascade: ['persist', 'remove'])]
    private Collection $courses;

    public function __construct()
    {
        $this->courses = new ArrayCollection();
    }

    // Getters et setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImmatriculation(): string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;
        return $this;
    }

    public function getMarque(): string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;
        return $this;
    }

    public function getModele(): string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;
        return $this;
    }

    public function getAnneeFabrication(): ?int
    {
        return $this->anneeFabrication;
    }

    public function setAnneeFabrication(?int $anneeFabrication): self
    {
        $this->anneeFabrication = $anneeFabrication;
        return $this;
    }

    public function getCapacite(): int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): self
    {
        $this->capacite = $capacite;
        return $this;
    }

    public function getZoneDesserte(): string
    {
        return $this->zoneDesserte;
    }

    public function setZoneDesserte(string $zoneDesserte): self
    {
        $this->zoneDesserte = $zoneDesserte;
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

    public function getLicenceNumero(): string
    {
        return $this->licenceNumero;
    }

    public function setLicenceNumero(string $licenceNumero): self
    {
        $this->licenceNumero = $licenceNumero;
        return $this;
    }

    public function getLicenceDateObtention(): \DateTimeInterface
    {
        return $this->licenceDateObtention;
    }

    public function setLicenceDateObtention(\DateTimeInterface $licenceDateObtention): self
    {
        $this->licenceDateObtention = $licenceDateObtention;
        return $this;
    }

    public function getTarifBase(): string
    {
        return $this->tarifBase;
    }

    public function setTarifBase(string $tarifBase): self
    {
        $this->tarifBase = $tarifBase;
        return $this;
    }

    // Modification ici : on ne divise plus par 100
    public function getTarifKm(): string
    {
        return $this->tarifBase;
    }

    // Et le setter ne multiplie plus par 100
    public function setTarifKm(string $tarifKm): self
    {
        $this->tarifBase = $tarifKm;
        return $this;
    }

    // Pour getTarifTotal et setTarifTotal, adaptez selon votre logique métier.
    // Si vous n'en avez pas besoin, vous pouvez les supprimer ou les modifier.
    public function getTarifTotal(): string
    {
        return $this->tarifBase;
    }

    public function setTarifTotal(string $tarifTotal): self
    {
        $this->tarifBase = $tarifTotal;
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

    /**
     * @return Collection<int, Course>
     */
    public function getCourses(): Collection
    {
        return $this->courses;
    }

    public function addCourse(Course $course): self
    {
        if (!$this->courses->contains($course)) {
            $this->courses[] = $course;
            $course->setTaxi($this);
        }
        return $this;
    }

    public function removeCourse(Course $course): self
    {
        if ($this->courses->removeElement($course)) {
            if ($course->getTaxi() === $this) {
                $course->setTaxi(null);
            }
        }
        return $this;
    }
}
