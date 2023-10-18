<?php

namespace App\Entity;

use App\Repository\CartRepository;

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
    private ?Users $id_user = null;

    

    #[ORM\ManyToOne(inversedBy: 'carpro')]
    private ?Carpro $carpro = null;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?Users
    {
        return $this->id_user;
    }

    public function setIdUser(?Users $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * @return Collection<int, Carpro>
     */
    

   

    public function getCarproId(): ?Carpro
    {
        return $this->carpro;
    }

    public function setCarproId(?Carpro $carpro): static
    {
        $this->carpro = $carpro;

        return $this;
    }
}
