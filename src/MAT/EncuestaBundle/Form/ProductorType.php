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
            ->add('nombre', 'text', array(
                 'label' =>'Nombre',    
                 'attr' => array('placeholder' => 'Ingrese su Nombre', 'class'=> 'form-control input-sm ')
             )) 
            ->add('apellido', 'text', array(
                 'label' =>'Apellido',    
                 'attr' => array('placeholder' => 'Ingrese su Apellido', 'class'=> 'form-control input-sm ')
             )) 
            ->add('rif', 'text', array(
                 'label' =>'Rif',    
                 'attr' => array('placeholder' => 'Ingrese su Rif', 'class'=> 'form-control input-sm ')
             )) 
            ->add('tlf1', 'text', array(
                 'label' =>'Teléfono 1',    
                 'attr' => array('placeholder' => 'Ingrese Numero de Teléfono', 'class'=> 'form-control input-sm ')
             )) 
            ->add('tlf2', 'text', array(
                 'label' =>'Teléfono 2',    
                 'attr' => array('placeholder' => 'Ingrese Numero de Teléfono', 'class'=> 'form-control input-sm ')
                ))
            ->add('emal1', 'text', array(
                 'label' =>'Email',    
                 'attr' => array('placeholder' => 'Ingrese su correo', 'class'=> 'form-control input-sm ')
                ))
            ->add('email2', 'text', array(
                 'label' =>'Email',    
                 'attr' => array('placeholder' => 'Ingrese correo alternativo', 'class'=> 'form-control input-sm ')
                ))
            ->add('sabeLeer', 'text', array(
                 'label' =>'Sabe leer',
                'attr' => array('placeholder' => 'Sabe Leer', 'class'=> 'form-control input-sm ')
                ))
            ->add('exProductor', 'text', array(
                 'label' =>'Experiencia como productor',
                'attr' => array('placeholder' => 'Años de experiencia', 'class'=> 'form-control input-sm ')
                )) 
            ->add('lugarHabitacion', 'text', array(
                 'label' =>'Lugar de la Habitación',
                'attr' => array('placeholder' => 'Lugar de la Habitación', 'class'=> 'form-control input-sm ')
                ))
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
