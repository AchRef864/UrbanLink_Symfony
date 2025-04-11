<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    #[ORM\Column(name: "user_id", type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 2, max: 50)]
    private ?string $name = null;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    #[Assert\NotBlank]
    #[Assert\Email]
    private ?string $email = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Length(min: 8)]
    private ?string $phone = null;

    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(type: 'string', length: 20)]
    private string $role = 'client';

    #[ORM\Column(nullable: true)]
    private ?int $code = null;

    #[ORM\Column(type: 'boolean')]
    private bool $isBlocked = false;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Taxi::class, cascade: ['persist', 'remove'])]
    private Collection $taxis;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Course::class, cascade: ['persist', 'remove'])]
    private Collection $courses;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Rating::class, cascade: ['persist', 'remove'])]
    private Collection $ratings;

    public function __construct()
    {
        $this->taxis = new ArrayCollection();
        $this->courses = new ArrayCollection();
        $this->ratings = new ArrayCollection();
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
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getUsername(): string
    {
        return $this->getUserIdentifier();
    }

    public function getTaxis(): Collection
    {
        return $this->taxis;
    }

    public function addTaxi(\App\Entity\Taxi $taxi): static
    {
        if (!$this->taxis->contains($taxi)) {
            $this->taxis[] = $taxi;
            $taxi->setUser($this);
        }
        return $this;
    }

    public function removeTaxi(\App\Entity\Taxi $taxi): static
    {
        if ($this->taxis->removeElement($taxi)) {
            if ($taxi->getUser() === $this) {
                $taxi->setUser(null);
            }
        }
        return $this;
    }

    public function getCourses(): Collection
    {
        return $this->courses;
    }

    public function addCourse(\App\Entity\Course $course): static
    {
        if (!$this->courses->contains($course)) {
            $this->courses[] = $course;
            $course->setUser($this);
        }
        return $this;
    }

    public function removeCourse(\App\Entity\Course $course): static
    {
        if ($this->courses->removeElement($course)) {
            if ($course->getUser() === $this) {
                $course->setUser(null);
            }
        }
        return $this;
    }

    public function getRatings(): Collection
    {
        return $this->ratings;
    }

    public function addRating(\App\Entity\Rating $rating): static
    {
        if (!$this->ratings->contains($rating)) {
            $this->ratings[] = $rating;
            $rating->setUser($this);
        }
        return $this;
    }

    public function removeRating(\App\Entity\Rating $rating): static
{
    $this->ratings->removeElement($rating);
    // Ne tentez pas de dissocier le Rating en appelant setUser(null)
    return $this;
}

}
