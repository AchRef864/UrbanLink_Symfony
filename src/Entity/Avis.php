<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\Choice(choices: [1, 2, 3, 4, 5], message: 'La note doit être entre 1 et 5.')]
    private ?int $note = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'La section du commentaire ne peut pas être vide')]
    #[Assert\Length(
        max: 255,
        maxMessage: 'Le commentaire ne peut pas dépasser {{ limit }} caractères',
    )]
    private ?string $commentaire = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull]
    private ?\DateTimeInterface $date_avis = null;

    public function __construct()
    {
        $this->date_avis = new \DateTime(); // Affecte la date courante automatiquement
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

    public function getNote(): ?int
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
}
