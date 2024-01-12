<?php
// api/src/Entity/Book.php
namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ApiResource]
#[ORM\Table(name: '`Appointment`')]
class Appointment
{
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'animals')]
    public ?Animal $animal = null;
    
    #[ORM\ManyToOne(inversedBy: 'reports')]
    public ?Report $report = null;
    
    #[ORM\ManyToOne(inversedBy: 'veterinarians')]
    public ?Veterinarian $veterinarian = null;
    
    public function getId(): ?int
    {
        return $this->id;
    }
}