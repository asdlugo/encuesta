<?php

namespace MAT\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordeno
 *
 * @ORM\Table(name="ordeno", indexes={@ORM\Index(name="IDX_1759FCFC4ED703C9", columns={"id_finca"})})
 * @ORM\Entity
 */
class Ordeno
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_vacas_ordenadas", type="integer", nullable=true)
     */
    private $numVacasOrdenadas;

    /**
     * @var float
     *
     * @ORM\Column(name="lts_leche", type="float", precision=10, scale=0, nullable=true)
     */
    private $ltsLeche;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_ordenos_al_dia", type="integer", nullable=true)
     */
    private $numOrdenosAlDia;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_autoconsumo", type="integer", nullable=true)
     */
    private $numAutoconsumo;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_receptoria", type="integer", nullable=true)
     */
    private $numReceptoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_queseras", type="integer", nullable=true)
     */
    private $numQueseras;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_queso_finca", type="integer", nullable=true)
     */
    private $numQuesoFinca;

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
     * @ORM\SequenceGenerator(sequenceName="ordeno_id_seq", allocationSize=1, initialValue=1)
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
     * Set numVacasOrdenadas
     *
     * @param integer $numVacasOrdenadas
     * @return Ordeno
     */
    public function setNumVacasOrdenadas($numVacasOrdenadas)
    {
        $this->numVacasOrdenadas = $numVacasOrdenadas;

        return $this;
    }

    /**
     * Get numVacasOrdenadas
     *
     * @return integer 
     */
    public function getNumVacasOrdenadas()
    {
        return $this->numVacasOrdenadas;
    }

    /**
     * Set ltsLeche
     *
     * @param float $ltsLeche
     * @return Ordeno
     */
    public function setLtsLeche($ltsLeche)
    {
        $this->ltsLeche = $ltsLeche;

        return $this;
    }

    /**
     * Get ltsLeche
     *
     * @return float 
     */
    public function getLtsLeche()
    {
        return $this->ltsLeche;
    }

    /**
     * Set numOrdenosAlDia
     *
     * @param integer $numOrdenosAlDia
     * @return Ordeno
     */
    public function setNumOrdenosAlDia($numOrdenosAlDia)
    {
        $this->numOrdenosAlDia = $numOrdenosAlDia;

        return $this;
    }

    /**
     * Get numOrdenosAlDia
     *
     * @return integer 
     */
    public function getNumOrdenosAlDia()
    {
        return $this->numOrdenosAlDia;
    }

    /**
     * Set numAutoconsumo
     *
     * @param integer $numAutoconsumo
     * @return Ordeno
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
     * Set numReceptoria
     *
     * @param integer $numReceptoria
     * @return Ordeno
     */
    public function setNumReceptoria($numReceptoria)
    {
        $this->numReceptoria = $numReceptoria;

        return $this;
    }

    /**
     * Get numReceptoria
     *
     * @return integer 
     */
    public function getNumReceptoria()
    {
        return $this->numReceptoria;
    }

    /**
     * Set numQueseras
     *
     * @param integer $numQueseras
     * @return Ordeno
     */
    public function setNumQueseras($numQueseras)
    {
        $this->numQueseras = $numQueseras;

        return $this;
    }

    /**
     * Get numQueseras
     *
     * @return integer 
     */
    public function getNumQueseras()
    {
        return $this->numQueseras;
    }

    /**
     * Set numQuesoFinca
     *
     * @param integer $numQuesoFinca
     * @return Ordeno
     */
    public function setNumQuesoFinca($numQuesoFinca)
    {
        $this->numQuesoFinca = $numQuesoFinca;

        return $this;
    }

    /**
     * Get numQuesoFinca
     *
     * @return integer 
     */
    public function getNumQuesoFinca()
    {
        return $this->numQuesoFinca;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Ordeno
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
     * @return Ordeno
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
