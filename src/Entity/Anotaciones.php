<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * Anotaciones
 *
 * @ORM\Table(name="anotaciones", indexes={@ORM\Index(name="FK_Prueba_Id", columns={"pruebaId"})})
 * @ORM\Entity
 */
class Anotaciones
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
     * @ORM\Column(name="texto", type="text", length=65535, nullable=false)
     */
    private $texto;

    /**
     * @var int
     *
     * @ORM\Column(name="fecha", type="integer", nullable=false)
     */
    private $fecha;

    /**
     * @var \Prueba
     *
     * @ORM\ManyToOne(targetEntity="Prueba")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pruebaId", referencedColumnName="id")
     * })
     */
    private $pruebaid;

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
    public function getTexto(): string
    {
        return $this->texto;
    }

    /**
     * @param string $texto
     */
    public function setTexto(string $texto): void
    {
        $this->texto = $texto;
    }

    /**
     * @return int
     */
    public function getFecha(): int
    {
        return $this->fecha;
    }

    /**
     * @param int $fecha
     */
    public function setFecha(int $fecha): void
    {
        $this->fecha = $fecha;
    }

    /**
     * @return Prueba
     */
    public function getPruebaid(): Prueba
    {
        return $this->pruebaid;
    }

    /**
     * @param Prueba $pruebaid
     */
    public function setPruebaid(Prueba $pruebaid): void
    {
        $this->pruebaid = $pruebaid;
    }


}
