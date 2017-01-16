<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\AdminBundle\Entity\Receta;
use App\AdminBundle\Form\Type\RecetaType;
use App\AdminBundle\Entity\Ingrediente;
use App\AdminBundle\Form\Type\IngredienteType;
use App\AdminBundle\Entity\TipoReceta;
use App\AdminBundle\Form\Type\TipoRecetaType;
use App\AdminBundle\Entity\HoraIngesta;
use App\AdminBundle\Form\Type\HoraIngestaType;
use App\AdminBundle\Entity\Utensilio;
use App\AdminBundle\Form\Type\UtensilioType;
use App\AdminBundle\Entity\Tecnica;
use App\AdminBundle\Form\Type\TecnicaType;
use App\AdminBundle\Entity\Menu;
use App\AdminBundle\Form\Type\MenuType;
use App\AdminBundle\Entity\SubMenu;
use App\AdminBundle\Form\Type\SubMenuType;
use App\AdminBundle\Entity\Lista;
use App\AdminBundle\Form\Type\ListaType;
use App\AdminBundle\Entity\TemaForo;
use App\AdminBundle\Form\Type\TemaForoType;
use App\AdminBundle\Entity\Comentario;
use App\AdminBundle\Form\Type\ComentarioType;
use App\AdminBundle\Entity\TipoUsuario;
use App\AdminBundle\Form\Type\TipoUsuarioType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    public function dashboardAction()
    {
        $entidad = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Receta')->getIngredientesDistribucion();
        $ingredientes = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Ingrediente')->getNumeroIngrediente();
        $menuss = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Menu')->getNumeroMenu();
        $recetas = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Receta')->getNumeroReceta();
        $comentarios = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Comentario')->getNumeroComentario();
        $usuarios = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Usuario')->getNumeroUsuario();
        $listas = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Lista')->getNumeroLista();
        $menus = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Menu')->getNumeroMenusFecha();
        return $this->render('AdminBundle:Dashboard:main.html.twig', array('entidad' => $entidad, 'menuss' => $menuss,'menus' => $menus, 'recetas' => $recetas,'comentarios' => $comentarios,'listas' => $listas,'usuarios' => $usuarios,'ingredientes' => $ingredientes));
    } 

    public function addIngredienteAction(Request $request)
    {
        $Ingrediente = new Ingrediente();
        $form   = $this->createForm(IngredienteType::class, $Ingrediente);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        
            $em = $this->getDoctrine()->getManager();
            $em->persist($Ingrediente);
            $em->flush();
             
            if ($request->isXmlHttpRequest()) {
              
                return new JsonResponse(array('message' => 'El ingrediente '.$Ingrediente->getNombre().' ha sido creado correctamente'), 200);

            }
        }
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse( array('form' => $this->renderView('AdminBundle:Ingrediente:add.html.twig', array('Ingrediente' => $Ingrediente,'form' => $form->createView()))), 400);

        }
    }

    public function listIngredienteAction(Request $request)
    {

        $ingrediente = new Ingrediente();
       $formIngrediente=$this->createForm(IngredienteType::class,$ingrediente, array('action'=>$this->generateUrl('App_admin_addIngrediente'),'method'=>'POST'));


    return $this->render('AdminBundle:Ingrediente:list.html.twig', array('ingrediente'=>$ingrediente,'formIngrediente'   => $formIngrediente->createView()));
    }

    public function renderJsonIngredienteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $ingredientes= $em->getRepository('AdminBundle:Ingrediente')->listIngredienteTable();

        $serializer = $this->get('jms_serializer');
        $response = $serializer->serialize($ingredientes,'json');

        return new Response($response);
    }


    public function modifyIngredienteAction(Request $request, $id)
    {
        $entidad = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Ingrediente')->findOneBy(array('id' => $id));
        if (!$entidad) 
        {
            throw $this->createNotFoundException('No entity found');
        }
        $formIngrediente = $this->createForm(IngredienteType::class, $entidad);
        $formIngrediente->handleRequest($request);
        if ($formIngrediente->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entidad);
            $em->flush();
            return $this->redirect($this->generateUrl('App_admin_listIngrediente'));
        }
        return $this->render('AdminBundle:Ingrediente:modify.html.twig', array('entidad' => $entidad,'formIngrediente'   => $formIngrediente->createView()));  
    }

    public function deleteIngredienteAction(Ingrediente $entidad, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($entidad->getCantidadesUtilizadas()->isEmpty() ) {
            $em->remove($entidad);
        $em->flush();

        if ($request->isXmlHttpRequest()) {
              
                return new JsonResponse(array('message' => 'El ingrediente '.$entidad->getNombre().' ha sido eliminado correctamente'), 200);

         }
        } else {
              
                return new JsonResponse(array('message' => 'El ingrediente '.$entidad->getNombre().' es utilizado por una o más recetas'), 400);

         }

        

    }

        public function addTipoRecetaAction(Request $request)
    {
        $TipoReceta = new TipoReceta();
        $form   = $this->createForm(TipoRecetaType::class, $TipoReceta);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        
            $em = $this->getDoctrine()->getManager();
            $em->persist($TipoReceta);
            $em->flush();
             
             if ($request->isXmlHttpRequest()) {
              
                return new JsonResponse(array('message' => 'El tipo de receta '.$TipoReceta->getNombre().' ha sido creada correctamente'), 200);

            }
        }
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse( array('form' => $this->renderView('AdminBundle:TipoReceta:add.html.twig', array('TipoReceta' => $TipoReceta,'form' => $form->createView()))), 400);

        }
    }

    public function listTipoRecetaAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $tiposReceta= $em->getRepository('AdminBundle:TipoReceta')->findAll();
        $tipo = new TipoReceta();
        $formTipo=$this->createForm(TipoRecetaType::class,$tipo, array('action'=>$this->generateUrl('App_admin_addTipoReceta'),'method'=>'POST'));

    return $this->render('AdminBundle:TipoReceta:list.html.twig', array('tiposReceta' => $tiposReceta, 'formTipo' => $formTipo->createView()));
    }

    public function modifyTipoRecetaAction(Request $request, $id)
    {
        $entidad = $this->getDoctrine()->getManager()->getRepository('AdminBundle:TipoReceta')->findOneBy(array('id' => $id));
        if (!$entidad) 
        {
            throw $this->createNotFoundException('No entity found');
        }
        $formTipo = $this->createForm(TipoRecetaType::class, $entidad);
        $formTipo->handleRequest($request);;
        if ($formTipo->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entidad);
            $em->flush();
            return $this->redirect($this->generateUrl('App_admin_listTipoReceta'));
        }
        return $this->render('AdminBundle:TipoReceta:modify.html.twig', array('entidad' => $entidad,'formTipo'   => $formTipo->createView()));  
    }

    public function deleteTipoRecetaAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entidad = $em->getRepository('AdminBundle:TipoReceta')->findOneBy(array('id' => $id));


        if (!$entidad) {
            throw $this->createNotFoundException('No entity found');
        }

        $em->remove($entidad);
        $em->flush();

        return $this->redirect($this->generateUrl('App_admin_listTipoReceta')) ;
    }

        public function addHoraIngestaAction(Request $request)
    {
        $HoraIngesta = new HoraIngesta();
        $form   = $this->createForm(HoraIngestaType::class, $HoraIngesta);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        
            $em = $this->getDoctrine()->getManager();
            $em->persist($HoraIngesta);
            $em->flush();
             
            if ($request->isXmlHttpRequest()) {
              
                return new JsonResponse(array('message' => 'La hora de ingesta '.$HoraIngesta->getNombre().' ha sido creada correctamente'), 200);

            }
        }
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse( array('form' => $this->renderView('AdminBundle:HoraIngesta:add.html.twig', array('HoraIngesta' => $HoraIngesta,'form' => $form->createView()))), 400);

        }
    }

    public function listHoraIngestaAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $horasIngesta= $em->getRepository('AdminBundle:HoraIngesta')->findAll();
        $hora = new HoraIngesta();
        $formHora=$this->createForm(HoraIngestaType::class,$hora, array('action'=>$this->generateUrl('App_admin_addHoraIngesta'),'method'=>'POST'));



    return $this->render('AdminBundle:HoraIngesta:list.html.twig', array('horasIngesta' => $horasIngesta, 'formHora' => $formHora->createView()));
    }

    public function modifyHoraIngestaAction(Request $request, $id)
    {
        $entidad = $this->getDoctrine()->getManager()->getRepository('AdminBundle:HoraIngesta')->findOneBy(array('id' => $id));
        if (!$entidad) 
        {
            throw $this->createNotFoundException('No entity found');
        }
        $formHora = $this->createForm(HoraIngestaType::class, $entidad);
        $formHora->handleRequest($request);;
        if ($formHora->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entidad);
            $em->flush();
            return $this->redirect($this->generateUrl('App_admin_listHoraIngesta'));
        }
        return $this->render('AdminBundle:HoraIngesta:modify.html.twig', array('entidad' => $entidad,'formHora'   => $formHora->createView()));  
    }

    public function deleteHoraIngestaAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entidad = $em->getRepository('AdminBundle:HoraIngesta')->findOneBy(array('id' => $id));


        if (!$entidad) {
            throw $this->createNotFoundException('No entity found');
        }

        $em->remove($entidad);
        $em->flush();

        return $this->redirect($this->generateUrl('App_admin_listHoraIngesta')) ;
    }

    public function addUtensilioAction(Request $request)
    {
        $Utensilio = new Utensilio();
        $form   = $this->createForm(UtensilioType::class, $Utensilio);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        
          
                $file = $Utensilio->getImagen();    
                $fileName = $this->get('app.brochure_uploader')->upload($file);
                $Utensilio->setImagen($fileName);
            
        
            $em = $this->getDoctrine()->getManager();
            $em->persist($Utensilio);
            $em->flush();
             
            if ($request->isXmlHttpRequest()) {
              
                return new JsonResponse(array('message' => 'El utensilio '.$Utensilio->getNombre().' ha sido creada correctamente'), 200);

            }
        }
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse( array('form' => $this->renderView('AdminBundle:Utensilio:add.html.twig', array('Utensilio' => $Utensilio,'form' => $form->createView()))), 400);

        }
    }

    public function listUtensilioAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $utensilios= $em->getRepository('AdminBundle:Utensilio')->findAll();
        $utensilio = new Utensilio();
        $formUtensilio=$this->createForm(UtensilioType::class,$utensilio, array('action'=>$this->generateUrl('App_admin_addUtensilio'),'method'=>'POST'));



    return $this->render('AdminBundle:Utensilio:list.html.twig', array('utensilios' => $utensilios, 'formUtensilio' => $formUtensilio->createView()));
    }

        public function modifyUtensilioAction(Request $request, $id)
    {
        $entidad = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Utensilio')->findOneBy(array('id' => $id));
        if (!$entidad) 
        {
            throw $this->createNotFoundException('No entity found');
        }

        $formUtensilio = $this->createForm(UtensilioType::class, $entidad);
        $fileOld=$entidad->getImagen();

        $formUtensilio->handleRequest($request);;
        if ($formUtensilio->isValid()) 
        {  
            $file=$entidad->getImagen();
            if($file!=NULL)
            {
                $file = $entidad->getImagen();
                $fileName = $this->get('app.brochure_uploader')->upload($file);
                $entidad->setImagen($fileName);
                if($fileOld!=NULL)     
                {
                    unlink($this->container->getParameter("brochures_directory")."/".$fileOld);
                }      
            }
            else
            {
                $entidad->setImagen($fileOld);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($entidad);
            $em->flush();
            return $this->redirect($this->generateUrl('App_admin_listUtensilio'));
        }
        return $this->render('AdminBundle:Utensilio:modify.html.twig', array('entidad' => $entidad,'formUtensilio'   => $formUtensilio->createView()));  
    }

    public function deleteUtensilioAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entidad = $em->getRepository('AdminBundle:Utensilio')->findOneBy(array('id' => $id));


        if (!$entidad) {
            throw $this->createNotFoundException('No entity found');
        }

        $em->remove($entidad);
        $em->flush();

        return $this->redirect($this->generateUrl('App_admin_listUtensilio')) ;
    }

    public function addTecnicaAction(Request $request)
    {
        $Tecnica = new Tecnica();
        $form   = $this->createForm(TecnicaType::class, $Tecnica);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $Tecnica->setFechaCreacion(new \DateTime());
        
            $em = $this->getDoctrine()->getManager();
            $em->persist($Tecnica);
            $em->flush();
             
            if ($request->isXmlHttpRequest()) {
              
                return new JsonResponse(array('message' => 'La técnica '.$Tecnica->getNombre().' ha sido creada correctamente'), 200);

            }
        }
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse( array('form' => $this->renderView('AdminBundle:Tecnica:add.html.twig', array('Tecnica' => $Tecnica,'form' => $form->createView()))), 400);

        }
    }

     public function listTecnicaAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $tecnicas= $em->getRepository('AdminBundle:Tecnica')->findAll();
        $tecnica = new Tecnica();
        $formTecnica=$this->createForm(TecnicaType::class,$tecnica, array('action'=>$this->generateUrl('App_admin_addTecnica'),'method'=>'POST'));



    return $this->render('AdminBundle:Tecnica:list.html.twig', array('tecnicas' => $tecnicas, 'formTecnica' => $formTecnica->createView()));
    }

    public function showTecnicaAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entidad = $em->getRepository('AdminBundle:Tecnica')->findOneBy(array('id' => $id));

        if (!$entidad) 
        {
            throw $this->createNotFoundException('No entity found');
        }

        return $this->render('AdminBundle:Tecnica:show.html.twig', array('entidad' => $entidad));
    }

    public function modifyTecnicaAction(Request $request, $id)
    {
        $entidad = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Tecnica')->findOneBy(array('id' => $id));
        if (!$entidad) 
        {
            throw $this->createNotFoundException('No entity found');
        }
        $formTecnica = $this->createForm(TecnicaType::class, $entidad);
        $formTecnica->handleRequest($request);;
        if ($formTecnica->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entidad);
            $em->flush();
            return $this->redirect($this->generateUrl('App_admin_listTecnica'));
        }
        return $this->render('AdminBundle:Tecnica:modify.html.twig', array('entidad' => $entidad,'formTecnica'   => $formTecnica->createView()));  
    }

    public function deleteTecnicaAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entidad = $em->getRepository('AdminBundle:Tecnica')->findOneBy(array('id' => $id));


        if (!$entidad) {
            throw $this->createNotFoundException('No entity found');
        }

        $em->remove($entidad);
        $em->flush();

        return $this->redirect($this->generateUrl('App_admin_listTecnica')) ;
    }

    public function addRecetaAction(Request $request)
    {
        $Receta = new Receta();
        $form   = $this->createForm(RecetaType::class, $Receta);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $Receta->setFechaCreacion(new \DateTime());

            $file = $Receta->getImagen();
            $fileName = $this->get('app.brochure_uploader')->upload($file);
            $Receta->setImagen($fileName);

            $caloriasTotales=0;
            $celiaco=true;
            $cantidadesUtilizadas=$Receta->getCantidadesUtilizadas();
            foreach ($cantidadesUtilizadas as $cantidadUtilizada) 
            {
                $caloriasTotales=$caloriasTotales+$cantidadUtilizada->getIngrediente()->getCaloriasUnidad()*$cantidadUtilizada->getCantidad();
                if($cantidadUtilizada->getIngrediente()->getCeliaco()==false)
                {
                    $celiaco=false;
                }
            }
            $Receta->setCalorias($caloriasTotales);
            $Receta->setCeliaco($celiaco);
            $Receta->setMediaPuntuacion(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($Receta);
            $em->flush();
             
            return $this->redirect($this->generateUrl('App_admin_listReceta'));
        }
        return $this->render('AdminBundle:Receta:add.html.twig', array('Receta' => $Receta,'form'   => $form->createView()));  
    }

    public function addSubMenuAction(Request $request)
    {
        $SubMenu = new SubMenu();
        $form   = $this->createForm(SubMenuType::class, $SubMenu);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        
            $em = $this->getDoctrine()->getManager();
            $em->persist($SubMenu);
            $em->flush();
             
            return $this->redirect($this->generateUrl('App_admin_listTecnica'));
        }
        return $this->render('AdminBundle:SubMenu:add.html.twig', array('SubMenu' => $SubMenu,'form'   => $form->createView()));  
    }

    public function listRecetaAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $recetas= $em->getRepository('AdminBundle:Receta')->findAll();


    return $this->render('AdminBundle:Receta:list.html.twig', array('recetas' => $recetas));
    }

    public function modifyRecetaAction(Request $request, $id)
    {
        $entidad = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Receta')->findOneBy(array('id' => $id));
        if (!$entidad) 
        {
            throw $this->createNotFoundException('No entity found');
        }
        $form = $this->createForm(RecetaType::class, $entidad);
        $fileOld=$entidad->getImagen();

        $form->handleRequest($request);;
        if ($form->isValid()) 
        {  
            $caloriasTotales=0;
            $celiaco=true;
            $cantidadesUtilizadas=$entidad->getCantidadesUtilizadas();
            foreach ($cantidadesUtilizadas as $cantidadUtilizada) 
            {
                $caloriasTotales=$caloriasTotales+$cantidadUtilizada->getIngrediente()->getCaloriasUnidad()*$cantidadUtilizada->getCantidad();
                if($cantidadUtilizada->getIngrediente()->getCeliaco()==false)
                {
                    $celiaco=false;
                }
            }
            $entidad->setCalorias($caloriasTotales);
            $entidad->setCeliaco($celiaco);
            $file=$entidad->getImagen();
            if($file!=NULL)
            {
                $file = $entidad->getImagen();
                $fileName = $this->get('app.brochure_uploader')->upload($file);
                $entidad->setImagen($fileName);
                if($fileOld!=NULL)     
                {
                    unlink($this->container->getParameter("brochures_directory")."/".$fileOld);
                }      
            }
            else
            {
                $entidad->setImagen($fileOld);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($entidad);
            $em->flush();
            return $this->redirect($this->generateUrl('App_admin_listReceta'));
        }
        return $this->render('AdminBundle:Receta:modify.html.twig', array('entidad' => $entidad,'form'   => $form->createView()));  
    }

    public function deleteRecetaAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entidad = $em->getRepository('AdminBundle:Receta')->findOneBy(array('id' => $id));


        if (!$entidad) {
            throw $this->createNotFoundException('No entity found');
        }

        $em->remove($entidad);
        $em->flush();

        return $this->redirect($this->generateUrl('App_admin_listReceta')) ;
    }

    public function addMenuAction(Request $request)
    {
        $Menu = new Menu();
        $form   = $this->createForm(MenuType::class, $Menu);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $Menu->setFechaCreacion(new \DateTime());
        
             $celiaco=true;
             foreach ($Menu->getSubMenus() as $submenu)
            {
                foreach ($submenu->getRecetas() as $receta)
                {
                    $receta->addSubMenu($submenu);
                    $em->persist($receta);

                    if($receta->getCeliaco()==false)
                    {
                        $celiaco=false;
                    }
                }
            
            }
            $Menu->setCeliaco($celiaco);

            $caloriasTotales=0;
            foreach ($Menu->getSubMenus() as $submenu)
            {
                foreach ($submenu->getRecetas() as $receta)
                {
                    $caloriasTotales=$caloriasTotales+$receta->getCalorias(); 
                }
            }
            $Menu->setCaloriasTotales($caloriasTotales);

            $Menu->setUsuario($this->getUser());

            $em->persist($Menu);
            $em->flush();
             
           if ($request->isXmlHttpRequest()) {
              
                return new JsonResponse(array('message' => 'El menú '.$Menu->getNombre().' ha sido creado correctamente'), 200);

            }
        }
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse( array('form' => $this->renderView('AdminBundle:Menu:add.html.twig', array('Menu' => $Menu,'form' => $form->createView()))), 400);

        }}

    public function SubMenuAjaxFormAction(Request $request)
    {//AJAX PARA EMBEDED
        $form = $this->createForm(MenuType::class,$menu = new Menu());
        $form->handleRequest($request);

        return $this->render('AdminBundle:Menu:form.html.twig', array(
            'form' => $form->createView()
         ));
    }

    public function listMenuAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $menus= $em->getRepository('AdminBundle:Menu')->findAll();
        $menu = new Menu();
        $formMenu=$this->createForm(MenuType::class,$menu, array('action'=>$this->generateUrl('App_user_addMenu'),'method'=>'POST'));



    return $this->render('AdminBundle:Menu:list.html.twig', array('menus' => $menus, 'formMenu' => $formMenu->createView()));
    }

    public function modifyMenuAction(Request $request, $id)
    {
        $entidad = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Menu')->findOneBy(array('id' => $id));
        if (!$entidad) 
        {
            throw $this->createNotFoundException('No entity found');
        }
        $form = $this->createForm(MenuType::class, $entidad);
        $form->handleRequest($request);;
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entidad);
            $em->flush();
            return $this->redirect($this->generateUrl('App_admin_listMenu'));
        }
        return $this->render('AdminBundle:Menu:modify.html.twig', array('entidad' => $entidad,'form'   => $form->createView()));  
    }

    public function deleteMenuAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entidad = $em->getRepository('AdminBundle:Menu')->findOneBy(array('id' => $id));


        if (!$entidad) {
            throw $this->createNotFoundException('No entity found');
        }

        $em->remove($entidad);
        $em->flush();

        return $this->redirect($this->generateUrl('App_admin_listMenu')) ;
    }

    public function addTemaForoAction(Request $request)
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
              
                return new JsonResponse(array('message' => 'El tema del foro '.$TemaForo->getNombre().' ha sido creado correctamente'), 200);

            }
        }
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse( array('form' => $this->renderView('AdminBundle:TemaForo:add.html.twig', array('TemaForo' => $TemaForo,'form' => $form->createView()))), 400);

        }
    }

     public function listTemaForoAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $temasForos= $em->getRepository('AdminBundle:TemaForo')->findAll();
        $foro = new TemaForo();
        $formForo=$this->createForm(TemaForoType::class,$foro, array('action'=>$this->generateUrl('App_admin_addTemaForo'),'method'=>'POST'));



    return $this->render('AdminBundle:TemaForo:list.html.twig', array('temasForos' => $temasForos, 'formForo' => $formForo->createView()));
    }

    public function modifyTemaForoAction(Request $request, $id)
    {
        $entidad = $this->getDoctrine()->getManager()->getRepository('AdminBundle:TemaForo')->findOneBy(array('id' => $id));
        if (!$entidad) 
        {
            throw $this->createNotFoundException('No entity found');
        }
        $form = $this->createForm(TemaForoType::class, $entidad);
        $form->handleRequest($request);;
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entidad);
            $em->flush();
            return $this->redirect($this->generateUrl('App_admin_listTemaForo'));
        }
        return $this->render('AdminBundle:TemaForo:modify.html.twig', array('entidad' => $entidad,'form'   => $form->createView()));  
    }

    public function deleteTemaForoAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entidad = $em->getRepository('AdminBundle:TemaForo')->findOneBy(array('id' => $id));


        if (!$entidad) {
            throw $this->createNotFoundException('No entity found');
        }

        $em->remove($entidad);
        $em->flush();

        return $this->redirect($this->generateUrl('App_admin_listTemaForo')) ;
    }

    public function listListaAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $listas= $em->getRepository('AdminBundle:Lista')->findAll();
        $lista = new Lista();
        $formLista=$this->createForm(ListaType::class,$lista, array('action'=>$this->generateUrl('App_admin_addLista'),'method'=>'POST'));


    return $this->render('AdminBundle:Lista:list.html.twig', array('listas' => $listas, 'formLista' => $formLista->createView()));
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
            return new JsonResponse( array('form' => $this->renderView('AdminBundle:Lista:add.html.twig', array('lista' => $lista,'form' => $form->createView()))), 400);

        }
    }

    public function deleteListaAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entidad = $em->getRepository('AdminBundle:Lista')->findOneBy(array('id' => $id));


        if (!$entidad) {
            throw $this->createNotFoundException('No entity found');
        }
       $ordenesCompra = $entidad->getOrdenescompras();
       foreach ($ordenesCompra as $orden) 
       {
         $em->remove($orden);
       }
        $em->remove($entidad);
        $em->flush();

        return $this->redirect($this->generateUrl('App_admin_listLista')) ;
    }

     public function listUsuarioAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $usuarios= $em->getRepository('AdminBundle:Usuario')->findAll();


    return $this->render('AdminBundle:Usuario:list.html.twig', array('usuarios' => $usuarios));
    }

    public function activateUsuarioAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entidad = $em->getRepository('AdminBundle:Usuario')->findOneBy(array('id' => $id));


        if (!$entidad) {
            throw $this->createNotFoundException('No entity found');
        }  
        if($entidad->isLocked())
        {

            $entidad->setLocked(false);
        }
        else
        {
            $entidad->setLocked(true);
        }
        


        $em->persist($entidad);
        $em->flush();

        return $this->redirect($this->generateUrl('App_admin_listUsuario')) ;
    }

    public function deleteUsuarioAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entidad = $em->getRepository('AdminBundle:Usuario')->findOneBy(array('id' => $id));


        if (!$entidad) {
            throw $this->createNotFoundException('No entity found');
        }

        $em->remove($entidad);
        $em->flush();

        return $this->redirect($this->generateUrl('App_admin_listUsuario')) ;
    }

    public function sendEmailAction()
    {
        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('AdminBundle:Usuario')->findAll();
        $lastRecetas = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Receta')->getlastThreeReceta('3');

        foreach ($usuarios as $usuario) 
        {
            $message = \Swift_Message::newInstance()
          ->setFrom('enebengoa@opendeusto.es')
          ->setTo($usuario->getEmail())
          ->setSubject('NewsLetter Eat&Fit')
          ->setBody(
            $this->renderView(
                'AdminBundle:Email:email.html.twig',
                array('usuario' => $usuario,'lastRecetas' => $lastRecetas)
            ), 'text/html'
            );
            $path=$this->container->getParameter('newsletters_directory').'/TopRecetas.pdf';
            if(file_exists($path)){
              $message->attach(\Swift_Attachment::fromPath($path));
            }
            $this->get('mailer')->send($message);
       
        }

        return $this->redirect($this->generateUrl('App_admin_listUsuario')) ;
    }

}
