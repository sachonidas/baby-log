<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RoutineRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RoutineRepository::class)
 */
#[ApiResource]
class Routine
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
     * @ORM\Column(type="string", length=255)
     */
    private $time;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $whatWeDo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $activityLevel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $noiseLevel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lightLevel;

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

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(string $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getWhatWeDo(): ?string
    {
        return $this->whatWeDo;
    }

    public function setWhatWeDo(string $whatWeDo): self
    {
        $this->whatWeDo = $whatWeDo;

        return $this;
    }

    public function getActivityLevel(): ?string
    {
        return $this->activityLevel;
    }

    public function setActivityLevel(string $activityLevel): self
    {
        $this->activityLevel = $activityLevel;

        return $this;
    }

    public function getNoiseLevel(): ?string
    {
        return $this->noiseLevel;
    }

    public function setNoiseLevel(string $noiseLevel): self
    {
        $this->noiseLevel = $noiseLevel;

        return $this;
    }

    public function getLightLevel(): ?string
    {
        return $this->lightLevel;
    }

    public function setLightLevel(string $lightLevel): self
    {
        $this->lightLevel = $lightLevel;

        return $this;
    }
}
