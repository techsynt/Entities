<?php

namespace App\Entity;

use App\Repository\AdminUsersProfileRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdminUsersProfileRepository::class)
 */
class AdminUsersProfile
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=AdminUser::class, inversedBy="adminUsersProfile", cascade={"persist", "remove"})
     */
    private $user;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0, nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $phone_vercode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?AdminUser
    {
        return $this->user;
    }

    public function setUser(?AdminUser $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getPhoneVercode(): ?string
    {
        return $this->phone_vercode;
    }

    public function setPhoneVercode(?string $phone_vercode): self
    {
        $this->phone_vercode = $phone_vercode;

        return $this;
    }
}
