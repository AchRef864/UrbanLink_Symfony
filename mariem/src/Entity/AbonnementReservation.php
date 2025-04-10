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

    #[ORM\Column(length: 255)]
    #[Assert\NotNull(message: "Il faut remplir ce champ")]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z]+$/',
        message: "Le format du nom est incorrect. Vous devez utiliser uniquement des lettres."
    )]
    private ?string $fullname = null;

    #[ORM\ManyToOne(inversedBy: 'abonnementReservations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Abonnement $abonnement = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull(message: "Le statut est obligatoire")]
    #[Assert\Choice(choices: ["confirmé", "en attente", "annulé"], message: "Le statut doit être 'confirmé', 'en attente' ou 'annulé'")]
    private ?string $statut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: "La date de début est obligatoire")]
    #[Assert\GreaterThan("today", message: "La date de début doit être postérieure à aujourd'hui")]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: "La date de fin est obligatoire")]
    #[Assert\GreaterThan(propertyPath: "dateDebut", message: "La date de fin doit être postérieure à la date de début")]
    private ?\DateTimeInterface $dateFin = null;



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
        $this->fullname = $fullname;

        return $this;
    }

    

    public function getAbonnement(): ?abonnement
    {
        return $this->abonnement;
    }

    public function setAbonnement(?abonnement $s): self
    {
        $this->abonnement = $s;

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
        $this->dateFin = $dateFin;
        return $this;
    }


}
