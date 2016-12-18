<?php

namespace App\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TecnicaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',TextType::class,array("label"=>"Nombre","required"=>"required","attr"=>array("class"=>"from-name form-control")))
            ->add('fechaCreacion', DateType::class, array('label' => 'Fecha de creación: ','widget' => 'single_text',"required"=>"required","attr"=>array("class"=>"from-name form-control")))
            ->add('descripcion',TextareaType::class,array("label"=>"Descripción","required"=>"required","attr"=>array("class"=>"from-name form-control")))
            ->add('vid',TextareaType::class,array("label"=>"Video","required"=>"required","attr"=>array("class"=>"from-name form-control")))
            ->add('utensilios',EntityType::class,array('class' => 'AdminBundle:Utensilio','multiple' => true,"label"=>"Utensilios requeridos","required"=>"required","attr"=>array("class"=>"from-name form-control")))
            //->add('video'
            ->add('Guardar',SubmitType::class,array("attr"=>array("class"=>"from-submit btn btn-primary")))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\AdminBundle\Entity\Tecnica'
        ));
    }
}
