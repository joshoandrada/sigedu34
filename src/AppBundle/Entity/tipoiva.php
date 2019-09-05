<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * tipoiva
 *
 * @ORM\Table(name="tipoiva")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\tipoivaRepository")
 */
class tipoiva
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=128)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var int
     *
     * @ORM\Column(name="orden", type="integer")
     */
    private $orden;

    /**
     * @ORM\OneToMany(targetEntity="organizacion", mappedBy="tipoiva")
     */
    private $organizacion;

    public function __construct()
     {
       $this->$organizacion = new ArrayCollection();
     }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return tipoiva
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return tipoiva
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return tipoiva
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return int
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Add organizacion
     *
     * @param \AppBundle\Entity\organizacion $organizacion
     *
     * @return tipoiva
     */
    public function addOrganizacion(\AppBundle\Entity\organizacion $organizacion)
    {
        $this->organizacion[] = $organizacion;

        return $this;
    }

    /**
     * Remove organizacion
     *
     * @param \AppBundle\Entity\organizacion $organizacion
     */
    public function removeOrganizacion(\AppBundle\Entity\organizacion $organizacion)
    {
        $this->organizacion->removeElement($organizacion);
    }

    /**
     * Get organizacion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrganizacion()
    {
        return $this->organizacion;
    }
}
