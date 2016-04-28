<?php

namespace MAT\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actividad
 *
 * @ORM\Table(name="actividad", indexes={@ORM\Index(name="IDX_8DF2BD064ED703C9", columns={"id_finca"})})
 * @ORM\Entity
 */
class Actividad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="corrales_cantidad", type="integer", nullable=true)
     */
    private $corralesCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="corrales_observaciones", type="text", nullable=true)
     */
    private $corralesObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="manga_cantidad", type="integer", nullable=true)
     */
    private $mangaCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="manga_observaciones", type="text", nullable=true)
     */
    private $mangaObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="bretes_cantidad", type="integer", nullable=true)
     */
    private $bretesCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="bretes_observaciones", type="text", nullable=true)
     */
    private $bretesObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="romana_cantidad", type="integer", nullable=true)
     */
    private $romanaCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="romana_observaciones", type="text", nullable=true)
     */
    private $romanaObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="sala_ordeno_cantidad", type="integer", nullable=true)
     */
    private $salaOrdenoCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="sala_ordeno_observaciones", type="text", nullable=true)
     */
    private $salaOrdenoObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="bebederos_cantidad", type="integer", nullable=true)
     */
    private $bebederosCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="bebederos_observaciones", type="text", nullable=true)
     */
    private $bebederosObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="comederos_cantidad", type="integer", nullable=true)
     */
    private $comederosCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="comederos_observaciones", type="text", nullable=true)
     */
    private $comederosObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="cerco_electrico_cantidad", type="integer", nullable=true)
     */
    private $cercoElectricoCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="cerco_electrico_observaciones", type="text", nullable=true)
     */
    private $cercoElectricoObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_potreros_cantidad", type="integer", nullable=true)
     */
    private $numPotrerosCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="num_potreros_observaciones", type="text", nullable=true)
     */
    private $numPotrerosObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="has_x_potreros_cantidad", type="integer", nullable=true)
     */
    private $hasXPotrerosCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="has_x_potreros_observaciones", type="text", nullable=true)
     */
    private $hasXPotrerosObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="planta_electrica_cantidad", type="integer", nullable=true)
     */
    private $plantaElectricaCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="planta_electrica_observaciones", type="text", nullable=true)
     */
    private $plantaElectricaObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="tractores_4x2_cantidad", type="integer", nullable=true)
     */
    private $tractores4x2Cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="tractores_4x2_observaciones", type="integer", nullable=true)
     */
    private $tractores4x2Observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="tractores_4x4_cantidad", type="integer", nullable=true)
     */
    private $tractores4x4Cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="tractores_4x4_observaciones", type="integer", nullable=true)
     */
    private $tractores4x4Observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="galpones_cantidad", type="integer", nullable=true)
     */
    private $galponesCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="galpones_observaciones", type="text", nullable=true)
     */
    private $galponesObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="silos_cantidad", type="integer", nullable=true)
     */
    private $silosCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="silos_observaciones", type="text", nullable=true)
     */
    private $silosObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="sembradora_cantidad", type="integer", nullable=true)
     */
    private $sembradoraCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="sembradora_observaciones", type="text", nullable=true)
     */
    private $sembradoraObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="cosechadora_cantidad", type="integer", nullable=true)
     */
    private $cosechadoraCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="cosechadora_observaciones", type="text", nullable=true)
     */
    private $cosechadoraObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="asperjadora_cantidad", type="integer", nullable=true)
     */
    private $asperjadoraCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="asperjadora_observaciones", type="text", nullable=true)
     */
    private $asperjadoraObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="carreta_zorra_cantidad", type="integer", nullable=true)
     */
    private $carretaZorraCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="carreta_zorra_observaciones", type="text", nullable=true)
     */
    private $carretaZorraObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="rotativa_cantidad", type="integer", nullable=true)
     */
    private $rotativaCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="rotativa_observaciones", type="text", nullable=true)
     */
    private $rotativaObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="rolo_cantidad", type="integer", nullable=true)
     */
    private $roloCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="rolo_observaciones", type="text", nullable=true)
     */
    private $roloObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="arado_cantidad", type="integer", nullable=true)
     */
    private $aradoCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="arado_observaciones", type="text", nullable=true)
     */
    private $aradoObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="surcadora_cantidad", type="integer", nullable=true)
     */
    private $surcadoraCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="surcadora_observaciones", type="text", nullable=true)
     */
    private $surcadoraObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="abonadora_cantidad", type="integer", nullable=true)
     */
    private $abonadoraCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="abonadora_observaciones", type="text", nullable=true)
     */
    private $abonadoraObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="embutidora_cantidad", type="integer", nullable=true)
     */
    private $embutidoraCantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="embutidora_observaciones", type="float", precision=10, scale=0, nullable=true)
     */
    private $embutidoraObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="vagon_forrajero_cantidad", type="integer", nullable=true)
     */
    private $vagonForrajeroCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="vagon_forrajero_observaciones", type="text", nullable=true)
     */
    private $vagonForrajeroObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="bolsas_ensilar_cantidad", type="integer", nullable=true)
     */
    private $bolsasEnsilarCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="bolsas_ensilar_observaciones", type="text", nullable=true)
     */
    private $bolsasEnsilarObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="mecanico_cantidad", type="integer", nullable=true)
     */
    private $mecanicoCantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="mecanico_observaciones", type="integer", nullable=true)
     */
    private $mecanicoObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="manual_cantidad", type="integer", nullable=true)
     */
    private $manualCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="manual_observaciones", type="text", nullable=true)
     */
    private $manualObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="tanque_frio_cantidad", type="integer", nullable=true)
     */
    private $tanqueFrioCantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="tanque_frio_observaciones", type="float", precision=10, scale=0, nullable=true)
     */
    private $tanqueFrioObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantaras_cantidad", type="integer", nullable=true)
     */
    private $cantarasCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="cantaras_observaciones", type="text", nullable=true)
     */
    private $cantarasObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="filtros_tela_cantidad", type="integer", nullable=true)
     */
    private $filtrosTelaCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="filtros_tela_observaciones", type="text", nullable=true)
     */
    private $filtrosTelaObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="paletas_cmt_cantidad", type="integer", nullable=true)
     */
    private $paletasCmtCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="paletas_cmt_observaciones", type="text", nullable=true)
     */
    private $paletasCmtObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="paletas_fondo_negro_cantidad", type="integer", nullable=true)
     */
    private $paletasFondoNegroCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="paletas_fondo_negro_observaciones", type="text", nullable=true)
     */
    private $paletasFondoNegroObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="reactivo_cmt_cantidad", type="integer", nullable=true)
     */
    private $reactivoCmtCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="reactivo_cmt_observaciones", type="text", nullable=true)
     */
    private $reactivoCmtObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordeno_techo_cantidad", type="integer", nullable=true)
     */
    private $ordenoTechoCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="ordeno_techo_observaciones", type="text", nullable=true)
     */
    private $ordenoTechoObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordeno_piso_cemento_cantidad", type="integer", nullable=true)
     */
    private $ordenoPisoCementoCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="ordeno_piso_cemento_observaciones", type="text", nullable=true)
     */
    private $ordenoPisoCementoObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="tanque_nitrogeno_cantidad", type="integer", nullable=true)
     */
    private $tanqueNitrogenoCantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="tanque_nitrogeno_observaciones", type="integer", nullable=true)
     */
    private $tanqueNitrogenoObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="caja_inseminacion_cantidad", type="integer", nullable=true)
     */
    private $cajaInseminacionCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="caja_inseminacion_observacion", type="text", nullable=true)
     */
    private $cajaInseminacionObservacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="pistoleta_inseminacion_cantidad", type="integer", nullable=true)
     */
    private $pistoletaInseminacionCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="pistoleta_inseminacion_observaciones", type="text", nullable=true)
     */
    private $pistoletaInseminacionObservaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="termo_descongelar_pajuelas_cantidad", type="integer", nullable=true)
     */
    private $termoDescongelarPajuelasCantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="termo_descongelar_pajuelas_observaciones", type="text", nullable=true)
     */
    private $termoDescongelarPajuelasObservaciones;

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
     * @ORM\SequenceGenerator(sequenceName="actividad_id_seq", allocationSize=1, initialValue=1)
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
     * Set corralesCantidad
     *
     * @param integer $corralesCantidad
     * @return Actividad
     */
    public function setCorralesCantidad($corralesCantidad)
    {
        $this->corralesCantidad = $corralesCantidad;

        return $this;
    }

    /**
     * Get corralesCantidad
     *
     * @return integer 
     */
    public function getCorralesCantidad()
    {
        return $this->corralesCantidad;
    }

    /**
     * Set corralesObservaciones
     *
     * @param string $corralesObservaciones
     * @return Actividad
     */
    public function setCorralesObservaciones($corralesObservaciones)
    {
        $this->corralesObservaciones = $corralesObservaciones;

        return $this;
    }

    /**
     * Get corralesObservaciones
     *
     * @return string 
     */
    public function getCorralesObservaciones()
    {
        return $this->corralesObservaciones;
    }

    /**
     * Set mangaCantidad
     *
     * @param integer $mangaCantidad
     * @return Actividad
     */
    public function setMangaCantidad($mangaCantidad)
    {
        $this->mangaCantidad = $mangaCantidad;

        return $this;
    }

    /**
     * Get mangaCantidad
     *
     * @return integer 
     */
    public function getMangaCantidad()
    {
        return $this->mangaCantidad;
    }

    /**
     * Set mangaObservaciones
     *
     * @param string $mangaObservaciones
     * @return Actividad
     */
    public function setMangaObservaciones($mangaObservaciones)
    {
        $this->mangaObservaciones = $mangaObservaciones;

        return $this;
    }

    /**
     * Get mangaObservaciones
     *
     * @return string 
     */
    public function getMangaObservaciones()
    {
        return $this->mangaObservaciones;
    }

    /**
     * Set bretesCantidad
     *
     * @param integer $bretesCantidad
     * @return Actividad
     */
    public function setBretesCantidad($bretesCantidad)
    {
        $this->bretesCantidad = $bretesCantidad;

        return $this;
    }

    /**
     * Get bretesCantidad
     *
     * @return integer 
     */
    public function getBretesCantidad()
    {
        return $this->bretesCantidad;
    }

    /**
     * Set bretesObservaciones
     *
     * @param string $bretesObservaciones
     * @return Actividad
     */
    public function setBretesObservaciones($bretesObservaciones)
    {
        $this->bretesObservaciones = $bretesObservaciones;

        return $this;
    }

    /**
     * Get bretesObservaciones
     *
     * @return string 
     */
    public function getBretesObservaciones()
    {
        return $this->bretesObservaciones;
    }

    /**
     * Set romanaCantidad
     *
     * @param integer $romanaCantidad
     * @return Actividad
     */
    public function setRomanaCantidad($romanaCantidad)
    {
        $this->romanaCantidad = $romanaCantidad;

        return $this;
    }

    /**
     * Get romanaCantidad
     *
     * @return integer 
     */
    public function getRomanaCantidad()
    {
        return $this->romanaCantidad;
    }

    /**
     * Set romanaObservaciones
     *
     * @param string $romanaObservaciones
     * @return Actividad
     */
    public function setRomanaObservaciones($romanaObservaciones)
    {
        $this->romanaObservaciones = $romanaObservaciones;

        return $this;
    }

    /**
     * Get romanaObservaciones
     *
     * @return string 
     */
    public function getRomanaObservaciones()
    {
        return $this->romanaObservaciones;
    }

    /**
     * Set salaOrdenoCantidad
     *
     * @param integer $salaOrdenoCantidad
     * @return Actividad
     */
    public function setSalaOrdenoCantidad($salaOrdenoCantidad)
    {
        $this->salaOrdenoCantidad = $salaOrdenoCantidad;

        return $this;
    }

    /**
     * Get salaOrdenoCantidad
     *
     * @return integer 
     */
    public function getSalaOrdenoCantidad()
    {
        return $this->salaOrdenoCantidad;
    }

    /**
     * Set salaOrdenoObservaciones
     *
     * @param string $salaOrdenoObservaciones
     * @return Actividad
     */
    public function setSalaOrdenoObservaciones($salaOrdenoObservaciones)
    {
        $this->salaOrdenoObservaciones = $salaOrdenoObservaciones;

        return $this;
    }

    /**
     * Get salaOrdenoObservaciones
     *
     * @return string 
     */
    public function getSalaOrdenoObservaciones()
    {
        return $this->salaOrdenoObservaciones;
    }

    /**
     * Set bebederosCantidad
     *
     * @param integer $bebederosCantidad
     * @return Actividad
     */
    public function setBebederosCantidad($bebederosCantidad)
    {
        $this->bebederosCantidad = $bebederosCantidad;

        return $this;
    }

    /**
     * Get bebederosCantidad
     *
     * @return integer 
     */
    public function getBebederosCantidad()
    {
        return $this->bebederosCantidad;
    }

    /**
     * Set bebederosObservaciones
     *
     * @param string $bebederosObservaciones
     * @return Actividad
     */
    public function setBebederosObservaciones($bebederosObservaciones)
    {
        $this->bebederosObservaciones = $bebederosObservaciones;

        return $this;
    }

    /**
     * Get bebederosObservaciones
     *
     * @return string 
     */
    public function getBebederosObservaciones()
    {
        return $this->bebederosObservaciones;
    }

    /**
     * Set comederosCantidad
     *
     * @param integer $comederosCantidad
     * @return Actividad
     */
    public function setComederosCantidad($comederosCantidad)
    {
        $this->comederosCantidad = $comederosCantidad;

        return $this;
    }

    /**
     * Get comederosCantidad
     *
     * @return integer 
     */
    public function getComederosCantidad()
    {
        return $this->comederosCantidad;
    }

    /**
     * Set comederosObservaciones
     *
     * @param string $comederosObservaciones
     * @return Actividad
     */
    public function setComederosObservaciones($comederosObservaciones)
    {
        $this->comederosObservaciones = $comederosObservaciones;

        return $this;
    }

    /**
     * Get comederosObservaciones
     *
     * @return string 
     */
    public function getComederosObservaciones()
    {
        return $this->comederosObservaciones;
    }

    /**
     * Set cercoElectricoCantidad
     *
     * @param integer $cercoElectricoCantidad
     * @return Actividad
     */
    public function setCercoElectricoCantidad($cercoElectricoCantidad)
    {
        $this->cercoElectricoCantidad = $cercoElectricoCantidad;

        return $this;
    }

    /**
     * Get cercoElectricoCantidad
     *
     * @return integer 
     */
    public function getCercoElectricoCantidad()
    {
        return $this->cercoElectricoCantidad;
    }

    /**
     * Set cercoElectricoObservaciones
     *
     * @param string $cercoElectricoObservaciones
     * @return Actividad
     */
    public function setCercoElectricoObservaciones($cercoElectricoObservaciones)
    {
        $this->cercoElectricoObservaciones = $cercoElectricoObservaciones;

        return $this;
    }

    /**
     * Get cercoElectricoObservaciones
     *
     * @return string 
     */
    public function getCercoElectricoObservaciones()
    {
        return $this->cercoElectricoObservaciones;
    }

    /**
     * Set numPotrerosCantidad
     *
     * @param integer $numPotrerosCantidad
     * @return Actividad
     */
    public function setNumPotrerosCantidad($numPotrerosCantidad)
    {
        $this->numPotrerosCantidad = $numPotrerosCantidad;

        return $this;
    }

    /**
     * Get numPotrerosCantidad
     *
     * @return integer 
     */
    public function getNumPotrerosCantidad()
    {
        return $this->numPotrerosCantidad;
    }

    /**
     * Set numPotrerosObservaciones
     *
     * @param string $numPotrerosObservaciones
     * @return Actividad
     */
    public function setNumPotrerosObservaciones($numPotrerosObservaciones)
    {
        $this->numPotrerosObservaciones = $numPotrerosObservaciones;

        return $this;
    }

    /**
     * Get numPotrerosObservaciones
     *
     * @return string 
     */
    public function getNumPotrerosObservaciones()
    {
        return $this->numPotrerosObservaciones;
    }

    /**
     * Set hasXPotrerosCantidad
     *
     * @param integer $hasXPotrerosCantidad
     * @return Actividad
     */
    public function setHasXPotrerosCantidad($hasXPotrerosCantidad)
    {
        $this->hasXPotrerosCantidad = $hasXPotrerosCantidad;

        return $this;
    }

    /**
     * Get hasXPotrerosCantidad
     *
     * @return integer 
     */
    public function getHasXPotrerosCantidad()
    {
        return $this->hasXPotrerosCantidad;
    }

    /**
     * Set hasXPotrerosObservaciones
     *
     * @param string $hasXPotrerosObservaciones
     * @return Actividad
     */
    public function setHasXPotrerosObservaciones($hasXPotrerosObservaciones)
    {
        $this->hasXPotrerosObservaciones = $hasXPotrerosObservaciones;

        return $this;
    }

    /**
     * Get hasXPotrerosObservaciones
     *
     * @return string 
     */
    public function getHasXPotrerosObservaciones()
    {
        return $this->hasXPotrerosObservaciones;
    }

    /**
     * Set plantaElectricaCantidad
     *
     * @param integer $plantaElectricaCantidad
     * @return Actividad
     */
    public function setPlantaElectricaCantidad($plantaElectricaCantidad)
    {
        $this->plantaElectricaCantidad = $plantaElectricaCantidad;

        return $this;
    }

    /**
     * Get plantaElectricaCantidad
     *
     * @return integer 
     */
    public function getPlantaElectricaCantidad()
    {
        return $this->plantaElectricaCantidad;
    }

    /**
     * Set plantaElectricaObservaciones
     *
     * @param string $plantaElectricaObservaciones
     * @return Actividad
     */
    public function setPlantaElectricaObservaciones($plantaElectricaObservaciones)
    {
        $this->plantaElectricaObservaciones = $plantaElectricaObservaciones;

        return $this;
    }

    /**
     * Get plantaElectricaObservaciones
     *
     * @return string 
     */
    public function getPlantaElectricaObservaciones()
    {
        return $this->plantaElectricaObservaciones;
    }

    /**
     * Set tractores4x2Cantidad
     *
     * @param integer $tractores4x2Cantidad
     * @return Actividad
     */
    public function setTractores4x2Cantidad($tractores4x2Cantidad)
    {
        $this->tractores4x2Cantidad = $tractores4x2Cantidad;

        return $this;
    }

    /**
     * Get tractores4x2Cantidad
     *
     * @return integer 
     */
    public function getTractores4x2Cantidad()
    {
        return $this->tractores4x2Cantidad;
    }

    /**
     * Set tractores4x2Observaciones
     *
     * @param integer $tractores4x2Observaciones
     * @return Actividad
     */
    public function setTractores4x2Observaciones($tractores4x2Observaciones)
    {
        $this->tractores4x2Observaciones = $tractores4x2Observaciones;

        return $this;
    }

    /**
     * Get tractores4x2Observaciones
     *
     * @return integer 
     */
    public function getTractores4x2Observaciones()
    {
        return $this->tractores4x2Observaciones;
    }

    /**
     * Set tractores4x4Cantidad
     *
     * @param integer $tractores4x4Cantidad
     * @return Actividad
     */
    public function setTractores4x4Cantidad($tractores4x4Cantidad)
    {
        $this->tractores4x4Cantidad = $tractores4x4Cantidad;

        return $this;
    }

    /**
     * Get tractores4x4Cantidad
     *
     * @return integer 
     */
    public function getTractores4x4Cantidad()
    {
        return $this->tractores4x4Cantidad;
    }

    /**
     * Set tractores4x4Observaciones
     *
     * @param integer $tractores4x4Observaciones
     * @return Actividad
     */
    public function setTractores4x4Observaciones($tractores4x4Observaciones)
    {
        $this->tractores4x4Observaciones = $tractores4x4Observaciones;

        return $this;
    }

    /**
     * Get tractores4x4Observaciones
     *
     * @return integer 
     */
    public function getTractores4x4Observaciones()
    {
        return $this->tractores4x4Observaciones;
    }

    /**
     * Set galponesCantidad
     *
     * @param integer $galponesCantidad
     * @return Actividad
     */
    public function setGalponesCantidad($galponesCantidad)
    {
        $this->galponesCantidad = $galponesCantidad;

        return $this;
    }

    /**
     * Get galponesCantidad
     *
     * @return integer 
     */
    public function getGalponesCantidad()
    {
        return $this->galponesCantidad;
    }

    /**
     * Set galponesObservaciones
     *
     * @param string $galponesObservaciones
     * @return Actividad
     */
    public function setGalponesObservaciones($galponesObservaciones)
    {
        $this->galponesObservaciones = $galponesObservaciones;

        return $this;
    }

    /**
     * Get galponesObservaciones
     *
     * @return string 
     */
    public function getGalponesObservaciones()
    {
        return $this->galponesObservaciones;
    }

    /**
     * Set silosCantidad
     *
     * @param integer $silosCantidad
     * @return Actividad
     */
    public function setSilosCantidad($silosCantidad)
    {
        $this->silosCantidad = $silosCantidad;

        return $this;
    }

    /**
     * Get silosCantidad
     *
     * @return integer 
     */
    public function getSilosCantidad()
    {
        return $this->silosCantidad;
    }

    /**
     * Set silosObservaciones
     *
     * @param string $silosObservaciones
     * @return Actividad
     */
    public function setSilosObservaciones($silosObservaciones)
    {
        $this->silosObservaciones = $silosObservaciones;

        return $this;
    }

    /**
     * Get silosObservaciones
     *
     * @return string 
     */
    public function getSilosObservaciones()
    {
        return $this->silosObservaciones;
    }

    /**
     * Set sembradoraCantidad
     *
     * @param integer $sembradoraCantidad
     * @return Actividad
     */
    public function setSembradoraCantidad($sembradoraCantidad)
    {
        $this->sembradoraCantidad = $sembradoraCantidad;

        return $this;
    }

    /**
     * Get sembradoraCantidad
     *
     * @return integer 
     */
    public function getSembradoraCantidad()
    {
        return $this->sembradoraCantidad;
    }

    /**
     * Set sembradoraObservaciones
     *
     * @param string $sembradoraObservaciones
     * @return Actividad
     */
    public function setSembradoraObservaciones($sembradoraObservaciones)
    {
        $this->sembradoraObservaciones = $sembradoraObservaciones;

        return $this;
    }

    /**
     * Get sembradoraObservaciones
     *
     * @return string 
     */
    public function getSembradoraObservaciones()
    {
        return $this->sembradoraObservaciones;
    }

    /**
     * Set cosechadoraCantidad
     *
     * @param integer $cosechadoraCantidad
     * @return Actividad
     */
    public function setCosechadoraCantidad($cosechadoraCantidad)
    {
        $this->cosechadoraCantidad = $cosechadoraCantidad;

        return $this;
    }

    /**
     * Get cosechadoraCantidad
     *
     * @return integer 
     */
    public function getCosechadoraCantidad()
    {
        return $this->cosechadoraCantidad;
    }

    /**
     * Set cosechadoraObservaciones
     *
     * @param string $cosechadoraObservaciones
     * @return Actividad
     */
    public function setCosechadoraObservaciones($cosechadoraObservaciones)
    {
        $this->cosechadoraObservaciones = $cosechadoraObservaciones;

        return $this;
    }

    /**
     * Get cosechadoraObservaciones
     *
     * @return string 
     */
    public function getCosechadoraObservaciones()
    {
        return $this->cosechadoraObservaciones;
    }

    /**
     * Set asperjadoraCantidad
     *
     * @param integer $asperjadoraCantidad
     * @return Actividad
     */
    public function setAsperjadoraCantidad($asperjadoraCantidad)
    {
        $this->asperjadoraCantidad = $asperjadoraCantidad;

        return $this;
    }

    /**
     * Get asperjadoraCantidad
     *
     * @return integer 
     */
    public function getAsperjadoraCantidad()
    {
        return $this->asperjadoraCantidad;
    }

    /**
     * Set asperjadoraObservaciones
     *
     * @param string $asperjadoraObservaciones
     * @return Actividad
     */
    public function setAsperjadoraObservaciones($asperjadoraObservaciones)
    {
        $this->asperjadoraObservaciones = $asperjadoraObservaciones;

        return $this;
    }

    /**
     * Get asperjadoraObservaciones
     *
     * @return string 
     */
    public function getAsperjadoraObservaciones()
    {
        return $this->asperjadoraObservaciones;
    }

    /**
     * Set carretaZorraCantidad
     *
     * @param integer $carretaZorraCantidad
     * @return Actividad
     */
    public function setCarretaZorraCantidad($carretaZorraCantidad)
    {
        $this->carretaZorraCantidad = $carretaZorraCantidad;

        return $this;
    }

    /**
     * Get carretaZorraCantidad
     *
     * @return integer 
     */
    public function getCarretaZorraCantidad()
    {
        return $this->carretaZorraCantidad;
    }

    /**
     * Set carretaZorraObservaciones
     *
     * @param string $carretaZorraObservaciones
     * @return Actividad
     */
    public function setCarretaZorraObservaciones($carretaZorraObservaciones)
    {
        $this->carretaZorraObservaciones = $carretaZorraObservaciones;

        return $this;
    }

    /**
     * Get carretaZorraObservaciones
     *
     * @return string 
     */
    public function getCarretaZorraObservaciones()
    {
        return $this->carretaZorraObservaciones;
    }

    /**
     * Set rotativaCantidad
     *
     * @param integer $rotativaCantidad
     * @return Actividad
     */
    public function setRotativaCantidad($rotativaCantidad)
    {
        $this->rotativaCantidad = $rotativaCantidad;

        return $this;
    }

    /**
     * Get rotativaCantidad
     *
     * @return integer 
     */
    public function getRotativaCantidad()
    {
        return $this->rotativaCantidad;
    }

    /**
     * Set rotativaObservaciones
     *
     * @param string $rotativaObservaciones
     * @return Actividad
     */
    public function setRotativaObservaciones($rotativaObservaciones)
    {
        $this->rotativaObservaciones = $rotativaObservaciones;

        return $this;
    }

    /**
     * Get rotativaObservaciones
     *
     * @return string 
     */
    public function getRotativaObservaciones()
    {
        return $this->rotativaObservaciones;
    }

    /**
     * Set roloCantidad
     *
     * @param integer $roloCantidad
     * @return Actividad
     */
    public function setRoloCantidad($roloCantidad)
    {
        $this->roloCantidad = $roloCantidad;

        return $this;
    }

    /**
     * Get roloCantidad
     *
     * @return integer 
     */
    public function getRoloCantidad()
    {
        return $this->roloCantidad;
    }

    /**
     * Set roloObservaciones
     *
     * @param string $roloObservaciones
     * @return Actividad
     */
    public function setRoloObservaciones($roloObservaciones)
    {
        $this->roloObservaciones = $roloObservaciones;

        return $this;
    }

    /**
     * Get roloObservaciones
     *
     * @return string 
     */
    public function getRoloObservaciones()
    {
        return $this->roloObservaciones;
    }

    /**
     * Set aradoCantidad
     *
     * @param integer $aradoCantidad
     * @return Actividad
     */
    public function setAradoCantidad($aradoCantidad)
    {
        $this->aradoCantidad = $aradoCantidad;

        return $this;
    }

    /**
     * Get aradoCantidad
     *
     * @return integer 
     */
    public function getAradoCantidad()
    {
        return $this->aradoCantidad;
    }

    /**
     * Set aradoObservaciones
     *
     * @param string $aradoObservaciones
     * @return Actividad
     */
    public function setAradoObservaciones($aradoObservaciones)
    {
        $this->aradoObservaciones = $aradoObservaciones;

        return $this;
    }

    /**
     * Get aradoObservaciones
     *
     * @return string 
     */
    public function getAradoObservaciones()
    {
        return $this->aradoObservaciones;
    }

    /**
     * Set surcadoraCantidad
     *
     * @param integer $surcadoraCantidad
     * @return Actividad
     */
    public function setSurcadoraCantidad($surcadoraCantidad)
    {
        $this->surcadoraCantidad = $surcadoraCantidad;

        return $this;
    }

    /**
     * Get surcadoraCantidad
     *
     * @return integer 
     */
    public function getSurcadoraCantidad()
    {
        return $this->surcadoraCantidad;
    }

    /**
     * Set surcadoraObservaciones
     *
     * @param string $surcadoraObservaciones
     * @return Actividad
     */
    public function setSurcadoraObservaciones($surcadoraObservaciones)
    {
        $this->surcadoraObservaciones = $surcadoraObservaciones;

        return $this;
    }

    /**
     * Get surcadoraObservaciones
     *
     * @return string 
     */
    public function getSurcadoraObservaciones()
    {
        return $this->surcadoraObservaciones;
    }

    /**
     * Set abonadoraCantidad
     *
     * @param integer $abonadoraCantidad
     * @return Actividad
     */
    public function setAbonadoraCantidad($abonadoraCantidad)
    {
        $this->abonadoraCantidad = $abonadoraCantidad;

        return $this;
    }

    /**
     * Get abonadoraCantidad
     *
     * @return integer 
     */
    public function getAbonadoraCantidad()
    {
        return $this->abonadoraCantidad;
    }

    /**
     * Set abonadoraObservaciones
     *
     * @param string $abonadoraObservaciones
     * @return Actividad
     */
    public function setAbonadoraObservaciones($abonadoraObservaciones)
    {
        $this->abonadoraObservaciones = $abonadoraObservaciones;

        return $this;
    }

    /**
     * Get abonadoraObservaciones
     *
     * @return string 
     */
    public function getAbonadoraObservaciones()
    {
        return $this->abonadoraObservaciones;
    }

    /**
     * Set embutidoraCantidad
     *
     * @param integer $embutidoraCantidad
     * @return Actividad
     */
    public function setEmbutidoraCantidad($embutidoraCantidad)
    {
        $this->embutidoraCantidad = $embutidoraCantidad;

        return $this;
    }

    /**
     * Get embutidoraCantidad
     *
     * @return integer 
     */
    public function getEmbutidoraCantidad()
    {
        return $this->embutidoraCantidad;
    }

    /**
     * Set embutidoraObservaciones
     *
     * @param float $embutidoraObservaciones
     * @return Actividad
     */
    public function setEmbutidoraObservaciones($embutidoraObservaciones)
    {
        $this->embutidoraObservaciones = $embutidoraObservaciones;

        return $this;
    }

    /**
     * Get embutidoraObservaciones
     *
     * @return float 
     */
    public function getEmbutidoraObservaciones()
    {
        return $this->embutidoraObservaciones;
    }

    /**
     * Set vagonForrajeroCantidad
     *
     * @param integer $vagonForrajeroCantidad
     * @return Actividad
     */
    public function setVagonForrajeroCantidad($vagonForrajeroCantidad)
    {
        $this->vagonForrajeroCantidad = $vagonForrajeroCantidad;

        return $this;
    }

    /**
     * Get vagonForrajeroCantidad
     *
     * @return integer 
     */
    public function getVagonForrajeroCantidad()
    {
        return $this->vagonForrajeroCantidad;
    }

    /**
     * Set vagonForrajeroObservaciones
     *
     * @param string $vagonForrajeroObservaciones
     * @return Actividad
     */
    public function setVagonForrajeroObservaciones($vagonForrajeroObservaciones)
    {
        $this->vagonForrajeroObservaciones = $vagonForrajeroObservaciones;

        return $this;
    }

    /**
     * Get vagonForrajeroObservaciones
     *
     * @return string 
     */
    public function getVagonForrajeroObservaciones()
    {
        return $this->vagonForrajeroObservaciones;
    }

    /**
     * Set bolsasEnsilarCantidad
     *
     * @param integer $bolsasEnsilarCantidad
     * @return Actividad
     */
    public function setBolsasEnsilarCantidad($bolsasEnsilarCantidad)
    {
        $this->bolsasEnsilarCantidad = $bolsasEnsilarCantidad;

        return $this;
    }

    /**
     * Get bolsasEnsilarCantidad
     *
     * @return integer 
     */
    public function getBolsasEnsilarCantidad()
    {
        return $this->bolsasEnsilarCantidad;
    }

    /**
     * Set bolsasEnsilarObservaciones
     *
     * @param string $bolsasEnsilarObservaciones
     * @return Actividad
     */
    public function setBolsasEnsilarObservaciones($bolsasEnsilarObservaciones)
    {
        $this->bolsasEnsilarObservaciones = $bolsasEnsilarObservaciones;

        return $this;
    }

    /**
     * Get bolsasEnsilarObservaciones
     *
     * @return string 
     */
    public function getBolsasEnsilarObservaciones()
    {
        return $this->bolsasEnsilarObservaciones;
    }

    /**
     * Set mecanicoCantidad
     *
     * @param integer $mecanicoCantidad
     * @return Actividad
     */
    public function setMecanicoCantidad($mecanicoCantidad)
    {
        $this->mecanicoCantidad = $mecanicoCantidad;

        return $this;
    }

    /**
     * Get mecanicoCantidad
     *
     * @return integer 
     */
    public function getMecanicoCantidad()
    {
        return $this->mecanicoCantidad;
    }

    /**
     * Set mecanicoObservaciones
     *
     * @param integer $mecanicoObservaciones
     * @return Actividad
     */
    public function setMecanicoObservaciones($mecanicoObservaciones)
    {
        $this->mecanicoObservaciones = $mecanicoObservaciones;

        return $this;
    }

    /**
     * Get mecanicoObservaciones
     *
     * @return integer 
     */
    public function getMecanicoObservaciones()
    {
        return $this->mecanicoObservaciones;
    }

    /**
     * Set manualCantidad
     *
     * @param integer $manualCantidad
     * @return Actividad
     */
    public function setManualCantidad($manualCantidad)
    {
        $this->manualCantidad = $manualCantidad;

        return $this;
    }

    /**
     * Get manualCantidad
     *
     * @return integer 
     */
    public function getManualCantidad()
    {
        return $this->manualCantidad;
    }

    /**
     * Set manualObservaciones
     *
     * @param string $manualObservaciones
     * @return Actividad
     */
    public function setManualObservaciones($manualObservaciones)
    {
        $this->manualObservaciones = $manualObservaciones;

        return $this;
    }

    /**
     * Get manualObservaciones
     *
     * @return string 
     */
    public function getManualObservaciones()
    {
        return $this->manualObservaciones;
    }

    /**
     * Set tanqueFrioCantidad
     *
     * @param integer $tanqueFrioCantidad
     * @return Actividad
     */
    public function setTanqueFrioCantidad($tanqueFrioCantidad)
    {
        $this->tanqueFrioCantidad = $tanqueFrioCantidad;

        return $this;
    }

    /**
     * Get tanqueFrioCantidad
     *
     * @return integer 
     */
    public function getTanqueFrioCantidad()
    {
        return $this->tanqueFrioCantidad;
    }

    /**
     * Set tanqueFrioObservaciones
     *
     * @param float $tanqueFrioObservaciones
     * @return Actividad
     */
    public function setTanqueFrioObservaciones($tanqueFrioObservaciones)
    {
        $this->tanqueFrioObservaciones = $tanqueFrioObservaciones;

        return $this;
    }

    /**
     * Get tanqueFrioObservaciones
     *
     * @return float 
     */
    public function getTanqueFrioObservaciones()
    {
        return $this->tanqueFrioObservaciones;
    }

    /**
     * Set cantarasCantidad
     *
     * @param integer $cantarasCantidad
     * @return Actividad
     */
    public function setCantarasCantidad($cantarasCantidad)
    {
        $this->cantarasCantidad = $cantarasCantidad;

        return $this;
    }

    /**
     * Get cantarasCantidad
     *
     * @return integer 
     */
    public function getCantarasCantidad()
    {
        return $this->cantarasCantidad;
    }

    /**
     * Set cantarasObservaciones
     *
     * @param string $cantarasObservaciones
     * @return Actividad
     */
    public function setCantarasObservaciones($cantarasObservaciones)
    {
        $this->cantarasObservaciones = $cantarasObservaciones;

        return $this;
    }

    /**
     * Get cantarasObservaciones
     *
     * @return string 
     */
    public function getCantarasObservaciones()
    {
        return $this->cantarasObservaciones;
    }

    /**
     * Set filtrosTelaCantidad
     *
     * @param integer $filtrosTelaCantidad
     * @return Actividad
     */
    public function setFiltrosTelaCantidad($filtrosTelaCantidad)
    {
        $this->filtrosTelaCantidad = $filtrosTelaCantidad;

        return $this;
    }

    /**
     * Get filtrosTelaCantidad
     *
     * @return integer 
     */
    public function getFiltrosTelaCantidad()
    {
        return $this->filtrosTelaCantidad;
    }

    /**
     * Set filtrosTelaObservaciones
     *
     * @param string $filtrosTelaObservaciones
     * @return Actividad
     */
    public function setFiltrosTelaObservaciones($filtrosTelaObservaciones)
    {
        $this->filtrosTelaObservaciones = $filtrosTelaObservaciones;

        return $this;
    }

    /**
     * Get filtrosTelaObservaciones
     *
     * @return string 
     */
    public function getFiltrosTelaObservaciones()
    {
        return $this->filtrosTelaObservaciones;
    }

    /**
     * Set paletasCmtCantidad
     *
     * @param integer $paletasCmtCantidad
     * @return Actividad
     */
    public function setPaletasCmtCantidad($paletasCmtCantidad)
    {
        $this->paletasCmtCantidad = $paletasCmtCantidad;

        return $this;
    }

    /**
     * Get paletasCmtCantidad
     *
     * @return integer 
     */
    public function getPaletasCmtCantidad()
    {
        return $this->paletasCmtCantidad;
    }

    /**
     * Set paletasCmtObservaciones
     *
     * @param string $paletasCmtObservaciones
     * @return Actividad
     */
    public function setPaletasCmtObservaciones($paletasCmtObservaciones)
    {
        $this->paletasCmtObservaciones = $paletasCmtObservaciones;

        return $this;
    }

    /**
     * Get paletasCmtObservaciones
     *
     * @return string 
     */
    public function getPaletasCmtObservaciones()
    {
        return $this->paletasCmtObservaciones;
    }

    /**
     * Set paletasFondoNegroCantidad
     *
     * @param integer $paletasFondoNegroCantidad
     * @return Actividad
     */
    public function setPaletasFondoNegroCantidad($paletasFondoNegroCantidad)
    {
        $this->paletasFondoNegroCantidad = $paletasFondoNegroCantidad;

        return $this;
    }

    /**
     * Get paletasFondoNegroCantidad
     *
     * @return integer 
     */
    public function getPaletasFondoNegroCantidad()
    {
        return $this->paletasFondoNegroCantidad;
    }

    /**
     * Set paletasFondoNegroObservaciones
     *
     * @param string $paletasFondoNegroObservaciones
     * @return Actividad
     */
    public function setPaletasFondoNegroObservaciones($paletasFondoNegroObservaciones)
    {
        $this->paletasFondoNegroObservaciones = $paletasFondoNegroObservaciones;

        return $this;
    }

    /**
     * Get paletasFondoNegroObservaciones
     *
     * @return string 
     */
    public function getPaletasFondoNegroObservaciones()
    {
        return $this->paletasFondoNegroObservaciones;
    }

    /**
     * Set reactivoCmtCantidad
     *
     * @param integer $reactivoCmtCantidad
     * @return Actividad
     */
    public function setReactivoCmtCantidad($reactivoCmtCantidad)
    {
        $this->reactivoCmtCantidad = $reactivoCmtCantidad;

        return $this;
    }

    /**
     * Get reactivoCmtCantidad
     *
     * @return integer 
     */
    public function getReactivoCmtCantidad()
    {
        return $this->reactivoCmtCantidad;
    }

    /**
     * Set reactivoCmtObservaciones
     *
     * @param string $reactivoCmtObservaciones
     * @return Actividad
     */
    public function setReactivoCmtObservaciones($reactivoCmtObservaciones)
    {
        $this->reactivoCmtObservaciones = $reactivoCmtObservaciones;

        return $this;
    }

    /**
     * Get reactivoCmtObservaciones
     *
     * @return string 
     */
    public function getReactivoCmtObservaciones()
    {
        return $this->reactivoCmtObservaciones;
    }

    /**
     * Set ordenoTechoCantidad
     *
     * @param integer $ordenoTechoCantidad
     * @return Actividad
     */
    public function setOrdenoTechoCantidad($ordenoTechoCantidad)
    {
        $this->ordenoTechoCantidad = $ordenoTechoCantidad;

        return $this;
    }

    /**
     * Get ordenoTechoCantidad
     *
     * @return integer 
     */
    public function getOrdenoTechoCantidad()
    {
        return $this->ordenoTechoCantidad;
    }

    /**
     * Set ordenoTechoObservaciones
     *
     * @param string $ordenoTechoObservaciones
     * @return Actividad
     */
    public function setOrdenoTechoObservaciones($ordenoTechoObservaciones)
    {
        $this->ordenoTechoObservaciones = $ordenoTechoObservaciones;

        return $this;
    }

    /**
     * Get ordenoTechoObservaciones
     *
     * @return string 
     */
    public function getOrdenoTechoObservaciones()
    {
        return $this->ordenoTechoObservaciones;
    }

    /**
     * Set ordenoPisoCementoCantidad
     *
     * @param integer $ordenoPisoCementoCantidad
     * @return Actividad
     */
    public function setOrdenoPisoCementoCantidad($ordenoPisoCementoCantidad)
    {
        $this->ordenoPisoCementoCantidad = $ordenoPisoCementoCantidad;

        return $this;
    }

    /**
     * Get ordenoPisoCementoCantidad
     *
     * @return integer 
     */
    public function getOrdenoPisoCementoCantidad()
    {
        return $this->ordenoPisoCementoCantidad;
    }

    /**
     * Set ordenoPisoCementoObservaciones
     *
     * @param string $ordenoPisoCementoObservaciones
     * @return Actividad
     */
    public function setOrdenoPisoCementoObservaciones($ordenoPisoCementoObservaciones)
    {
        $this->ordenoPisoCementoObservaciones = $ordenoPisoCementoObservaciones;

        return $this;
    }

    /**
     * Get ordenoPisoCementoObservaciones
     *
     * @return string 
     */
    public function getOrdenoPisoCementoObservaciones()
    {
        return $this->ordenoPisoCementoObservaciones;
    }

    /**
     * Set tanqueNitrogenoCantidad
     *
     * @param integer $tanqueNitrogenoCantidad
     * @return Actividad
     */
    public function setTanqueNitrogenoCantidad($tanqueNitrogenoCantidad)
    {
        $this->tanqueNitrogenoCantidad = $tanqueNitrogenoCantidad;

        return $this;
    }

    /**
     * Get tanqueNitrogenoCantidad
     *
     * @return integer 
     */
    public function getTanqueNitrogenoCantidad()
    {
        return $this->tanqueNitrogenoCantidad;
    }

    /**
     * Set tanqueNitrogenoObservaciones
     *
     * @param integer $tanqueNitrogenoObservaciones
     * @return Actividad
     */
    public function setTanqueNitrogenoObservaciones($tanqueNitrogenoObservaciones)
    {
        $this->tanqueNitrogenoObservaciones = $tanqueNitrogenoObservaciones;

        return $this;
    }

    /**
     * Get tanqueNitrogenoObservaciones
     *
     * @return integer 
     */
    public function getTanqueNitrogenoObservaciones()
    {
        return $this->tanqueNitrogenoObservaciones;
    }

    /**
     * Set cajaInseminacionCantidad
     *
     * @param integer $cajaInseminacionCantidad
     * @return Actividad
     */
    public function setCajaInseminacionCantidad($cajaInseminacionCantidad)
    {
        $this->cajaInseminacionCantidad = $cajaInseminacionCantidad;

        return $this;
    }

    /**
     * Get cajaInseminacionCantidad
     *
     * @return integer 
     */
    public function getCajaInseminacionCantidad()
    {
        return $this->cajaInseminacionCantidad;
    }

    /**
     * Set cajaInseminacionObservacion
     *
     * @param string $cajaInseminacionObservacion
     * @return Actividad
     */
    public function setCajaInseminacionObservacion($cajaInseminacionObservacion)
    {
        $this->cajaInseminacionObservacion = $cajaInseminacionObservacion;

        return $this;
    }

    /**
     * Get cajaInseminacionObservacion
     *
     * @return string 
     */
    public function getCajaInseminacionObservacion()
    {
        return $this->cajaInseminacionObservacion;
    }

    /**
     * Set pistoletaInseminacionCantidad
     *
     * @param integer $pistoletaInseminacionCantidad
     * @return Actividad
     */
    public function setPistoletaInseminacionCantidad($pistoletaInseminacionCantidad)
    {
        $this->pistoletaInseminacionCantidad = $pistoletaInseminacionCantidad;

        return $this;
    }

    /**
     * Get pistoletaInseminacionCantidad
     *
     * @return integer 
     */
    public function getPistoletaInseminacionCantidad()
    {
        return $this->pistoletaInseminacionCantidad;
    }

    /**
     * Set pistoletaInseminacionObservaciones
     *
     * @param string $pistoletaInseminacionObservaciones
     * @return Actividad
     */
    public function setPistoletaInseminacionObservaciones($pistoletaInseminacionObservaciones)
    {
        $this->pistoletaInseminacionObservaciones = $pistoletaInseminacionObservaciones;

        return $this;
    }

    /**
     * Get pistoletaInseminacionObservaciones
     *
     * @return string 
     */
    public function getPistoletaInseminacionObservaciones()
    {
        return $this->pistoletaInseminacionObservaciones;
    }

    /**
     * Set termoDescongelarPajuelasCantidad
     *
     * @param integer $termoDescongelarPajuelasCantidad
     * @return Actividad
     */
    public function setTermoDescongelarPajuelasCantidad($termoDescongelarPajuelasCantidad)
    {
        $this->termoDescongelarPajuelasCantidad = $termoDescongelarPajuelasCantidad;

        return $this;
    }

    /**
     * Get termoDescongelarPajuelasCantidad
     *
     * @return integer 
     */
    public function getTermoDescongelarPajuelasCantidad()
    {
        return $this->termoDescongelarPajuelasCantidad;
    }

    /**
     * Set termoDescongelarPajuelasObservaciones
     *
     * @param string $termoDescongelarPajuelasObservaciones
     * @return Actividad
     */
    public function setTermoDescongelarPajuelasObservaciones($termoDescongelarPajuelasObservaciones)
    {
        $this->termoDescongelarPajuelasObservaciones = $termoDescongelarPajuelasObservaciones;

        return $this;
    }

    /**
     * Get termoDescongelarPajuelasObservaciones
     *
     * @return string 
     */
    public function getTermoDescongelarPajuelasObservaciones()
    {
        return $this->termoDescongelarPajuelasObservaciones;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Actividad
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
     * @return Actividad
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
