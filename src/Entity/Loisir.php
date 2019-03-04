<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LoisirRepository")
 */
class Loisir
{
    
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Assert\Type("string")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Type("string")
     */
    private $title;

    /**
     * @ORM\Column(type="time", nullable=true)
     * @Assert\Type("DateTime")
     */
    private $year;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Type("string")
     */
    private $apport;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getYear(): ?\DateTimeInterface
    {
        return $this->year;
    }

    public function setYear(?\DateTimeInterface $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getApport(): ?string
    {
        return $this->apport;
    }

    public function setApport(string $apport): self
    {
        $this->apport = $apport;

        return $this;
    }
};