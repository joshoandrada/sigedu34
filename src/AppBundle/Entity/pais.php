<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * pais
 *
 * @ORM\Table(name="pais")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\paisRepository")
 */
class pais
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
     * @ORM\Column(name="nombre_largo", type="string", length=128)
     */
    private $nombreLargo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_corto", type="string", length=32)
     */
    private $nombreCorto;

    /**
     * @var int
     *
     * @ORM\Column(name="orden", type="integer")
     */
    private $orden;

    /**
     * @ORM\OneToMany(targetEntity="Pais", mappedBy="alumnos")
     */
    private $pais;

    public function __construct()
     {
        $this->$pais = new ArrayCollection();
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
     * Set nombreLargo
     *
     * @param string $nombreLargo
     *
     * @return pais
     */
    public function setNombreLargo($nombreLargo)
    {
        $this->nombreLargo = $nombreLargo;

        return $this;
    }

    /**
     * Get nombreLargo
     *
     * @return string
     */
    public function getNombreLargo()
    {
        return $this->nombreLargo;
    }

    /**
     * Set nombreCorto
     *
     * @param string $nombreCorto
     *
     * @return pais
     */
    public function setNombreCorto($nombreCorto)
    {
        $this->nombreCorto = $nombreCorto;

        return $this;
    }

    /**
     * Get nombreCorto
     *
     * @return string
     */
    public function getNombreCorto()
    {
        return $this->nombreCorto;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return pais
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
}
