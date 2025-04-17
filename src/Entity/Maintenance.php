<?php

namespace App\Entity;

use App\Repository\MaintenanceRepository;
use App\Entity\Vehicle;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MaintenanceRepository::class)]
#[ORM\Table(name: 'Maintenance')]
class Maintenance
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Vehicle::class)]
    #[ORM\JoinColumn(name: "vehicle_id", referencedColumnName: "id", nullable: false, onDelete: "CASCADE")]
    #[Assert\NotNull(message: "Vehicle is required.")]
    private $vehicle;

    #[ORM\Column(type: 'datetime')]
    #[Assert\NotBlank(message: "Maintenance date is required.")]
    #[Assert\GreaterThanOrEqual('today', message: "Maintenance date cannot be in the past.")]
    private $maintenanceDate;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "Service type is required.")]
    #[Assert\Length(
        max: 255,
        maxMessage: "Service type cannot be longer than {{ limit }} characters."
    )]
    private $serviceType;

    #[ORM\Column(type: 'string', length: 500)]
    #[Assert\NotBlank(message: "Description is required.")]
    #[Assert\Length(
        max: 500,
        maxMessage: "Description cannot exceed {{ limit }} characters."
    )]
    private $description;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "Service provider is required.")]
    #[Assert\Length(
        max: 255,
        maxMessage: "Service provider name cannot be longer than {{ limit }} characters."
    )]
    private $serviceProvider;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank(message: "Cost is required.")]
    #[Assert\PositiveOrZero(message: "Cost must be zero or a positive number.")]
    private $cost;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotNull(message: "Status is required.")]
    #[Assert\Choice(
        choices: [0, 1, 2],
        message: "Status must be 0 (not in maintenance), 1 (in maintenance), or 2 (reserved)."
    )]
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVehicle(): ?Vehicle
    {
        return $this->vehicle;
    }

    public function setVehicle(Vehicle $vehicle): self
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    public function getMaintenanceDate(): ?\DateTimeInterface
    {
        return $this->maintenanceDate;
    }

    public function setMaintenanceDate(\DateTimeInterface $maintenanceDate): self
    {
        $this->maintenanceDate = $maintenanceDate;

        return $this;
    }

    public function getServiceType(): ?string
    {
        return $this->serviceType;
    }

    public function setServiceType(string $serviceType): self
    {
        $this->serviceType = $serviceType;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getServiceProvider(): ?string
    {
        return $this->serviceProvider;
    }

    public function setServiceProvider(string $serviceProvider): self
    {
        $this->serviceProvider = $serviceProvider;

        return $this;
    }

    public function getCost(): ?int
    {
        return $this->cost;
    }

    public function setCost(int $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(): self
    {
        $today = new \DateTimeImmutable('today');
        if ($this->maintenanceDate?->format('Y-m-d') === $today->format('Y-m-d')){
            $this->status = 1;
        }
        if ($this->maintenanceDate > $today){
            $this->status = 2;
        }
        if ($this->maintenanceDate < $today){
            $this->status = 0;
        }

        return $this;
    }
}
