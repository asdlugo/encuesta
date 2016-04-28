<?php

namespace MAT\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productor
 *
 * @ORM\Table(name="productor", indexes={@ORM\Index(name="IDX_173A070FBB7A9B1", columns={"id_nivel_educacion"})})
 * @ORM\Entity
 */
class Productor
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", nullable=true)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="rif", type="string", nullable=true)
     */
    private $rif;

    /**
     * @var string
     *
     * @ORM\Column(name="tlf1", type="string", nullable=true)
     */
    private $tlf1;

    /**
     * @var string
     *
     * @ORM\Column(name="tlf2", type="string", nullable=true)
     */
    private $tlf2;

    /**
     * @var string
     *
     * @ORM\Column(name="emal1", type="string", nullable=true)
     */
    private $emal1;

    /**
     * @var string
     *
     * @ORM\Column(name="email2", type="string", nullable=true)
     */
    private $email2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sabe_leer", type="boolean", nullable=true)
     */
    private $sabeLeer;

    /**
     * @var integer
     *
     * @ORM\Column(name="ex_productor", type="integer", nullable=true)
     */
    private $exProductor;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar_habitacion", type="text", nullable=true)
     */
    private $lugarHabitacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", nullable=true)
     */
    private $visible;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="productor_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \MAT\EncuestaBundle\Entity\NivelEducacion
     *
     * @ORM\ManyToOne(targetEntity="MAT\EncuestaBundle\Entity\NivelEducacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nivel_educacion", referencedColumnName="id")
     * })
     */
    private $idNivelEducacion;



    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Productor
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
     * Set apellido
     *
     * @param string $apellido
     * @return Productor
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
     * Set rif
     *
     * @param string $rif
     * @return Productor
     */
    public function setRif($rif)
    {
        $this->rif = $rif;

        return $this;
    }

    /**
     * Get rif
     *
     * @return string 
     */
    public function getRif()
    {
        return $this->rif;
    }

    /**
     * Set tlf1
     *
     * @param string $tlf1
     * @return Productor
     */
    public function setTlf1($tlf1)
    {
        $this->tlf1 = $tlf1;

        return $this;
    }

    /**
     * Get tlf1
     *
     * @return string 
     */
    public function getTlf1()
    {
        return $this->tlf1;
    }

    /**
     * Set tlf2
     *
     * @param string $tlf2
     * @return Productor
     */
    public function setTlf2($tlf2)
    {
        $this->tlf2 = $tlf2;

        return $this;
    }

    /**
     * Get tlf2
     *
     * @return string 
     */
    public function getTlf2()
    {
        return $this->tlf2;
    }

    /**
     * Set emal1
     *
     * @param string $emal1
     * @return Productor
     */
    public function setEmal1($emal1)
    {
        $this->emal1 = $emal1;

        return $this;
    }

    /**
     * Get emal1
     *
     * @return string 
     */
    public function getEmal1()
    {
        return $this->emal1;
    }

    /**
     * Set email2
     *
     * @param string $email2
     * @return Productor
     */
    public function setEmail2($email2)
    {
        $this->email2 = $email2;

        return $this;
    }

    /**
     * Get email2
     *
     * @return string 
     */
    public function getEmail2()
    {
        return $this->email2;
    }

    /**
     * Set sabeLeer
     *
     * @param boolean $sabeLeer
     * @return Productor
     */
    public function setSabeLeer($sabeLeer)
    {
        $this->sabeLeer = $sabeLeer;

        return $this;
    }

    /**
     * Get sabeLeer
     *
     * @return boolean 
     */
    public function getSabeLeer()
    {
        return $this->sabeLeer;
    }

    /**
     * Set exProductor
     *
     * @param integer $exProductor
     * @return Productor
     */
    public function setExProductor($exProductor)
    {
        $this->exProductor = $exProductor;

        return $this;
    }

    /**
     * Get exProductor
     *
     * @return integer 
     */
    public function getExProductor()
    {
        return $this->exProductor;
    }

    /**
     * Set lugarHabitacion
     *
     * @param string $lugarHabitacion
     * @return Productor
     */
    public function setLugarHabitacion($lugarHabitacion)
    {
        $this->lugarHabitacion = $lugarHabitacion;

        return $this;
    }

    /**
     * Get lugarHabitacion
     *
     * @return string 
     */
    public function getLugarHabitacion()
    {
        return $this->lugarHabitacion;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return Productor
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idNivelEducacion
     *
     * @param \MAT\EncuestaBundle\Entity\NivelEducacion $idNivelEducacion
     * @return Productor
     */
    public function setIdNivelEducacion(\MAT\EncuestaBundle\Entity\NivelEducacion $idNivelEducacion = null)
    {
        $this->idNivelEducacion = $idNivelEducacion;

        return $this;
    }

    /**
     * Get idNivelEducacion
     *
     * @return \MAT\EncuestaBundle\Entity\NivelEducacion 
     */
    public function getIdNivelEducacion()
    {
        return $this->idNivelEducacion;
    }
}
