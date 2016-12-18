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
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class RecetaType extends AbstractType
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
            ->add('tiempoPreparacion', TimeType::class, array('label' => 'Tiempo de preparación ','widget' => 'single_text',"required"=>"required","attr"=>array("class"=>"from-name form-control")))
            ->add('numeroComensales', IntegerType::class,array('label'=>"Número de comensales","required"=>"required","attr"=>array("class"=>"from-name form-control")))
            ->add('TipoReceta',EntityType::class,array('class' => 'AdminBundle:TipoReceta',"label"=>"Tipo de receta","required"=>"required","attr"=>array("class"=>"from-name form-control")))
            ->add('utensilios',EntityType::class,array('class' => 'AdminBundle:Utensilio','multiple' => true,"label"=>"Utensilios requeridos","required"=>"required","attr"=>array("class"=>"from-name form-control")))
            ->add('dificultad', ChoiceType::class, array(
                'choices'  => array(
                    'Fácil' => 1,
                    'Intermedio' => 2,
                    'Difícil' => 3,
            ),"required"=>"required"))
            ->add('horasIngesta',EntityType::class,array('class' => 'AdminBundle:HoraIngesta','multiple' => true,"label"=>"Horas de ingesta","required"=>"required","attr"=>array("class"=>"from-name form-control")))
            ->add('imagen', FileType::class, array('label' => 'Imagen ', 'data_class' => null))
            ->add('cantidadesUtilizadas', CollectionType::class, array(
                    'entry_type' => CantidadUtilizadaType::class,
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'label' =>' '
                ))
            ->add('Guardar',SubmitType::class,array("attr"=>array("class"=>"from-submit btn btn-primary")))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\AdminBundle\Entity\Receta'
        ));
    }
}
