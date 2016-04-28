<?php

namespace MAT\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carne
 *
 * @ORM\Table(name="carne", indexes={@ORM\Index(name="IDX_AF905264ED703C9", columns={"id_finca"})})
 * @ORM\Entity
 */
class Carne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_animales", type="integer", nullable=true)
     */
    private $numAnimales;

    /**
     * @var float
     *
     * @ORM\Column(name="peso_prom_venta", type="float", precision=10, scale=0, nullable=true)
     */
    private $pesoPromVenta;

    /**
     * @var integer
     *
     * @ORM\Column(name="edad_para_venta", type="integer", nullable=true)
     */
    private $edadParaVenta;

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
     * @ORM\SequenceGenerator(sequenceName="carne_id_seq", allocationSize=1, initialValue=1)
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
     * Set numAnimales
     *
     * @param integer $numAnimales
     * @return Carne
     */
    public function setNumAnimales($numAnimales)
    {
        $this->numAnimales = $numAnimales;

        return $this;
    }

    /**
     * Get numAnimales
     *
     * @return integer 
     */
    public function getNumAnimales()
    {
        return $this->numAnimales;
    }

    /**
     * Set pesoPromVenta
     *
     * @param float $pesoPromVenta
     * @return Carne
     */
    public function setPesoPromVenta($pesoPromVenta)
    {
        $this->pesoPromVenta = $pesoPromVenta;

        return $this;
    }

    /**
     * Get pesoPromVenta
     *
     * @return float 
     */
    public function getPesoPromVenta()
    {
        return $this->pesoPromVenta;
    }

    /**
     * Set edadParaVenta
     *
     * @param integer $edadParaVenta
     * @return Carne
     */
    public function setEdadParaVenta($edadParaVenta)
    {
        $this->edadParaVenta = $edadParaVenta;

        return $this;
    }

    /**
     * Get edadParaVenta
     *
     * @return integer 
     */
    public function getEdadParaVenta()
    {
        return $this->edadParaVenta;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Carne
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
     * @return Carne
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
