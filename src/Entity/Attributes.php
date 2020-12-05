<?php

namespace App\Entity;

use App\Repository\AttributesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AttributesRepository::class)
 */
class Attributes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $table_name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $options;

    /**
     * @ORM\Column(type="smallint")
     */
    private $active;

    /**
     * @ORM\OneToMany(targetEntity=AttributesFields::class, mappedBy="attributes")
     */
    private $attributeFields;

    /**
     * @ORM\OneToMany(targetEntity=Categories::class, mappedBy="attribute")
     */
    private $categories;

    public function __construct()
    {
        $this->attributeFields = new ArrayCollection();
        $this->categories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTableName(): ?string
    {
        return $this->table_name;
    }

    public function setTableName(?string $table_name): self
    {
        $this->table_name = $table_name;

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

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(int $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return Collection|AttributesFields[]
     */
    public function getAlias(): Collection
    {
        return $this->alias;
    }

    public function addAlias(AttributesFields $alias): self
    {
        if (!$this->alias->contains($alias)) {
            $this->alias[] = $alias;
            $alias->setAttributes($this);
        }

        return $this;
    }

    public function removeAlias(AttributesFields $alias): self
    {
        if ($this->alias->removeElement($alias)) {
            // set the owning side to null (unless already changed)
            if ($alias->getAttributes() === $this) {
                $alias->setAttributes(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Categories[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Categories $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            $category->setAttribute($this);
        }

        return $this;
    }

    public function removeCategory(Categories $category): self
    {
        if ($this->categories->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getAttribute() === $this) {
                $category->setAttribute(null);
            }
        }

        return $this;
    }
}
