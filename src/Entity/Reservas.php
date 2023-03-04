<?php

namespace App\Entity;

use App\Repository\ReservasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservasRepository::class)]
class Reservas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $numMesa = null;

    #[ORM\Column(nullable: true)]
    private ?int $numJuego = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fecha = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hora = null;

    #[ORM\Column(nullable: true)]
    private ?int $numUser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumMesa(): ?int
    {
        return $this->numMesa;
    }

    public function setNumMesa(?int $numMesa): self
    {
        $this->numMesa = $numMesa;

        return $this;
    }

    public function getNumJuego(): ?int
    {
        return $this->numJuego;
    }

    public function setNumJuego(?int $numJuego): self
    {
        $this->numJuego = $numJuego;

        return $this;
    }

    public function getFecha(): ?string
    {
        return $this->fecha;
    }

    public function setFecha(?string $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getHora(): ?string
    {
        return $this->hora;
    }

    public function setHora(?string $hora): self
    {
        $this->hora = $hora;

        return $this;
    }

    public function getNumUser(): ?int
    {
        return $this->numUser;
    }

    public function setNumUser(?int $numUser): self
    {
        $this->numUser = $numUser;

        return $this;
    }
}
