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
     * @ORM\ManyToOne(targetEntity="pais", inversedBy="provincias")
     * @ORM\JoinColumn(name="fk_pais_id", referencedColumnName="id")
     */
    private $pais;

    /**
     * @ORM\OneToMany(targetEntity="Alumno", mappedBy="provincia")
     */
    private $alumnos;

    /**
     * @ORM\OneToMany(targetEntity="organizacion", mappedBy="provincia")
     */
    private $organizacion;

     /**
    * @ORM\OneToMany(targetEntity="establecimiento", mappedBy="provincia")
    */
   private $establecimientos;

   public function __construct()
  {
      $this->$establecimientos = new ArrayCollection();
      $this->$alumnos = new ArrayCollection();
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

    /**
     * Set pais
     *
     * @param \AppBundle\Entity\Pais $pais
     *
     * @return provincia
     */
    public function setPais(\AppBundle\Entity\Pais $pais = null)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return \AppBundle\Entity\Pais
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Add alumno
     *
     * @param \AppBundle\Entity\Alumno $alumno
     *
     * @return provincia
     */
    public function addAlumno(\AppBundle\Entity\Alumno $alumno)
    {
        $this->alumnos[] = $alumno;

        return $this;
    }

    /**
     * Remove alumno
     *
     * @param \AppBundle\Entity\Alumno $alumno
     */
    public function removeAlumno(\AppBundle\Entity\Alumno $alumno)
    {
        $this->alumnos->removeElement($alumno);
    }

    /**
     * Get alumnos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAlumnos()
    {
        return $this->alumnos;
    }

    /**
     * Add organizacion
     *
     * @param \AppBundle\Entity\organizacion $organizacion
     *
     * @return provincia
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

    /**
     * Add establecimiento
     *
     * @param \AppBundle\Entity\establecimiento $establecimiento
     *
     * @return provincia
     */
    public function addEstablecimiento(\AppBundle\Entity\establecimiento $establecimiento)
    {
        $this->establecimientos[] = $establecimiento;

        return $this;
    }

    /**
     * Remove establecimiento
     *
     * @param \AppBundle\Entity\establecimiento $establecimiento
     */
    public function removeEstablecimiento(\AppBundle\Entity\establecimiento $establecimiento)
    {
        $this->establecimientos->removeElement($establecimiento);
    }

    /**
     * Get establecimientos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEstablecimientos()
    {
        return $this->establecimientos;
    }

    public function __toString()
    {
        return $this->nombreCorto;
    }
}
