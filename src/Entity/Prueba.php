<?php

namespace MiW\Results\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prueba
 *
 * @ORM\Table(name="prueba")
 * @ORM\Entity
 */
class Prueba implements \JsonSerializable
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
    private $precio;

    /**
     * @param string $nom
     * @param float $pre
     */
    public function __construct(string $nom, float $pre)
    {
        $this->nombre = $nom;
        $this->precio = $pre;
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
        return $this->precio;
    }

    /**
     * @param float $precio
     */
    public function setPrecio(float $precio): void
    {
        $this->precio = $precio;
    }


    public function jsonSerialize()
    {
       return [
          'prueba' => [
               'id' => $this->getId(),
               'nombre' => $this->getNombre(),
               'precio' => $this->getPrecio()
           ]
       ];
    }


}
