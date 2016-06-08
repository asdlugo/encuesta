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
                 'label' =>'Cantidad de Bebederos',    
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
            ->add('carretaZorraObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('rotativaCantidad', 'text', array(
                 'label' =>'Cantidad de Rotativa',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('rotativaObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('roloCantidad', 'text', array(
                 'label' =>'Cantidad de Rolo',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('roloObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('aradoCantidad', 'text', array(
                 'label' =>'Cantidad de Arado',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('aradoObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('surcadoraCantidad', 'text', array(
                 'label' =>'Cantidad de Surcadora',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('surcadoraObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('abonadoraCantidad', 'text', array(
                 'label' =>'Cantidad Abonadora',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('abonadoraObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('embutidoraCantidad', 'text', array(
                 'label' =>'Cantidad de Embutidora',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('embutidoraObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('vagonForrajeroCantidad', 'text', array(
                 'label' =>'Cantidad Vagón Forrajero',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('vagonForrajeroObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('bolsasEnsilarCantidad', 'text', array(
                 'label' =>'Cantidad de Bolsas de Ensilar',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('bolsasEnsilarObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('mecanicoCantidad', 'text', array(
                 'label' =>'Cantidad mecánico',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('mecanicoObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('manualCantidad', 'text', array(
                 'label' =>'Cantidad de Manual',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('manualObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('tanqueFrioCantidad', 'text', array(
                 'label' =>'Cantidad Tanque Frío',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('tanqueFrioObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('cantarasCantidad', 'text', array(
                 'label' =>'Cantidad de Cantaras',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('cantarasObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('filtrosTelaCantidad', 'text', array(
                 'label' =>'Cantidad Filtros de Tela',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('filtrosTelaObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('paletasCmtCantidad', 'text', array(
                 'label' =>'Cantidad de Paletas CMT',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('paletasCmtObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('paletasFondoNegroCantidad', 'text', array(
                 'label' =>'Cantidad Paletas Fondo Negro',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('paletasFondoNegroObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('reactivoCmtCantidad', 'text', array(
                 'label' =>'Cantidad Reactivo CMT',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('reactivoCmtObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('ordenoTechoCantidad', 'text', array(
                 'label' =>'Cantidad de Ordeño Techo',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('ordenoTechoObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('ordenoPisoCementoCantidad' , 'text', array(
                 'label' =>'Cantidad de Ordeño Piso Cemento',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('ordenoPisoCementoObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('tanqueNitrogenoCantidad', 'text', array(
                 'label' =>'Cantidad de Tanque de Nitrógeno',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('tanqueNitrogenoObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('cajaInseminacionCantidad', 'text', array(
                 'label' =>'Cantidad de Caja de Inseminación',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('cajaInseminacionObservacion', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('pistoletaInseminacionCantidad', 'text', array(
                 'label' =>'Cantidad de Pistoleta de Inseminación',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('pistoletaInseminacionObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('termoDescongelarPajuelasCantidad', 'text', array(
                 'label' =>'Cantidad de Termo Descongelar Pajuelas',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('termoDescongelarPajuelasObservaciones', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('fecha', 'date', array(
                   'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',
                   'attr' => array(   
                                    
                                    'class'=> 'form-control input-small datepicker',
                                    'data-provide' => 'datepicker', 
                                    'data-date-format' => 'dd-mm-yyyy'   
                  )
            ))
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
