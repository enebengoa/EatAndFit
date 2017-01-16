<?php

namespace App\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class UtensilioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',TextType::class,array("label"=>"Nombre","required"=>"required","attr"=>array("class"=>"from-name form-control")))
            ->add('descripcion',TextareaType::class,array("label"=>"Descripción","required"=>"required","attr"=>array("class"=>"from-name form-control")))
            ->add('imagen', FileType::class, array('label' => 'Imagen ',"required"=>"required",'data_class' => null))
            ->add('Guardar',SubmitType::class,array("attr"=>array("class"=>"from-submit btn btn-primary")))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\AdminBundle\Entity\Utensilio'
        ));
    }
}
