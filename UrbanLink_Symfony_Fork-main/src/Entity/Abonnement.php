<?php

namespace App\Entity;

use App\Repository\AbonnementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: AbonnementRepository::class)]
#[Vich\Uploadable]
class Abonnement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le type d'abonnement est requis")]
    #[Assert\Choice(
        choices: ["mensuel", "annuel", "trimestriel"],
        message: "Le type doit être mensuel, annuel ou trimestriel"
    )]
    private ?string $type = null;

    #[ORM\Column(type: Types::FLOAT)]
    #[Assert\NotBlank(message: "Le prix est requis")]
    #[Assert\Positive(message: "Le prix doit être positif")]
    private ?float $prix = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date de début est requise")]
    #[Assert\GreaterThan(
        "today",
        message: "La date de début doit être postérieure à aujourd'hui"
    )]
    private ?\DateTimeInterface $date_debut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date de fin est requise")]
    #[Assert\GreaterThan(
        propertyPath: "date_debut",
        message: "La date de fin doit être postérieure à la date de début"
    )]
    private ?\DateTimeInterface $date_fin = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "L'état est requis")]
    #[Assert\Choice(
        choices: ["actif", "expiré", "annulé"],
        message: "L'état doit être actif, expiré ou annulé"
    )]
    private ?string $etat = 'actif';

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[Vich\UploadableField(mapping: 'abonnement_image', fileNameProperty: 'image')]
    #[Assert\File(
        maxSize: '2M',
        mimeTypes: ['image/jpeg', 'image/png', 'image/webp'],
        mimeTypesMessage: 'Veuillez uploader une image valide (JPEG, PNG ou WebP)'
    )]
    private ?File $imageFile = null;

    #[ORM\OneToMany(
        mappedBy: 'abonnement',
        targetEntity: AbonnementReservation::class,
        orphanRemoval: true
    )]
    private Collection $abonnementReservations;

    public function __construct()
    {
        $this->abonnementReservations = new ArrayCollection();
        $this->date_debut = new \DateTime('tomorrow');
        $this->date_fin = new \DateTime('+1 month');
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = strtolower($type);
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

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): static
    {
        $this->date_debut = $date_debut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): static
    {
        $this->date_fin = $date_fin;
        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = strtolower($etat);
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;
        return $this;
    }

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function getAbonnementReservations(): Collection
    {
        return $this->abonnementReservations;
    }

    public function addAbonnementReservation(AbonnementReservation $abonnementReservation): static
    {
        if (!$this->abonnementReservations->contains($abonnementReservation)) {
            $this->abonnementReservations->add($abonnementReservation);
            $abonnementReservation->setAbonnement($this);
        }
        return $this;
    }

    public function removeAbonnementReservation(AbonnementReservation $abonnementReservation): static
    {
        if ($this->abonnementReservations->removeElement($abonnementReservation)) {
            if ($abonnementReservation->getAbonnement() === $this) {
                $abonnementReservation->setAbonnement(null);
            }
        }
        return $this;
    }
}
