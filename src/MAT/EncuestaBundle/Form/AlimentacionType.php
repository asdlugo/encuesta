<?php

namespace MAT\EncuestaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlimentacionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pastoCorteTipo1')
            ->add('pastoCorteHectarias1')
            ->add('pastoCorteTipo2')
            ->add('pastoCorteHectareas2')
            ->add('brachariaTipo')
            ->add('brachariaHectareas')
            ->add('estrellaTipo')
            ->add('estrellaHectareas')
            ->add('guineaTipo')
            ->add('guineaHectareas')
            ->add('alemanTipo')
            ->add('alemanHectareas')
            ->add('canaAzucarTipo')
            ->add('canaAzucarHectareas')
            ->add('numPotrerosTipo')
            ->add('numPotrerosAreaPromedio')
            ->add('silos')
            ->add('silosCultivo')
            ->add('toneladasSilosCosechadas')
            ->add('toneladasSilosCosechadasObsv')
            ->add('suministraMinerales')
            ->add('suministraMineralesKgs')
            ->add('suministraConcentrado')
            ->add('suministraConcentradoKgs')
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
            'data_class' => 'MAT\EncuestaBundle\Entity\Alimentacion'
        ));
    }
}
