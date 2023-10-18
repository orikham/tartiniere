<?php

namespace App\Entity;

use App\Repository\FormatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormatRepository::class)]
class Format
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $Name = null;

    #[ORM\Column]
    private ?int $Price = null;

    #[ORM\ManyToMany(targetEntity: Products::class, inversedBy: 'formats')]
    private Collection $format;

    public function __construct()
    {
        $this->format = new ArrayCollection();
    }

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->Price;
    }

    public function setPrice(int $Price): static
    {
        $this->Price = $Price;

        return $this;
    }

    /**
     * @return Collection<int, Carpro>
     */

    /**
     * @return Collection<int, Products>
     */
    public function getFormat(): Collection
    {
        return $this->format;
    }

    public function addFormat(Products $format): static
    {
        if (!$this->format->contains($format)) {
            $this->format->add($format);
        }

        return $this;
    }

    public function removeFormat(Products $format): static
    {
        $this->format->removeElement($format);

        return $this;
    }
    
}
