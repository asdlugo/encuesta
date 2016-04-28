<?php

namespace MAT\EncuestaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TipoExplotacionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numeroVacaBecerro')
            ->add('numeroVacaMaute')
            ->add('numeroVacaNovillo')
            ->add('leche')
            ->add('carne')
            ->add('dobleProposito')
            ->add('extensivo')
            ->add('intesivo')
            ->add('semiIntensivo')
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
            'data_class' => 'MAT\EncuestaBundle\Entity\TipoExplotacion'
        ));
    }
}
