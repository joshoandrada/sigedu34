<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * provincia
 *
 * @ORM\Table(name="provincia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\provinciaRepository")
 */
class provincia
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
     * @ORM\Column(name="nombre_corto", type="string", length=32)
     */
    private $nombreCorto;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_largo", type="string", length=128)
     */
    private $nombreLargo;

    /**
     * @var int
     *
     * @ORM\Column(name="orden", type="integer")
     */
    private $orden;

    /**
     * @ORM\ManyToOne(targetEntity="Pais", inversedBy="provincias")
     * @ORM\JoinColumn(name="fk_pais_id", referencedColumnName="id")
     */
    private $pais;

    /**
     * @ORM\OneToMany(targetEntity="Alumno", mappedBy="provincia")
     */
    private $alumnos;

     /**
    * @ORM\OneToMany(targetEntity="Establecimiento", mappedBy="provincia")
    */
   private $establecimientos;

   public function __construct()
  {
      $this->$establecimientos = new ArrayCollection();
      $this->$alumnos = new ArrayCollection();
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
     * Set nombreCorto
     *
     * @param string $nombreCorto
     *
     * @return provincia
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
     * Set nombreLargo
     *
     * @param string $nombreLargo
     *
     * @return provincia
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
     * Set orden
     *
     * @param integer $orden
     *
     * @return provincia
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
