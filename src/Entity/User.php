<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use App\Entity\Reservation;



#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'users')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "user_id", type: "integer")]
    private ?int $id = null;
    
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Avis::class, cascade: ['persist', 'remove'])]
    private Collection $avis;
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Reponse::class, cascade: ['persist', 'remove'])]
    private Collection $reponse;

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

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Reservation::class, cascade: ['persist', 'remove'])]
    private Collection $reservations;

    public function __construct()
    {
        $this->taxis = new ArrayCollection();
        $this->courses = new ArrayCollection();
        $this->ratings = new ArrayCollection();
        $this->joiningDate = new \DateTime();
        $this->avis = new ArrayCollection();
        $this->reponse = new ArrayCollection();
        $this->reservations = new ArrayCollection();
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

    /**
     * @return Collection<int, \App\Entity\Reponse>
     */
    public function getReponse(): Collection
    {
        return $this->reponse;
    }
    
    public function addReponse(\App\Entity\Reponse $reponse): self
    {
        if (!$this->reponse->contains($reponse)) {
            $this->reponse[] = $reponse;
            $reponse->setUser($this);
        }
        return $this;
    }

    public function removeReponse(\App\Entity\Reponse $reponse): self
    {
        if ($this->reponse->removeElement($reponse)) {
            if ($reponse->getUser() === $this) {
                $reponse->setUser(null);
            }
        }
        return $this;
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
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $license = null;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $joiningDate;

   

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

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $homeAddress = null;

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function getHomeAddress(): ?string
    {
        return $this->homeAddress;
    }

    public function setHomeAddress(?string $homeAddress): self
    {
        $this->homeAddress = $homeAddress;
        return $this;
    }

}