<?php

namespace App\Entity;

use App\Repository\AttributesFieldsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AttributesFieldsRepository::class)
 */
class AttributesFields
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Attributes::class, inversedBy="alias")
     */
    private $attributes;

    /**
     * @ORM\Column(type="string", length=1500, nullable=true)
     */
    private $alias;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $desctiption;

    /**
     * @ORM\Column(type="smallint")
     */
    private $required;

    /**
     * @ORM\Column(type="smallint")
     */
    private $readobly;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $output_type;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $value;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $common;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $show_in_filter;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $open;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $default_value;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $orderr;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAttributes(): ?Attributes
    {
        return $this->attributes;
    }

    public function setAttributes(?Attributes $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setAlias(?string $alias): self
    {
        $this->alias = $alias;

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

    public function getDesctiption(): ?string
    {
        return $this->desctiption;
    }

    public function setDesctiption(?string $desctiption): self
    {
        $this->desctiption = $desctiption;

        return $this;
    }

    public function getRequired(): ?int
    {
        return $this->required;
    }

    public function setRequired(int $required): self
    {
        $this->required = $required;

        return $this;
    }

    public function getReadobly(): ?int
    {
        return $this->readobly;
    }

    public function setReadobly(int $readobly): self
    {
        $this->readobly = $readobly;

        return $this;
    }

    public function getOutputType(): ?string
    {
        return $this->output_type;
    }

    public function setOutputType(?string $output_type): self
    {
        $this->output_type = $output_type;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getCommon(): ?int
    {
        return $this->common;
    }

    public function setCommon(?int $common): self
    {
        $this->common = $common;

        return $this;
    }

    public function getShowInFilter(): ?int
    {
        return $this->show_in_filter;
    }

    public function setShowInFilter(?int $show_in_filter): self
    {
        $this->show_in_filter = $show_in_filter;

        return $this;
    }

    public function getOpen(): ?int
    {
        return $this->open;
    }

    public function setOpen(?int $open): self
    {
        $this->open = $open;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDefaultValue(): ?string
    {
        return $this->default_value;
    }

    public function setDefaultValue(?string $default_value): self
    {
        $this->default_value = $default_value;

        return $this;
    }

    public function getOrderr(): ?int
    {
        return $this->orderr;
    }

    public function setOrderr(?int $orderr): self
    {
        $this->orderr = $orderr;

        return $this;
    }
}
