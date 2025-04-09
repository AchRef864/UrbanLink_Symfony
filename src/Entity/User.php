<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'users')]
#[UniqueEntity(fields: ['email'], message: 'Il existe déjà un compte avec cet email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer', name: "user_id")]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Avis::class, cascade: ['persist', 'remove'])]
    private Collection $avis;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 2, max: 50)]
    private ?string $name = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank]
    #[Assert\Email]
    private ?string $email = null;

    #[ORM\Column(length: 15)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 8, max: 15)]
    private ?string $phone = null;

    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 20)]
    private string $role = 'client';

    #[ORM\Column(nullable: true)]
    private ?int $code = null;

    #[ORM\Column(type: 'boolean')]
    private bool $isBlocked = false;

    public function __construct()
    {
        $this->avis = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, \App\Entity\Avis>
     */
    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvis(\App\Entity\Avis $avis): self
    {
        if (!$this->avis->contains($avis)) {
            $this->avis[] = $avis;
            $avis->setUser($this);
        }
        return $this;
    }

    public function removeAvis(\App\Entity\Avis $avis): self
    {
        if ($this->avis->removeElement($avis)) {
            if ($avis->getUser() === $this) {
                $avis->setUser(null);
            }
        }
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;
        return $this;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(?int $code): self
    {
        $this->code = $code;
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

    public function getRoles(): array
    {
        $roles = ['ROLE_USER'];

        switch ($this->role) {
            case 'admin':
                $roles[] = 'ROLE_ADMIN';
                break;
            case 'driver':
                $roles[] = 'ROLE_DRIVER';
                break;
            case 'taxi':
                $roles[] = 'ROLE_TAXI';
                break;
            case 'client':
                $roles[] = 'ROLE_CLIENT';
                break;
        }

        return array_unique($roles);
    }

    public function eraseCredentials(): void
    {
        // Si vous stockez des données sensibles temporaires, nettoyez-les ici.
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated depuis Symfony 5.3, utilisez getUserIdentifier() à la place.
     */
    public function getUsername(): string
    {
        return $this->getUserIdentifier();
    }
}
