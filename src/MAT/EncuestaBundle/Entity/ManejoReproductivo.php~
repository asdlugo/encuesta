<?php

namespace MAT\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ManejoReproductivo
 *
 * @ORM\Table(name="manejo_reproductivo", indexes={@ORM\Index(name="idx_1bffc6b34ed703c9", columns={"id_finca"})})
 * @ORM\Entity
 */
class ManejoReproductivo
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="tecn_monta_nat", type="boolean", nullable=true)
     */
    private $tecnMontaNat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tecn_monta_controlada", type="boolean", nullable=true)
     */
    private $tecnMontaControlada;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tecn_inseminacion", type="boolean", nullable=true)
     */
    private $tecnInseminacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tecn_transf_embriones", type="boolean", nullable=true)
     */
    private $tecnTransfEmbriones;

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
     * @ORM\SequenceGenerator(sequenceName="manejo_reproductivo_id_seq", allocationSize=1, initialValue=1)
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
     * Set tecnMontaNat
     *
     * @param boolean $tecnMontaNat
     * @return ManejoReproductivo
     */
    public function setTecnMontaNat($tecnMontaNat)
    {
        $this->tecnMontaNat = $tecnMontaNat;

        return $this;
    }

    /**
     * Get tecnMontaNat
     *
     * @return boolean 
     */
    public function getTecnMontaNat()
    {
        return $this->tecnMontaNat;
    }

    /**
     * Set tecnMontaControlada
     *
     * @param boolean $tecnMontaControlada
     * @return ManejoReproductivo
     */
    public function setTecnMontaControlada($tecnMontaControlada)
    {
        $this->tecnMontaControlada = $tecnMontaControlada;

        return $this;
    }

    /**
     * Get tecnMontaControlada
     *
     * @return boolean 
     */
    public function getTecnMontaControlada()
    {
        return $this->tecnMontaControlada;
    }

    /**
     * Set tecnInseminacion
     *
     * @param boolean $tecnInseminacion
     * @return ManejoReproductivo
     */
    public function setTecnInseminacion($tecnInseminacion)
    {
        $this->tecnInseminacion = $tecnInseminacion;

        return $this;
    }

    /**
     * Get tecnInseminacion
     *
     * @return boolean 
     */
    public function getTecnInseminacion()
    {
        return $this->tecnInseminacion;
    }

    /**
     * Set tecnTransfEmbriones
     *
     * @param boolean $tecnTransfEmbriones
     * @return ManejoReproductivo
     */
    public function setTecnTransfEmbriones($tecnTransfEmbriones)
    {
        $this->tecnTransfEmbriones = $tecnTransfEmbriones;

        return $this;
    }

    /**
     * Get tecnTransfEmbriones
     *
     * @return boolean 
     */
    public function getTecnTransfEmbriones()
    {
        return $this->tecnTransfEmbriones;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ManejoReproductivo
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
     * @return ManejoReproductivo
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
