<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\NapRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NapRepository::class)
 */
#[ApiResource]
class Nap
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $sleepTime;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $howTo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $WhereTo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $WhereSleep;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $duration;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getSleepTime(): ?\DateTimeInterface
    {
        return $this->sleepTime;
    }

    public function setSleepTime(\DateTimeInterface $sleepTime): self
    {
        $this->sleepTime = $sleepTime;

        return $this;
    }

    public function getHowTo(): ?string
    {
        return $this->howTo;
    }

    public function setHowTo(string $howTo): self
    {
        $this->howTo = $howTo;

        return $this;
    }

    public function getWhereTo(): ?string
    {
        return $this->WhereTo;
    }

    public function setWhereTo(string $WhereTo): self
    {
        $this->WhereTo = $WhereTo;

        return $this;
    }

    public function getWhereSleep(): ?string
    {
        return $this->WhereSleep;
    }

    public function setWhereSleep(string $WhereSleep): self
    {
        $this->WhereSleep = $WhereSleep;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }
}
