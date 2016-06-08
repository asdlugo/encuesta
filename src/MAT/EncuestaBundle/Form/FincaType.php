<?php

namespace MAT\EncuestaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

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
            ->add('idCondicionVia', ChoiceType::class, array(
                 'label' =>'Condición de la Vía',    
                'placeholder' => 'Ingrese Condición de la Vía',
                 'attr' => array( 'class'=> 'form-control input-sm ')
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
