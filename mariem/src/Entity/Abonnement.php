<?php

namespace App\Entity;

use App\Repository\AbonnementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AbonnementRepository::class)]
class Abonnement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull(message: "Le type d'abonnement est requis")]
    private ?string $type = null;

    #[ORM\Column(type: Types::FLOAT)]
    #[Assert\Positive(message: "Le prix doit être un nombre positif")]
    private ?float $prix = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\GreaterThan("today", message: "La date de début doit être postérieure à aujourd'hui")]
    private ?\DateTimeInterface $date_debut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\GreaterThan(propertyPath: "date_debut", message: "La date de fin doit être postérieure à la date de début")]
    private ?\DateTimeInterface $date_fin = null;

    #[ORM\Column(length: 255)]
    #[Assert\Choice(choices: ["actif", "expiré", "annulé"], message: "L'état doit être 'actif', 'expiré' ou 'annulé'")]
    private ?string $etat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    // Relation OneToMany avec AbonnementReservation
    #[ORM\OneToMany(mappedBy: 'abonnement', targetEntity: AbonnementReservation::class, orphanRemoval: true)]
    private Collection $abonnementReservations;

    public function __construct()
    {
        $this->abonnementReservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;
        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;
        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return Collection<int, AbonnementReservation>
     */
    public function getAbonnementReservations(): Collection
    {
        return $this->abonnementReservations;
    }

    public function addAbonnementReservation(AbonnementReservation $abonnementReservation): self
    {
        if (!$this->abonnementReservations->contains($abonnementReservation)) {
            $this->abonnementReservations->add($abonnementReservation);
            // On utilise la méthode mise à jour dans AbonnementReservation
            $abonnementReservation->setAbonnement($this);
        }
        return $this;
    }

    public function removeAbonnementReservation(AbonnementReservation $abonnementReservation): self
    {
        if ($this->abonnementReservations->removeElement($abonnementReservation)) {
            // Définir la relation à null si nécessaire
            if ($abonnementReservation->getAbonnement() === $this) {
                $abonnementReservation->setAbonnement(null);
            }
        }
        return $this;
    }
}
