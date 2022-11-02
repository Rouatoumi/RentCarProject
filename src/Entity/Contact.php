<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Fist_name;

    #[ORM\Column(type: 'string', length: 255)]
    private $Last_name;

    #[ORM\Column(type: 'integer')]
    private $CIN;

    #[ORM\Column(type: 'integer')]
    private $Phone;

    #[ORM\Column(type: 'date')]
    private $Pick_Up;

    #[ORM\Column(type: 'date')]
    private $Return_back;

    #[ORM\Column(type: 'text', nullable: true)]
    private $Note;

    #[ORM\ManyToOne(targetEntity: Car::class, inversedBy: 'contacts')]
    #[ORM\JoinColumn(nullable: false)]
    private $CarName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFistName(): ?string
    {
        return $this->Fist_name;
    }

    public function setFistName(string $Fist_name): self
    {
        $this->Fist_name = $Fist_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->Last_name;
    }

    public function setLastName(string $Last_name): self
    {
        $this->Last_name = $Last_name;

        return $this;
    }

    public function getCIN(): ?int
    {
        return $this->CIN;
    }

    public function setCIN(int $CIN): self
    {
        $this->CIN = $CIN;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->Phone;
    }

    public function setPhone(int $Phone): self
    {
        $this->Phone = $Phone;

        return $this;
    }

    public function getPickUp(): ?\DateTimeInterface
    {
        return $this->Pick_Up;
    }

    public function setPickUp(\DateTimeInterface $Pick_Up): self
    {
        $this->Pick_Up = $Pick_Up;

        return $this;
    }

    public function getReturnBack(): ?\DateTimeInterface
    {
        return $this->Return_back;
    }

    public function setReturnBack(\DateTimeInterface $Return_back): self
    {
        $this->Return_back = $Return_back;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->Note;
    }

    public function setNote(?string $Note): self
    {
        $this->Note = $Note;

        return $this;
    }

    public function getCarName(): ?Car
    {
        return $this->CarName;
    }

    public function setCarName(?Car $CarName): self
    {
        $this->CarName = $CarName;

        return $this;
    }
}
