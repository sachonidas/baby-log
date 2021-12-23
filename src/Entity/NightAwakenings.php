<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\NightAwakeningsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NightAwakeningsRepository::class)
 */
#[ApiResource]
class NightAwakenings
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
     * @ORM\Column(type="date")
     */
    private $Time;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $howAwake;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $durationSleep;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $whatWeDoAwake;

    /**
     * @ORM\Column(type="datetime")
     */
    private $sleepAgain;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $howToSleepAgain;

    /**
     * @ORM\Column(type="datetime")
     */
    private $elapsedTimeBetweenSleeps;

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

    public function getTime(): ?\DateTimeInterface
    {
        return $this->Time;
    }

    public function setTime(\DateTimeInterface $Time): self
    {
        $this->Time = $Time;

        return $this;
    }

    public function getHowAwake(): ?string
    {
        return $this->howAwake;
    }

    public function setHowAwake(string $howAwake): self
    {
        $this->howAwake = $howAwake;

        return $this;
    }

    public function getDurationSleep(): ?string
    {
        return $this->durationSleep;
    }

    public function setDurationSleep(string $durationSleep): self
    {
        $this->durationSleep = $durationSleep;

        return $this;
    }

    public function getWhatWeDoAwake(): ?string
    {
        return $this->whatWeDoAwake;
    }

    public function setWhatWeDoAwake(string $whatWeDoAwake): self
    {
        $this->whatWeDoAwake = $whatWeDoAwake;

        return $this;
    }

    public function getSleepAgain(): ?\DateTimeInterface
    {
        return $this->sleepAgain;
    }

    public function setSleepAgain(\DateTimeInterface $sleepAgain): self
    {
        $this->sleepAgain = $sleepAgain;

        return $this;
    }

    public function getHowToSleepAgain(): ?string
    {
        return $this->howToSleepAgain;
    }

    public function setHowToSleepAgain(string $howToSleepAgain): self
    {
        $this->howToSleepAgain = $howToSleepAgain;

        return $this;
    }

    public function getElapsedTimeBetweenSleeps(): ?\DateTimeInterface
    {
        return $this->elapsedTimeBetweenSleeps;
    }

    public function setElapsedTimeBetweenSleeps(\DateTimeInterface $elapsedTimeBetweenSleeps): self
    {
        $this->elapsedTimeBetweenSleeps = $elapsedTimeBetweenSleeps;

        return $this;
    }
}
