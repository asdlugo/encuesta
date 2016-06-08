<?php

namespace MAT\EncuestaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistroType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('registroParto')
            ->add('registroSecado')
            ->add('pesoNacer')
            ->add('pesoDestete')
            ->add('pesoAno')
            ->add('pasajeLeche')
            ->add('observaciones')
            ->add('mensual')
            ->add('semanal')
            ->add('diario')
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
            'data_class' => 'MAT\EncuestaBundle\Entity\Registro'
        ));
    }
}
