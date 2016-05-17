<?php

namespace MAT\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FuenteAgua
 *
 * @ORM\Table(name="fuente_agua", indexes={@ORM\Index(name="idx_4cb1765c4ed703c9", columns={"id_finca"})})
 * @ORM\Entity
 */
class FuenteAgua
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="pozo", type="boolean", nullable=true)
     */
    private $pozo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="represa", type="boolean", nullable=true)
     */
    private $represa;

    /**
     * @var boolean
     *
     * @ORM\Column(name="acueducto", type="boolean", nullable=true)
     */
    private $acueducto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="laguna", type="boolean", nullable=true)
     */
    private $laguna;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rio_quebrada", type="boolean", nullable=true)
     */
    private $rioQuebrada;

    /**
     * @var boolean
     *
     * @ORM\Column(name="manantial", type="boolean", nullable=true)
     */
    private $manantial;

    /**
     * @var boolean
     *
     * @ORM\Column(name="publico", type="boolean", nullable=true)
     */
    private $publico;

    /**
     * @var boolean
     *
     * @ORM\Column(name="privado", type="boolean", nullable=true)
     */
    private $privado;

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
     * @ORM\SequenceGenerator(sequenceName="fuente_agua_id_seq", allocationSize=1, initialValue=1)
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
     * Set pozo
     *
     * @param boolean $pozo
     * @return FuenteAgua
     */
    public function setPozo($pozo)
    {
        $this->pozo = $pozo;

        return $this;
    }

    /**
     * Get pozo
     *
     * @return boolean 
     */
    public function getPozo()
    {
        return $this->pozo;
    }

    /**
     * Set represa
     *
     * @param boolean $represa
     * @return FuenteAgua
     */
    public function setRepresa($represa)
    {
        $this->represa = $represa;

        return $this;
    }

    /**
     * Get represa
     *
     * @return boolean 
     */
    public function getRepresa()
    {
        return $this->represa;
    }

    /**
     * Set acueducto
     *
     * @param boolean $acueducto
     * @return FuenteAgua
     */
    public function setAcueducto($acueducto)
    {
        $this->acueducto = $acueducto;

        return $this;
    }

    /**
     * Get acueducto
     *
     * @return boolean 
     */
    public function getAcueducto()
    {
        return $this->acueducto;
    }

    /**
     * Set laguna
     *
     * @param boolean $laguna
     * @return FuenteAgua
     */
    public function setLaguna($laguna)
    {
        $this->laguna = $laguna;

        return $this;
    }

    /**
     * Get laguna
     *
     * @return boolean 
     */
    public function getLaguna()
    {
        return $this->laguna;
    }

    /**
     * Set rioQuebrada
     *
     * @param boolean $rioQuebrada
     * @return FuenteAgua
     */
    public function setRioQuebrada($rioQuebrada)
    {
        $this->rioQuebrada = $rioQuebrada;

        return $this;
    }

    /**
     * Get rioQuebrada
     *
     * @return boolean 
     */
    public function getRioQuebrada()
    {
        return $this->rioQuebrada;
    }

    /**
     * Set manantial
     *
     * @param boolean $manantial
     * @return FuenteAgua
     */
    public function setManantial($manantial)
    {
        $this->manantial = $manantial;

        return $this;
    }

    /**
     * Get manantial
     *
     * @return boolean 
     */
    public function getManantial()
    {
        return $this->manantial;
    }

    /**
     * Set publico
     *
     * @param boolean $publico
     * @return FuenteAgua
     */
    public function setPublico($publico)
    {
        $this->publico = $publico;

        return $this;
    }

    /**
     * Get publico
     *
     * @return boolean 
     */
    public function getPublico()
    {
        return $this->publico;
    }

    /**
     * Set privado
     *
     * @param boolean $privado
     * @return FuenteAgua
     */
    public function setPrivado($privado)
    {
        $this->privado = $privado;

        return $this;
    }

    /**
     * Get privado
     *
     * @return boolean 
     */
    public function getPrivado()
    {
        return $this->privado;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return FuenteAgua
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
     * @return FuenteAgua
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
