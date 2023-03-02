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
    private ?float $posx = null;

    #[ORM\Column(nullable: true)]
    private ?float $posy = null;

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

    public function getPosx(): ?float
    {
        return $this->posx;
    }

    public function setPosx(?float $posx): self
    {
        $this->posx = $posx;

        return $this;
    }

    public function getPosy(): ?float
    {
        return $this->posy;
    }

    public function setPosy(?float $posy): self
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
