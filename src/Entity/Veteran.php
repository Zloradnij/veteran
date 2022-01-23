<?php

namespace App\Entity;

use App\Repository\VeteranRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VeteranRepository::class)]
class Veteran
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $first_name;

    #[ORM\Column(type: 'string', length: 255)]
    private $surname;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $patronymic;

    #[ORM\Column(type: 'date')]
    private $date_of_birth;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $address;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    private $phone_home;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    private $phone_mobile;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $email_address;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getPatronymic(): ?string
    {
        return $this->patronymic;
    }

    public function setPatronymic(?string $patronymic): self
    {
        $this->patronymic = $patronymic;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->date_of_birth;
    }

    public function setDateOfBirth(\DateTimeInterface $date_of_birth): self
    {
        $this->date_of_birth = $date_of_birth;

        return $this;
    }

    public function getAddress(): ?int
    {
        return $this->address;
    }

    public function setAddress(?int $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPhoneHome(): ?string
    {
        return $this->phone_home;
    }

    public function setPhoneHome(?string $phone_home): self
    {
        $this->phone_home = $phone_home;

        return $this;
    }

    public function getPhoneMobile(): ?string
    {
        return $this->phone_mobile;
    }

    public function setPhoneMobile(?string $phone_mobile): self
    {
        $this->phone_mobile = $phone_mobile;

        return $this;
    }

    public function getEmailAddress(): ?string
    {
        return $this->email_address;
    }

    public function setEmailAddress(?string $email_address): self
    {
        $this->email_address = $email_address;

        return $this;
    }
}
