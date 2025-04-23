<?php  

namespace App\Entity;  

use App\Repository\MaintenanceRepository; 
use Doctrine\ORM\Mapping as ORM; 
use Symfony\Component\Validator\Constraints as Assert;  

#[ORM\Entity(repositoryClass: MaintenanceRepository::class)] 
class Maintenance {     
    #[ORM\Id]     
    #[ORM\GeneratedValue]     
    #[ORM\Column(type: 'integer')]     
    private ?int $id = null;      
    
    #[ORM\ManyToOne(targetEntity: Vehicle::class)]     
    #[ORM\JoinColumn(nullable: false)]     
    #[Assert\NotNull(message: "Vehicle is required")]     
    private ?Vehicle $vehicle = null;      
    
    #[ORM\Column(type: 'datetime_immutable')]     
    #[Assert\NotNull(message: "Maintenance date is required")]     
    private \DateTimeImmutable $maintenanceDate;      
    
    #[ORM\Column(type: 'string', length: 255)]     
    #[Assert\NotBlank(message: "Service type is required")]     
    private string $serviceType;      
    
    #[ORM\Column(type: 'text')]     
    #[Assert\NotBlank(message: "Description is required")]     
    private string $description;      
    
    #[ORM\Column(type: 'string', length: 255)]     
    #[Assert\NotBlank(message: "Service provider is required")]     
    private string $serviceProvider;      
    
    #[ORM\Column(type: 'float')]     
    #[Assert\PositiveOrZero(message: "Cost must be positive")]     
    private float $cost;

    #[ORM\Column(type: 'smallint')]
    #[Assert\NotNull(message: "Status is required")]
    #[Assert\Range(
        min: 0,
        max: 2,
        notInRangeMessage: "Status must be between {{ min }} and {{ max }}"
    )]
    private int $status = 0; // 0 = Not in maintenance, 1 = In maintenance, 2 = Reserved
      
    public function __construct()     
    {         
        $this->maintenanceDate = new \DateTimeImmutable();
        $this->cost = 0.0; // Initialize with a default value
        $this->status = 0; // Default status     
    }      
    
    // Getters and Setters     
    public function getId(): ?int { return $this->id; }     
    
    public function getVehicle(): ?Vehicle { return $this->vehicle; }     
    
    public function setVehicle(?Vehicle $vehicle): self { $this->vehicle = $vehicle; return $this; }     
    
    public function getMaintenanceDate(): \DateTimeImmutable { return $this->maintenanceDate; }     
    
    public function setMaintenanceDate(?\DateTimeInterface $date): self     
    {         
        if ($date === null) {             
            $this->maintenanceDate = new \DateTimeImmutable(); // or throw error if required         
        } else {             
            $this->maintenanceDate = \DateTimeImmutable::createFromInterface($date);         
        }              
        return $this;          
    }     
    
    public function getServiceType(): string { return $this->serviceType; }     
    
    public function setServiceType(string $serviceType): self { $this->serviceType = $serviceType; return $this; }     
    
    public function getDescription(): string { return $this->description; }     
    
    public function setDescription(string $description): self { $this->description = $description; return $this; }     
    
    public function getServiceProvider(): string { return $this->serviceProvider; }     
    
    public function setServiceProvider(string $serviceProvider): self { $this->serviceProvider = $serviceProvider; return $this; }     
    
    public function getCost(): float { return $this->cost; }     
    
    public function setCost(?float $cost): self 
    { 
        $this->cost = $cost === null ? 0.0 : $cost; 
        return $this; 
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;
        return $this;
    }

    // Status constants for better code readability
    public const STATUS_NOT_IN_MAINTENANCE = 0;
    public const STATUS_IN_MAINTENANCE = 1;
    public const STATUS_RESERVED = 2;

    // Optional: Helper method to get status as text
    public function getStatusText(): string
    {
        return match($this->status) {
            self::STATUS_NOT_IN_MAINTENANCE => 'Not in maintenance',
            self::STATUS_IN_MAINTENANCE => 'In maintenance',
            self::STATUS_RESERVED => 'Reserved',
            default => 'Unknown status',
        };
    }
}