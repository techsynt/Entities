<?php

namespace App\Entity;

use App\Repository\AdminUserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdminUserRepository::class)
 */
class AdminUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
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
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $auth_key;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $options;

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
     * @ORM\OneToMany(targetEntity=Organisations::class, mappedBy="manager")
     */
    private $organisations;

    /**
     * @ORM\OneToOne(targetEntity=AdminUsersProfile::class, mappedBy="user", cascade={"persist", "remove"})
     */
    private $adminUsersProfile;

    /**
     * @ORM\OneToMany(targetEntity=Orders::class, mappedBy="manager")
     */
    private $orders;

    /**
     * @ORM\OneToMany(targetEntity=OrdersHistory::class, mappedBy="manager")
     */
    private $ordersHistories;

    public function __construct()
    {
        $this->organisations = new ArrayCollection();
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

    public function setLogin(string $login): self
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

    public function getAuthKey(): ?string
    {
        return $this->auth_key;
    }

    public function setAuthKey(?string $auth_key): self
    {
        $this->auth_key = $auth_key;

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

    /**
     * @return Collection|Organisations[]
     */
    public function getOrganisations(): Collection
    {
        return $this->organisations;
    }

    public function addOrganisation(Organisations $organisation): self
    {
        if (!$this->organisations->contains($organisation)) {
            $this->organisations[] = $organisation;
            $organisation->setManager($this);
        }

        return $this;
    }

    public function removeOrganisation(Organisations $organisation): self
    {
        if ($this->organisations->removeElement($organisation)) {
            // set the owning side to null (unless already changed)
            if ($organisation->getManager() === $this) {
                $organisation->setManager(null);
            }
        }

        return $this;
    }

    public function getAdminUsersProfile(): ?AdminUsersProfile
    {
        return $this->adminUsersProfile;
    }

    public function setAdminUsersProfile(?AdminUsersProfile $adminUsersProfile): self
    {
        $this->adminUsersProfile = $adminUsersProfile;

        // set (or unset) the owning side of the relation if necessary
        $newUser = null === $adminUsersProfile ? null : $this;
        if ($adminUsersProfile->getUser() !== $newUser) {
            $adminUsersProfile->setUser($newUser);
        }

        return $this;
    }

    /**
     * @return Collection|Orders[]
     */
    public function getStatus(): Collection
    {
        return $this->status;
    }

    public function addStatus(Orders $status): self
    {
        if (!$this->status->contains($status)) {
            $this->status[] = $status;
            $status->setManager($this);
        }

        return $this;
    }

    public function removeStatus(Orders $status): self
    {
        if ($this->status->removeElement($status)) {
            // set the owning side to null (unless already changed)
            if ($status->getManager() === $this) {
                $status->setManager(null);
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
            $ordersHistory->setManager($this);
        }

        return $this;
    }

    public function removeOrdersHistory(OrdersHistory $ordersHistory): self
    {
        if ($this->ordersHistories->removeElement($ordersHistory)) {
            // set the owning side to null (unless already changed)
            if ($ordersHistory->getManager() === $this) {
                $ordersHistory->setManager(null);
            }
        }

        return $this;
    }
}
