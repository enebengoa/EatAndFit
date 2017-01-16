<?php

namespace App\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\AdminBundle\Entity\TemaForo;
use App\AdminBundle\Entity\Comentario;
use App\AdminBundle\Entity\Receta;
use App\AdminBundle\Entity\HoraIngesta;
use App\AdminBundle\Entity\Puntuacion;
use App\AdminBundle\Form\Type\TemaForoType;
use App\AdminBundle\Entity\Menu;
use App\AdminBundle\Form\Type\MenuType;
use App\AdminBundle\Entity\Lista;
use App\AdminBundle\Form\Type\ListaType;
use App\AdminBundle\Repository\ListaRepository;
use App\AdminBundle\Entity\OrdenCompra;
use App\AdminBundle\Form\Type\OrdenCompraType;
use App\AdminBundle\Form\Type\OrdenCompra2Type;
use App\AdminBundle\Repository\MenuRepository;
use App\AdminBundle\Entity\SubMenu;
use App\AdminBundle\Form\Type\SubMenuType;
use App\UserBundle\Form\Type\ContactType;
use App\AdminBundle\Form\Type\ComentarioType;
use App\AdminBundle\Form\Type\PuntuacionType;
use App\AdminBundle\Entity\menus_listas;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends Controller
{
	public function homeAction()
    {
        $lastRecetas = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Receta')->getTopReceta('4');

        return $this->render('UserBundle:Home:main.html.twig', array('lastRecetas' => $lastRecetas));
    } 

    public function PYRAction()
    {
        $lastRecetas = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Receta')->getTopReceta('4');

        return $this->render('UserBundle:PYR:show.html.twig', array('lastRecetas' => $lastRecetas));
    } 

    public function contactoAction(Request $request)
    {

        $form = $this->createForm(ContactType::class,null,array(
            // To set the action use $this->generateUrl('route_identifier')
            'action' => $this->generateUrl('App_user_contacto'),
            'method' => 'POST'
        ));

        if ($request->isMethod('POST')) {
            // Refill the fields in case the form is not valid.
            $form->handleRequest($request);

            if($form->isValid()){
                // Send mail
                if($this->sendEmail($form->getData())){

                    // Everything OK, redirect to wherever you want ! :
                    
                    return $this->redirectToRoute('App_user_homepage');
                }else{
                    // An error ocurred, handle
                    var_dump("Error :(");
                }
            }
        }

        return $this->render('UserBundle:Contacto:contacto.html.twig', array(
            'form' => $form->createView()
        ));
    } 

    private function sendEmail($data){       
        $message = \Swift_Message::newInstance()
        ->setSubject("Eat&Fit: ". $data["subject"])
        ->setFrom($data["email"])
        ->setTo('enebengoa@hotmail.com')
        ->setBody($data["message"]."Email de contacto :".$data["email"]);
        
        return $this->get('mailer')->send($message);
    }

    public function showBlogAction()
    {
        return $this->render('UserBundle:Blog:menuBlog.html.twig');
    } 

    public function showServicioAction()
    {
        return $this->render('UserBundle:Servicio:menuServicio.html.twig');
    } 

    public function listRecetaAction(Request $request)
    {       
        $data = array();
        $defaultData = array();
        $form = $this->createFormBuilder($defaultData,array('allow_extra_fields' => true,'attr' => array('id' => 'fitro', 'class' => 'filtro')))
            ->setAction($request->getRequestUri())
            ->setMethod('GET')
            ->add('nombre',TextType::class,array("label"=>"Nombre","required"=>false,"attr"=>array("class"=>"from-name form-control")))
            ->add('TipoReceta',EntityType::class,array('class' => 'AdminBundle:TipoReceta',"label"=>"Tipo de receta","required"=>false,"attr"=>array("class"=>"from-name form-control")))
            ->add('numeroComensales', IntegerType::class,array('label'=>"Nº comensales","required"=>false,"attr"=>array("class"=>"from-name form-control")))
            ->add('celiaco', ChoiceType::class, array("label"=>"Apto para celiacos",
                'choices'  => array(
                    'Sí' => 1,
                    'No' => 0,
            ),"required"=>false, "attr"=>array("class"=>"from-name form-control")))
            ->add('Buscar', SubmitType::class, array("attr"=>array("class"=>"from-submit btn btn-success")))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // data is an array with "cat" keys
            $data = $form->getData();
        }

        $defaultDataMenu = array();
        if($this->getUser()!=NULL)
        {
            $formMenu = $this->createFormBuilder($defaultDataMenu,array('allow_extra_fields' => true,'attr' => array('id' => 'fitro', 'class' => 'filtro')))
                ->setAction($request->getRequestUri())
                ->setMethod('POST')
                ->add('menu',EntityType::class,array('class' => 'AdminBundle:Menu',

                    'query_builder' => function (MenuRepository $er) 
                    {
                        return $er->createQueryBuilder('m')->where('m.Usuario= :userId OR m.publico = 1')->setParameter(':userId', $this->getUser()->getId())->orderBy('m.fechaCreacion', 'DESC');
                    },


                    "label"=>" ","required"=>"required","attr"=>array("class"=>"from-name form-control")))
                ->getForm()->createView();
        }
        else{
            $formMenu=NULL;

        }


        $em = $this->getDoctrine()->getManager();
        $query = $em->getRepository('AdminBundle:Receta')->queryAll($data);
        $tiposReceta = $this->get('doctrine')->getManager()->getRepository('AdminBundle:TipoReceta')->findBy(array(), array('id' => 'ASC'));
        $lastRecetas = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Receta')->getlastThreeReceta('3');

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            3/*limit per page*/
        );

        $subMenu = new SubMenu();
        $formSubMenu=$this->createForm(SubMenuType::class,$subMenu);


        // parameters to template
        return $this->render('UserBundle:Receta:list.html.twig', array('pagination' => $pagination, 'tiposReceta' => $tiposReceta, 'lastRecetas' => $lastRecetas,  'form' => $form->createView(), 'formMenu' => $formMenu,  'formSubMenu' => $formSubMenu->createView()));
    } 

    public function listRecetaHoraIngestaAction($id){

		$recetas = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Receta')->getRecetasHoraIngesta($id);
		$horasIngesta = $this->get('doctrine')->getManager()->getRepository('AdminBundle:HoraIngesta')->findBy(array(), array('id' => 'ASC'));
        $tiposReceta = $this->get('doctrine')->getManager()->getRepository('AdminBundle:TipoReceta')->findBy(array(), array('id' => 'ASC'));
        $lastRecetas = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Receta')->getlastThreeReceta('3');

		return $this->render('UserBundle:Receta:list.html.twig', array('recetas' => $recetas, 'horasIngesta' => $horasIngesta, 'tiposReceta' => $tiposReceta, 'lastRecetas' => $lastRecetas));
		
	}

    public function listRecetaTipoRecetaAction($id){

        $recetas = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Receta')->getRecetasTipoReceta($id);
        $horasIngesta = $this->get('doctrine')->getManager()->getRepository('AdminBundle:HoraIngesta')->findBy(array(), array('id' => 'ASC'));
        $tiposReceta = $this->get('doctrine')->getManager()->getRepository('AdminBundle:TipoReceta')->findBy(array(), array('id' => 'ASC'));
        $lastRecetas = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Receta')->getlastThreeReceta('3');

        return $this->render('UserBundle:Receta:list.html.twig', array('recetas' => $recetas, 'horasIngesta' => $horasIngesta, 'tiposReceta' => $tiposReceta, 'lastRecetas' => $lastRecetas));
        
    }

    	public function showRecetaAction($id)
	{
		$receta = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Receta')->find($id);
		$horasIngesta = $this->get('doctrine')->getManager()->getRepository('AdminBundle:HoraIngesta')->findBy(array(), array('id' => 'ASC'));
        $tiposReceta = $this->get('doctrine')->getManager()->getRepository('AdminBundle:TipoReceta')->findBy(array(), array('id' => 'ASC'));
        $lastRecetas = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Receta')->getlastThreeReceta('3');
        $puntuacionMedia = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Receta')->getPuntuacionMedia($id);
        $comentarios = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Comentario')->getComentarioReceta($id);
        

        $Puntuacion= new Puntuacion();
        $Puntuacion->setPuntuacion($puntuacionMedia);
        $form   = $this->createForm(ComentarioType::class, new Comentario());
        $form2  = $this->createForm(PuntuacionType::class, $Puntuacion);

		
		if (!$receta) {
			throw $this->createNotFoundException('No se ha encontrado la receta seleccionada');
		}
		return $this->render('UserBundle:Receta:show.html.twig', array('puntuacionMedia' => $puntuacionMedia,'comentarios' => $comentarios,'receta' => $receta, 'horasIngesta' => $horasIngesta, 'tiposReceta' => $tiposReceta, 'lastRecetas' => $lastRecetas, 'form2'   => $form2->createView(), 'form'   => $form->createView()));
	}

    public function listTecnicaAction(Request $request)
    {
        $data = array();
        $defaultData = array();
        $form = $this->createFormBuilder($defaultData,array('attr' => array('id' => 'fitro', 'class' => 'filtro')))
            ->setAction($request->getRequestUri())
            ->setMethod('GET')
            ->add('nombre',TextType::class,array("label"=>false,"required"=>false,"attr"=>array("class"=>"from-name form-control")))
            ->add('Buscar', SubmitType::class, array("attr"=>array("class"=>"from-submit btn btn-success")))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // data is an array with "cat" keys
            $data = $form->getData();
        }

        $em = $this->getDoctrine()->getManager();
        $query = $em->getRepository('AdminBundle:Tecnica')->queryAll($data);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            2/*limit per page*/
        );

        // parameters to template
        return $this->render('UserBundle:Tecnica:list.html.twig', array('pagination' => $pagination,  'form' => $form->createView()));        
    } 

     public function listUtensilioAction(Request $request)
    {
        //$filters= new Filters();
        $data = array();
        $defaultData = array();
        $form = $this->createFormBuilder($defaultData,array('attr' => array('id' => 'fitro', 'class' => 'filtro')))
            ->setAction($request->getRequestUri())
            ->setMethod('GET')
            ->add('nombre',TextType::class,array("label"=>false,"required"=>false,"attr"=>array("class"=>"from-name form-control")))
            ->add('Buscar', SubmitType::class, array("attr"=>array("class"=>"from-submit btn btn-success")))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // data is an array with "cat" keys
            $data = $form->getData();
        }

        $em = $this->getDoctrine()->getManager();
        $query = $em->getRepository('AdminBundle:Utensilio')->queryAll($data);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );

        // parameters to template
        return $this->render('UserBundle:Utensilio:list.html.twig', array('pagination' => $pagination,  'form' => $form->createView()));
    }

     public function listMenuAction(Request $request)
    {       
        $data = array();
        $defaultData = array();
        $form = $this->createFormBuilder($defaultData,array('allow_extra_fields' => true,'attr' => array('id' => 'fitro', 'class' => 'filtro')))
            ->setAction($request->getRequestUri())
            ->setMethod('GET')
            ->add('nombre',TextType::class,array("label"=>"Nombre","required"=>false,"attr"=>array("class"=>"from-name form-control")))
            ->add('publico', ChoiceType::class, array("label"=>"Publico",
                'choices'  => array(
                    'Sí' => 1,
                    'No' => 0,
            ),"required"=>false, "attr"=>array("class"=>"from-name form-control")))
            ->add('Buscar', SubmitType::class, array("attr"=>array("class"=>"from-submit btn btn-success")))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // data is an array with "cat" keys
            $data = $form->getData();
        }

        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $query = $em->getRepository('AdminBundle:Menu')->queryAll($data,$user);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            3/*limit per page*/
        );

         $defaultDataLista = array();
        $formLista = $this->createFormBuilder($defaultDataLista,array('allow_extra_fields' => true,'attr' => array('id' => 'fitro', 'class' => 'filtro')))
            ->setAction($request->getRequestUri())
            ->setMethod('POST')
            ->add('lista',EntityType::class,array('class' => 'AdminBundle:Lista',

                'query_builder' => function (ListaRepository $er) 
                {
                    return $er->createQueryBuilder('l')->where('l.Usuario= :userId')->setParameter(':userId', $this->getUser()->getId())->orderBy('l.fechaCreacion', 'DESC');
                },


                "label"=>" ","required"=>"required","attr"=>array("class"=>"from-name form-control")))
            ->getForm();

        $menu = new Menu();
        $formMenu=$this->createForm(MenuType::class,$menu, array('action'=>$this->generateUrl('App_user_addMenu'),'method'=>'POST'));

         $ordenCompra = new OrdenCompra();
        $formOrdenCompra=$this->createForm(OrdenCompraType::class,$ordenCompra);

        // parameters to template
        return $this->render('UserBundle:Menu:list.html.twig', array('pagination' => $pagination,  'form' => $form->createView(), 'formMenu' => $formMenu->createView(), 'formLista' => $formLista->createView(), 'formOrdenCompra' => $formOrdenCompra->createView()));
} 


public function addMenuAction(Request $request)
    {
        $menu = new Menu();
        $form   = $this->createForm(MenuType::class, $menu);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $menu->setFechaCreacion(new \DateTime());
            $celiaco=true;
             foreach ($menu->getSubMenus() as $submenu)
            {
                    $receta=$submenu->getReceta();
                    $receta->addSubMenu($submenu);
                    $em->persist($receta);

                    if($receta->getCeliaco()==false)
                    {
                        $celiaco=false;
                    }
            
            }
            $menu->setCeliaco($celiaco);

            $caloriasTotales=0;
            foreach ($menu->getSubMenus() as $submenu)
            {
                $receta=$submenu->getReceta();
                $caloriasTotales=$caloriasTotales+$receta->getCalorias(); 
            }
            $menu->setCaloriasTotales($caloriasTotales);


            $menu->setUsuario($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($menu);
            $flush=$em->flush();
            if ($request->isXmlHttpRequest()) {
              
                return new JsonResponse(array('message' => 'El menu '.$menu->getNombre().' ha sido creado correctamente'), 200);

            }
        }
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse( array('form' => $this->renderView('UserBundle:Menu:add.html.twig', array('menu' => $menu,'formMenu' => $form->createView()))), 400);

        }
    }

    public function showMenuAction($id)
    {
        $menu = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Menu')->find($id);
        $desayuno = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Receta')->getRecetaHoraIngesta($id,'1');
        $almuerzo = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Receta')->getRecetaHoraIngesta($id,'2');
        $comida = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Receta')->getRecetaHoraIngesta($id,'3');
        $merienda = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Receta')->getRecetaHoraIngesta($id,'4');
        $cena = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Receta')->getRecetaHoraIngesta($id,'6');
        
        if (!$menu) {
            throw $this->createNotFoundException('No se ha encontrado el menu seleccionado');
        }
        return $this->render('UserBundle:Menu:show.html.twig', array('menu' => $menu, 'desayuno' => $desayuno, 'almuerzo' => $almuerzo, 'comida' => $comida, 'merienda' => $merienda, 'cena' => $cena ));
    }

    public function deleteMenuAction(Menu $menu)
    {
        $em = $this->getDoctrine()->getManager();

        if (!$menu) {
            throw $this->createNotFoundException('No entity found');
                    return new JsonResponse(array('message' => 'El menú '.$menu->getNombre().' NO ha sido borrado correctamente'), 400);

        }
        $id=$menu->getId();
        $em->remove($menu);
        $em->flush();

        return new JsonResponse(array('message' => 'El menú '.$menu->getNombre().' ha sido borrado correctamente', 'id' =>$id), 200);
    }

        public function deleteMenuListaAction(Menu $Menu,Lista $Lista)
    {

        $em = $this->getDoctrine()->getManager();

        $menuLista = $em->getRepository('AdminBundle:menus_listas')->check($Menu, $Lista);


        if (!$menuLista) {
            throw $this->createNotFoundException('No entity found');
                    return new JsonResponse(array('message' => 'El menú '.$Menu->getNombre().' NO ha sido borrado correctamente'), 400);

        }
                
        $ordenes=$Lista->getOrdenescompras();
 
            foreach ($ordenes as $orden) {
                $em->remove($orden);
            }

        $em->remove($menuLista);
        $em->flush();


        $Lista = $em->getRepository('AdminBundle:Lista')->findOneBy(array('id' => $Lista->getId()));



        $menusListas= $Lista->getMenusListas();
        foreach ( $menusListas as $menuLista){
            $cantidad= $menuLista->getNumeroComensales();
            $Menu=$menuLista->getMenu();
            foreach ($Menu->getSubMenus() as $submenu)
                {
                    $receta=$submenu->getReceta();
                    $numComensales=$receta->getNumeroComensales();
                       
                        foreach ($receta->getCantidadesUtilizadas() as $cantidadUtilizada)
                        {
                           $ingrediente=$cantidadUtilizada->getIngrediente();

                           $query = $em->getRepository('AdminBundle:OrdenCompra')->check($ingrediente, $Lista);
                           if($query==NULL)
                            {
                                 $ordenCompra = new OrdenCompra();
                                 $ordenCompra->setIngrediente($ingrediente);
                                 $ordenCompra->setLista($Lista);
                                 
                            }
                            else
                            {
                                $ordenCompra=$query;
                            }

                            $cantidadNueva=(($cantidadUtilizada->getCantidad())*$cantidad)/$numComensales;
                            $cantidadVieja=$ordenCompra->getCantidad();


                            $cant=$cantidadNueva+$cantidadVieja;

                            $ordenCompra->setCantidad($cant);

                            $em->persist($ordenCompra);
                            $Lista->addOrdenescompra($ordenCompra);
                            $em->flush();

                        }
                
                } 
        }
            $em->persist($Lista);
            
            $flush=$em->flush();



        return new JsonResponse(array('message' => 'El menú '.$Menu->getNombre().' ha sido borrado correctamente'), 200);
    }

         public function RecetasMenuAction(Request $request, Menu $Menu)
    {
                $recetas = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Receta')->getRecetasMenu($Menu);
                $answer['html'] = $this->render('UserBundle:Menu:listRecetas.html.twig', array('recetas' => $recetas))->getContent(); 
                $response = new Response();                                                
                $response->headers->set('Content-type', 'application/json; charset=utf-8');
                $response->setContent(json_encode($answer));
                return $response;
    }

    public function addSubMenuAction(Request $request,Menu $Menu, Receta $Receta,HoraIngesta $horasIngesta)
    {
        $subMenu = new SubMenu();
        $formSubMenu   = $this->createForm(SubMenuType::class, $subMenu);
        $formSubMenu->handleRequest($request);
        $subMenu->setReceta($Receta);
        $subMenu->setMenu($Menu);
        $subMenu->setHoraIngesta($horasIngesta);

            
            $em = $this->getDoctrine()->getManager();
                            $existe = $this->get('doctrine')->getManager()->getRepository('AdminBundle:subMenu')->check($subMenu);

            if($existe==NULL)
            {
                $em->persist($subMenu);
                $flush=$em->flush();
                if ($request->isXmlHttpRequest()) 
                {
              
                return new JsonResponse(array('message' => 'La receta '.$Receta->getNombre().' ha sido agregada correctamente'), 200);

                }

            }
            else
            {
                return new JsonResponse(array('message' => 'La receta '.$Receta->getNombre().' ya ha sido agregada en esa hora de ingesta en el menú seleccionado'), 400);

            }
            
            
    }

    public function deleteSubMenuAction(Receta $receta, Menu $menu, HoraIngesta $horaIngesta)
    {
        $em = $this->getDoctrine()->getManager();
        $subMenu = new SubMenu();
        $subMenu->setReceta($receta);
        $subMenu->setMenu($menu);
        $subMenu->setHoraIngesta($horaIngesta);
        $entidad = $this->get('doctrine')->getManager()->getRepository('AdminBundle:subMenu')->check($subMenu);


        if (!$entidad) {
            throw $this->createNotFoundException('No entity found');
                    return new JsonResponse(array('message' => 'La receta '.$receta->getNombre().' NO ha sido borrada correctamente'), 400);

        }

        $em->remove($entidad);
        $em->flush();

        return new JsonResponse(array('message' => 'La receta '.$receta->getNombre().' ha sido borrada correctamente','id' => '#'.$receta->getId().'-'.$horaIngesta->getId()), 200);
    }

    public function listListaAction(Request $request)
    {       
        $data = array();
        $defaultData = array();
        $form = $this->createFormBuilder($defaultData,array('allow_extra_fields' => true,'attr' => array('id' => 'fitro', 'class' => 'filtro')))
            ->setAction($request->getRequestUri())
            ->setMethod('GET')
            ->add('nombre',TextType::class,array("label"=>"Nombre","required"=>false,"attr"=>array("class"=>"from-name form-control")))
            ->add('Buscar', SubmitType::class, array("attr"=>array("class"=>"from-submit btn btn-success")))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // data is an array with "cat" keys
            $data = $form->getData();
        }

        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $query = $em->getRepository('AdminBundle:Lista')->queryAll($data, $user);



        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            3/*limit per page*/
        );

        $lista = new Lista();
        $formLista=$this->createForm(ListaType::class,$lista, array('action'=>$this->generateUrl('App_user_addLista'),'method'=>'POST'));

        // parameters to template
        return $this->render('UserBundle:Lista:list.html.twig', array('pagination' => $pagination,  'form' => $form->createView(), 'formLista' => $formLista->createView()));
} 

    public function addListaAction(Request $request)
    {
        $lista = new Lista();
        $form   = $this->createForm(ListaType::class, $lista);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $lista->setFechaCreacion(new \DateTime());
            $lista->setUsuario($this->getUser());

            $em = $this->getDoctrine()->getManager();
            $em->persist($lista);
            $flush=$em->flush();
            if ($request->isXmlHttpRequest()) {
              
                return new JsonResponse(array('message' => 'La lista '.$lista->getNombre().' ha sido creada correctamente'), 200);

            }
        }
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse( array('form' => $this->renderView('UserBundle:Lista:add.html.twig', array('lista' => $lista,'formLista' => $form->createView()))), 400);

        }
    }

    public function showListaAction($id)
    {
        $lista = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Lista')->find($id);        
        
        if (!$lista) 
        {
            throw $this->createNotFoundException('No se ha encontrado la lista seleccionada');
        }
        $ordenCompra = new OrdenCompra();
        $formOrdenCompra   = $this->createForm(OrdenCompra2Type::class, $ordenCompra);
        return $this->render('UserBundle:Lista:show.html.twig', array('lista' => $lista, 'formOrdenCompra' => $formOrdenCompra->createView()));
    }

    public function deleteListaAction(Lista $lista)
    {
        $em = $this->getDoctrine()->getManager();

        if (!$lista) {
            throw $this->createNotFoundException('No entity found');
                    return new JsonResponse(array('message' => 'La lista '.$lista->getNombre().' NO ha sido borrada correctamente'), 400);

        }
        $id=$lista->getId();
        $em->remove($lista);
        $em->flush();

        return new JsonResponse(array('message' => 'La lista '.$lista->getNombre().' ha sido borrada correctamente', 'id' =>$id), 200);
    }

    public function renderJsonShowListaAction(Request $request, Lista $id)
    {


        $lista = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Lista')->listTable($id);

        $serializer = $this->get('jms_serializer');
        $response = $serializer->serialize($lista,'json');

        return new Response($response);
    }

        public function renderJsonShowMenuListaAction(Request $request, Lista $id)
    {


        $lista = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Lista')->listMenuTable($id);

        $serializer = $this->get('jms_serializer');
        $response = $serializer->serialize($lista,'json');

        return new Response($response);
    }

     public function addOrdenCompraAction(Request $request,Menu $Menu, Lista $Lista, $cantidad)
    {
        
        
        $em = $this->getDoctrine()->getManager();
        $menusLista = $em->getRepository('AdminBundle:menus_listas')->check($Menu, $Lista);
        if($menusLista!=NULL)
        {
            
        }else{
            $menusLista = new menus_listas();
            $menusLista->setMenu($Menu);
            $menusLista->setLista($Lista);
        }
        
        
        $menusLista->setNumeroComensales($cantidad);

        $Lista->addMenusLista($menusLista);
        $Menu->addMenusLista($menusLista);
        $em->persist($menusLista);
                    $em->flush();

       $ordenes=$Lista->getOrdenescompras();
 
            foreach ($ordenes as $orden) {
                $em->remove($orden);
            }

        $em->flush();


        $Lista = $em->getRepository('AdminBundle:Lista')->findOneBy(array('id' => $Lista->getId()));



        $menusListas= $Lista->getMenusListas();
        foreach ( $menusListas as $menuLista){
            $cantidad= $menuLista->getNumeroComensales();
            $Menu=$menuLista->getMenu();
            foreach ($Menu->getSubMenus() as $submenu)
                {
                    $receta=$submenu->getReceta();
                    $numComensales=$receta->getNumeroComensales();
                       
                        foreach ($receta->getCantidadesUtilizadas() as $cantidadUtilizada)
                        {
                           $ingrediente=$cantidadUtilizada->getIngrediente();

                           $query = $em->getRepository('AdminBundle:OrdenCompra')->check($ingrediente, $Lista);
                           if($query==NULL)
                            {
                                 $ordenCompra = new OrdenCompra();
                                 $ordenCompra->setIngrediente($ingrediente);
                                 $ordenCompra->setLista($Lista);
                                 
                            }
                            else
                            {
                                $ordenCompra=$query;
                            }

                            $cantidadNueva=(($cantidadUtilizada->getCantidad())*$cantidad)/$numComensales;
                            $cantidadVieja=$ordenCompra->getCantidad();


                            $cant=$cantidadNueva+$cantidadVieja;

                            $ordenCompra->setCantidad($cant);

                            $em->persist($ordenCompra);
                            $Lista->addOrdenescompra($ordenCompra);
                            $em->flush();

                        }
                
                } 
        }
             $em->persist($Lista);
            
            $flush=$em->flush();

                return new JsonResponse(array('message' => 'El menú '.$Menu->getNombre().' ha sido agregada correctamente a la lista'), 200);

            

    }

    public function deleteOrdenCompraAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entidad = $em->getRepository('AdminBundle:OrdenCompra')->findOneBy(array('id' => $id));


        if (!$entidad) {
            throw $this->createNotFoundException('No entity found');
        }

        $em->remove($entidad);
        $em->flush();

       return new JsonResponse(array('message' => 'El ingrediente '.$entidad->getIngrediente()->getNombre().' ha sido eliminado de la lista'), 200);

    }

    public function comensalesAction(Menu $Menu, Lista $Lista)
    {
        $em = $this->getDoctrine()->getManager();
        $entidad = $em->getRepository('AdminBundle:menus_listas')->check($Menu, $Lista);

        if (!$entidad) {
            return new JsonResponse(array('message' => 0), 200);        
        }

       return new JsonResponse(array('message' => $entidad->getNumeroComensales()), 200);

    }
    
    public function modifyEstadoAction(OrdenCompra $id)
    {
                $estado=$id->getComprado();
                if ($estado==true)
                {
                    $id->setComprado(false);
                }
                else
                {
                    $id->setComprado(true);
                }
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($id);
                 $flush=$em->flush();
                  return new JsonResponse(200);
    }

    public function addOrdenCompraListaAction(Request $request, Lista $id)
    {
        $ordenCompra = new OrdenCompra();
        $formOrdenCompra   = $this->createForm(ordenCompra2Type::class, $ordenCompra);
        $formOrdenCompra->handleRequest($request);
         $em = $this->getDoctrine()->getManager();
        if ($formOrdenCompra->isSubmitted() && $formOrdenCompra->isValid()) {

                        $ingrediente=$ordenCompra->getIngrediente();

                       $query = $em->getRepository('AdminBundle:OrdenCompra')->check($ingrediente, $id);
                       if($query==NULL)
                        {
                             $ordenCompra->setLista($Lista);
                             $id->addOrdenescompra($ordenCompra);  
                             $em->persist($ordenCompra);
                             $em->persist($id);
                        }
                        else
                        {
                            $cantidadNueva=$ordenCompra->getCantidad();
                            $cantidadVieja=$query->getCantidad();
                            $cant=$cantidadNueva+$cantidadVieja;
                            $query->setCantidad($cant);
                            $em->persist($query);

                        }

            $flush=$em->flush();
            if ($request->isXmlHttpRequest()) {
              
                return new JsonResponse(array('message' => 'El ingrediente '.$ordenCompra->getIngrediente()->getNombre().' ha sido agregado correctamente a la lista'), 200);

            }
        }
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse( array('formOrdenCompra' => $this->renderView('UserBundle:OrdenCompra:add2.html.twig', array('ordenCompra' => $ordenCompra,'formOrdenCompra' => $formOrdenCompra->createView()))), 400);

        }
    }


     public function addForoAction(Request $request)
    {
        $TemaForo = new TemaForo();
        $form   = $this->createForm(TemaForoType::class, $TemaForo);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        
            $TemaForo->setUsuariooo($this->getUser());
            $TemaForo->setFechaCreacion(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($TemaForo);
            $em->flush();
             
            if ($request->isXmlHttpRequest()) {
              
                return new JsonResponse(array('message' => 'El tema '.$TemaForo->getNombre().' ha sido creado correctamente'), 200);

            }
        }
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse( array('form' => $this->renderView('UserBundle:Temaforo:add.html.twig', array('TemaForo' => $TemaForo,'form' => $form->createView()))), 400);

        }  
    }

    public function listForoAction()
    {
        $em = $this->getDoctrine()->getManager();
        $foros= $em->getRepository('AdminBundle:TemaForo')->findAll();
        $tema = new TemaForo();
        $formForo=$this->createForm(TemaForoType::class,$tema, array('action'=>$this->generateUrl('App_user_addForo'),'method'=>'POST'));

        
        return $this->render('UserBundle:Foro:list.html.twig', array('foros' => $foros, 'tema' => $tema, 'formForo'   => $formForo->createView()));
        
    } 

    public function showForoAction($id)
    {
        $foro = $this->get('doctrine')->getManager()->getRepository('AdminBundle:TemaForo')->find($id);
        $comentarios = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Comentario')->getComentarioForo($id);

        $form   = $this->createForm(ComentarioType::class, new Comentario());

        if (!$foro) {
            throw $this->createNotFoundException('No se ha encontrado el foro seleccionado');
        }
        return $this->render('UserBundle:Foro:show.html.twig', array('foro' => $foro,'comentarios' => $comentarios, 'form'   => $form->createView()));
    }
}
