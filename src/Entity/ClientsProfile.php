<?php

namespace App\Entity;

use App\Repository\ClientsProfileRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientsProfileRepository::class)
 */
class ClientsProfile
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=client::class, inversedBy="clientsProfile", cascade={"persist", "remove"})
     */
    private $client;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0, nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $social_whatsapp;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $phone_vercode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClientId(): ?client
    {
        return $this->client_id;
    }

    public function setClientId(?client $client_id): self
    {
        $this->client_id = $client_id;

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

    public function getSocialWhatsapp(): ?string
    {
        return $this->social_whatsapp;
    }

    public function setSocialWhatsapp(?string $social_whatsapp): self
    {
        $this->social_whatsapp = $social_whatsapp;

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
