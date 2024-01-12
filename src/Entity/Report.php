<?php
// api/src/Entity/Book.php
namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ApiResource]
#[ORM\Table(name: '`Report`')]
class Report
{
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    public ?string $text = null;


    #[ORM\OneToMany(targetEntity: Appointment::class, mappedBy: 'report', cascade: ['persist', 'remove'])]
    public iterable $appointments;




    public function getId(): ?int
    {
        return $this->id;
    }
}