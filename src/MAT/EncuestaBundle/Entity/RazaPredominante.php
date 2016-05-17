<?php

namespace MAT\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RazaPredominante
 *
 * @ORM\Table(name="raza_predominante", indexes={@ORM\Index(name="idx_597bba014ed703c9", columns={"id_finca"})})
 * @ORM\Entity
 */
class RazaPredominante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_cebu", type="integer", nullable=true)
     */
    private $numCebu;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_criollo", type="integer", nullable=true)
     */
    private $numCriollo;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_hulstein", type="integer", nullable=true)
     */
    private $numHulstein;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_p_suizo", type="integer", nullable=true)
     */
    private $numPSuizo;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_mestizo", type="integer", nullable=true)
     */
    private $numMestizo;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_otro", type="integer", nullable=true)
     */
    private $numOtro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_toros", type="integer", nullable=true)
     */
    private $numToros;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_toros_reproductores", type="integer", nullable=true)
     */
    private $numTorosReproductores;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_vacas_produccion", type="integer", nullable=true)
     */
    private $numVacasProduccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_vacas_secas", type="integer", nullable=true)
     */
    private $numVacasSecas;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_novillos", type="integer", nullable=true)
     */
    private $numNovillos;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_novillas", type="integer", nullable=true)
     */
    private $numNovillas;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_mautes", type="integer", nullable=true)
     */
    private $numMautes;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_mautas", type="integer", nullable=true)
     */
    private $numMautas;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_becerros", type="integer", nullable=true)
     */
    private $numBecerros;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_becerras", type="integer", nullable=true)
     */
    private $numBecerras;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="raza_predominante_id_seq", allocationSize=1, initialValue=1)
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
     * Set numCebu
     *
     * @param integer $numCebu
     * @return RazaPredominante
     */
    public function setNumCebu($numCebu)
    {
        $this->numCebu = $numCebu;

        return $this;
    }

    /**
     * Get numCebu
     *
     * @return integer 
     */
    public function getNumCebu()
    {
        return $this->numCebu;
    }

    /**
     * Set numCriollo
     *
     * @param integer $numCriollo
     * @return RazaPredominante
     */
    public function setNumCriollo($numCriollo)
    {
        $this->numCriollo = $numCriollo;

        return $this;
    }

    /**
     * Get numCriollo
     *
     * @return integer 
     */
    public function getNumCriollo()
    {
        return $this->numCriollo;
    }

    /**
     * Set numHulstein
     *
     * @param integer $numHulstein
     * @return RazaPredominante
     */
    public function setNumHulstein($numHulstein)
    {
        $this->numHulstein = $numHulstein;

        return $this;
    }

    /**
     * Get numHulstein
     *
     * @return integer 
     */
    public function getNumHulstein()
    {
        return $this->numHulstein;
    }

    /**
     * Set numPSuizo
     *
     * @param integer $numPSuizo
     * @return RazaPredominante
     */
    public function setNumPSuizo($numPSuizo)
    {
        $this->numPSuizo = $numPSuizo;

        return $this;
    }

    /**
     * Get numPSuizo
     *
     * @return integer 
     */
    public function getNumPSuizo()
    {
        return $this->numPSuizo;
    }

    /**
     * Set numMestizo
     *
     * @param integer $numMestizo
     * @return RazaPredominante
     */
    public function setNumMestizo($numMestizo)
    {
        $this->numMestizo = $numMestizo;

        return $this;
    }

    /**
     * Get numMestizo
     *
     * @return integer 
     */
    public function getNumMestizo()
    {
        return $this->numMestizo;
    }

    /**
     * Set numOtro
     *
     * @param integer $numOtro
     * @return RazaPredominante
     */
    public function setNumOtro($numOtro)
    {
        $this->numOtro = $numOtro;

        return $this;
    }

    /**
     * Get numOtro
     *
     * @return integer 
     */
    public function getNumOtro()
    {
        return $this->numOtro;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return RazaPredominante
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
     * Set numToros
     *
     * @param integer $numToros
     * @return RazaPredominante
     */
    public function setNumToros($numToros)
    {
        $this->numToros = $numToros;

        return $this;
    }

    /**
     * Get numToros
     *
     * @return integer 
     */
    public function getNumToros()
    {
        return $this->numToros;
    }

    /**
     * Set numTorosReproductores
     *
     * @param integer $numTorosReproductores
     * @return RazaPredominante
     */
    public function setNumTorosReproductores($numTorosReproductores)
    {
        $this->numTorosReproductores = $numTorosReproductores;

        return $this;
    }

    /**
     * Get numTorosReproductores
     *
     * @return integer 
     */
    public function getNumTorosReproductores()
    {
        return $this->numTorosReproductores;
    }

    /**
     * Set numVacasProduccion
     *
     * @param integer $numVacasProduccion
     * @return RazaPredominante
     */
    public function setNumVacasProduccion($numVacasProduccion)
    {
        $this->numVacasProduccion = $numVacasProduccion;

        return $this;
    }

    /**
     * Get numVacasProduccion
     *
     * @return integer 
     */
    public function getNumVacasProduccion()
    {
        return $this->numVacasProduccion;
    }

    /**
     * Set numVacasSecas
     *
     * @param integer $numVacasSecas
     * @return RazaPredominante
     */
    public function setNumVacasSecas($numVacasSecas)
    {
        $this->numVacasSecas = $numVacasSecas;

        return $this;
    }

    /**
     * Get numVacasSecas
     *
     * @return integer 
     */
    public function getNumVacasSecas()
    {
        return $this->numVacasSecas;
    }

    /**
     * Set numNovillos
     *
     * @param integer $numNovillos
     * @return RazaPredominante
     */
    public function setNumNovillos($numNovillos)
    {
        $this->numNovillos = $numNovillos;

        return $this;
    }

    /**
     * Get numNovillos
     *
     * @return integer 
     */
    public function getNumNovillos()
    {
        return $this->numNovillos;
    }

    /**
     * Set numNovillas
     *
     * @param integer $numNovillas
     * @return RazaPredominante
     */
    public function setNumNovillas($numNovillas)
    {
        $this->numNovillas = $numNovillas;

        return $this;
    }

    /**
     * Get numNovillas
     *
     * @return integer 
     */
    public function getNumNovillas()
    {
        return $this->numNovillas;
    }

    /**
     * Set numMautes
     *
     * @param integer $numMautes
     * @return RazaPredominante
     */
    public function setNumMautes($numMautes)
    {
        $this->numMautes = $numMautes;

        return $this;
    }

    /**
     * Get numMautes
     *
     * @return integer 
     */
    public function getNumMautes()
    {
        return $this->numMautes;
    }

    /**
     * Set numMautas
     *
     * @param integer $numMautas
     * @return RazaPredominante
     */
    public function setNumMautas($numMautas)
    {
        $this->numMautas = $numMautas;

        return $this;
    }

    /**
     * Get numMautas
     *
     * @return integer 
     */
    public function getNumMautas()
    {
        return $this->numMautas;
    }

    /**
     * Set numBecerros
     *
     * @param integer $numBecerros
     * @return RazaPredominante
     */
    public function setNumBecerros($numBecerros)
    {
        $this->numBecerros = $numBecerros;

        return $this;
    }

    /**
     * Get numBecerros
     *
     * @return integer 
     */
    public function getNumBecerros()
    {
        return $this->numBecerros;
    }

    /**
     * Set numBecerras
     *
     * @param integer $numBecerras
     * @return RazaPredominante
     */
    public function setNumBecerras($numBecerras)
    {
        $this->numBecerras = $numBecerras;

        return $this;
    }

    /**
     * Get numBecerras
     *
     * @return integer 
     */
    public function getNumBecerras()
    {
        return $this->numBecerras;
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
     * @return RazaPredominante
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
