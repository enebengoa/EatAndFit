<?php

namespace App\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class SubMenuType extends AbstractType  
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('HoraIngesta',EntityType::class,array('class' => 'AdminBundle:HoraIngesta','multiple' => false,"label"=>"Hora de ingesta","required"=>"required", 'query_builder' => function(EntityRepository $er ) {
                    return $er->createQueryBuilder('w')
                              ->orderBy('w.id', 'ASC');
                },"attr"=>array("class"=>"from-name form-control")))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\AdminBundle\Entity\SubMenu'
        ));
    }
}
