<?php

namespace MAT\EncuestaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DestinoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numAutoconsumo', 'text', array(
                 'label' =>'Número de Autoconsumo',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('numCria', 'text', array(
                 'label' =>'Número de Cría',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('numLevante', 'text', array(
                 'label' =>'Número de Levante',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('numCeba', 'text', array(
                 'label' =>'Número de Ceba',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('numReproduccion', 'text', array(
                 'label' =>'Número de Reproducción',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
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
         //   ->add('idFinca')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAT\EncuestaBundle\Entity\Destino'
        ));
    }
}
