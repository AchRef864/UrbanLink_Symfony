<?php

namespace App\Entity;
use App\Entity\User;

use App\Repository\VehicleRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[ORM\Entity(repositoryClass: VehicleRepository::class)]
#[ORM\Table(name: 'Vehicle')]
class Vehicle
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer', name: 'id')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, name: 'type')]
    #[Assert\NotBlank(message: "Vehicle type is required.")]
    #[Assert\Length(max: 255, maxMessage: "Vehicle type must be at most {{ limit }} characters.")]
    private $type;

    #[ORM\Column(type: 'string', length: 50, name: 'model')]
    #[Assert\NotBlank(message: "Model is required.")]
    #[Assert\Length(max: 50, maxMessage: "Model must be at most {{ limit }} characters.")]
    private $model;

    #[ORM\Column(type: 'string', length: 50, name: 'brand')]
    #[Assert\NotBlank(message: "Brand is required.")]
    #[Assert\Length(max: 50, maxMessage: "Brand must be at most {{ limit }} characters.")]
    private $brand;

    #[ORM\Column(type: 'string', length: 50, name: 'licensePlate')]
    #[Assert\NotBlank(message: "License plate is required.")]
    #[Assert\Regex(
        pattern: '/^[A-Z0-9\- ]+$/',
        message: "Invalid license plate format. Use uppercase letters, numbers, dashes or spaces."
    )]
    private $licensePlate;

    #[ORM\Column(type: 'integer', name: 'seats')]
    #[Assert\Range(
        min: 1,
        max: 60,
        notInRangeMessage: "Seats must be between {{ min }} and {{ max }}."
    )]
    private $seats;

    #[ORM\Column(type: 'string', length: 255, name: 'image')]
    #[Assert\NotBlank(message: "Image path is required.")]
    #[Assert\Regex(
        pattern: '/\.(jpg|jpeg|png|gif)$/i',
        message: "Image must be in JPG, JPEG, PNG, or GIF format."
    )]
    private $image;

    #[ORM\Column(type: 'string', length: 50, nullable: true, name: 'color')]
    #[Assert\Length(max: 50, maxMessage: "Color must be at most {{ limit }} characters.")]
    private $color;

    #[ORM\Column(type: 'integer', name: 'year')]
    #[Assert\Range(
        min: 1900,
        maxPropertyPath: 'thisYear',
        notInRangeMessage: "Year must be between {{ min }} and {{ max }}."
    )]
    private $year;

    #[ORM\Column(type: 'boolean', name: 'airConditioning')]
    private $airConditioning;

    #[ORM\Column(type: 'boolean', name: 'isAvailable')]
    private $isAvailable;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'driverID', referencedColumnName: 'user_id', nullable: true, onDelete: 'SET NULL')]
    private $driver;

    #[ORM\Column(type: 'boolean', name: 'isVerified')]
    private $isVerified;

    #[Assert\Callback]
    public function validateAvailability(int $status): void
    {
        // Exemple de logique métier
        $this->setIsavailable($status === 1 && $this->getDriver() === null);
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

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getLicenseplate(): ?string
    {
        return $this->licensePlate;
    }

    public function setLicenseplate(string $licensePlate): self
    {
        $this->licensePlate = $licensePlate;

        return $this;
    }

    public function getSeats(): ?int
    {
        return $this->seats;
    }

    public function setSeats(int $seats): self
    {
        $this->seats = $seats;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(null|string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getAirconditioning(): ?bool
    {
        return $this->airConditioning;
    }

    public function setAirconditioning(bool $airConditioning): self
    {
        $this->airConditioning = $airConditioning;

        return $this;
    }

    public function getIsavailable(): ?bool
    {
        return $this->isAvailable;
    }

    public function setIsavailable(bool $isAvailable): self
    {
        $this->isAvailable = $isAvailable;

        return $this;
    }

    public function getDriver(): ?User
    {
        return $this->driver;
    }

    public function setDriver(?User $driver): self
    {
        $this->driver = $driver;

        return $this;
    }

    public function getIsverified(): ?bool
    {
        return $this->isVerified;
    }

    public function setIsverified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }



    public function _toString(): string
    {
        return $this->getLicenseplate(); // Correct getter method
    }




    public function getDisplayName(): string
    {
        return sprintf('%s %s (%s)', $this->brand, $this->model, $this->licensePlate);
    }

    public function __toString(): string
    {
        return $this->getDisplayName(); // ✅ This will return something like "Peugeot 308 (AB-123-CD)"
    }
}
