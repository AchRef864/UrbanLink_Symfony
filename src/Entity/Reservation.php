<?php
// src/Entity/Reservation.php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
#[ORM\Table(name: 'reservations')]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'reservation_id')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Trajet::class)]
    #[ORM\JoinColumn(
        name: 'trajet_id', 
        referencedColumnName: 'id',
        nullable: true,  // Changed to true to allow NULL when trajet is deleted
        onDelete: 'SET NULL'  // Changed from CASCADE to preserve reservations
    )]
    private ?Trajet $trajet = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(
        name: 'user_id', 
        referencedColumnName: 'user_id',
        nullable: false,
        onDelete: 'CASCADE'
    )]
    #[Assert\NotNull]
    private ?User $user = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotNull]
    #[Assert\LessThanOrEqual('now')]
    private ?\DateTimeInterface $reservationDate = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\Positive]
    private ?int $numberOfSeats = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    #[Assert\NotNull]
    #[Assert\Positive]
    private ?string $totalPrice = null;

    #[ORM\Column(length: 20)]
    #[Assert\Choice(['Confirmed', 'Pending', 'Canceled'])]
    private ?string $status = 'Pending';

    #[ORM\Column(type: 'boolean')]
    private bool $isCancelled = false;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $cancellationReason = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cancellationDate = null;

    // Fields to track trajet deletion
    #[ORM\Column(type: 'boolean')]
    private bool $trajetDeleted = false;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $trajetDeletedAt = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $trajetDeletedInfo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTrajet(): ?Trajet
    {
        return $this->trajet;
    }

    public function setTrajet(?Trajet $trajet): static
    {
        $this->trajet = $trajet;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;
        return $this;
    }

    public function getReservationDate(): ?\DateTimeInterface
    {
        return $this->reservationDate;
    }

    public function setReservationDate(\DateTimeInterface $reservationDate): static
    {
        $this->reservationDate = $reservationDate;
        return $this;
    }

    public function getNumberOfSeats(): ?int
    {
        return $this->numberOfSeats;
    }

    public function setNumberOfSeats(int $numberOfSeats): static
    {
        $this->numberOfSeats = $numberOfSeats;
        return $this;
    }

    public function getTotalPrice(): ?string
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(string $totalPrice): static
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function isCancelled(): bool
    {
        return $this->isCancelled;
    }

    public function setIsCancelled(bool $isCancelled): static
    {
        $this->isCancelled = $isCancelled;
        return $this;
    }

    public function getCancellationReason(): ?string
    {
        return $this->cancellationReason;
    }

    public function setCancellationReason(?string $cancellationReason): static
    {
        $this->cancellationReason = $cancellationReason;
        return $this;
    }

    public function getCancellationDate(): ?\DateTimeInterface
    {
        return $this->cancellationDate;
    }

    public function setCancellationDate(?\DateTimeInterface $cancellationDate): static
    {
        $this->cancellationDate = $cancellationDate;
        return $this;
    }

    public function isTrajetDeleted(): bool
    {
        return $this->trajetDeleted;
    }

    public function setTrajetDeleted(bool $trajetDeleted): static
    {
        $this->trajetDeleted = $trajetDeleted;
        return $this;
    }

    public function getTrajetDeletedAt(): ?\DateTimeInterface
    {
        return $this->trajetDeletedAt;
    }

    public function setTrajetDeletedAt(?\DateTimeInterface $trajetDeletedAt): static
    {
        $this->trajetDeletedAt = $trajetDeletedAt;
        return $this;
    }

    public function getTrajetDeletedInfo(): ?string
    {
        return $this->trajetDeletedInfo;
    }

    public function setTrajetDeletedInfo(?string $trajetDeletedInfo): static
    {
        $this->trajetDeletedInfo = $trajetDeletedInfo;
        return $this;
    }
}