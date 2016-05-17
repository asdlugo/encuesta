<?php

namespace MAT\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SistemaRiego
 *
 * @ORM\Table(name="sistema_riego", indexes={@ORM\Index(name="idx_d4411ef74ed703c9", columns={"id_finca"})})
 * @ORM\Entity
 */
class SistemaRiego
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="riego", type="boolean", nullable=true)
     */
    private $riego;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tiporiego_gravedad", type="boolean", nullable=true)
     */
    private $tiporiegoGravedad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tiporiego_aspersion", type="boolean", nullable=true)
     */
    private $tiporiegoAspersion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tiporiego_microaspersion", type="boolean", nullable=true)
     */
    private $tiporiegoMicroaspersion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tiporiego_goteo", type="boolean", nullable=true)
     */
    private $tiporiegoGoteo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tiporiego_otro", type="boolean", nullable=true)
     */
    private $tiporiegoOtro;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_superficie", type="integer", nullable=true)
     */
    private $numSuperficie;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_motobomba", type="integer", nullable=true)
     */
    private $numMotobomba;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_capacidad_flujo", type="integer", nullable=true)
     */
    private $numCapacidadFlujo;

    /**
     * @var string
     *
     * @ORM\Column(name="condiciones", type="string", length=255, nullable=true)
     */
    private $condiciones;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sistema_riego_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \MAT\EncuestaBundle\Entity\Carne
     *
     * @ORM\ManyToOne(targetEntity="MAT\EncuestaBundle\Entity\Carne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_finca", referencedColumnName="id")
     * })
     */
    private $idFinca;



    /**
     * Set riego
     *
     * @param boolean $riego
     * @return SistemaRiego
     */
    public function setRiego($riego)
    {
        $this->riego = $riego;

        return $this;
    }

    /**
     * Get riego
     *
     * @return boolean 
     */
    public function getRiego()
    {
        return $this->riego;
    }

    /**
     * Set tiporiegoGravedad
     *
     * @param boolean $tiporiegoGravedad
     * @return SistemaRiego
     */
    public function setTiporiegoGravedad($tiporiegoGravedad)
    {
        $this->tiporiegoGravedad = $tiporiegoGravedad;

        return $this;
    }

    /**
     * Get tiporiegoGravedad
     *
     * @return boolean 
     */
    public function getTiporiegoGravedad()
    {
        return $this->tiporiegoGravedad;
    }

    /**
     * Set tiporiegoAspersion
     *
     * @param boolean $tiporiegoAspersion
     * @return SistemaRiego
     */
    public function setTiporiegoAspersion($tiporiegoAspersion)
    {
        $this->tiporiegoAspersion = $tiporiegoAspersion;

        return $this;
    }

    /**
     * Get tiporiegoAspersion
     *
     * @return boolean 
     */
    public function getTiporiegoAspersion()
    {
        return $this->tiporiegoAspersion;
    }

    /**
     * Set tiporiegoMicroaspersion
     *
     * @param boolean $tiporiegoMicroaspersion
     * @return SistemaRiego
     */
    public function setTiporiegoMicroaspersion($tiporiegoMicroaspersion)
    {
        $this->tiporiegoMicroaspersion = $tiporiegoMicroaspersion;

        return $this;
    }

    /**
     * Get tiporiegoMicroaspersion
     *
     * @return boolean 
     */
    public function getTiporiegoMicroaspersion()
    {
        return $this->tiporiegoMicroaspersion;
    }

    /**
     * Set tiporiegoGoteo
     *
     * @param boolean $tiporiegoGoteo
     * @return SistemaRiego
     */
    public function setTiporiegoGoteo($tiporiegoGoteo)
    {
        $this->tiporiegoGoteo = $tiporiegoGoteo;

        return $this;
    }

    /**
     * Get tiporiegoGoteo
     *
     * @return boolean 
     */
    public function getTiporiegoGoteo()
    {
        return $this->tiporiegoGoteo;
    }

    /**
     * Set tiporiegoOtro
     *
     * @param boolean $tiporiegoOtro
     * @return SistemaRiego
     */
    public function setTiporiegoOtro($tiporiegoOtro)
    {
        $this->tiporiegoOtro = $tiporiegoOtro;

        return $this;
    }

    /**
     * Get tiporiegoOtro
     *
     * @return boolean 
     */
    public function getTiporiegoOtro()
    {
        return $this->tiporiegoOtro;
    }

    /**
     * Set numSuperficie
     *
     * @param integer $numSuperficie
     * @return SistemaRiego
     */
    public function setNumSuperficie($numSuperficie)
    {
        $this->numSuperficie = $numSuperficie;

        return $this;
    }

    /**
     * Get numSuperficie
     *
     * @return integer 
     */
    public function getNumSuperficie()
    {
        return $this->numSuperficie;
    }

    /**
     * Set numMotobomba
     *
     * @param integer $numMotobomba
     * @return SistemaRiego
     */
    public function setNumMotobomba($numMotobomba)
    {
        $this->numMotobomba = $numMotobomba;

        return $this;
    }

    /**
     * Get numMotobomba
     *
     * @return integer 
     */
    public function getNumMotobomba()
    {
        return $this->numMotobomba;
    }

    /**
     * Set numCapacidadFlujo
     *
     * @param integer $numCapacidadFlujo
     * @return SistemaRiego
     */
    public function setNumCapacidadFlujo($numCapacidadFlujo)
    {
        $this->numCapacidadFlujo = $numCapacidadFlujo;

        return $this;
    }

    /**
     * Get numCapacidadFlujo
     *
     * @return integer 
     */
    public function getNumCapacidadFlujo()
    {
        return $this->numCapacidadFlujo;
    }

    /**
     * Set condiciones
     *
     * @param string $condiciones
     * @return SistemaRiego
     */
    public function setCondiciones($condiciones)
    {
        $this->condiciones = $condiciones;

        return $this;
    }

    /**
     * Get condiciones
     *
     * @return string 
     */
    public function getCondiciones()
    {
        return $this->condiciones;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return SistemaRiego
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
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
     * Set idFinca
     *
     * @param \MAT\EncuestaBundle\Entity\Carne $idFinca
     * @return SistemaRiego
     */
    public function setIdFinca(\MAT\EncuestaBundle\Entity\Carne $idFinca = null)
    {
        $this->idFinca = $idFinca;

        return $this;
    }

    /**
     * Get idFinca
     *
     * @return \MAT\EncuestaBundle\Entity\Carne 
     */
    public function getIdFinca()
    {
        return $this->idFinca;
    }
}
