<?php

namespace App\Entity;

use App\Repository\CatalogRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CatalogRepository::class)
 */
class Catalog
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Brands::class, mappedBy="catalog")
     */
    private $brand;

    /**
     * @ORM\ManyToOne(targetEntity=Categories::class, inversedBy="catalogs")
     */
    private $сфcaty;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sku;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $short_info;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $images;

    /**
     * @ORM\Column(type="smallint")
     */
    private $active;

    /**
     * @ORM\Column(type="integer")
     */
    private $created_at;

    /**
     * @ORM\Column(type="integer")
     */
    private $updated_at;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $uid;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $options = [];

    /**
     * @ORM\OneToOne(targetEntity=CatalogPrice::class, mappedBy="product", cascade={"persist", "remove"})
     */
    private $catalogPrice;

    public function __construct()
    {
        $this->brand = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Brands[]
     */
    public function getBrand(): Collection
    {
        return $this->brand;
    }

    public function addBrand(Brands $brand): self
    {
        if (!$this->brand->contains($brand)) {
            $this->brand[] = $brand;
            $brand->setCatalog($this);
        }

        return $this;
    }

    public function removeBrand(Brands $brand): self
    {
        if ($this->brand->removeElement($brand)) {
            // set the owning side to null (unless already changed)
            if ($brand->getCatalog() === $this) {
                $brand->setCatalog(null);
            }
        }

        return $this;
    }

    public function getсфcaty(): ?Categories
    {
        return $this->сфcaty;
    }

    public function setсфcaty(?Categories $сфcaty): self
    {
        $this->сфcaty = $сфcaty;

        return $this;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getShortInfo(): ?string
    {
        return $this->short_info;
    }

    public function setShortInfo(?string $short_info): self
    {
        $this->short_info = $short_info;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImages(): ?string
    {
        return $this->images;
    }

    public function setImages(?string $images): self
    {
        $this->images = $images;

        return $this;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(int $active): self
    {
        $this->active = $active;

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

    public function getUid(): ?string
    {
        return $this->uid;
    }

    public function setUid(?string $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    public function getOptions(): ?array
    {
        return $this->options;
    }

    public function setOptions(?array $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function getCatalogPrice(): ?CatalogPrice
    {
        return $this->catalogPrice;
    }

    public function setCatalogPrice(?CatalogPrice $catalogPrice): self
    {
        $this->catalogPrice = $catalogPrice;

        // set (or unset) the owning side of the relation if necessary
        $newProduct = null === $catalogPrice ? null : $this;
        if ($catalogPrice->getProduct() !== $newProduct) {
            $catalogPrice->setProduct($newProduct);
        }

        return $this;
    }
}
