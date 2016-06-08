<?php

namespace MAT\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Registro
 *
 * @ORM\Table(name="registro", indexes={@ORM\Index(name="idx_397ca85b4ed703c9", columns={"id_finca"})})
 * @ORM\Entity
 */
class Registro
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="registro_parto", type="boolean", nullable=true)
     */
    private $registroParto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="registro_secado", type="boolean", nullable=true)
     */
    private $registroSecado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="peso_nacer", type="boolean", nullable=true)
     */
    private $pesoNacer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="peso_destete", type="boolean", nullable=true)
     */
    private $pesoDestete;

    /**
     * @var boolean
     *
     * @ORM\Column(name="peso_ano", type="boolean", nullable=true)
     */
    private $pesoAno;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pasaje_leche", type="boolean", nullable=true)
     */
    private $pasajeLeche;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text", nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="mensual", type="integer", nullable=true)
     */
    private $mensual;

    /**
     * @var integer
     *
     * @ORM\Column(name="semanal", type="integer", nullable=true)
     */
    private $semanal;

    /**
     * @var integer
     *
     * @ORM\Column(name="diario", type="integer", nullable=true)
     */
    private $diario;

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
     * @ORM\SequenceGenerator(sequenceName="registro_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \MAT\EncuestaBundle\Entity\Finca
     *
     * @ORM\ManyToOne(targetEntity="MAT\EncuestaBundle\Entity\Finca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_finca", referencedColumnName="id")
     * })
     */
    private $idFinca;



    /**
     * Set registroParto
     *
     * @param boolean $registroParto
     * @return Registro
     */
    public function setRegistroParto($registroParto)
    {
        $this->registroParto = $registroParto;

        return $this;
    }

    /**
     * Get registroParto
     *
     * @return boolean 
     */
    public function getRegistroParto()
    {
        return $this->registroParto;
    }

    /**
     * Set registroSecado
     *
     * @param boolean $registroSecado
     * @return Registro
     */
    public function setRegistroSecado($registroSecado)
    {
        $this->registroSecado = $registroSecado;

        return $this;
    }

    /**
     * Get registroSecado
     *
     * @return boolean 
     */
    public function getRegistroSecado()
    {
        return $this->registroSecado;
    }

    /**
     * Set pesoNacer
     *
     * @param boolean $pesoNacer
     * @return Registro
     */
    public function setPesoNacer($pesoNacer)
    {
        $this->pesoNacer = $pesoNacer;

        return $this;
    }

    /**
     * Get pesoNacer
     *
     * @return boolean 
     */
    public function getPesoNacer()
    {
        return $this->pesoNacer;
    }

    /**
     * Set pesoDestete
     *
     * @param boolean $pesoDestete
     * @return Registro
     */
    public function setPesoDestete($pesoDestete)
    {
        $this->pesoDestete = $pesoDestete;

        return $this;
    }

    /**
     * Get pesoDestete
     *
     * @return boolean 
     */
    public function getPesoDestete()
    {
        return $this->pesoDestete;
    }

    /**
     * Set pesoAno
     *
     * @param boolean $pesoAno
     * @return Registro
     */
    public function setPesoAno($pesoAno)
    {
        $this->pesoAno = $pesoAno;

        return $this;
    }

    /**
     * Get pesoAno
     *
     * @return boolean 
     */
    public function getPesoAno()
    {
        return $this->pesoAno;
    }

    /**
     * Set pasajeLeche
     *
     * @param boolean $pasajeLeche
     * @return Registro
     */
    public function setPasajeLeche($pasajeLeche)
    {
        $this->pasajeLeche = $pasajeLeche;

        return $this;
    }

    /**
     * Get pasajeLeche
     *
     * @return boolean 
     */
    public function getPasajeLeche()
    {
        return $this->pasajeLeche;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Registro
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set mensual
     *
     * @param integer $mensual
     * @return Registro
     */
    public function setMensual($mensual)
    {
        $this->mensual = $mensual;

        return $this;
    }

    /**
     * Get mensual
     *
     * @return integer 
     */
    public function getMensual()
    {
        return $this->mensual;
    }

    /**
     * Set semanal
     *
     * @param integer $semanal
     * @return Registro
     */
    public function setSemanal($semanal)
    {
        $this->semanal = $semanal;

        return $this;
    }

    /**
     * Get semanal
     *
     * @return integer 
     */
    public function getSemanal()
    {
        return $this->semanal;
    }

    /**
     * Set diario
     *
     * @param integer $diario
     * @return Registro
     */
    public function setDiario($diario)
    {
        $this->diario = $diario;

        return $this;
    }

    /**
     * Get diario
     *
     * @return integer 
     */
    public function getDiario()
    {
        return $this->diario;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Registro
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
     * @param \MAT\EncuestaBundle\Entity\Finca $idFinca
     * @return Registro
     */
    public function setIdFinca(\MAT\EncuestaBundle\Entity\Finca $idFinca = null)
    {
        $this->idFinca = $idFinca;

        return $this;
    }

    /**
     * Get idFinca
     *
     * @return \MAT\EncuestaBundle\Entity\Finca 
     */
    public function getIdFinca()
    {
        return $this->idFinca;
    }
}
