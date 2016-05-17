<?php

namespace MAT\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Financiamiento
 *
 * @ORM\Table(name="financiamiento", indexes={@ORM\Index(name="idx_ccf9c6fb4ed703c9", columns={"id_finca"})})
 * @ORM\Entity
 */
class Financiamiento
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="banco_institucion", type="boolean", nullable=true)
     */
    private $bancoInstitucion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reque_vacas", type="boolean", nullable=true)
     */
    private $requeVacas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reque_novillas", type="boolean", nullable=true)
     */
    private $requeNovillas;

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
     * @ORM\SequenceGenerator(sequenceName="financiamiento_id_seq", allocationSize=1, initialValue=1)
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
     * Set bancoInstitucion
     *
     * @param boolean $bancoInstitucion
     * @return Financiamiento
     */
    public function setBancoInstitucion($bancoInstitucion)
    {
        $this->bancoInstitucion = $bancoInstitucion;

        return $this;
    }

    /**
     * Get bancoInstitucion
     *
     * @return boolean 
     */
    public function getBancoInstitucion()
    {
        return $this->bancoInstitucion;
    }

    /**
     * Set requeVacas
     *
     * @param boolean $requeVacas
     * @return Financiamiento
     */
    public function setRequeVacas($requeVacas)
    {
        $this->requeVacas = $requeVacas;

        return $this;
    }

    /**
     * Get requeVacas
     *
     * @return boolean 
     */
    public function getRequeVacas()
    {
        return $this->requeVacas;
    }

    /**
     * Set requeNovillas
     *
     * @param boolean $requeNovillas
     * @return Financiamiento
     */
    public function setRequeNovillas($requeNovillas)
    {
        $this->requeNovillas = $requeNovillas;

        return $this;
    }

    /**
     * Get requeNovillas
     *
     * @return boolean 
     */
    public function getRequeNovillas()
    {
        return $this->requeNovillas;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Financiamiento
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
     * @return Financiamiento
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
