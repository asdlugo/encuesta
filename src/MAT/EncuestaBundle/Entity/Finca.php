<?php

namespace MAT\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Finca
 */
class Finca
{
    /**
     * @var string
     */
    private $ubicacion;

    /**
     * @var integer
     */
    private $idParroquia;

    /**
     * @var integer
     */
    private $idSector;

    /**
     * @var integer
     */
    private $idCaserio;

    /**
     * @var string
     */
    private $gpsUtmNorte;

    /**
     * @var string
     */
    private $gpsUtmEste;

    /**
     * @var string
     */
    private $documentoInti;

    /**
     * @var string
     */
    private $hierroInsai;

    /**
     * @var boolean
     */
    private $visible;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MAT\EncuestaBundle\Entity\CondicionVia
     */
    private $idCondicionVia;


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

    /**
     * Set idCondicionVia
     *
     * @param \MAT\EncuestaBundle\Entity\CondicionVia $idCondicionVia
     * @return Finca
     */
    public function setIdCondicionVia(\MAT\EncuestaBundle\Entity\CondicionVia $idCondicionVia = null)
    {
        $this->idCondicionVia = $idCondicionVia;

        return $this;
    }

    /**
     * Get idCondicionVia
     *
     * @return \MAT\EncuestaBundle\Entity\CondicionVia 
     */
    public function getIdCondicionVia()
    {
        return $this->idCondicionVia;
    }
}
