<?php

namespace MAT\EncuestaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellido')
            ->add('rif')
            ->add('tlf1', 'text', array(
                 'label' =>'Teléfono 1',    
                 'attr' => array('placeholder' => 'Ingrese Numero', 'class'=> 'form-control input-sm ')
             )) 
            ->add('tlf2', 'text', array(
                 'label' =>'Teléfono 2',    
                 'attr' => array('placeholder' => 'Ingrese Numero', 'class'=> 'form-control input-sm ')
            ->add('emal1', 'text', array(
                 'label' =>'Email',    
                 'attr' => array('placeholder' => 'Ingrese su correo', 'class'=> 'form-control input-sm ')
            ->add('email2')
            ->add('sabeLeer')
            ->add('exProductor')
            ->add('lugarHabitacion')
            ->add('visible')
            ->add('idNivelEducacion')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAT\EncuestaBundle\Entity\Productor'
        ));
    }
}
