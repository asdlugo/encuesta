<?php

namespace MAT\EncuestaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RazaPredominanteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numCebu')
            ->add('numCriollo')
            ->add('numHulstein')
            ->add('numPSuizo')
            ->add('numMestizo')
            ->add('numOtro')
            ->add('fecha', 'date', array(
                   'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',
                   'attr' => array(   
                                    
                                    'class'=> 'form-control input-small datepicker',
                                    'data-provide' => 'datepicker', 
                                    'data-date-format' => 'dd-mm-yyyy'   
                  )
            ))
            ->add('numToros')
            ->add('numTorosReproductores')
            ->add('numVacasProduccion')
            ->add('numVacasSecas')
            ->add('numNovillos')
            ->add('numNovillas')
            ->add('numMautes')
            ->add('numMautas')
            ->add('numBecerros')
            ->add('numBecerras')
            ->add('idFinca')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAT\EncuestaBundle\Entity\RazaPredominante'
        ));
    }
}
