<?php
// your-path-to-types/ContactType.php

namespace App\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('attr' => array('placeholder' => 'Tu nombre'),
                'constraints' => array(
                    new NotBlank(array("message" => "Nombre")),
                )
            ))
            ->add('subject', TextType::class, array('attr' => array('placeholder' => 'El tema'),
                'constraints' => array(
                    new NotBlank(array("message" => "Tema")),
                )
            ))
            ->add('email', EmailType::class, array('attr' => array('placeholder' => 'Tu email'),
                'constraints' => array(
                    new NotBlank(array("message" => "Email")),
                    new Email(array("message" => "El email es incorrecto")),
                )
            ))
            ->add('message', TextareaType::class, array('attr' => array('placeholder' => 'El mensaje aquí'),
                'constraints' => array(
                    new NotBlank(array("message" => "Mensaje")),
                )
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'error_bubbling' => true
        ));
    }

    public function getName()
    {
        return 'contact_form';
    }
}