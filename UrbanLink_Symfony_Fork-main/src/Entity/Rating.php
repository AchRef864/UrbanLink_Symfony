<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\RatingRepository;

#[ORM\Entity(repositoryClass: RatingRepository::class)]
class Rating
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:"integer")]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Taxi::class)]
    #[ORM\JoinColumn(nullable:false)]
    private ?Taxi $taxi = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable:false)]
    private ?User $user = null;

    #[ORM\Column(type:"integer")]
    private int $note = 0;

    #[ORM\Column(type:"text", nullable:true)]
    private ?string $commentaire = null;

    #[ORM\Column(type:"datetime")]
    private \DateTimeInterface $dateRating;

    public function __construct()
    {
        $this->dateRating = new \DateTime();
    }

    // Getters et setters...

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTaxi(): ?Taxi
    {
        return $this->taxi;
    }

    public function setTaxi(Taxi $taxi): self
    {
        $this->taxi = $taxi;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getNote(): int
    {
        return $this->note;
    }

    public function setNote(int $note): self
    {
        $this->note = $note;
        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;
        return $this;
    }

    public function getDateRating(): \DateTimeInterface
    {
        return $this->dateRating;
    }

    public function setDateRating(\DateTimeInterface $dateRating): self
    {
        $this->dateRating = $dateRating;
        return $this;
    }
}
