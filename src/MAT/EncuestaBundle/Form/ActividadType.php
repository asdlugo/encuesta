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
            ->add('corralesCantidad', 'text', array(
                 'label' =>'Cantidad de Corrales',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('corralesObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('mangaCantidad', 'text', array(
                 'label' =>'Cantidad de Manga',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('mangaObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('bretesCantidad' , 'text', array(
                 'label' =>'Cantidad de Bretes',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('bretesObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('romanaCantidad', 'text', array(
                 'label' =>'Cantidad de Romana',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('romanaObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('salaOrdenoCantidad', 'text', array(
                 'label' =>'Cantidad de Sala de Ordeño',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('salaOrdenoObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('bebederosCantidad', 'text', array(
                 'label' =>'Cantidad de bebederos',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('bebederosObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('comederosCantidad', 'text', array(
                 'label' =>'Cantidad de Comederos',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('comederosObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('cercoElectricoCantidad', 'text', array(
                 'label' =>'Cantidad de Cerco Eléctrico',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('cercoElectricoObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('numPotrerosCantidad', 'text', array(
                 'label' =>'Cantidad de Potreros',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('numPotrerosObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('hasXPotrerosCantidad', 'text', array(
                 'label' =>'Cantidad de HAS por Potreros',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('hasXPotrerosObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('plantaElectricaCantidad', 'text', array(
                 'label' =>'Cantidad de Planta Eléctrica',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('plantaElectricaObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('tractores4x2Cantidad', 'text', array(
                 'label' =>'Cantidad de Tractores 4x2',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('tractores4x2Observaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('tractores4x4Cantidad', 'text', array(
                 'label' =>'Cantidad de Tractores 4x4',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('tractores4x4Observaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('galponesCantidad', 'text', array(
                 'label' =>'Cantidad de Galpones',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('galponesObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('silosCantidad', 'text', array(
                 'label' =>'Cantidad de Silos',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('silosObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('sembradoraCantidad', 'text', array(
                 'label' =>'Cantidad de Sembradora',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('sembradoraObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('cosechadoraCantidad', 'text', array(
                 'label' =>'Cantidad de Cosechadora',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('cosechadoraObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('asperjadoraCantidad', 'text', array(
                 'label' =>'Cantidad de Asperjadora',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('asperjadoraObservaciones', 'text', array(
                 'label' =>'Observaciones  ',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('carretaZorraCantidad', 'text', array(
                 'label' =>'Cantidad de Carreta Zorra',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
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
