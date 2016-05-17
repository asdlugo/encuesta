<?php

namespace MAT\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OtrasEspecie
 *
 * @ORM\Table(name="otras_especie", indexes={@ORM\Index(name="idx_be9ca2f74ed703c9", columns={"id_finca"})})
 * @ORM\Entity
 */
class OtrasEspecie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_bufalinos_butoros", type="integer", nullable=true)
     */
    private $numBufalinosButoros;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_bufalinos_bufalas", type="integer", nullable=true)
     */
    private $numBufalinosBufalas;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_bufalinos_bubillos", type="integer", nullable=true)
     */
    private $numBufalinosBubillos;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_bufalinos_bumautes", type="integer", nullable=true)
     */
    private $numBufalinosBumautes;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_bufalinos_bucerros", type="integer", nullable=true)
     */
    private $numBufalinosBucerros;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_caprinos_cabrio", type="integer", nullable=true)
     */
    private $numCaprinosCabrio;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_caprinos_cabra", type="integer", nullable=true)
     */
    private $numCaprinosCabra;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_caprinos_cabritones", type="integer", nullable=true)
     */
    private $numCaprinosCabritones;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_caprinos_cabritonas", type="integer", nullable=true)
     */
    private $numCaprinosCabritonas;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_caprinos_cabritos", type="integer", nullable=true)
     */
    private $numCaprinosCabritos;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_ovinos_carnero", type="integer", nullable=true)
     */
    private $numOvinosCarnero;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_ovinos_oveja", type="integer", nullable=true)
     */
    private $numOvinosOveja;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_ovinos_borregos", type="integer", nullable=true)
     */
    private $numOvinosBorregos;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_ovinos_borregas", type="integer", nullable=true)
     */
    private $numOvinosBorregas;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_ovinos_corderos", type="integer", nullable=true)
     */
    private $numOvinosCorderos;

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
     * @ORM\SequenceGenerator(sequenceName="otras_especie_id_seq", allocationSize=1, initialValue=1)
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
     * Set numBufalinosButoros
     *
     * @param integer $numBufalinosButoros
     * @return OtrasEspecie
     */
    public function setNumBufalinosButoros($numBufalinosButoros)
    {
        $this->numBufalinosButoros = $numBufalinosButoros;

        return $this;
    }

    /**
     * Get numBufalinosButoros
     *
     * @return integer 
     */
    public function getNumBufalinosButoros()
    {
        return $this->numBufalinosButoros;
    }

    /**
     * Set numBufalinosBufalas
     *
     * @param integer $numBufalinosBufalas
     * @return OtrasEspecie
     */
    public function setNumBufalinosBufalas($numBufalinosBufalas)
    {
        $this->numBufalinosBufalas = $numBufalinosBufalas;

        return $this;
    }

    /**
     * Get numBufalinosBufalas
     *
     * @return integer 
     */
    public function getNumBufalinosBufalas()
    {
        return $this->numBufalinosBufalas;
    }

    /**
     * Set numBufalinosBubillos
     *
     * @param integer $numBufalinosBubillos
     * @return OtrasEspecie
     */
    public function setNumBufalinosBubillos($numBufalinosBubillos)
    {
        $this->numBufalinosBubillos = $numBufalinosBubillos;

        return $this;
    }

    /**
     * Get numBufalinosBubillos
     *
     * @return integer 
     */
    public function getNumBufalinosBubillos()
    {
        return $this->numBufalinosBubillos;
    }

    /**
     * Set numBufalinosBumautes
     *
     * @param integer $numBufalinosBumautes
     * @return OtrasEspecie
     */
    public function setNumBufalinosBumautes($numBufalinosBumautes)
    {
        $this->numBufalinosBumautes = $numBufalinosBumautes;

        return $this;
    }

    /**
     * Get numBufalinosBumautes
     *
     * @return integer 
     */
    public function getNumBufalinosBumautes()
    {
        return $this->numBufalinosBumautes;
    }

    /**
     * Set numBufalinosBucerros
     *
     * @param integer $numBufalinosBucerros
     * @return OtrasEspecie
     */
    public function setNumBufalinosBucerros($numBufalinosBucerros)
    {
        $this->numBufalinosBucerros = $numBufalinosBucerros;

        return $this;
    }

    /**
     * Get numBufalinosBucerros
     *
     * @return integer 
     */
    public function getNumBufalinosBucerros()
    {
        return $this->numBufalinosBucerros;
    }

    /**
     * Set numCaprinosCabrio
     *
     * @param integer $numCaprinosCabrio
     * @return OtrasEspecie
     */
    public function setNumCaprinosCabrio($numCaprinosCabrio)
    {
        $this->numCaprinosCabrio = $numCaprinosCabrio;

        return $this;
    }

    /**
     * Get numCaprinosCabrio
     *
     * @return integer 
     */
    public function getNumCaprinosCabrio()
    {
        return $this->numCaprinosCabrio;
    }

    /**
     * Set numCaprinosCabra
     *
     * @param integer $numCaprinosCabra
     * @return OtrasEspecie
     */
    public function setNumCaprinosCabra($numCaprinosCabra)
    {
        $this->numCaprinosCabra = $numCaprinosCabra;

        return $this;
    }

    /**
     * Get numCaprinosCabra
     *
     * @return integer 
     */
    public function getNumCaprinosCabra()
    {
        return $this->numCaprinosCabra;
    }

    /**
     * Set numCaprinosCabritones
     *
     * @param integer $numCaprinosCabritones
     * @return OtrasEspecie
     */
    public function setNumCaprinosCabritones($numCaprinosCabritones)
    {
        $this->numCaprinosCabritones = $numCaprinosCabritones;

        return $this;
    }

    /**
     * Get numCaprinosCabritones
     *
     * @return integer 
     */
    public function getNumCaprinosCabritones()
    {
        return $this->numCaprinosCabritones;
    }

    /**
     * Set numCaprinosCabritonas
     *
     * @param integer $numCaprinosCabritonas
     * @return OtrasEspecie
     */
    public function setNumCaprinosCabritonas($numCaprinosCabritonas)
    {
        $this->numCaprinosCabritonas = $numCaprinosCabritonas;

        return $this;
    }

    /**
     * Get numCaprinosCabritonas
     *
     * @return integer 
     */
    public function getNumCaprinosCabritonas()
    {
        return $this->numCaprinosCabritonas;
    }

    /**
     * Set numCaprinosCabritos
     *
     * @param integer $numCaprinosCabritos
     * @return OtrasEspecie
     */
    public function setNumCaprinosCabritos($numCaprinosCabritos)
    {
        $this->numCaprinosCabritos = $numCaprinosCabritos;

        return $this;
    }

    /**
     * Get numCaprinosCabritos
     *
     * @return integer 
     */
    public function getNumCaprinosCabritos()
    {
        return $this->numCaprinosCabritos;
    }

    /**
     * Set numOvinosCarnero
     *
     * @param integer $numOvinosCarnero
     * @return OtrasEspecie
     */
    public function setNumOvinosCarnero($numOvinosCarnero)
    {
        $this->numOvinosCarnero = $numOvinosCarnero;

        return $this;
    }

    /**
     * Get numOvinosCarnero
     *
     * @return integer 
     */
    public function getNumOvinosCarnero()
    {
        return $this->numOvinosCarnero;
    }

    /**
     * Set numOvinosOveja
     *
     * @param integer $numOvinosOveja
     * @return OtrasEspecie
     */
    public function setNumOvinosOveja($numOvinosOveja)
    {
        $this->numOvinosOveja = $numOvinosOveja;

        return $this;
    }

    /**
     * Get numOvinosOveja
     *
     * @return integer 
     */
    public function getNumOvinosOveja()
    {
        return $this->numOvinosOveja;
    }

    /**
     * Set numOvinosBorregos
     *
     * @param integer $numOvinosBorregos
     * @return OtrasEspecie
     */
    public function setNumOvinosBorregos($numOvinosBorregos)
    {
        $this->numOvinosBorregos = $numOvinosBorregos;

        return $this;
    }

    /**
     * Get numOvinosBorregos
     *
     * @return integer 
     */
    public function getNumOvinosBorregos()
    {
        return $this->numOvinosBorregos;
    }

    /**
     * Set numOvinosBorregas
     *
     * @param integer $numOvinosBorregas
     * @return OtrasEspecie
     */
    public function setNumOvinosBorregas($numOvinosBorregas)
    {
        $this->numOvinosBorregas = $numOvinosBorregas;

        return $this;
    }

    /**
     * Get numOvinosBorregas
     *
     * @return integer 
     */
    public function getNumOvinosBorregas()
    {
        return $this->numOvinosBorregas;
    }

    /**
     * Set numOvinosCorderos
     *
     * @param integer $numOvinosCorderos
     * @return OtrasEspecie
     */
    public function setNumOvinosCorderos($numOvinosCorderos)
    {
        $this->numOvinosCorderos = $numOvinosCorderos;

        return $this;
    }

    /**
     * Get numOvinosCorderos
     *
     * @return integer 
     */
    public function getNumOvinosCorderos()
    {
        return $this->numOvinosCorderos;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return OtrasEspecie
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
     * @return OtrasEspecie
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
