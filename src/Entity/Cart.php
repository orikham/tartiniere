<?php

namespace App\Entity;

use App\Repository\CartRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CartRepository::class)]
class Cart
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'carts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $user = null;

    #[ORM\OneToMany(mappedBy: 'cart', targetEntity: Carpro::class)]
    private Collection $cart;

    public function __construct()
    {
        $this->cart = new ArrayCollection();
    }

    

    

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?Users
    {
        return $this->user;
    }

    public function setIdUser(?Users $user): static
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection<int, Carpro>
     */
    

   

    

    

    /**
     * @return Collection<int, Carpro>
     */

    /**
     * @return Collection<int, Carpro>
     */
    public function getCart(): Collection
    {
        return $this->cart;
    }

    public function addCart(Carpro $cart): static
    {
        if (!$this->cart->contains($cart)) {
            $this->cart->add($cart);
            $cart->setCart($this);
        }

        return $this;
    }

    public function removeCart(Carpro $cart): static
    {
        if ($this->cart->removeElement($cart)) {
            // set the owning side to null (unless already changed)
            if ($cart->getCart() === $this) {
                $cart->setCart(null);
            }
        }

        return $this;
    }
    

    

    
}
