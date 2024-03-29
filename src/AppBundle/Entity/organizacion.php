<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * organizacion
 *
 * @ORM\Table(name="organizacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\organizacionRepository")
 */
class organizacion
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
     * @ORM\Column(name="razon_social", type="string", length=128)
     */
    private $razonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="cuit", type="string", length=20)
     */
    private $cuit;

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
     * @ORM\OneToMany(targetEntity="establecimiento", mappedBy="organizacion")
     */
    private $establecimientos;

    /**
     * @ORM\ManyToOne(targetEntity="provincia", inversedBy="organizacion")
     * @ORM\JoinColumn(name="fk_provincia_id", referencedColumnName="id")
     */
    private $provincia;

    /**
     * @ORM\ManyToOne(targetEntity="tipoiva", inversedBy="organizacion")
     * @ORM\JoinColumn(name="fk_tipoiva_id", referencedColumnName="id")
     */
    private $tipoiva;

    public function __construct()
    {
       $this->$establecimientos = new ArrayCollection();
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
     * @return organizacion
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
     * @return organizacion
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
     * Set razonSocial
     *
     * @param string $razonSocial
     *
     * @return organizacion
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get razonSocial
     *
     * @return string
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * Set cuit
     *
     * @param string $cuit
     *
     * @return organizacion
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
     * Set direccion
     *
     * @param string $direccion
     *
     * @return organizacion
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
     * @return organizacion
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
     * @return organizacion
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
     * @return organizacion
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
     * Add establecimiento
     *
     * @param \AppBundle\Entity\establecimiento $establecimiento
     *
     * @return organizacion
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

    /**
     * Set provincia
     *
     * @param \AppBundle\Entity\provincia $provincia
     *
     * @return organizacion
     */
    public function setProvincia(\AppBundle\Entity\provincia $provincia = null)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return \AppBundle\Entity\provincia
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set tipoiva
     *
     * @param \AppBundle\Entity\tipoiva $tipoiva
     *
     * @return organizacion
     */
    public function setTipoiva(\AppBundle\Entity\tipoiva $tipoiva = null)
    {
        $this->tipoiva = $tipoiva;

        return $this;
    }

    /**
     * Get tipoiva
     *
     * @return \AppBundle\Entity\tipoiva
     */
    public function getTipoiva()
    {
        return $this->tipoiva;
    }
}
