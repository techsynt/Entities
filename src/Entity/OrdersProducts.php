<?php

namespace App\Entity;

use App\Repository\OrdersProductsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdersProductsRepository::class)
 */
class OrdersProducts
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Orders::class, inversedBy="ordersProducts")
     */
    private $orderr;

    /**
     * @ORM\ManyToOne(targetEntity=Catalog::class)
     */
    private $product;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $amount;

    /**
     * @ORM\Column(type="decimal", precision=15, scale=2, nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="decimal", precision=15, scale=2, nullable=true)
     */
    private $price_client;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $can_edit;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $can_cancel;

    /**
     * @ORM\Column(type="smallint")
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

    public function getOrderr(): ?Orders
    {
        return $this->orderr;
    }

    public function setOrderr(?Orders $orderr): self
    {
        $this->orderr = $orderr;

        return $this;
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

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getPriceClient(): ?string
    {
        return $this->price_client;
    }

    public function setPriceClient(?string $price_client): self
    {
        $this->price_client = $price_client;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCanEdit(): ?int
    {
        return $this->can_edit;
    }

    public function setCanEdit(?int $can_edit): self
    {
        $this->can_edit = $can_edit;

        return $this;
    }

    public function getCanCancel(): ?int
    {
        return $this->can_cancel;
    }

    public function setCanCancel(?int $can_cancel): self
    {
        $this->can_cancel = $can_cancel;

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
