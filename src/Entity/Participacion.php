<?php

namespace App\Entity;

use App\Repository\ParticipacionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParticipacionRepository::class)]
class Participacion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $evento = null;

    #[ORM\Column]
    private ?int $usuario = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvento(): ?int
    {
        return $this->evento;
    }

    public function setEvento(int $evento): self
    {
        $this->evento = $evento;

        return $this;
    }

    public function getUsuario(): ?int
    {
        return $this->usuario;
    }

    public function setUsuario(int $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }
}
