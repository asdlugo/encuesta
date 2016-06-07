<?php

namespace MAT\EncuestaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarneType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numAnimales', 'text', array(
                 'label' =>'Número de Animales',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('pesoPromVenta', 'text', array(
                 'label' =>'Peso Promedio de Venta',    
                 'attr' => array('placeholder' => 'Ingrese Cantidad', 'class'=> 'form-control input-sm ')
             )) 
            ->add('edadParaVenta', 'text', array(
                 'label' =>'Edad Para la Venta',    
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
            'data_class' => 'MAT\EncuestaBundle\Entity\Carne'
        ));
    }
}
