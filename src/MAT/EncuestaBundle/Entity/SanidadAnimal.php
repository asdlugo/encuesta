<?php

namespace MAT\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SanidadAnimal
 *
 * @ORM\Table(name="sanidad_animal", indexes={@ORM\Index(name="IDX_B76B7F674ED703C9", columns={"id_finca"})})
 * @ORM\Entity
 */
class SanidadAnimal
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="recibe_asistencia", type="boolean", nullable=true)
     */
    private $recibeAsistencia;

    /**
     * @var string
     *
     * @ORM\Column(name="asistencia_persona", type="string", length=30, nullable=true)
     */
    private $asistenciaPersona;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="aftosa_fecha", type="date", nullable=true)
     */
    private $aftosaFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rabia_fecha", type="date", nullable=true)
     */
    private $rabiaFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="leptospira_fecha", type="date", nullable=true)
     */
    private $leptospiraFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="virales_fecha", type="date", nullable=true)
     */
    private $viralesFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="clostridiales_fecha", type="date", nullable=true)
     */
    private $clostridialesFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="brucella_fecha", type="date", nullable=true)
     */
    private $brucellaFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="triple_fecha", type="date", nullable=true)
     */
    private $tripleFecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="otra_fecha", type="date", nullable=true)
     */
    private $otraFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="otra_descripcion", type="string", length=30, nullable=true)
     */
    private $otraDescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="endoparasitos_tipo", type="string", length=30, nullable=true)
     */
    private $endoparasitosTipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="endoparasitos_frecuencia", type="integer", nullable=true)
     */
    private $endoparasitosFrecuencia;

    /**
     * @var string
     *
     * @ORM\Column(name="ectoparasitos_tipo", type="string", length=30, nullable=true)
     */
    private $ectoparasitosTipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ectoparasitos_frecuencia", type="integer", nullable=true)
     */
    private $ectoparasitosFrecuencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prueba_brucella", type="date", nullable=true)
     */
    private $pruebaBrucella;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prueba_leptospira", type="date", nullable=true)
     */
    private $pruebaLeptospira;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="prueba_otra", type="date", nullable=true)
     */
    private $pruebaOtra;

    /**
     * @var string
     *
     * @ORM\Column(name="prueba_otra_descripcion", type="string", length=30, nullable=true)
     */
    private $pruebaOtraDescripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="secado_vaca_natural", type="boolean", nullable=true)
     */
    private $secadoVacaNatural;

    /**
     * @var boolean
     *
     * @ORM\Column(name="secado_vaca_inducido", type="boolean", nullable=true)
     */
    private $secadoVacaInducido;

    /**
     * @var string
     *
     * @ORM\Column(name="secado_vaca_producto", type="string", length=30, nullable=true)
     */
    private $secadoVacaProducto;

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
     * @ORM\SequenceGenerator(sequenceName="sanidad_animal_id_seq", allocationSize=1, initialValue=1)
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
     * Set recibeAsistencia
     *
     * @param boolean $recibeAsistencia
     * @return SanidadAnimal
     */
    public function setRecibeAsistencia($recibeAsistencia)
    {
        $this->recibeAsistencia = $recibeAsistencia;

        return $this;
    }

    /**
     * Get recibeAsistencia
     *
     * @return boolean 
     */
    public function getRecibeAsistencia()
    {
        return $this->recibeAsistencia;
    }

    /**
     * Set asistenciaPersona
     *
     * @param string $asistenciaPersona
     * @return SanidadAnimal
     */
    public function setAsistenciaPersona($asistenciaPersona)
    {
        $this->asistenciaPersona = $asistenciaPersona;

        return $this;
    }

    /**
     * Get asistenciaPersona
     *
     * @return string 
     */
    public function getAsistenciaPersona()
    {
        return $this->asistenciaPersona;
    }

    /**
     * Set aftosaFecha
     *
     * @param \DateTime $aftosaFecha
     * @return SanidadAnimal
     */
    public function setAftosaFecha($aftosaFecha)
    {
        $this->aftosaFecha = $aftosaFecha;

        return $this;
    }

    /**
     * Get aftosaFecha
     *
     * @return \DateTime 
     */
    public function getAftosaFecha()
    {
        return $this->aftosaFecha;
    }

    /**
     * Set rabiaFecha
     *
     * @param \DateTime $rabiaFecha
     * @return SanidadAnimal
     */
    public function setRabiaFecha($rabiaFecha)
    {
        $this->rabiaFecha = $rabiaFecha;

        return $this;
    }

    /**
     * Get rabiaFecha
     *
     * @return \DateTime 
     */
    public function getRabiaFecha()
    {
        return $this->rabiaFecha;
    }

    /**
     * Set leptospiraFecha
     *
     * @param \DateTime $leptospiraFecha
     * @return SanidadAnimal
     */
    public function setLeptospiraFecha($leptospiraFecha)
    {
        $this->leptospiraFecha = $leptospiraFecha;

        return $this;
    }

    /**
     * Get leptospiraFecha
     *
     * @return \DateTime 
     */
    public function getLeptospiraFecha()
    {
        return $this->leptospiraFecha;
    }

    /**
     * Set viralesFecha
     *
     * @param \DateTime $viralesFecha
     * @return SanidadAnimal
     */
    public function setViralesFecha($viralesFecha)
    {
        $this->viralesFecha = $viralesFecha;

        return $this;
    }

    /**
     * Get viralesFecha
     *
     * @return \DateTime 
     */
    public function getViralesFecha()
    {
        return $this->viralesFecha;
    }

    /**
     * Set clostridialesFecha
     *
     * @param \DateTime $clostridialesFecha
     * @return SanidadAnimal
     */
    public function setClostridialesFecha($clostridialesFecha)
    {
        $this->clostridialesFecha = $clostridialesFecha;

        return $this;
    }

    /**
     * Get clostridialesFecha
     *
     * @return \DateTime 
     */
    public function getClostridialesFecha()
    {
        return $this->clostridialesFecha;
    }

    /**
     * Set brucellaFecha
     *
     * @param \DateTime $brucellaFecha
     * @return SanidadAnimal
     */
    public function setBrucellaFecha($brucellaFecha)
    {
        $this->brucellaFecha = $brucellaFecha;

        return $this;
    }

    /**
     * Get brucellaFecha
     *
     * @return \DateTime 
     */
    public function getBrucellaFecha()
    {
        return $this->brucellaFecha;
    }

    /**
     * Set tripleFecha
     *
     * @param \DateTime $tripleFecha
     * @return SanidadAnimal
     */
    public function setTripleFecha($tripleFecha)
    {
        $this->tripleFecha = $tripleFecha;

        return $this;
    }

    /**
     * Get tripleFecha
     *
     * @return \DateTime 
     */
    public function getTripleFecha()
    {
        return $this->tripleFecha;
    }

    /**
     * Set otraFecha
     *
     * @param \DateTime $otraFecha
     * @return SanidadAnimal
     */
    public function setOtraFecha($otraFecha)
    {
        $this->otraFecha = $otraFecha;

        return $this;
    }

    /**
     * Get otraFecha
     *
     * @return \DateTime 
     */
    public function getOtraFecha()
    {
        return $this->otraFecha;
    }

    /**
     * Set otraDescripcion
     *
     * @param string $otraDescripcion
     * @return SanidadAnimal
     */
    public function setOtraDescripcion($otraDescripcion)
    {
        $this->otraDescripcion = $otraDescripcion;

        return $this;
    }

    /**
     * Get otraDescripcion
     *
     * @return string 
     */
    public function getOtraDescripcion()
    {
        return $this->otraDescripcion;
    }

    /**
     * Set endoparasitosTipo
     *
     * @param string $endoparasitosTipo
     * @return SanidadAnimal
     */
    public function setEndoparasitosTipo($endoparasitosTipo)
    {
        $this->endoparasitosTipo = $endoparasitosTipo;

        return $this;
    }

    /**
     * Get endoparasitosTipo
     *
     * @return string 
     */
    public function getEndoparasitosTipo()
    {
        return $this->endoparasitosTipo;
    }

    /**
     * Set endoparasitosFrecuencia
     *
     * @param integer $endoparasitosFrecuencia
     * @return SanidadAnimal
     */
    public function setEndoparasitosFrecuencia($endoparasitosFrecuencia)
    {
        $this->endoparasitosFrecuencia = $endoparasitosFrecuencia;

        return $this;
    }

    /**
     * Get endoparasitosFrecuencia
     *
     * @return integer 
     */
    public function getEndoparasitosFrecuencia()
    {
        return $this->endoparasitosFrecuencia;
    }

    /**
     * Set ectoparasitosTipo
     *
     * @param string $ectoparasitosTipo
     * @return SanidadAnimal
     */
    public function setEctoparasitosTipo($ectoparasitosTipo)
    {
        $this->ectoparasitosTipo = $ectoparasitosTipo;

        return $this;
    }

    /**
     * Get ectoparasitosTipo
     *
     * @return string 
     */
    public function getEctoparasitosTipo()
    {
        return $this->ectoparasitosTipo;
    }

    /**
     * Set ectoparasitosFrecuencia
     *
     * @param integer $ectoparasitosFrecuencia
     * @return SanidadAnimal
     */
    public function setEctoparasitosFrecuencia($ectoparasitosFrecuencia)
    {
        $this->ectoparasitosFrecuencia = $ectoparasitosFrecuencia;

        return $this;
    }

    /**
     * Get ectoparasitosFrecuencia
     *
     * @return integer 
     */
    public function getEctoparasitosFrecuencia()
    {
        return $this->ectoparasitosFrecuencia;
    }

    /**
     * Set pruebaBrucella
     *
     * @param \DateTime $pruebaBrucella
     * @return SanidadAnimal
     */
    public function setPruebaBrucella($pruebaBrucella)
    {
        $this->pruebaBrucella = $pruebaBrucella;

        return $this;
    }

    /**
     * Get pruebaBrucella
     *
     * @return \DateTime 
     */
    public function getPruebaBrucella()
    {
        return $this->pruebaBrucella;
    }

    /**
     * Set pruebaLeptospira
     *
     * @param \DateTime $pruebaLeptospira
     * @return SanidadAnimal
     */
    public function setPruebaLeptospira($pruebaLeptospira)
    {
        $this->pruebaLeptospira = $pruebaLeptospira;

        return $this;
    }

    /**
     * Get pruebaLeptospira
     *
     * @return \DateTime 
     */
    public function getPruebaLeptospira()
    {
        return $this->pruebaLeptospira;
    }

    /**
     * Set pruebaOtra
     *
     * @param \DateTime $pruebaOtra
     * @return SanidadAnimal
     */
    public function setPruebaOtra($pruebaOtra)
    {
        $this->pruebaOtra = $pruebaOtra;

        return $this;
    }

    /**
     * Get pruebaOtra
     *
     * @return \DateTime 
     */
    public function getPruebaOtra()
    {
        return $this->pruebaOtra;
    }

    /**
     * Set pruebaOtraDescripcion
     *
     * @param string $pruebaOtraDescripcion
     * @return SanidadAnimal
     */
    public function setPruebaOtraDescripcion($pruebaOtraDescripcion)
    {
        $this->pruebaOtraDescripcion = $pruebaOtraDescripcion;

        return $this;
    }

    /**
     * Get pruebaOtraDescripcion
     *
     * @return string 
     */
    public function getPruebaOtraDescripcion()
    {
        return $this->pruebaOtraDescripcion;
    }

    /**
     * Set secadoVacaNatural
     *
     * @param boolean $secadoVacaNatural
     * @return SanidadAnimal
     */
    public function setSecadoVacaNatural($secadoVacaNatural)
    {
        $this->secadoVacaNatural = $secadoVacaNatural;

        return $this;
    }

    /**
     * Get secadoVacaNatural
     *
     * @return boolean 
     */
    public function getSecadoVacaNatural()
    {
        return $this->secadoVacaNatural;
    }

    /**
     * Set secadoVacaInducido
     *
     * @param boolean $secadoVacaInducido
     * @return SanidadAnimal
     */
    public function setSecadoVacaInducido($secadoVacaInducido)
    {
        $this->secadoVacaInducido = $secadoVacaInducido;

        return $this;
    }

    /**
     * Get secadoVacaInducido
     *
     * @return boolean 
     */
    public function getSecadoVacaInducido()
    {
        return $this->secadoVacaInducido;
    }

    /**
     * Set secadoVacaProducto
     *
     * @param string $secadoVacaProducto
     * @return SanidadAnimal
     */
    public function setSecadoVacaProducto($secadoVacaProducto)
    {
        $this->secadoVacaProducto = $secadoVacaProducto;

        return $this;
    }

    /**
     * Get secadoVacaProducto
     *
     * @return string 
     */
    public function getSecadoVacaProducto()
    {
        return $this->secadoVacaProducto;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return SanidadAnimal
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
     * @return SanidadAnimal
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
