<?php
// api/src/Entity/Book.php
namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ApiResource]
// #[ORM\Table(name: '`Client`')]
class Client
{
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    public ?string $name = null;

    #[ORM\Column(nullable: true)]
    public ?string $phone = null;

    
    #[ORM\OneToMany(targetEntity: Animal::class, mappedBy: 'client', cascade: ['persist', 'remove'])]
    public iterable $animals;

    public function getId(): ?int
    {
        return $this->id;
    }
}