<?php

namespace App\Entity;

use App\Repository\OrdersHistoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdersHistoryRepository::class)
 */
class OrdersHistory
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Orders::class, mappedBy="ordersHistory")
     */
    private $orderr;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="ordersHistories")
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity=AdminUser::class, inversedBy="ordersHistories")
     */
    private $manager;

    /**
     * @ORM\ManyToOne(targetEntity=OrdersStatus::class, inversedBy="ordersHistories")
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $action;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $initiator;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $params_old;

    /**
     * @ORM\Column(type="text")
     */
    private $params_new;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $options;

    /**
     * @ORM\Column(type="integer")
     */
    private $created_at;

    /**
     * @ORM\Column(type="integer")
     */
    private $updated_at;

    public function __construct()
    {
        $this->orderr = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Orders[]
     */
    public function getOrderr(): Collection
    {
        return $this->orderr;
    }

    public function addOrderr(Orders $orderr): self
    {
        if (!$this->orderr->contains($orderr)) {
            $this->orderr[] = $orderr;
            $orderr->setOrdersHistory($this);
        }

        return $this;
    }

    public function removeOrderr(Orders $orderr): self
    {
        if ($this->orderr->removeElement($orderr)) {
            // set the owning side to null (unless already changed)
            if ($orderr->getOrdersHistory() === $this) {
                $orderr->setOrdersHistory(null);
            }
        }

        return $this;
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

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getInitiator(): ?int
    {
        return $this->initiator;
    }

    public function setInitiator(?int $initiator): self
    {
        $this->initiator = $initiator;

        return $this;
    }

    public function getParamsOld(): ?string
    {
        return $this->params_old;
    }

    public function setParamsOld(?string $params_old): self
    {
        $this->params_old = $params_old;

        return $this;
    }

    public function getParamsNew(): ?string
    {
        return $this->params_new;
    }

    public function setParamsNew(string $params_new): self
    {
        $this->params_new = $params_new;

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
