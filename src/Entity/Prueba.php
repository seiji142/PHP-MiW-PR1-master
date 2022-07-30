<?php

namespace MiW\Results\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prueba
 *
 * @ORM\Table(name="prueba")
 * @ORM\Entity
 */
class Prueba
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="text", length=65535, nullable=false)
     */
    private $nombre;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $valor;

    /**
     * @param string $nom
     * @param float $pre
     */
    public function __construct(string $nom, float $pre)
    {
        $this->nombre = $nom;
        $this->valor = $pre;
    }

    /**
     * @return int
     */


    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return float
     */
    public function getPrecio(): float
    {
        return $this->valor;
    }

    /**
     * @param float $valor
     */
    public function setPrecio(float $valor): void
    {
        $this->valor = $valor;
    }


}
