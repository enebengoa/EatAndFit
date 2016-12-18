<?php

namespace App\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class IngredienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',TextType::class,array("label"=>"Nombre","required"=>"required","attr"=>array("class"=>"from-name form-control")))
            ->add('descripcion',TextareaType::class,array("label"=>"Descripción","attr"=>array("class"=>"from-name form-control")))
            ->add('tipoIngrediente', ChoiceType::class, array("label"=>"Tipo",
                'choices'  => array(
                    'Carbohidrato' => 'Carbohidrato',
                    'Proteína' => 'Proteína',
                    'Grasa' => 'Grasa',
                    'Azucar' => 'Azucar',
                    'Otros' => 'Otros',
            ),"required"=>"required"))
            ->add('unidadMedida', ChoiceType::class, array("label"=>"Unidad de medida",
                'choices'  => array(
                    'Gramos' => 'Gramos',
                    'Mililitros' => 'Mililitros',
                    'Unidades' => 'Unidades',
                    'Tazas' => 'Tazas',
                    'Cucharadas' => 'Cucharadas',
                    'Cucharaditas' => 'Cucharaditas',
            ),"required"=>"required"))
            ->add('caloriasUnidad', IntegerType::class,array("label"=>"Calorias por unidad","required"=>"required","attr"=>array("class"=>"from-name form-control")))
            ->add('celiaco', ChoiceType::class, array("label"=>"Apto para celiacos",
                'choices'  => array(
                    'Sí' => 1,
                    'No' => 0,
            ),"required"=>"required", "attr"=>array("class"=>"from-name form-control")))
            ->add('Guardar',SubmitType::class,array("attr"=>array("class"=>"from-submit btn btn-primary")))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\AdminBundle\Entity\Ingrediente'
        ));
    }
}
