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
use App\AdminBundle\Entity\TemaForo;
use App\AdminBundle\Form\Type\TemaForoType;
use App\AdminBundle\Entity\Comentario;
use App\AdminBundle\Form\Type\ComentarioType;
use App\AdminBundle\Entity\TipoUsuario;
use App\AdminBundle\Form\Type\TipoUsuarioType;

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
             
            return $this->redirect($this->generateUrl('App_admin_listIngrediente'));
        }
        return $this->render('AdminBundle:Ingrediente:add.html.twig', array('Ingrediente' => $Ingrediente,'form'   => $form->createView()));  
    }

    public function listIngredienteAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $ingredientes= $em->getRepository('AdminBundle:Ingrediente')->findAll();


    return $this->render('AdminBundle:Ingrediente:list.html.twig', array('ingredientes' => $ingredientes));
    }

    public function modifyIngredienteAction(Request $request, $id)
    {
        $entidad = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Ingrediente')->findOneBy(array('id' => $id));
        if (!$entidad) 
        {
            throw $this->createNotFoundException('No entity found');
        }
        $form = $this->createForm(IngredienteType::class, $entidad);
        $form->handleRequest($request);;
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entidad);
            $em->flush();
            return $this->redirect($this->generateUrl('App_admin_listIngrediente'));
        }
        return $this->render('AdminBundle:Ingrediente:modify.html.twig', array('entidad' => $entidad,'form'   => $form->createView()));  
    }

    public function deleteIngredienteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entidad = $em->getRepository('AdminBundle:Ingrediente')->findOneBy(array('id' => $id));


        if (!$entidad) {
            throw $this->createNotFoundException('No entity found');
        }

        $em->remove($entidad);
        $em->flush();

        return $this->redirect($this->generateUrl('App_admin_listIngrediente')) ;
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
             
            return $this->redirect($this->generateUrl('App_admin_listTipoReceta'));
        }
        return $this->render('AdminBundle:TipoReceta:add.html.twig', array('TipoReceta' => $TipoReceta,'form'   => $form->createView()));  
    }

    public function listTipoRecetaAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $tiposReceta= $em->getRepository('AdminBundle:TipoReceta')->findAll();


    return $this->render('AdminBundle:TipoReceta:list.html.twig', array('tiposReceta' => $tiposReceta));
    }

    public function modifyTipoRecetaAction(Request $request, $id)
    {
        $entidad = $this->getDoctrine()->getManager()->getRepository('AdminBundle:TipoReceta')->findOneBy(array('id' => $id));
        if (!$entidad) 
        {
            throw $this->createNotFoundException('No entity found');
        }
        $form = $this->createForm(TipoRecetaType::class, $entidad);
        $form->handleRequest($request);;
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entidad);
            $em->flush();
            return $this->redirect($this->generateUrl('App_admin_listTipoReceta'));
        }
        return $this->render('AdminBundle:TipoReceta:modify.html.twig', array('entidad' => $entidad,'form'   => $form->createView()));  
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
             
            return $this->redirect($this->generateUrl('App_admin_listHoraIngesta'));
        }
        return $this->render('AdminBundle:HoraIngesta:add.html.twig', array('HoraIngesta' => $HoraIngesta,'form'   => $form->createView()));  
    }

    public function listHoraIngestaAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $horasIngesta= $em->getRepository('AdminBundle:HoraIngesta')->findAll();


    return $this->render('AdminBundle:HoraIngesta:list.html.twig', array('horasIngesta' => $horasIngesta));
    }

    public function modifyHoraIngestaAction(Request $request, $id)
    {
        $entidad = $this->getDoctrine()->getManager()->getRepository('AdminBundle:HoraIngesta')->findOneBy(array('id' => $id));
        if (!$entidad) 
        {
            throw $this->createNotFoundException('No entity found');
        }
        $form = $this->createForm(HoraIngestaType::class, $entidad);
        $form->handleRequest($request);;
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entidad);
            $em->flush();
            return $this->redirect($this->generateUrl('App_admin_listHoraIngesta'));
        }
        return $this->render('AdminBundle:HoraIngesta:modify.html.twig', array('entidad' => $entidad,'form'   => $form->createView()));  
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
             
            return $this->redirect($this->generateUrl('App_admin_listUtensilio'));
        }
        return $this->render('AdminBundle:Utensilio:add.html.twig', array('Utensilio' => $Utensilio,'form'   => $form->createView()));  
    }

    public function listUtensilioAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $utensilios= $em->getRepository('AdminBundle:Utensilio')->findAll();


    return $this->render('AdminBundle:Utensilio:list.html.twig', array('utensilios' => $utensilios));
    }

        public function modifyUtensilioAction(Request $request, $id)
    {
        $entidad = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Utensilio')->findOneBy(array('id' => $id));
        if (!$entidad) 
        {
            throw $this->createNotFoundException('No entity found');
        }

        $form = $this->createForm(UtensilioType::class, $entidad);
        $form->handleRequest($request);;
        if ($form->isValid()) {
            $file = $entidad->getImagen();
            $fileName = $this->get('app.brochure_uploader')->upload($file);
            $entidad->setImagen($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entidad);
            $em->flush();
            return $this->redirect($this->generateUrl('App_admin_listUtensilio'));
        }
        return $this->render('AdminBundle:Utensilio:modify.html.twig', array('entidad' => $entidad,'form'   => $form->createView()));  
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
        
            $em = $this->getDoctrine()->getManager();
            $em->persist($Tecnica);
            $em->flush();
             
            return $this->redirect($this->generateUrl('App_admin_listTecnica'));
        }
        return $this->render('AdminBundle:Tecnica:add.html.twig', array('Tecnica' => $Tecnica,'form'   => $form->createView()));  
    }

     public function listTecnicaAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $tecnicas= $em->getRepository('AdminBundle:Tecnica')->findAll();


    return $this->render('AdminBundle:Tecnica:list.html.twig', array('tecnicas' => $tecnicas));
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
        $form = $this->createForm(TecnicaType::class, $entidad);
        $form->handleRequest($request);;
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entidad);
            $em->flush();
            return $this->redirect($this->generateUrl('App_admin_listTecnica'));
        }
        return $this->render('AdminBundle:Tecnica:modify.html.twig', array('entidad' => $entidad,'form'   => $form->createView()));  
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
        $form->handleRequest($request);;
        if ($form->isValid()) {
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
             
            return $this->redirect($this->generateUrl('App_admin_listMenu'));
        }
        return $this->render('AdminBundle:Menu:add.html.twig', array('Menu' => $Menu,'form'   => $form->createView()));  
    }

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


    return $this->render('AdminBundle:Menu:list.html.twig', array('menus' => $menus));
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
             
            return $this->redirect($this->generateUrl('App_admin_listTemaForo'));
        }
        return $this->render('AdminBundle:TemaForo:add.html.twig', array('TemaForo' => $TemaForo,'form'   => $form->createView()));  
    }

     public function listTemaForoAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $temasForos= $em->getRepository('AdminBundle:TemaForo')->findAll();


    return $this->render('AdminBundle:TemaForo:list.html.twig', array('temasForos' => $temasForos));
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

     public function listUsuarioAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $usuarios= $em->getRepository('AdminBundle:Usuario')->findAll();


    return $this->render('AdminBundle:Usuario:list.html.twig', array('usuarios' => $usuarios));
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
