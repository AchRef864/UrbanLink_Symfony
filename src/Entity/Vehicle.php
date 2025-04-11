<?php

namespace App\Entity;

use App\Repository\VehicleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VehicleRepository::class)]
#[ORM\Table(name: 'Vehicle')]
class Vehicle
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer', name: 'id')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, name: 'type')]
    private $type;

    #[ORM\Column(type: 'string', length: 50, name: 'model')]
    private $model;

    #[ORM\Column(type: 'string', length: 50, name: 'brand')]
    private $brand;

    #[ORM\Column(type: 'string', length: 50, name: 'licensePlate')]
    private $licensePlate;

    #[ORM\Column(type: 'integer', name: 'seats')]
    private $seats;

    #[ORM\Column(type: 'string', length: 255, name: 'image')]
    private $image;

    #[ORM\Column(type: 'string', length: 50, nullable: true, name: 'color')]
    private $color;

    #[ORM\Column(type: 'integer', name: 'year')]
    private $year;

    #[ORM\Column(type: 'boolean', name: 'airConditioning')]
    private $airConditioning;

    #[ORM\Column(type: 'boolean', name: 'isAvailable')]
    private $isAvailable;

    #[ORM\Column(type: 'integer', nullable: true, name: 'driverID')]
    private $driverID;

    #[ORM\Column(type: 'boolean', name: 'isVerified')]
    private $isVerified;

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

    public function getDriverid(): ?int
    {
        return $this->driverID;
    }

    public function setDriverid(null|int $driverID): self
    {
        $this->driverID = $driverID;

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

}
