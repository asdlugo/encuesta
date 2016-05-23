<?php

namespace MAT\EncuestaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SistemaRiegoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('riego')
            ->add('tiporiegoGravedad')
            ->add('tiporiegoAspersion')
            ->add('tiporiegoMicroaspersion')
            ->add('tiporiegoGoteo')
            ->add('tiporiegoOtro')
            ->add('numSuperficie')
            ->add('numMotobomba')
            ->add('numCapacidadFlujo')
            ->add('condiciones')
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
            'data_class' => 'MAT\EncuestaBundle\Entity\SistemaRiego'
        ));
    }
}
