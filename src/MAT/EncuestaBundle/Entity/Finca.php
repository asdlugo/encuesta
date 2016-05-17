<?php

namespace MAT\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Finca
 *
 * @ORM\Table(name="finca")
 * @ORM\Entity
 */
class Finca
{
    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion", type="text", nullable=true)
     */
    private $ubicacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_parroquia", type="bigint", nullable=true)
     */
    private $idParroquia;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_sector", type="bigint", nullable=true)
     */
    private $idSector;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_caserio", type="bigint", nullable=true)
     */
    private $idCaserio;

    /**
     * @var string
     *
     * @ORM\Column(name="gps_utm_norte", type="string", length=255, nullable=true)
     */
    private $gpsUtmNorte;

    /**
     * @var string
     *
     * @ORM\Column(name="gps_utm_este", type="string", length=255, nullable=true)
     */
    private $gpsUtmEste;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_condicion_via", type="bigint", nullable=true)
     */
    private $idCondicionVia;

    /**
     * @var string
     *
     * @ORM\Column(name="documento_inti", type="string", length=255, nullable=true)
     */
    private $documentoInti;

    /**
     * @var string
     *
     * @ORM\Column(name="hierro_insai", type="string", length=255, nullable=true)
     */
    private $hierroInsai;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", nullable=true)
     */
    private $visible;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="finca_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;



    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     * @return Finca
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set idParroquia
     *
     * @param integer $idParroquia
     * @return Finca
     */
    public function setIdParroquia($idParroquia)
    {
        $this->idParroquia = $idParroquia;

        return $this;
    }

    /**
     * Get idParroquia
     *
     * @return integer 
     */
    public function getIdParroquia()
    {
        return $this->idParroquia;
    }

    /**
     * Set idSector
     *
     * @param integer $idSector
     * @return Finca
     */
    public function setIdSector($idSector)
    {
        $this->idSector = $idSector;

        return $this;
    }

    /**
     * Get idSector
     *
     * @return integer 
     */
    public function getIdSector()
    {
        return $this->idSector;
    }

    /**
     * Set idCaserio
     *
     * @param integer $idCaserio
     * @return Finca
     */
    public function setIdCaserio($idCaserio)
    {
        $this->idCaserio = $idCaserio;

        return $this;
    }

    /**
     * Get idCaserio
     *
     * @return integer 
     */
    public function getIdCaserio()
    {
        return $this->idCaserio;
    }

    /**
     * Set gpsUtmNorte
     *
     * @param string $gpsUtmNorte
     * @return Finca
     */
    public function setGpsUtmNorte($gpsUtmNorte)
    {
        $this->gpsUtmNorte = $gpsUtmNorte;

        return $this;
    }

    /**
     * Get gpsUtmNorte
     *
     * @return string 
     */
    public function getGpsUtmNorte()
    {
        return $this->gpsUtmNorte;
    }

    /**
     * Set gpsUtmEste
     *
     * @param string $gpsUtmEste
     * @return Finca
     */
    public function setGpsUtmEste($gpsUtmEste)
    {
        $this->gpsUtmEste = $gpsUtmEste;

        return $this;
    }

    /**
     * Get gpsUtmEste
     *
     * @return string 
     */
    public function getGpsUtmEste()
    {
        return $this->gpsUtmEste;
    }

    /**
     * Set idCondicionVia
     *
     * @param integer $idCondicionVia
     * @return Finca
     */
    public function setIdCondicionVia($idCondicionVia)
    {
        $this->idCondicionVia = $idCondicionVia;

        return $this;
    }

    /**
     * Get idCondicionVia
     *
     * @return integer 
     */
    public function getIdCondicionVia()
    {
        return $this->idCondicionVia;
    }

    /**
     * Set documentoInti
     *
     * @param string $documentoInti
     * @return Finca
     */
    public function setDocumentoInti($documentoInti)
    {
        $this->documentoInti = $documentoInti;

        return $this;
    }

    /**
     * Get documentoInti
     *
     * @return string 
     */
    public function getDocumentoInti()
    {
        return $this->documentoInti;
    }

    /**
     * Set hierroInsai
     *
     * @param string $hierroInsai
     * @return Finca
     */
    public function setHierroInsai($hierroInsai)
    {
        $this->hierroInsai = $hierroInsai;

        return $this;
    }

    /**
     * Get hierroInsai
     *
     * @return string 
     */
    public function getHierroInsai()
    {
        return $this->hierroInsai;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return Finca
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Finca
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
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
	    public function __toString()
    {
        return $this->nombre;
    }
}
