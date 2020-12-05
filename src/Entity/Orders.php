<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdersRepository::class)
 */
class Orders
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="orders")
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity=AdminUser::class, inversedBy="status")
     */
    private $manager;

    /**
     * @ORM\ManyToOne(targetEntity=OrdersStatus::class, inversedBy="orders")
     */
    private $status;

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
    private $can_edit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $options;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $can_cancel;

    /**
     * @ORM\Column(type="integer")
     */
    private $created_at;

    /**
     * @ORM\Column(type="integer")
     */
    private $updated_at;

    /**
     * @ORM\ManyToOne(targetEntity=OrdersHistory::class, inversedBy="orderr")
     */
    private $ordersHistory;

    /**
     * @ORM\OneToMany(targetEntity=OrdersProducts::class, mappedBy="orderr")
     */
    private $ordersProducts;

    public function __construct()
    {
        $this->ordersProducts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getManager(): ?AdminUser
    {
        return $this->manager;
    }

    public function setManager(?AdminUser $manager): self
    {
        $this->manager = $manager;

        return $this;
    }

    public function getStatus(): ?OrdersStatus
    {
        return $this->status;
    }

    public function setStatus(?OrdersStatus $status): self
    {
        $this->status = $status;

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

    public function getCanEdit(): ?int
    {
        return $this->can_edit;
    }

    public function setCanEdit(?int $can_edit): self
    {
        $this->can_edit = $can_edit;

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

    public function getOrdersHistory(): ?OrdersHistory
    {
        return $this->ordersHistory;
    }

    public function setOrdersHistory(?OrdersHistory $ordersHistory): self
    {
        $this->ordersHistory = $ordersHistory;

        return $this;
    }

    /**
     * @return Collection|OrdersProducts[]
     */
    public function getOrdersProducts(): Collection
    {
        return $this->ordersProducts;
    }

    public function addOrdersProduct(OrdersProducts $ordersProduct): self
    {
        if (!$this->ordersProducts->contains($ordersProduct)) {
            $this->ordersProducts[] = $ordersProduct;
            $ordersProduct->setOrderr($this);
        }

        return $this;
    }

    public function removeOrdersProduct(OrdersProducts $ordersProduct): self
    {
        if ($this->ordersProducts->removeElement($ordersProduct)) {
            // set the owning side to null (unless already changed)
            if ($ordersProduct->getOrderr() === $this) {
                $ordersProduct->setOrderr(null);
            }
        }

        return $this;
    }
}
