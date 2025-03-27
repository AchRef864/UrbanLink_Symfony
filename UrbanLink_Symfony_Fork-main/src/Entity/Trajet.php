<?php

namespace App\Entity;

use App\Repository\TrajetRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[ORM\Entity(repositoryClass: TrajetRepository::class)]
class Trajet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "trajet_id", type: Types::INTEGER)]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le lieu de départ est obligatoire")]
    #[Assert\Length(
        min: 2, 
        max: 100,
        minMessage: "Le lieu de départ doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le lieu de départ ne peut excéder {{ limit }} caractères"
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ\s\-']+$/",
        message: "Le lieu de départ ne peut contenir que des lettres, espaces et tirets"
    )]
    private ?string $departure = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "La destination est obligatoire")]
    #[Assert\Length(
        min: 2, 
        max: 100,
        minMessage: "La destination doit contenir au moins {{ limit }} caractères",
        maxMessage: "La destination ne peut excéder {{ limit }} caractères"
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ\s\-']+$/",
        message: "La destination ne peut contenir que des lettres, espaces et tirets"
    )]
    private ?string $destination = null;

    #[ORM\Column(type: Types::FLOAT)]
    #[Assert\NotBlank(message: "La distance est obligatoire")]
    #[Assert\Positive(message: "La distance doit être positive")]
    #[Assert\LessThan(
        value: 1000, 
        message: "La distance ne peut excéder {{ compared_value }} km"
    )]
    private ?float $distance = null;

    #[ORM\Column(type: Types::STRING, length: 5)]
    #[Assert\NotBlank(message: "La durée est obligatoire")]
    #[Assert\Regex(
        pattern: '/^(2[0-3]|[01][0-9]):([0-5][0-9])$/',
        message: "Le format de durée doit être HH:MM (00:00 à 23:59)"
    )]
    private ?string $duration = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: "L'heure de départ est obligatoire")]
    #[Assert\GreaterThan(
        "now", 
        message: "Le départ doit être dans le futur"
    )]
    private ?\DateTimeInterface $departureTime = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $arrivalTime = null;

    #[ORM\Column(type: Types::FLOAT)]
    #[Assert\NotBlank(message: "Le prix est obligatoire")]
    #[Assert\Positive(message: "Le prix doit être positif")]
    #[Assert\LessThan(
        value: 10000, 
        message: "Le prix ne peut excéder {{ compared_value }}"
    )]
    private ?float $price = null;

    #[ORM\Column(type: Types::INTEGER, nullable: true)]
    private ?int $vehicleId = null;

    #[ORM\Column(type: Types::STRING, length: 20)]
    #[Assert\NotBlank(message: "Le type de transport est obligatoire")]
    #[Assert\Choice(
        choices: ["PublicTransport", "Carpooling"],
        message: "Le type de transport doit être soit 'PublicTransport' soit 'Carpooling'"
    )]
    private ?string $typeTransport = null;

    // Getters and Setters
    public function getId(): ?int { return $this->id; }
    
    public function getDeparture(): ?string { return $this->departure; }
    public function setDeparture(string $departure): static { $this->departure = $departure; return $this; }
    
    public function getDestination(): ?string { return $this->destination; }
    public function setDestination(string $destination): static { $this->destination = $destination; return $this; }
    
    public function getDistance(): ?float { return $this->distance; }
    public function setDistance(float $distance): static { $this->distance = $distance; return $this; }
    
    public function getDuration(): ?string { return $this->duration; }
    public function setDuration(string $duration): static { $this->duration = $duration; return $this; }
    
    public function getDepartureTime(): ?\DateTimeInterface { return $this->departureTime; }
    public function setDepartureTime(\DateTimeInterface $departureTime): static { $this->departureTime = $departureTime; return $this; }
    
    public function getArrivalTime(): ?\DateTimeInterface { return $this->arrivalTime; }
    public function setArrivalTime(?\DateTimeInterface $arrivalTime): static { $this->arrivalTime = $arrivalTime; return $this; }
    
    public function getPrice(): ?float { return $this->price; }
    public function setPrice(float $price): static { $this->price = $price; return $this; }
    
    public function getVehicleId(): ?int { return $this->vehicleId; }
    public function setVehicleId(?int $vehicleId): static { $this->vehicleId = $vehicleId; return $this; }
    
    public function getTypeTransport(): ?string { return $this->typeTransport; }
    public function setTypeTransport(string $typeTransport): static { $this->typeTransport = $typeTransport; return $this; }

    // Utility methods
    public function getDurationParts(): array
    {
        if (empty($this->duration)) {
            throw new \InvalidArgumentException('La durée ne peut pas être vide');
        }

        if (!preg_match('/^(2[0-3]|[01][0-9]):([0-5][0-9])$/', $this->duration, $matches)) {
            throw new \InvalidArgumentException('Format HH:MM requis (00:00 à 23:59)');
        }

        return [(int)$matches[1], (int)$matches[2]]; // [hours, minutes]
    }

    public function getDurationAsInterval(): \DateInterval
    {
        [$hours, $minutes] = $this->getDurationParts();
        
        try {
            return new \DateInterval(sprintf('PT%dH%dM', $hours, $minutes));
        } catch (\Exception $e) {
            throw new \InvalidArgumentException('Intervalle de durée invalide: '.$e->getMessage());
        }
    }

    public function calculateArrivalTime(): \DateTimeInterface
    {
        if (!$this->departureTime) {
            throw new \InvalidArgumentException('L\'heure de départ doit être définie');
        }

        [$hours, $minutes] = $this->getDurationParts();
        $departure = $this->departureTime;

        // Calculate total minutes from midnight
        $departureMinutes = ((int)$departure->format('H') * 60) + (int)$departure->format('i');
        $durationMinutes = ($hours * 60) + $minutes;
        $arrivalMinutes = $departureMinutes + $durationMinutes;

        // Calculate days to add (if duration spans multiple days)
        $daysToAdd = (int)($arrivalMinutes / (24 * 60));
        $arrivalMinutes = $arrivalMinutes % (24 * 60);

        // Calculate new time components
        $arrivalHour = (int)($arrivalMinutes / 60);
        $arrivalMinute = $arrivalMinutes % 60;

        // Create new DateTime from components
        $arrivalDate = sprintf(
            '%s-%s-%s %02d:%02d:%s',
            $departure->format('Y'),
            $departure->format('m'),
            (int)$departure->format('d') + $daysToAdd,
            $arrivalHour,
            $arrivalMinute,
            $departure->format('s')
        );

        try {
            return new \DateTime($arrivalDate);
        } catch (\Exception $e) {
            throw new \InvalidArgumentException('Calcul de l\'heure d\'arrivée échoué: '.$e->getMessage());
        }
    }

    #[Assert\Callback]
    public function validate(ExecutionContextInterface $context): void
    {
        if (!$this->departureTime || !$this->duration) {
            return;
        }

        try {
            $this->arrivalTime = $this->calculateArrivalTime();
            
            if ($this->arrivalTime <= $this->departureTime) {
                $context->buildViolation('L\'heure d\'arrivée doit être après le départ')
                    ->atPath('duration')
                    ->addViolation();
            }
        } catch (\InvalidArgumentException $e) {
            $context->buildViolation($e->getMessage())
                   ->atPath('duration')
                   ->addViolation();
        }
    }
}