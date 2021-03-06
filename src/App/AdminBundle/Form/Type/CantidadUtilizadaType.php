<?php

namespace App\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class CantidadUtilizadaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cantidad', IntegerType::class,array('label'=>"Cantidad","required"=>"required","attr"=>array("class"=>"from-name form-control")))
            ->add('Ingrediente',EntityType::class,array('class' => 'AdminBundle:Ingrediente',"label"=>"Ingrediente","required"=>"required","attr"=>array("class"=>"from-name form-control")))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\AdminBundle\Entity\CantidadUtilizada'
        ));
    }
}
