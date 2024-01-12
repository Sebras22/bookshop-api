<?php
// api/src/Entity/Book.php
namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Put;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;

#[ORM\Entity]
#[ApiResource]
// #[ORM\Table(name: '`Animal`')]
class Animal
{

    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    // #[Groups(['user:read'])]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    public ?string $name = null;

    #[ORM\Column]
    public ?string $type = '';

    #[ORM\Column(type: 'smallint')]
    public ?int $age = 0;

    #[ORM\Column]
    public ?string $sex = '';

    #[ORM\ManyToOne(inversedBy: 'animals')]
    public ?Client $client = null;

    #[ORM\Column(type: 'smallint')]
    public ?int $note= 0;


    
    #[ORM\OneToMany(targetEntity: Appointment::class, mappedBy: 'animal', cascade: ['persist', 'remove'])]
    public iterable $appointments;



    public function getId(): ?int
    {
        return $this->id;
    }

    // /api/animals/1/getAnimalName
    public function getAnimalName(int $id): string
    {
        return $this->name;
    }

}