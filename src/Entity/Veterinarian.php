<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;
use Doctrine\ORM\Mapping as ORM;
// use App\Repository\UserRepository;
// use App\State\UserPasswordHasher;
// use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
// use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
// use Symfony\Component\Security\Core\User\UserInterface;
// use Symfony\Component\Serializer\Annotation\Groups;
// use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
#[ApiResource]
    #[ORM\Table(name: '`Vetenarian`')]
    class Veterinarian
    {
        #[ORM\Id, ORM\Column, ORM\GeneratedValue]
        private ?int $id = null;
    
        #[ORM\Column]
        public ?string $name = null;

        #[ORM\Column]
        public ?string $Family_name = null;

        #[ORM\Column]
        public ?string $specialisation = null;

        #[ORM\OneToMany(targetEntity: Appointment::class, mappedBy: 'veterinarian', cascade: ['persist', 'remove'])]
        public iterable $appointments;
    
    
        public function getId(): ?int
        {
            return $this->id;
        }
    }