<?php

namespace App\Entity;

use App\Repository\InstrumentsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: InstrumentsRepository::class)]
class Instruments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]   
    #[Assert\NotBlank()]
    #[Assert\Length(min:2,max:50)]
    private ?string $name = null;




    #[ORM\Column] 
    #[Assert\Positive()]
    #[Assert\NotNull()]
    private ?float $price = null;

 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }
}
