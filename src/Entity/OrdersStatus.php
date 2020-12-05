<?php

namespace App\Entity;

use App\Repository\OrdersStatusRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdersStatusRepository::class)
 */
class OrdersStatus
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Orders::class, mappedBy="status")
     */
    private $orders;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $color;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $crm_amo_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $crm_amo_title;

    /**
     * @ORM\Column(type="smallint")
     */
    private $active;

    /**
     * @ORM\OneToMany(targetEntity=OrdersHistory::class, mappedBy="status")
     */
    private $ordersHistories;

    public function __construct()
    {
        $this->orders = new ArrayCollection();
        $this->ordersHistories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Orders[]
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(Orders $order): self
    {
        if (!$this->orders->contains($order)) {
            $this->orders[] = $order;
            $order->setStatus($this);
        }

        return $this;
    }

    public function removeOrder(Orders $order): self
    {
        if ($this->orders->removeElement($order)) {
            // set the owning side to null (unless already changed)
            if ($order->getStatus() === $this) {
                $order->setStatus(null);
            }
        }

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

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

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

    public function getCrmAmoId(): ?int
    {
        return $this->crm_amo_id;
    }

    public function setCrmAmoId(?int $crm_amo_id): self
    {
        $this->crm_amo_id = $crm_amo_id;

        return $this;
    }

    public function getCrmAmoTitle(): ?string
    {
        return $this->crm_amo_title;
    }

    public function setCrmAmoTitle(?string $crm_amo_title): self
    {
        $this->crm_amo_title = $crm_amo_title;

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
     * @return Collection|OrdersHistory[]
     */
    public function getOrdersHistories(): Collection
    {
        return $this->ordersHistories;
    }

    public function addOrdersHistory(OrdersHistory $ordersHistory): self
    {
        if (!$this->ordersHistories->contains($ordersHistory)) {
            $this->ordersHistories[] = $ordersHistory;
            $ordersHistory->setStatus($this);
        }

        return $this;
    }

    public function removeOrdersHistory(OrdersHistory $ordersHistory): self
    {
        if ($this->ordersHistories->removeElement($ordersHistory)) {
            // set the owning side to null (unless already changed)
            if ($ordersHistory->getStatus() === $this) {
                $ordersHistory->setStatus(null);
            }
        }

        return $this;
    }
}
