<?php

namespace MAT\EncuestaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SuperficieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha', 'date')
            ->add('superficieRiego', 'text', array(
                 'label' =>'Superficie Riego',    
                 'attr' => array('class'=> 'form-control input-sm ')
             )) 
            ->add('superficieAprovechable', 'text', array(
                 'label' =>'Superficie Aprovechable',    
                 'attr' => array('class'=> 'form-control input-sm ')
             )) 
            ->add('superficieNoAprovechable', 'text', array(
                 'label' =>'Superficie No Aprovechable',    
                 'attr' => array('class'=> 'form-control input-sm ')
             )) 
            ->add('superficieProduccion', 'text', array(
                 'label' =>'Superficie Producción',    
                 'attr' => array('class'=> 'form-control input-sm ')
             )) 
            ->add('superficieSembrada', 'text', array(
                 'label' =>'Superficie Sembrada',    
                 'attr' => array('class'=> 'form-control input-sm ')
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
            'data_class' => 'MAT\EncuestaBundle\Entity\Superficie'
        ));
    }
}
