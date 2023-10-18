<?php

namespace App\Entity;

use App\Repository\CarproRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarproRepository::class)]
class Carpro
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quantity = null;

    

    

    

    #[ORM\OneToMany(mappedBy: 'carpro', targetEntity: Cart::class)]
    private Collection $carpro;

    #[ORM\ManyToOne(inversedBy: 'prod')]
    private ?Products $products = null;

    

    public function __construct()
    {
       
        
        $this->carpro = new ArrayCollection();
        
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    

    

    

   
    

    

    

    
    
    public function getCarpro(): Collection
    {
        return $this->carpro;
    }

    public function addCarpro(Cart $carpro): static
    {
        if (!$this->carpro->contains($carpro)) {
            $this->carpro->add($carpro);
            $carpro->setCarproId($this);
        }

        return $this;
    }

    public function removeCarpro(Cart $carpro): static
    {
        if ($this->carpro->removeElement($carpro)) {
            // set the owning side to null (unless already changed)
            if ($carpro->getCarproId() === $this) {
                $carpro->setCarproId(null);
            }
        }

        return $this;
    }

    public function getProducts(): ?Products
    {
        return $this->products;
    }

    public function setProducts(?Products $products): static
    {
        $this->products = $products;

        return $this;
    }

    
    

    
}
