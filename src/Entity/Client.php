<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
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
    private $login;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $options;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $auth_key;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private $verify_code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password_hash;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $password_reset_token;

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
     * @ORM\OneToOne(targetEntity=ClientsProfile::class, mappedBy="client_id", cascade={"persist", "remove"})
     */
    private $clientsProfile;

    /**
     * @ORM\ManyToOne(targetEntity=PriceType::class)
     */
    private $price_type;

    /**
     * @ORM\ManyToOne(targetEntity=Organisations::class, inversedBy="clients")
     */
    private $org;

    /**
     * @ORM\ManyToMany(targetEntity=ClientsGroups::class, inversedBy="clients")
     */
    private $groupp;

    /**
     * @ORM\OneToMany(targetEntity=Orders::class, mappedBy="client")
     */
    private $orders;

    /**
     * @ORM\OneToMany(targetEntity=OrdersHistory::class, mappedBy="client")
     */
    private $ordersHistories;

    public function __construct()
    {
        $this->org_id = new ArrayCollection();
        $this->groupp = new ArrayCollection();
        $this->orders = new ArrayCollection();
        $this->ordersHistories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

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

    public function getOptions(): ?string
    {
        return $this->options;
    }

    public function setOptions(?string $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function getAuthKey(): ?string
    {
        return $this->auth_key;
    }

    public function setAuthKey(?string $auth_key): self
    {
        $this->auth_key = $auth_key;

        return $this;
    }

    public function getVerifyCode(): ?string
    {
        return $this->verify_code;
    }

    public function setVerifyCode(?string $verify_code): self
    {
        $this->verify_code = $verify_code;

        return $this;
    }

    public function getPasswordHash(): ?string
    {
        return $this->password_hash;
    }

    public function setPasswordHash(string $password_hash): self
    {
        $this->password_hash = $password_hash;

        return $this;
    }

    public function getPasswordResetToken(): ?string
    {
        return $this->password_reset_token;
    }

    public function setPasswordResetToken(?string $password_reset_token): self
    {
        $this->password_reset_token = $password_reset_token;

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

    public function getClientsProfile(): ?ClientsProfile
    {
        return $this->clientsProfile;
    }

    public function setClientsProfile(?ClientsProfile $clientsProfile): self
    {
        $this->clientsProfile = $clientsProfile;

        // set (or unset) the owning side of the relation if necessary
        $newClient_id = null === $clientsProfile ? null : $this;
        if ($clientsProfile->getClientId() !== $newClient_id) {
            $clientsProfile->setClientId($newClient_id);
        }

        return $this;
    }

    public function getPriceTypeId(): ?PriceType
    {
        return $this->price_type_id;
    }

    public function setPriceTypeId(?PriceType $price_type_id): self
    {
        $this->price_type_id = $price_type_id;

        return $this;
    }

    public function getOrg(): ?Organisations
    {
        return $this->org;
    }

    public function setOrg(?Organisations $org): self
    {
        $this->org = $org;

        return $this;
    }

    /**
     * @return Collection|ClientsGroups[]
     */
    public function getGroupp(): Collection
    {
        return $this->groupp;
    }

    public function addGroupp(ClientsGroups $groupp): self
    {
        if (!$this->groupp->contains($groupp)) {
            $this->groupp[] = $groupp;
        }

        return $this;
    }

    public function removeGroupp(ClientsGroups $groupp): self
    {
        $this->groupp->removeElement($groupp);

        return $this;
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
            $order->setClient($this);
        }

        return $this;
    }

    public function removeOrder(Orders $order): self
    {
        if ($this->orders->removeElement($order)) {
            // set the owning side to null (unless already changed)
            if ($order->getClient() === $this) {
                $order->setClient(null);
            }
        }

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
            $ordersHistory->setClient($this);
        }

        return $this;
    }

    public function removeOrdersHistory(OrdersHistory $ordersHistory): self
    {
        if ($this->ordersHistories->removeElement($ordersHistory)) {
            // set the owning side to null (unless already changed)
            if ($ordersHistory->getClient() === $this) {
                $ordersHistory->setClient(null);
            }
        }

        return $this;
    }
}
