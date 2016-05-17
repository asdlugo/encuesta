<?php

namespace MAT\EncuestaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActividadType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('corralesCantidad')
            ->add('corralesObservaciones')
            ->add('mangaCantidad')
            ->add('mangaObservaciones')
            ->add('bretesCantidad')
            ->add('bretesObservaciones')
            ->add('romanaCantidad')
            ->add('romanaObservaciones')
            ->add('salaOrdenoCantidad')
            ->add('salaOrdenoObservaciones')
            ->add('bebederosCantidad')
            ->add('bebederosObservaciones')
            ->add('comederosCantidad')
            ->add('comederosObservaciones')
            ->add('cercoElectricoCantidad')
            ->add('cercoElectricoObservaciones')
            ->add('numPotrerosCantidad')
            ->add('numPotrerosObservaciones')
            ->add('hasXPotrerosCantidad')
            ->add('hasXPotrerosObservaciones')
            ->add('plantaElectricaCantidad')
            ->add('plantaElectricaObservaciones')
            ->add('tractores4x2Cantidad')
            ->add('tractores4x2Observaciones')
            ->add('tractores4x4Cantidad')
            ->add('tractores4x4Observaciones')
            ->add('galponesCantidad')
            ->add('galponesObservaciones')
            ->add('silosCantidad')
            ->add('silosObservaciones')
            ->add('sembradoraCantidad')
            ->add('sembradoraObservaciones')
            ->add('cosechadoraCantidad')
            ->add('cosechadoraObservaciones')
            ->add('asperjadoraCantidad')
            ->add('asperjadoraObservaciones')
            ->add('carretaZorraCantidad')
            ->add('carretaZorraObservaciones')
            ->add('rotativaCantidad')
            ->add('rotativaObservaciones')
            ->add('roloCantidad')
            ->add('roloObservaciones')
            ->add('aradoCantidad')
            ->add('aradoObservaciones')
            ->add('surcadoraCantidad')
            ->add('surcadoraObservaciones')
            ->add('abonadoraCantidad')
            ->add('abonadoraObservaciones')
            ->add('embutidoraCantidad')
            ->add('embutidoraObservaciones')
            ->add('vagonForrajeroCantidad')
            ->add('vagonForrajeroObservaciones')
            ->add('bolsasEnsilarCantidad')
            ->add('bolsasEnsilarObservaciones')
            ->add('mecanicoCantidad')
            ->add('mecanicoObservaciones')
            ->add('manualCantidad')
            ->add('manualObservaciones')
            ->add('tanqueFrioCantidad')
            ->add('tanqueFrioObservaciones')
            ->add('cantarasCantidad')
            ->add('cantarasObservaciones')
            ->add('filtrosTelaCantidad')
            ->add('filtrosTelaObservaciones')
            ->add('paletasCmtCantidad')
            ->add('paletasCmtObservaciones')
            ->add('paletasFondoNegroCantidad')
            ->add('paletasFondoNegroObservaciones')
            ->add('reactivoCmtCantidad')
            ->add('reactivoCmtObservaciones')
            ->add('ordenoTechoCantidad')
            ->add('ordenoTechoObservaciones')
            ->add('ordenoPisoCementoCantidad')
            ->add('ordenoPisoCementoObservaciones')
            ->add('tanqueNitrogenoCantidad')
            ->add('tanqueNitrogenoObservaciones')
            ->add('cajaInseminacionCantidad')
            ->add('cajaInseminacionObservacion')
            ->add('pistoletaInseminacionCantidad')
            ->add('pistoletaInseminacionObservaciones')
            ->add('termoDescongelarPajuelasCantidad')
            ->add('termoDescongelarPajuelasObservaciones')
            ->add('fecha', 'date')
            ->add('idFinca')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAT\EncuestaBundle\Entity\Actividad'
        ));
    }
}
