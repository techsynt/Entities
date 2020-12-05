<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriesRepository::class)
 */
class Categories
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Attributes::class, inversedBy="categories")
     */
    private $attribute;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $desctiption;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $options;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sys_lft;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sys_rgt;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sys_level;

    /**
     * @ORM\Column(type="smallint", nullable=true)
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
     * @ORM\OneToMany(targetEntity=Catalog::class, mappedBy="сфcaty")
     */
    private $catalogs;

    public function __construct()
    {
        $this->catalogs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAttribute(): ?Attributes
    {
        return $this->attribute;
    }

    public function setAttribute(?Attributes $attribute): self
    {
        $this->attribute = $attribute;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDesctiption(): ?string
    {
        return $this->desctiption;
    }

    public function setDesctiption(?string $desctiption): self
    {
        $this->desctiption = $desctiption;

        return $this;
    }

    public function getOptions(): ?string
    {
        return $this->options;
    }

    public function setOptions(?string $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function getSysLft(): ?int
    {
        return $this->sys_lft;
    }

    public function setSysLft(?int $sys_lft): self
    {
        $this->sys_lft = $sys_lft;

        return $this;
    }

    public function getSysRgt(): ?int
    {
        return $this->sys_rgt;
    }

    public function setSysRgt(?int $sys_rgt): self
    {
        $this->sys_rgt = $sys_rgt;

        return $this;
    }

    public function getSysLevel(): ?int
    {
        return $this->sys_level;
    }

    public function setSysLevel(?int $sys_level): self
    {
        $this->sys_level = $sys_level;

        return $this;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(?int $active): self
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

    /**
     * @return Collection|Catalog[]
     */
    public function getCatalogs(): Collection
    {
        return $this->catalogs;
    }

    public function addCatalog(Catalog $catalog): self
    {
        if (!$this->catalogs->contains($catalog)) {
            $this->catalogs[] = $catalog;
            $catalog->setсфcaty($this);
        }

        return $this;
    }

    public function removeCatalog(Catalog $catalog): self
    {
        if ($this->catalogs->removeElement($catalog)) {
            // set the owning side to null (unless already changed)
            if ($catalog->getсфcaty() === $this) {
                $catalog->setсфcaty(null);
            }
        }

        return $this;
    }
}
