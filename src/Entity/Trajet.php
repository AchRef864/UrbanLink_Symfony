<?php

namespace App\Entity;

use App\Repository\TrajetRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TrajetRepository::class)]
class Trajet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Veuillez saisir un lieu de départ')]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: 'Le lieu de départ doit contenir au moins {{ limit }} caractères',
        maxMessage: 'Le lieu de départ ne peut excéder {{ limit }} caractères'
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ\s\-']+$/",
        message: 'Seules les lettres, espaces et tirets sont autorisés'
    )]
    private ?string $departure = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\NotBlank(message: 'Veuillez saisir une destination')]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: 'La destination doit contenir au moins {{ limit }} caractères',
        maxMessage: 'La destination ne peut excéder {{ limit }} caractères'
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ\s\-']+$/",
        message: 'Seules les lettres, espaces et tirets sont autorisés'
    )]
    private ?string $destination = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Veuillez saisir une distance')]
    #[Assert\Positive(message: 'La distance doit être positive')]
    #[Assert\LessThan(
        value: 1000,
        message: 'La distance ne peut excéder {{ compared_value }} km'
    )]
    private ?float $distance = null;

    #[ORM\Column(length: 5)]
    #[Assert\NotBlank(message: 'Veuillez saisir une durée')]
    #[Assert\Regex(
        pattern: '/^([01][0-9]|2[0-3]):[0-5][0-9]$/',
        message: 'Le format doit être HH:MM (ex: 02:30)'
    )]
    private ?string $duration = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: 'Veuillez saisir une heure de départ')]
    #[Assert\GreaterThan(
        value: 'now',
        message: 'Le départ doit être dans le futur'
    )]
    private ?\DateTimeInterface $departureTime = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $arrivalTime = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Veuillez saisir un prix')]
    #[Assert\Positive(message: 'Le prix doit être positif')]
    #[Assert\LessThan(
        value: 10000,
        message: 'Le prix ne peut excéder {{ compared_value }}'
    )]
    private ?float $price = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Veuillez saisir le nombre de places disponibles')]
    #[Assert\PositiveOrZero(message: 'Le nombre de places doit être positif ou zéro')]
    private ?int $availableSeats = null;

    #[ORM\ManyToOne(targetEntity: Vehicle::class)]
    #[ORM\JoinColumn(name: 'vehicle_id', referencedColumnName: 'id', nullable: true, onDelete: 'SET NULL')]
    private ?Vehicle $vehicle = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: 'Veuillez choisir un type de transport')]
    #[Assert\Choice(
        choices: ['PublicTransport', 'Carpooling'],
        message: 'Choix invalide'
    )]
    private ?string $typeTransport = null;

    #[ORM\OneToMany(mappedBy: 'trajet', targetEntity: Reservation::class)]
    private Collection $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function calculateArrivalTime(): \DateTimeInterface
    {
        if (!$this->departureTime) {
            throw new \InvalidArgumentException('L\'heure de départ doit être définie');
        }

        [$hours, $minutes] = $this->getDurationParts();
        $departure = $this->departureTime;

        $departureMinutes = ((int)$departure->format('H') * 60) + (int)$departure->format('i');
        $durationMinutes = ($hours * 60) + $minutes;
        $arrivalMinutes = $departureMinutes + $durationMinutes;

        $daysToAdd = (int)($arrivalMinutes / (24 * 60));
        $arrivalMinutes = $arrivalMinutes % (24 * 60);

        $arrivalHour = (int)($arrivalMinutes / 60);
        $arrivalMinute = $arrivalMinutes % 60;

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

    private function getDurationParts(): array
    {
        if (!$this->duration) {
            throw new \InvalidArgumentException('La durée doit être définie');
        }

        $parts = explode(':', $this->duration);

        if (count($parts) !== 2) {
            throw new \InvalidArgumentException('Format de durée invalide, attendu HH:MM');
        }

        [$hours, $minutes] = $parts;

        if (!is_numeric($hours) || !is_numeric($minutes)) {
            throw new \InvalidArgumentException('Les heures et minutes doivent être des nombres');
        }

        return [(int)$hours, (int)$minutes];
    }

    // Getters and setters...

    public function getId(): ?int { return $this->id; }
    public function getDeparture(): ?string { return $this->departure; }
    public function setDeparture(string $departure): self { $this->departure = $departure; return $this; }
    public function getDestination(): ?string { return $this->destination; }
    public function setDestination(string $destination): self { $this->destination = $destination; return $this; }
    public function getDistance(): ?float { return $this->distance; }
    public function setDistance(float $distance): self { $this->distance = $distance; return $this; }
    public function getDuration(): ?string { return $this->duration; }
    public function setDuration(string $duration): self { $this->duration = $duration; return $this; }
    public function getDepartureTime(): ?\DateTimeInterface { return $this->departureTime; }
    public function setDepartureTime(\DateTimeInterface $departureTime): self { $this->departureTime = $departureTime; return $this; }
    public function getArrivalTime(): ?\DateTimeInterface { return $this->arrivalTime; }
    public function setArrivalTime(?\DateTimeInterface $arrivalTime): self { $this->arrivalTime = $arrivalTime; return $this; }
    public function getPrice(): ?float { return $this->price; }
    public function setPrice(float $price): self { $this->price = $price; return $this; }
    public function getAvailableSeats(): ?int { return $this->availableSeats; }
    public function setAvailableSeats(int $availableSeats): self { $this->availableSeats = $availableSeats; return $this; }
    public function getVehicle(): ?Vehicle
    {
        return $this->vehicle;
    }
    
    public function setVehicle(?Vehicle $vehicle): self
    {
        $this->vehicle = $vehicle;
    
        return $this;
    }
    
    public function getTypeTransport(): ?string { return $this->typeTransport; }
    public function setTypeTransport(string $typeTransport): self { $this->typeTransport = $typeTransport; return $this; }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations->add($reservation);
            $reservation->setTrajet($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            if ($reservation->getTrajet() === $this) {
                $reservation->setTrajet(null);
            }
        }

        return $this;
    }
    
}