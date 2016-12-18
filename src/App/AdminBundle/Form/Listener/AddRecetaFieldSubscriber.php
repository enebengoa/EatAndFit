<?php

namespace App\AdminBundle\Form\Listener;

use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AddRecetaFieldSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT => 'preSubmit',
        );
    }

    /**
     * Este evento se ejecuta al momento de crear el formulario 
     * y nos sirve para obtener datos inicales del objeto asociado al form.
     * Ya que por ejemplo si el objeto viene de la base de datos y contiene
     * ya un "HoraIngesta" establecido, lo ideal es que el HoraIngesta "Receta" se carge inicalmente con
     * los estados de dicho "HoraIngesta".
     */
    public function preSetData(FormEvent $event)
    {
        $Menu = $event->getData(); //data es un objeto AdminBundle\Entity\Menu


        // Pasamos siempre el HoraIngesta así sea null
        // para que cuando sea una "Menu" nuevo, el listado de estados esté
        // vacio inicialmente, y solo se llene de items, cuando se ejecute el 
        // ajax que obtiene los "Recetas" del "HoraIngesta" seleccionado por el usuario.


        if($Menu and $Menu->getRecetas()){
            // obtenemos el HoraIngesta por medio del objeto Receta:
            /*$HoraIngesta = $Menu->getRecetas()->getHorasIngesta()->first();

            $event->getForm()->add('HoraIngesta', EntityType::class, array('class' => 'AdminBundle:HoraIngesta','mapped' => false,"attr"=>array("class"=>"form-control"),
                'query_builder' => function(EntityRepository $er )use ($HoraIngesta) {
                return $er->createQueryBuilder('c')
                        ->where('c.id = :HoraIngesta')
                        ->setParameter('HoraIngesta', $HoraIngesta->getId());;
                }));
            $this->addField($event->getForm(),  $HoraIngesta);
*/
        }
        else{
            $event->getForm()->add('recetas', EntityType::class, array(
            'class' => 'AdminBundle:Receta',
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('Receta');;
                }        
        ));
        }


        // Es importante siempre verificar que el valor devuelto por $event->getData()
        // (que en este caso es $Menu) no sea null, porque no es obligatorio que al crear
        // el formulario, se le pase una instancia de Menu,
        // y si no se le pasa, Menu será nulo.
    }




    /**
     * Cuando el usuario llene los datos del formulario y haga el envío del mismo,
     * este método será ejecutado.
     */
    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        //data es un arreglo con los valores establecidos por el usuario en el form.

        //como $data contiene el "HoraIngesta" seleccionado por el usuario al enviar el formulario,
        // usamos el valor de la posicion $data['HoraIngesta'] para filtrar el sql de los Recetas
        $this->addField($event->getForm(), $data['HoraIngesta']);
    }

    protected function addField(Form $form, $HoraIngesta)
    {
        // actualizamos el HoraIngesta Inverandero, pasandole el HoraIngesta a la opción
        // query_builder, para que el dql tome en cuenta
        // y filtre la consulta por su valor.
        $form->add('recetas', EntityType::class, array(
            'class' => 'AdminBundle:Receta',
            'query_builder' => function(EntityRepository $er)use ($HoraIngesta) {
                return $er->createQueryBuilder('Receta')
                    ->innerJoin('Receta.horasIngesta','hi')
                    ->where('hi.nombre = :HoraIngesta')
                    ->setParameter('HoraIngesta', $HoraIngesta);;
                }        
        ));
    }
}