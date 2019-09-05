<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * concepto
 *
 * @ORM\Table(name="concepto")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\conceptoRepository")
 */
class concepto
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
     * @ORM\ManyToOne(targetEntity="establecimiento", inversedBy="conceptos")
     * @ORM\JoinColumn(name="fk_establecimiento_id", referencedColumnName="id")
     */
    private $establecimientos;

    /**
    * @ORM\OneToMany(targetEntity="alumno", mappedBy="conceptob")
    */
    private $alumno;

    public function __construct()
     {
        $this->$alumno = new ArrayCollection();
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
     * @return concepto
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
     * @return concepto
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
     * Set establecimientos
     *
     * @param \AppBundle\Entity\establecimiento $establecimientos
     *
     * @return concepto
     */
    public function setEstablecimientos(\AppBundle\Entity\establecimiento $establecimientos = null)
    {
        $this->establecimientos = $establecimientos;

        return $this;
    }

    /**
     * Get establecimientos
     *
     * @return \AppBundle\Entity\establecimiento
     */
    public function getEstablecimientos()
    {
        return $this->establecimientos;
    }

    /**
     * Add alumno
     *
     * @param \AppBundle\Entity\alumno $alumno
     *
     * @return concepto
     */
    public function addAlumno(\AppBundle\Entity\alumno $alumno)
    {
        $this->alumno[] = $alumno;

        return $this;
    }

    /**
     * Remove alumno
     *
     * @param \AppBundle\Entity\alumno $alumno
     */
    public function removeAlumno(\AppBundle\Entity\alumno $alumno)
    {
        $this->alumno->removeElement($alumno);
    }

    /**
     * Get alumno
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAlumno()
    {
        return $this->alumno;
    }

    public function __toString()
    {
       return $this->nombre;
    }
}
