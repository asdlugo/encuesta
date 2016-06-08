<?php

namespace MAT\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alimentacion
 *
 * @ORM\Table(name="alimentacion", indexes={@ORM\Index(name="idx_43abb0864ed703c9", columns={"id_finca"})})
 * @ORM\Entity
 */
class Alimentacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="pasto_corte_tipo1", type="string", nullable=true)
     */
    private $pastoCorteTipo1;

    /**
     * @var float
     *
     * @ORM\Column(name="pasto_corte_hectarias1", type="float", precision=10, scale=0, nullable=true)
     */
    private $pastoCorteHectarias1;

    /**
     * @var string
     *
     * @ORM\Column(name="pasto_corte_tipo2", type="string", nullable=true)
     */
    private $pastoCorteTipo2;

    /**
     * @var float
     *
     * @ORM\Column(name="pasto_corte_hectareas2", type="float", precision=10, scale=0, nullable=true)
     */
    private $pastoCorteHectareas2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bracharia_tipo", type="boolean", nullable=true)
     */
    private $brachariaTipo;

    /**
     * @var float
     *
     * @ORM\Column(name="bracharia_hectareas", type="float", precision=10, scale=0, nullable=true)
     */
    private $brachariaHectareas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estrella_tipo", type="boolean", nullable=true)
     */
    private $estrellaTipo;

    /**
     * @var float
     *
     * @ORM\Column(name="estrella_hectareas", type="float", precision=10, scale=0, nullable=true)
     */
    private $estrellaHectareas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="guinea_tipo", type="boolean", nullable=true)
     */
    private $guineaTipo;

    /**
     * @var float
     *
     * @ORM\Column(name="guinea_hectareas", type="float", precision=10, scale=0, nullable=true)
     */
    private $guineaHectareas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aleman_tipo", type="boolean", nullable=true)
     */
    private $alemanTipo;

    /**
     * @var float
     *
     * @ORM\Column(name="aleman_hectareas", type="float", precision=10, scale=0, nullable=true)
     */
    private $alemanHectareas;

    /**
     * @var string
     *
     * @ORM\Column(name="cana_azucar_tipo", type="string", nullable=true)
     */
    private $canaAzucarTipo;

    /**
     * @var float
     *
     * @ORM\Column(name="cana_azucar_hectareas", type="float", precision=10, scale=0, nullable=true)
     */
    private $canaAzucarHectareas;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_potreros_tipo", type="integer", nullable=true)
     */
    private $numPotrerosTipo;

    /**
     * @var float
     *
     * @ORM\Column(name="num_potreros_area_promedio", type="float", precision=10, scale=0, nullable=true)
     */
    private $numPotrerosAreaPromedio;

    /**
     * @var float
     *
     * @ORM\Column(name="silos", type="float", precision=10, scale=0, nullable=true)
     */
    private $silos;

    /**
     * @var string
     *
     * @ORM\Column(name="silos_cultivo", type="string", nullable=true)
     */
    private $silosCultivo;

    /**
     * @var float
     *
     * @ORM\Column(name="toneladas_silos_cosechadas", type="float", precision=10, scale=0, nullable=true)
     */
    private $toneladasSilosCosechadas;

    /**
     * @var string
     *
     * @ORM\Column(name="toneladas_silos_cosechadas_obsv", type="text", nullable=true)
     */
    private $toneladasSilosCosechadasObsv;

    /**
     * @var boolean
     *
     * @ORM\Column(name="suministra_minerales", type="boolean", nullable=true)
     */
    private $suministraMinerales;

    /**
     * @var string
     *
     * @ORM\Column(name="suministra_minerales_kgs", type="string", nullable=true)
     */
    private $suministraMineralesKgs;

    /**
     * @var boolean
     *
     * @ORM\Column(name="suministra_concentrado", type="boolean", nullable=true)
     */
    private $suministraConcentrado;

    /**
     * @var string
     *
     * @ORM\Column(name="suministra_concentrado_kgs", type="string", nullable=true)
     */
    private $suministraConcentradoKgs;

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
     * @ORM\SequenceGenerator(sequenceName="alimentacion_id_seq", allocationSize=1, initialValue=1)
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
     * Set pastoCorteTipo1
     *
     * @param string $pastoCorteTipo1
     * @return Alimentacion
     */
    public function setPastoCorteTipo1($pastoCorteTipo1)
    {
        $this->pastoCorteTipo1 = $pastoCorteTipo1;

        return $this;
    }

    /**
     * Get pastoCorteTipo1
     *
     * @return string 
     */
    public function getPastoCorteTipo1()
    {
        return $this->pastoCorteTipo1;
    }

    /**
     * Set pastoCorteHectarias1
     *
     * @param float $pastoCorteHectarias1
     * @return Alimentacion
     */
    public function setPastoCorteHectarias1($pastoCorteHectarias1)
    {
        $this->pastoCorteHectarias1 = $pastoCorteHectarias1;

        return $this;
    }

    /**
     * Get pastoCorteHectarias1
     *
     * @return float 
     */
    public function getPastoCorteHectarias1()
    {
        return $this->pastoCorteHectarias1;
    }

    /**
     * Set pastoCorteTipo2
     *
     * @param string $pastoCorteTipo2
     * @return Alimentacion
     */
    public function setPastoCorteTipo2($pastoCorteTipo2)
    {
        $this->pastoCorteTipo2 = $pastoCorteTipo2;

        return $this;
    }

    /**
     * Get pastoCorteTipo2
     *
     * @return string 
     */
    public function getPastoCorteTipo2()
    {
        return $this->pastoCorteTipo2;
    }

    /**
     * Set pastoCorteHectareas2
     *
     * @param float $pastoCorteHectareas2
     * @return Alimentacion
     */
    public function setPastoCorteHectareas2($pastoCorteHectareas2)
    {
        $this->pastoCorteHectareas2 = $pastoCorteHectareas2;

        return $this;
    }

    /**
     * Get pastoCorteHectareas2
     *
     * @return float 
     */
    public function getPastoCorteHectareas2()
    {
        return $this->pastoCorteHectareas2;
    }

    /**
     * Set brachariaTipo
     *
     * @param boolean $brachariaTipo
     * @return Alimentacion
     */
    public function setBrachariaTipo($brachariaTipo)
    {
        $this->brachariaTipo = $brachariaTipo;

        return $this;
    }

    /**
     * Get brachariaTipo
     *
     * @return boolean 
     */
    public function getBrachariaTipo()
    {
        return $this->brachariaTipo;
    }

    /**
     * Set brachariaHectareas
     *
     * @param float $brachariaHectareas
     * @return Alimentacion
     */
    public function setBrachariaHectareas($brachariaHectareas)
    {
        $this->brachariaHectareas = $brachariaHectareas;

        return $this;
    }

    /**
     * Get brachariaHectareas
     *
     * @return float 
     */
    public function getBrachariaHectareas()
    {
        return $this->brachariaHectareas;
    }

    /**
     * Set estrellaTipo
     *
     * @param boolean $estrellaTipo
     * @return Alimentacion
     */
    public function setEstrellaTipo($estrellaTipo)
    {
        $this->estrellaTipo = $estrellaTipo;

        return $this;
    }

    /**
     * Get estrellaTipo
     *
     * @return boolean 
     */
    public function getEstrellaTipo()
    {
        return $this->estrellaTipo;
    }

    /**
     * Set estrellaHectareas
     *
     * @param float $estrellaHectareas
     * @return Alimentacion
     */
    public function setEstrellaHectareas($estrellaHectareas)
    {
        $this->estrellaHectareas = $estrellaHectareas;

        return $this;
    }

    /**
     * Get estrellaHectareas
     *
     * @return float 
     */
    public function getEstrellaHectareas()
    {
        return $this->estrellaHectareas;
    }

    /**
     * Set guineaTipo
     *
     * @param boolean $guineaTipo
     * @return Alimentacion
     */
    public function setGuineaTipo($guineaTipo)
    {
        $this->guineaTipo = $guineaTipo;

        return $this;
    }

    /**
     * Get guineaTipo
     *
     * @return boolean 
     */
    public function getGuineaTipo()
    {
        return $this->guineaTipo;
    }

    /**
     * Set guineaHectareas
     *
     * @param float $guineaHectareas
     * @return Alimentacion
     */
    public function setGuineaHectareas($guineaHectareas)
    {
        $this->guineaHectareas = $guineaHectareas;

        return $this;
    }

    /**
     * Get guineaHectareas
     *
     * @return float 
     */
    public function getGuineaHectareas()
    {
        return $this->guineaHectareas;
    }

    /**
     * Set alemanTipo
     *
     * @param boolean $alemanTipo
     * @return Alimentacion
     */
    public function setAlemanTipo($alemanTipo)
    {
        $this->alemanTipo = $alemanTipo;

        return $this;
    }

    /**
     * Get alemanTipo
     *
     * @return boolean 
     */
    public function getAlemanTipo()
    {
        return $this->alemanTipo;
    }

    /**
     * Set alemanHectareas
     *
     * @param float $alemanHectareas
     * @return Alimentacion
     */
    public function setAlemanHectareas($alemanHectareas)
    {
        $this->alemanHectareas = $alemanHectareas;

        return $this;
    }

    /**
     * Get alemanHectareas
     *
     * @return float 
     */
    public function getAlemanHectareas()
    {
        return $this->alemanHectareas;
    }

    /**
     * Set canaAzucarTipo
     *
     * @param string $canaAzucarTipo
     * @return Alimentacion
     */
    public function setCanaAzucarTipo($canaAzucarTipo)
    {
        $this->canaAzucarTipo = $canaAzucarTipo;

        return $this;
    }

    /**
     * Get canaAzucarTipo
     *
     * @return string 
     */
    public function getCanaAzucarTipo()
    {
        return $this->canaAzucarTipo;
    }

    /**
     * Set canaAzucarHectareas
     *
     * @param float $canaAzucarHectareas
     * @return Alimentacion
     */
    public function setCanaAzucarHectareas($canaAzucarHectareas)
    {
        $this->canaAzucarHectareas = $canaAzucarHectareas;

        return $this;
    }

    /**
     * Get canaAzucarHectareas
     *
     * @return float 
     */
    public function getCanaAzucarHectareas()
    {
        return $this->canaAzucarHectareas;
    }

    /**
     * Set numPotrerosTipo
     *
     * @param integer $numPotrerosTipo
     * @return Alimentacion
     */
    public function setNumPotrerosTipo($numPotrerosTipo)
    {
        $this->numPotrerosTipo = $numPotrerosTipo;

        return $this;
    }

    /**
     * Get numPotrerosTipo
     *
     * @return integer 
     */
    public function getNumPotrerosTipo()
    {
        return $this->numPotrerosTipo;
    }

    /**
     * Set numPotrerosAreaPromedio
     *
     * @param float $numPotrerosAreaPromedio
     * @return Alimentacion
     */
    public function setNumPotrerosAreaPromedio($numPotrerosAreaPromedio)
    {
        $this->numPotrerosAreaPromedio = $numPotrerosAreaPromedio;

        return $this;
    }

    /**
     * Get numPotrerosAreaPromedio
     *
     * @return float 
     */
    public function getNumPotrerosAreaPromedio()
    {
        return $this->numPotrerosAreaPromedio;
    }

    /**
     * Set silos
     *
     * @param float $silos
     * @return Alimentacion
     */
    public function setSilos($silos)
    {
        $this->silos = $silos;

        return $this;
    }

    /**
     * Get silos
     *
     * @return float 
     */
    public function getSilos()
    {
        return $this->silos;
    }

    /**
     * Set silosCultivo
     *
     * @param string $silosCultivo
     * @return Alimentacion
     */
    public function setSilosCultivo($silosCultivo)
    {
        $this->silosCultivo = $silosCultivo;

        return $this;
    }

    /**
     * Get silosCultivo
     *
     * @return string 
     */
    public function getSilosCultivo()
    {
        return $this->silosCultivo;
    }

    /**
     * Set toneladasSilosCosechadas
     *
     * @param float $toneladasSilosCosechadas
     * @return Alimentacion
     */
    public function setToneladasSilosCosechadas($toneladasSilosCosechadas)
    {
        $this->toneladasSilosCosechadas = $toneladasSilosCosechadas;

        return $this;
    }

    /**
     * Get toneladasSilosCosechadas
     *
     * @return float 
     */
    public function getToneladasSilosCosechadas()
    {
        return $this->toneladasSilosCosechadas;
    }

    /**
     * Set toneladasSilosCosechadasObsv
     *
     * @param string $toneladasSilosCosechadasObsv
     * @return Alimentacion
     */
    public function setToneladasSilosCosechadasObsv($toneladasSilosCosechadasObsv)
    {
        $this->toneladasSilosCosechadasObsv = $toneladasSilosCosechadasObsv;

        return $this;
    }

    /**
     * Get toneladasSilosCosechadasObsv
     *
     * @return string 
     */
    public function getToneladasSilosCosechadasObsv()
    {
        return $this->toneladasSilosCosechadasObsv;
    }

    /**
     * Set suministraMinerales
     *
     * @param boolean $suministraMinerales
     * @return Alimentacion
     */
    public function setSuministraMinerales($suministraMinerales)
    {
        $this->suministraMinerales = $suministraMinerales;

        return $this;
    }

    /**
     * Get suministraMinerales
     *
     * @return boolean 
     */
    public function getSuministraMinerales()
    {
        return $this->suministraMinerales;
    }

    /**
     * Set suministraMineralesKgs
     *
     * @param string $suministraMineralesKgs
     * @return Alimentacion
     */
    public function setSuministraMineralesKgs($suministraMineralesKgs)
    {
        $this->suministraMineralesKgs = $suministraMineralesKgs;

        return $this;
    }

    /**
     * Get suministraMineralesKgs
     *
     * @return string 
     */
    public function getSuministraMineralesKgs()
    {
        return $this->suministraMineralesKgs;
    }

    /**
     * Set suministraConcentrado
     *
     * @param boolean $suministraConcentrado
     * @return Alimentacion
     */
    public function setSuministraConcentrado($suministraConcentrado)
    {
        $this->suministraConcentrado = $suministraConcentrado;

        return $this;
    }

    /**
     * Get suministraConcentrado
     *
     * @return boolean 
     */
    public function getSuministraConcentrado()
    {
        return $this->suministraConcentrado;
    }

    /**
     * Set suministraConcentradoKgs
     *
     * @param string $suministraConcentradoKgs
     * @return Alimentacion
     */
    public function setSuministraConcentradoKgs($suministraConcentradoKgs)
    {
        $this->suministraConcentradoKgs = $suministraConcentradoKgs;

        return $this;
    }

    /**
     * Get suministraConcentradoKgs
     *
     * @return string 
     */
    public function getSuministraConcentradoKgs()
    {
        return $this->suministraConcentradoKgs;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Alimentacion
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
     * @return Alimentacion
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
