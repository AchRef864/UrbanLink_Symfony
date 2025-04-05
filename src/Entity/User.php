<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'user')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    #[Assert\NotBlank(message: "L'email est obligatoire.")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas valide.")]
    private string $email;

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank(message: "Le mot de passe est obligatoire.")]
    private string $password;

    #[ORM\Column(type: 'json')]
    private array $roles = ['ROLE_USER'];

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Taxi::class, cascade: ['persist', 'remove'])]
    private Collection $taxis;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Course::class, cascade: ['persist', 'remove'])]
    private Collection $courses;

    public function __construct()
    {
        $this->taxis = new ArrayCollection();
        $this->courses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getUserIdentifier(): string
    {
        return $this->email;
    }

    public function eraseCredentials(): void
    {
        // No sensitive data to clear
    }

    /**
     * @return Collection<int, Taxi>
     */
    public function getTaxis(): Collection
    {
        return $this->taxis;
    }

    public function addTaxi(Taxi $taxi): self
    {
        if (!$this->taxis->contains($taxi)) {
            $this->taxis[] = $taxi;
            $taxi->setUser($this);
        }

        return $this;
    }

    public function removeTaxi(Taxi $taxi): self
    {
        if ($this->taxis->removeElement($taxi)) {
            if ($taxi->getUser() === $this) {
                $taxi->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Course>
     */
    public function getCourses(): Collection
    {
        return $this->courses;
    }

    public function addCourse(Course $course): self
    {
        if (!$this->courses->contains($course)) {
            $this->courses[] = $course;
            $course->setUser($this);
        }

        return $this;
    }

    public function removeCourse(Course $course): self
    {
        if ($this->courses->removeElement($course)) {
            if ($course->getUser() === $this) {
                $course->setUser(null);
            }
        }

        return $this;
    }
}