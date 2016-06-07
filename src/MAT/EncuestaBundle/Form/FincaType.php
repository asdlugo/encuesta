<?php

namespace MAT\EncuestaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FincaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'text', array(
                 'label' =>'Nombre de la Finca',    
                 'attr' => array('placeholder' => 'Ingrese Nombre de la Finca', 'class'=> 'form-control input-sm ')
             )) 
            ->add('ubicacion', 'text', array(
                 'label' =>'Ubicación',    
                 'attr' => array('placeholder' => 'Ingrese Ubicación', 'class'=> 'form-control input-sm ')
             )) 
            ->add('idParroquia', 'text', array(
                 'label' =>'Parroquia',    
                 'attr' => array('placeholder' => 'Ingrese Parroquia', 'class'=> 'form-control input-sm ')
             )) 
            ->add('idSector', 'text', array(
                 'label' =>'Sector',    
                 'attr' => array('placeholder' => 'Ingrese Sector', 'class'=> 'form-control input-sm ')
             )) 
            ->add('idCaserio', 'text', array(
                 'label' =>'Caserío',    
                 'attr' => array('placeholder' => 'Ingrese Caserío', 'class'=> 'form-control input-sm ')
             )) 
            ->add('gpsUtmNorte')
            ->add('gpsUtmEste')
            ->add('idCondicionVia', 'text', array(
                 'label' =>'Condición de la Vía',    
                 'attr' => array('placeholder' => 'Ingrese Condición de la Vía', 'class'=> 'form-control input-sm ')
             )) 
            ->add('documentoInti')
            ->add('hierroInsai')
            ->add('visible')
            
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MAT\EncuestaBundle\Entity\Finca'
        ));
    }
}
