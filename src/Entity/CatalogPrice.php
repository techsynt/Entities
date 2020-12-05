<?php

namespace App\Entity;

use App\Repository\CatalogPriceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CatalogPriceRepository::class)
 */
class CatalogPrice
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Catalog::class, inversedBy="catalogPrice", cascade={"persist", "remove"})
     */
    private $product;

    /**
     * @ORM\Column(type="decimal", precision=15, scale=2)
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     */
    private $created_at;

    /**
     * @ORM\Column(type="integer")
     */
    private $updated_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduct(): ?Catalog
    {
        return $this->product;
    }

    public function setProduct(?Catalog $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCreatedAt(): ?int
    {
        return $this->created_at;
    }

    public function setCreatedAt(int $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?int
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(int $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
