<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * alumno
 *
 * @ORM\Table(name="alumno")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\alumnoRepository")
 */
class alumno
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
     * @ORM\Column(name="legajo_prefijo", type="string", length=10)
     */
    private $legajoPrefijo;

    /**
     * @var int
     *
     * @ORM\Column(name="legajo_numero", type="integer")
     */
    private $legajoNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=128)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_materno", type="string", length=128)
     */
    private $apellidoMaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=128)
     */
    private $apellido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="datetime")
     */
    private $fechaNacimiento;

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
     * @ORM\Column(name="nro_documento", type="string", length=16)
     */
    private $nroDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1)
     */
    private $sexo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=128)
     */
    private $email;

    /**
     * @var bool
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="matricula", type="string", length=10)
     */
    private $matricula;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_fijo", type="string", length=20)
     */
    private $telefonoFijo;

    /**
     * @var bool
     *
     * @ORM\Column(name="adeuda", type="boolean")
     */
    private $adeuda;

    /**
     * @ORM\ManyToOne(targetEntity="Provincia", inversedBy="alumnos")
     * @ORM\JoinColumn(name="fk_provincia_id", referencedColumnName="id")
     */
    private $provincia;

    /**
     * @ORM\ManyToOne(targetEntity="Establecimiento", inversedBy="alumnos")
     * @ORM\JoinColumn(name="fk_establecimiento_id", referencedColumnName="id")
     */
    private $establecimientos;

    /**
     * @ORM\ManyToOne(targetEntity="carrera", inversedBy="alumnos")
     * @ORM\JoinColumn(name="fk_carrera_id", referencedColumnName="id")
     */
    private $carrera;

    /**
     * @ORM\ManyToOne(targetEntity="estadosalumnos", inversedBy="alumnos")
     * @ORM\JoinColumn(name="fk_estadoalumno_id", referencedColumnName="id")
     */
    private $estadosalumnos;

    /**
     * @ORM\ManyToOne(targetEntity="pais", inversedBy="alumnos")
     * @ORM\JoinColumn(name="fk_pais_id", referencedColumnName="id")
     */
    private $pais;

    /**
     * @ORM\ManyToOne(targetEntity="concepto", inversedBy="alumnos")
     * @ORM\JoinColumn(name="fk_conceptobaja_id", referencedColumnName="id")
     */
    private $conceptob;

    /**
     * @ORM\ManyToOne(targetEntity="tipodocumento", inversedBy="alumnos")
     * @ORM\JoinColumn(name="fk_tipodocumento_id", referencedColumnName="id")
     */
    private $tipodocumento;


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
     * Set legajoPrefijo
     *
     * @param string $legajoPrefijo
     *
     * @return alumno
     */
    public function setLegajoPrefijo($legajoPrefijo)
    {
        $this->legajoPrefijo = $legajoPrefijo;

        return $this;
    }

    /**
     * Get legajoPrefijo
     *
     * @return string
     */
    public function getLegajoPrefijo()
    {
        return $this->legajoPrefijo;
    }

    /**
     * Set legajoNumero
     *
     * @param integer $legajoNumero
     *
     * @return alumno
     */
    public function setLegajoNumero($legajoNumero)
    {
        $this->legajoNumero = $legajoNumero;

        return $this;
    }

    /**
     * Get legajoNumero
     *
     * @return int
     */
    public function getLegajoNumero()
    {
        return $this->legajoNumero;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return alumno
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
     * Set apellidoMaterno
     *
     * @param string $apellidoMaterno
     *
     * @return alumno
     */
    public function setApellidoMaterno($apellidoMaterno)
    {
        $this->apellidoMaterno = $apellidoMaterno;

        return $this;
    }

    /**
     * Get apellidoMaterno
     *
     * @return string
     */
    public function getApellidoMaterno()
    {
        return $this->apellidoMaterno;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return alumno
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return alumno
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return alumno
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
     * @return alumno
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
     * @return alumno
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
     * @return alumno
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
     * Set nroDocumento
     *
     * @param string $nroDocumento
     *
     * @return alumno
     */
    public function setNroDocumento($nroDocumento)
    {
        $this->nroDocumento = $nroDocumento;

        return $this;
    }

    /**
     * Get nroDocumento
     *
     * @return string
     */
    public function getNroDocumento()
    {
        return $this->nroDocumento;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return alumno
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return alumno
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return alumno
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return bool
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set matricula
     *
     * @param string $matricula
     *
     * @return alumno
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula
     *
     * @return string
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return alumno
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set telefonoFijo
     *
     * @param string $telefonoFijo
     *
     * @return alumno
     */
    public function setTelefonoFijo($telefonoFijo)
    {
        $this->telefonoFijo = $telefonoFijo;

        return $this;
    }

    /**
     * Get telefonoFijo
     *
     * @return string
     */
    public function getTelefonoFijo()
    {
        return $this->telefonoFijo;
    }

    /**
     * Set adeuda
     *
     * @param boolean $adeuda
     *
     * @return alumno
     */
    public function setAdeuda($adeuda)
    {
        $this->adeuda = $adeuda;

        return $this;
    }

    /**
     * Get adeuda
     *
     * @return bool
     */
    public function getAdeuda()
    {
        return $this->adeuda;
    }
}
