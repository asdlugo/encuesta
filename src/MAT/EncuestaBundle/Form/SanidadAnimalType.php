<?php

namespace MAT\EncuestaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SanidadAnimalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('recibeAsistencia')
            ->add('asistenciaPersona')
            ->add('aftosaFecha', 'date')
            ->add('rabiaFecha', 'date')
            ->add('leptospiraFecha', 'date')
            ->add('viralesFecha', 'date')
            ->add('clostridialesFecha', 'date')
            ->add('brucellaFecha', 'date')
            ->add('tripleFecha', 'date')
            ->add('otraFecha', 'date')
            ->add('otraDescripcion')
            ->add('endoparasitosTipo')
            ->add('endoparasitosFrecuencia')
            ->add('ectoparasitosTipo')
            ->add('ectoparasitosFrecuencia')
            ->add('pruebaBrucella', 'date')
            ->add('pruebaLeptospira', 'date')
            ->add('pruebaOtra', 'date')
            ->add('pruebaOtraDescripcion')
            ->add('secadoVacaNatural')
            ->add('secadoVacaInducido')
            ->add('secadoVacaProducto')
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
            'data_class' => 'MAT\EncuestaBundle\Entity\SanidadAnimal'
        ));
    }
}
