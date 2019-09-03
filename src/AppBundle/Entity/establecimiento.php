<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * establecimiento
 *
 * @ORM\Table(name="establecimiento")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\establecimientoRepository")
 */
class establecimiento
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
     * @var string
     *
     * @ORM\Column(name="cuit", type="string", length=20)
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="legajoprefijo", type="string", length=10)
     */
    private $legajoprefijo;

    /**
     * @var int
     *
     * @ORM\Column(name="legajosiguiente", type="integer")
     */
    private $legajosiguiente;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=128)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=128)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_postal", type="string", length=20)
     */
    private $codigoPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="rector", type="string", length=255)
     */
    private $rector;

    /**
     * @ORM\ManyToOne(targetEntity="distritoescolar", inversedBy="establecimientos")
     * @ORM\JoinColumn(name="fk_distritoescolar_id", referencedColumnName="id")
     */
    private $distritoescolar;

    /**
     * @ORM\ManyToOne(targetEntity="organizacion", inversedBy="establecimientos")
     * @ORM\JoinColumn(name="fk_organizacion_id", referencedColumnName="id")
     */
    private $organizacion;

    /**
     * @ORM\ManyToOne(targetEntity="niveltipo", inversedBy="establecimientos")
     * @ORM\JoinColumn(name="fk_niveltipo_id", referencedColumnName="id")
     */
    private $niveltipo;

    /**
     * @ORM\ManyToOne(targetEntity="provincia", inversedBy="establecimientos")
     * @ORM\JoinColumn(name="fk_provincia_id", referencedColumnName="id")
     */
    private $provincia;

    /**
     * @ORM\OneToMany(targetEntity="alumno", mappedBy="establecimientos")
     */
    private $alumnos;

    /**
     * @ORM\OneToMany(targetEntity="carrera", mappedBy="establecimientos")
     */
    private $carreras;

    /**
     * @ORM\OneToMany(targetEntity="concepto", mappedBy="establecimientos")
     */
    private $conceptos;

    public function __construct()
    {
       $this->$alumnos = new ArrayCollection();
       $this->$carreras = new ArrayCollection();
       $this->$conceptos = new ArrayCollection();
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
     * @return establecimiento
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
     * @return establecimiento
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
     * Set cuit
     *
     * @param string $cuit
     *
     * @return establecimiento
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit
     *
     * @return string
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set legajoprefijo
     *
     * @param string $legajoprefijo
     *
     * @return establecimiento
     */
    public function setLegajoprefijo($legajoprefijo)
    {
        $this->legajoprefijo = $legajoprefijo;

        return $this;
    }

    /**
     * Get legajoprefijo
     *
     * @return string
     */
    public function getLegajoprefijo()
    {
        return $this->legajoprefijo;
    }

    /**
     * Set legajosiguiente
     *
     * @param integer $legajosiguiente
     *
     * @return establecimiento
     */
    public function setLegajosiguiente($legajosiguiente)
    {
        $this->legajosiguiente = $legajosiguiente;

        return $this;
    }

    /**
     * Get legajosiguiente
     *
     * @return int
     */
    public function getLegajosiguiente()
    {
        return $this->legajosiguiente;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return establecimiento
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return establecimiento
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     *
     * @return establecimiento
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return establecimiento
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set rector
     *
     * @param string $rector
     *
     * @return establecimiento
     */
    public function setRector($rector)
    {
        $this->rector = $rector;

        return $this;
    }

    /**
     * Get rector
     *
     * @return string
     */
    public function getRector()
    {
        return $this->rector;
    }
}
