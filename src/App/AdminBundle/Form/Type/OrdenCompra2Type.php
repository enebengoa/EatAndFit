<?php

namespace App\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class OrdenCompra2Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('Ingrediente',EntityType::class,array('class' => 'AdminBundle:Ingrediente',"label"=>"Ingrediente","required"=>"required","attr"=>array("class"=>"from-name form-control")))
        ->add('cantidad', IntegerType::class,array('label'=>"Número de comensales","required"=>"required","attr"=>array("class"=>"from-name form-control")))
        ->add('Guardar',SubmitType::class,array("attr"=>array("class"=>"from-submit btn btn-primary")))
         ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\AdminBundle\Entity\OrdenCompra'
        ));
    }
}
