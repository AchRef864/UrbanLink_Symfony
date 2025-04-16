<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'users')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "user_id")]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 2, max: 50)]
    private ?string $name = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank]
    #[Assert\Email]
    private ?string $email = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Length(min: 8)]
    private ?string $phone = null;  // Changed from int to string

    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 20)]
    private string $role = 'client';

    #[ORM\Column(nullable: true)]
    private ?int $code = null;

    #[ORM\Column(type: 'boolean')]
    private bool $isBlocked = false;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $license = null;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $joiningDate;

    public function __construct()
    {
        $this->joiningDate = new \DateTime(); // Initialize in constructor
    }

    public function getLicense(): ?string
    {
        return $this->license;
    }

    public function setLicense(?string $license): self
    {
        $this->license = $license;
        return $this;
    }

    // Modified joining date handling
    #[ORM\PrePersist]
    public function setJoiningDateValue(): void
    {
        $this->joiningDate = new \DateTime();
    }

    public function getJoiningDate(): \DateTimeInterface
    {
        return $this->joiningDate;
    }

    // Optional setter only if you need to override the date
    public function setJoiningDate(\DateTimeInterface $joiningDate): self
    {
        $this->joiningDate = $joiningDate;
        return $this;
    }

    public function isBlocked(): bool
    {
        return $this->isBlocked;
    }

    public function setIsBlocked(bool $isBlocked): self
    {
        $this->isBlocked = $isBlocked;
        return $this;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): static
    {
        $this->phone = $phone;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;
        return $this;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(?int $code): static
    {
        $this->code = $code;
        return $this;
    }
     public function getRoles(): array
    {
        $roles = ['ROLE_USER']; // All users get this

        // Add only their specific role (not inherited ones)
        switch($this->role) { // Assuming you have a $role property
            case 'admin': $roles[] = 'ROLE_ADMIN'; break;
            case 'driver': $roles[] = 'ROLE_DRIVER'; break;
            case 'taxi': $roles[] = 'ROLE_TAXI'; break;
            case 'client': $roles[] = 'ROLE_CLIENT'; break;
        }

        return array_unique($roles);
    }

    public function eraseCredentials(): void
    {
        // Clear any temporary sensitive data
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return $this->getUserIdentifier();
    }
}