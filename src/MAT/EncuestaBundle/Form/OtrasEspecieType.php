<?php

namespace MAT\EncuestaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OtrasEspecieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numBufalinosButoros')
            ->add('numBufalinosBufalas')
            ->add('numBufalinosBubillos')
            ->add('numBufalinosBumautes')
            ->add('numBufalinosBucerros')
            ->add('numCaprinosCabrio')
            ->add('numCaprinosCabra')
            ->add('numCaprinosCabritones')
            ->add('numCaprinosCabritonas')
            ->add('numCaprinosCabritos')
            ->add('numOvinosCarnero')
            ->add('numOvinosOveja')
            ->add('numOvinosBorregos')
            ->add('numOvinosBorregas')
            ->add('numOvinosCorderos')
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
            'data_class' => 'MAT\EncuestaBundle\Entity\OtrasEspecie'
        ));
    }
}
