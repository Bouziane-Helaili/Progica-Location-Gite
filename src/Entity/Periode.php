<?php

namespace App\Entity;

use App\Repository\PeriodeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PeriodeRepository::class)]
class Periode
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $startAt = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $endAt = null;

    #[ORM\Column]

//     #[ORM\Column(nullable: true)]
//     private ?\DateTimeImmutable $startAt = null;

//     #[ORM\Column(nullable: true)]
//     private ?\DateTimeImmutable $endAt = null;

//     #[ORM\Column(nullable: true)]
// >>>>>>> 9606e7dbb9cff0d499ad0cbda906d6a0151ad864
    private ?float $price = null;

    #[ORM\ManyToOne(inversedBy: 'periodes')]
    private ?Gite $gite = null;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getStartAt(): ?\DateTimeInterface
    // public function getStartAt(): ?\DateTimeImmutable

    {
        return $this->startAt;
    }

    public function setStartAt(\DateTimeInterface $startAt): self
    // public function setStartAt(?\DateTimeImmutable $startAt): self

    {
        $this->startAt = $startAt;

        return $this;
    }


    public function getEndAt(): ?\DateTimeInterface
    // public function getEndAt(): ?\DateTimeImmutable

    {
        return $this->endAt;
    }


    public function setEndAt(\DateTimeInterface $endAt): self
    // public function setEndAt(?\DateTimeImmutable $endAt): self

    {
        $this->endAt = $endAt;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }


    public function setPrice(float $price): self

    {
        $this->price = $price;

        return $this;
    }

    public function getGite(): ?Gite
    {
        return $this->gite;
    }

    public function setGite(?Gite $gite): self
    {
        $this->gite = $gite;

        return $this;
    }
}
