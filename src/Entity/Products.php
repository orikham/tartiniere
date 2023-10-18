<?php

namespace App\Entity;

use App\Repository\ProductsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductsRepository::class)]
class Products
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(length: 200)]
    private ?string $details = null;

    #[ORM\ManyToMany(targetEntity: Categories::class, inversedBy: 'products')]
    private Collection $tmid;

    #[ORM\OneToMany(mappedBy: 'products', targetEntity: Carpro::class)]
    private Collection $prod;

    #[ORM\ManyToMany(targetEntity: Format::class, mappedBy: 'format')]
    private Collection $formats;

    

    public function __construct()
    {
        $this->tmid = new ArrayCollection();
        $this->prod = new ArrayCollection();
        $this->formats = new ArrayCollection();
    }

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

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(string $details): static
    {
        $this->details = $details;

        return $this;
    }

    /**
     * @return Collection<int, Categories>
     */
    public function getTmid(): Collection
    {
        return $this->tmid;
    }

    public function addTmid(Categories $tmid): static
    {
        if (!$this->tmid->contains($tmid)) {
            $this->tmid->add($tmid);
        }

        return $this;
    }

    public function removeTmid(Categories $tmid): static
    {
        $this->tmid->removeElement($tmid);

        return $this;
    }

    /**
     * @return Collection<int, Carpro>
     */
    public function getProd(): Collection
    {
        return $this->prod;
    }

    public function addProd(Carpro $prod): static
    {
        if (!$this->prod->contains($prod)) {
            $this->prod->add($prod);
            $prod->setProducts($this);
        }

        return $this;
    }

    public function removeProd(Carpro $prod): static
    {
        if ($this->prod->removeElement($prod)) {
            // set the owning side to null (unless already changed)
            if ($prod->getProducts() === $this) {
                $prod->setProducts(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Format>
     */
    public function getFormats(): Collection
    {
        return $this->formats;
    }

    public function addFormat(Format $format): static
    {
        if (!$this->formats->contains($format)) {
            $this->formats->add($format);
            $format->addFormat($this);
        }

        return $this;
    }

    public function removeFormat(Format $format): static
    {
        if ($this->formats->removeElement($format)) {
            $format->removeFormat($this);
        }

        return $this;
    }

    
}
