<?php

namespace MAT\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destino
 *
 * @ORM\Table(name="destino", indexes={@ORM\Index(name="IDX_81F64EFA4ED703C9", columns={"id_finca"})})
 * @ORM\Entity
 */
class Destino
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_autoconsumo", type="integer", nullable=true)
     */
    private $numAutoconsumo;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_cria", type="integer", nullable=true)
     */
    private $numCria;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_levante", type="integer", nullable=true)
     */
    private $numLevante;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_ceba", type="integer", nullable=true)
     */
    private $numCeba;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_reproduccion", type="integer", nullable=true)
     */
    private $numReproduccion;

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
     * @ORM\SequenceGenerator(sequenceName="destino_id_seq", allocationSize=1, initialValue=1)
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
     * Set numAutoconsumo
     *
     * @param integer $numAutoconsumo
     * @return Destino
     */
    public function setNumAutoconsumo($numAutoconsumo)
    {
        $this->numAutoconsumo = $numAutoconsumo;

        return $this;
    }

    /**
     * Get numAutoconsumo
     *
     * @return integer 
     */
    public function getNumAutoconsumo()
    {
        return $this->numAutoconsumo;
    }

    /**
     * Set numCria
     *
     * @param integer $numCria
     * @return Destino
     */
    public function setNumCria($numCria)
    {
        $this->numCria = $numCria;

        return $this;
    }

    /**
     * Get numCria
     *
     * @return integer 
     */
    public function getNumCria()
    {
        return $this->numCria;
    }

    /**
     * Set numLevante
     *
     * @param integer $numLevante
     * @return Destino
     */
    public function setNumLevante($numLevante)
    {
        $this->numLevante = $numLevante;

        return $this;
    }

    /**
     * Get numLevante
     *
     * @return integer 
     */
    public function getNumLevante()
    {
        return $this->numLevante;
    }

    /**
     * Set numCeba
     *
     * @param integer $numCeba
     * @return Destino
     */
    public function setNumCeba($numCeba)
    {
        $this->numCeba = $numCeba;

        return $this;
    }

    /**
     * Get numCeba
     *
     * @return integer 
     */
    public function getNumCeba()
    {
        return $this->numCeba;
    }

    /**
     * Set numReproduccion
     *
     * @param integer $numReproduccion
     * @return Destino
     */
    public function setNumReproduccion($numReproduccion)
    {
        $this->numReproduccion = $numReproduccion;

        return $this;
    }

    /**
     * Get numReproduccion
     *
     * @return integer 
     */
    public function getNumReproduccion()
    {
        return $this->numReproduccion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Destino
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
     * @return Destino
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
