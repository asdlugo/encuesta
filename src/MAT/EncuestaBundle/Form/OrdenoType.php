<?php

namespace MAT\EncuestaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrdenoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numVacasOrdenadas')
            ->add('ltsLeche')
            ->add('numOrdenosAlDia')
            ->add('numAutoconsumo')
            ->add('numReceptoria')
            ->add('numQueseras')
            ->add('numQuesoFinca')
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
            'data_class' => 'MAT\EncuestaBundle\Entity\Ordeno'
        ));
    }
}
