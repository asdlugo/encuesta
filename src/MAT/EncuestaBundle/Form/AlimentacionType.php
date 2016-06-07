<?php

namespace MAT\EncuestaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlimentacionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pastoCorteTipo1', 'text', array(
                 'label' =>'Pasto Corte Tipo 1',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('pastoCorteHectarias1', 'text', array(
                 'label' =>'Pasto Corte Hectáreas',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('pastoCorteTipo2', 'text', array(
                 'label' =>'Pasto Corte Tipo 2',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('pastoCorteHectareas2', 'text', array(
                 'label' =>'Pasto Corte Hectáreas',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('brachariaTipo', 'text', array(
                 'label' =>'Tipo Bracharia',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('brachariaHectareas', 'text', array(
                 'label' =>'Hectáreas de Bracharia ',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('estrellaTipo', 'text', array(
                 'label' =>'Tipo de Estrella',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('estrellaHectareas', 'text', array(
                 'label' =>'Hectáreas de Estrella',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('guineaTipo', 'text', array(
                 'label' =>'Tipo de Guinea',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('guineaHectareas', 'text', array(
                 'label' =>'Hectáreas de Guinea',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('alemanTipo', 'text', array(
                 'label' =>'Aleman Tipo',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('alemanHectareas', 'text', array(
                 'label' =>'Aleman Hectáreas',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('canaAzucarTipo', 'text', array(
                 'label' =>'Tipo de Caña de Azúcar',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('canaAzucarHectareas', 'text', array(
                 'label' =>'Hectáreas de Caña de Azúcar',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('numPotrerosTipo', 'text', array(
                 'label' =>'Número de Potreros',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('numPotrerosAreaPromedio', 'text', array(
                 'label' =>'Área Promedio de Potreros',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('silos', 'text', array(
                 'label' =>'Silos',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('silosCultivo', 'text', array(
                 'label' =>'Silos Cultivo',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('toneladasSilosCosechadas', 'text', array(
                 'label' =>'Toneladas de Silos Cosechadas',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('toneladasSilosCosechadasObsv', 'text', array(
                 'label' =>'Observaciones',    
                 'attr' => array('placeholder' => 'Ingrese Observaciones', 'class'=> 'form-control input-sm ')
             )) 
            ->add('suministraMinerales', 'text', array(
                 'label' =>'Suministra Minerales',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('suministraMineralesKgs', 'text', array(
                 'label' =>'Suministra Minerales Kgs',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('suministraConcentrado', 'text', array(
                 'label' =>'Suministra Concentrado',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('suministraConcentradoKgs', 'text', array(
                 'label' =>'Suministra Concentrado Kgs',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
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
            'data_class' => 'MAT\EncuestaBundle\Entity\Alimentacion'
        ));
    }
}
