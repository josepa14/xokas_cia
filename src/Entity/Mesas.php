<?php

namespace App\Entity;

use App\Repository\MesasRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MesasRepository::class)]
class Mesas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $posx = null;

    #[ORM\Column(nullable: true)]
    private ?int $posy = null;

    #[ORM\Column]
    private ?int $alto = null;

    #[ORM\Column]
    private ?int $ancho = null;

    #[ORM\Column(nullable: true)]
    private ?string $fecha_reservas = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPosx(): ?int
    {
        return $this->posx;
    }

    public function setPosx(?int $posx): self
    {
        $this->posx = $posx;

        return $this;
    }

    public function getPosy(): ?int
    {
        return $this->posy;
    }

    public function setPosy(?int $posy): self
    {
        $this->posy = $posy;

        return $this;
    }

    public function getAlto(): ?int
    {
        return $this->alto;
    }

    public function setAlto(int $alto): self
    {
        $this->alto = $alto;

        return $this;
    }

    public function getAncho(): ?int
    {
        return $this->ancho;
    }

    public function setAncho(int $ancho): self
    {
        $this->ancho = $ancho;

        return $this;
    }

    public function getFechaReservas(): ?string
    {
        return $this->fecha_reservas;
    }

    public function setFechaReservas(?string $fecha_reservas): self
    {
        $this->fecha_reservas = $fecha_reservas;

        return $this;
    }
}
