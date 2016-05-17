<?php

namespace MAT\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoExplotacion
 *
 * @ORM\Table(name="tipo_explotacion", indexes={@ORM\Index(name="idx_82bca8704ed703c9", columns={"id_finca"})})
 * @ORM\Entity
 */
class TipoExplotacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="numero_vaca_becerro", type="integer", nullable=true)
     */
    private $numeroVacaBecerro;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_vaca_maute", type="integer", nullable=true)
     */
    private $numeroVacaMaute;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_vaca_novillo", type="integer", nullable=true)
     */
    private $numeroVacaNovillo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="leche", type="boolean", nullable=true)
     */
    private $leche;

    /**
     * @var boolean
     *
     * @ORM\Column(name="carne", type="boolean", nullable=true)
     */
    private $carne;

    /**
     * @var boolean
     *
     * @ORM\Column(name="doble_proposito", type="boolean", nullable=true)
     */
    private $dobleProposito;

    /**
     * @var boolean
     *
     * @ORM\Column(name="extensivo", type="boolean", nullable=true)
     */
    private $extensivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="intesivo", type="boolean", nullable=true)
     */
    private $intesivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="semi_intensivo", type="boolean", nullable=true)
     */
    private $semiIntensivo;

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
     * @ORM\SequenceGenerator(sequenceName="tipo_explotacion_id_seq", allocationSize=1, initialValue=1)
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
     * Set numeroVacaBecerro
     *
     * @param integer $numeroVacaBecerro
     * @return TipoExplotacion
     */
    public function setNumeroVacaBecerro($numeroVacaBecerro)
    {
        $this->numeroVacaBecerro = $numeroVacaBecerro;

        return $this;
    }

    /**
     * Get numeroVacaBecerro
     *
     * @return integer 
     */
    public function getNumeroVacaBecerro()
    {
        return $this->numeroVacaBecerro;
    }

    /**
     * Set numeroVacaMaute
     *
     * @param integer $numeroVacaMaute
     * @return TipoExplotacion
     */
    public function setNumeroVacaMaute($numeroVacaMaute)
    {
        $this->numeroVacaMaute = $numeroVacaMaute;

        return $this;
    }

    /**
     * Get numeroVacaMaute
     *
     * @return integer 
     */
    public function getNumeroVacaMaute()
    {
        return $this->numeroVacaMaute;
    }

    /**
     * Set numeroVacaNovillo
     *
     * @param integer $numeroVacaNovillo
     * @return TipoExplotacion
     */
    public function setNumeroVacaNovillo($numeroVacaNovillo)
    {
        $this->numeroVacaNovillo = $numeroVacaNovillo;

        return $this;
    }

    /**
     * Get numeroVacaNovillo
     *
     * @return integer 
     */
    public function getNumeroVacaNovillo()
    {
        return $this->numeroVacaNovillo;
    }

    /**
     * Set leche
     *
     * @param boolean $leche
     * @return TipoExplotacion
     */
    public function setLeche($leche)
    {
        $this->leche = $leche;

        return $this;
    }

    /**
     * Get leche
     *
     * @return boolean 
     */
    public function getLeche()
    {
        return $this->leche;
    }

    /**
     * Set carne
     *
     * @param boolean $carne
     * @return TipoExplotacion
     */
    public function setCarne($carne)
    {
        $this->carne = $carne;

        return $this;
    }

    /**
     * Get carne
     *
     * @return boolean 
     */
    public function getCarne()
    {
        return $this->carne;
    }

    /**
     * Set dobleProposito
     *
     * @param boolean $dobleProposito
     * @return TipoExplotacion
     */
    public function setDobleProposito($dobleProposito)
    {
        $this->dobleProposito = $dobleProposito;

        return $this;
    }

    /**
     * Get dobleProposito
     *
     * @return boolean 
     */
    public function getDobleProposito()
    {
        return $this->dobleProposito;
    }

    /**
     * Set extensivo
     *
     * @param boolean $extensivo
     * @return TipoExplotacion
     */
    public function setExtensivo($extensivo)
    {
        $this->extensivo = $extensivo;

        return $this;
    }

    /**
     * Get extensivo
     *
     * @return boolean 
     */
    public function getExtensivo()
    {
        return $this->extensivo;
    }

    /**
     * Set intesivo
     *
     * @param boolean $intesivo
     * @return TipoExplotacion
     */
    public function setIntesivo($intesivo)
    {
        $this->intesivo = $intesivo;

        return $this;
    }

    /**
     * Get intesivo
     *
     * @return boolean 
     */
    public function getIntesivo()
    {
        return $this->intesivo;
    }

    /**
     * Set semiIntensivo
     *
     * @param boolean $semiIntensivo
     * @return TipoExplotacion
     */
    public function setSemiIntensivo($semiIntensivo)
    {
        $this->semiIntensivo = $semiIntensivo;

        return $this;
    }

    /**
     * Get semiIntensivo
     *
     * @return boolean 
     */
    public function getSemiIntensivo()
    {
        return $this->semiIntensivo;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return TipoExplotacion
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
     * @return TipoExplotacion
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
