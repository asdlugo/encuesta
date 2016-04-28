<?php

namespace MAT\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Superficie
 *
 * @ORM\Table(name="superficie", indexes={@ORM\Index(name="IDX_E4DE844B4ED703C9", columns={"id_finca"})})
 * @ORM\Entity
 */
class Superficie
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="superficie_riego", type="string", nullable=true)
     */
    private $superficieRiego;

    /**
     * @var string
     *
     * @ORM\Column(name="superficie_aprovechable", type="string", nullable=true)
     */
    private $superficieAprovechable;

    /**
     * @var string
     *
     * @ORM\Column(name="superficie_no_aprovechable", type="string", nullable=true)
     */
    private $superficieNoAprovechable;

    /**
     * @var string
     *
     * @ORM\Column(name="superficie_produccion", type="string", nullable=true)
     */
    private $superficieProduccion;

    /**
     * @var string
     *
     * @ORM\Column(name="superficie_sembrada", type="string", nullable=true)
     */
    private $superficieSembrada;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="superficie_id_seq", allocationSize=1, initialValue=1)
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Superficie
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
     * Set superficieRiego
     *
     * @param string $superficieRiego
     * @return Superficie
     */
    public function setSuperficieRiego($superficieRiego)
    {
        $this->superficieRiego = $superficieRiego;

        return $this;
    }

    /**
     * Get superficieRiego
     *
     * @return string 
     */
    public function getSuperficieRiego()
    {
        return $this->superficieRiego;
    }

    /**
     * Set superficieAprovechable
     *
     * @param string $superficieAprovechable
     * @return Superficie
     */
    public function setSuperficieAprovechable($superficieAprovechable)
    {
        $this->superficieAprovechable = $superficieAprovechable;

        return $this;
    }

    /**
     * Get superficieAprovechable
     *
     * @return string 
     */
    public function getSuperficieAprovechable()
    {
        return $this->superficieAprovechable;
    }

    /**
     * Set superficieNoAprovechable
     *
     * @param string $superficieNoAprovechable
     * @return Superficie
     */
    public function setSuperficieNoAprovechable($superficieNoAprovechable)
    {
        $this->superficieNoAprovechable = $superficieNoAprovechable;

        return $this;
    }

    /**
     * Get superficieNoAprovechable
     *
     * @return string 
     */
    public function getSuperficieNoAprovechable()
    {
        return $this->superficieNoAprovechable;
    }

    /**
     * Set superficieProduccion
     *
     * @param string $superficieProduccion
     * @return Superficie
     */
    public function setSuperficieProduccion($superficieProduccion)
    {
        $this->superficieProduccion = $superficieProduccion;

        return $this;
    }

    /**
     * Get superficieProduccion
     *
     * @return string 
     */
    public function getSuperficieProduccion()
    {
        return $this->superficieProduccion;
    }

    /**
     * Set superficieSembrada
     *
     * @param string $superficieSembrada
     * @return Superficie
     */
    public function setSuperficieSembrada($superficieSembrada)
    {
        $this->superficieSembrada = $superficieSembrada;

        return $this;
    }

    /**
     * Get superficieSembrada
     *
     * @return string 
     */
    public function getSuperficieSembrada()
    {
        return $this->superficieSembrada;
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
     * @return Superficie
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
