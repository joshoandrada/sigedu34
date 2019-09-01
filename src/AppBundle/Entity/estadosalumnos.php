<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * estadosalumnos
 *
 * @ORM\Table(name="estadosalumnos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\estadosalumnosRepository")
 */
class estadosalumnos
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
   * @ORM\OneToMany(targetEntity="Alumno", mappedBy="estadosalumnos")
   */
  private $alumnos;

  public function __construct()
 {
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return estadosalumnos
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
}
