<?php

namespace App\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\AdminBundle\Entity\Comentario;
use App\AdminBundle\Form\Type\ComentarioType;
use App\AdminBundle\Form\Type\PuntuacionType;
use App\AdminBundle\Entity\Receta;
use App\AdminBundle\Entity\Tecnica;
use App\AdminBundle\Entity\Menu;
use App\AdminBundle\Entity\Utensilio;
use App\AdminBundle\Entity\TemaForo;
use App\AdminBundle\Entity\Usuario;
use App\AdminBundle\Entity\Puntuacion;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;


class ComentarioController extends Controller
{

    public function addComentarioAction(Request $request, Receta $id, $user)
    {

        $Comentario = new Comentario();
        
        $form   = $this->createForm(ComentarioType::class, $Comentario);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $usuario = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Usuario')->findOneBy(array('id' => $user));
            $Comentario->setReceta($id);
            $Comentario->setUsuarioo($usuario);
            $Comentario->setFechaCreacion(new \DateTime());

            $em = $this->getDoctrine()->getManager();
            $em->persist($Comentario);
            $flush=$em->flush();
            if (!$request->isXmlHttpRequest()) {
                return $this->redirectToRoute('App_user_listReceta');

            }else{
                $comentarios = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Comentario')->findAll();
                $answer['html'] = $this->render('UserBundle:Comentario:list.html.twig', array('comentarios' => $comentarios))->getContent(); 
                $response = new Response();                                                
                $response->headers->set('Content-type', 'application/json; charset=utf-8');
                $response->setContent(json_encode($answer));
                return $response;
            } 
        }

        if (!$request->isXmlHttpRequest()) {
            return $this->render('UserBundle:Comentario:add.html.twig',array('form' => $form->createView()));
        }else{
            return new JsonResponse( array('form' => $this->renderView('UserBundle:Comentario:add.html.twig', array('Comentario' => $Comentario,'form' => $form->createView(),))), 400);
        }
    }

    public function addPuntuacionAction(Request $request, Receta $id2, $user2)
    {

        $Puntuacion = new Puntuacion();
        $form   = $this->createForm(PuntuacionType::class, $Puntuacion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $usuario = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Usuario')->findOneBy(array('id' => $user2));
            $Puntuacion2 = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Puntuacion')->findOneBy(array('Usuario' => $usuario->getId(),'Receta'=>$id2));
            if ($Puntuacion2==NULL)
            {
                $Puntuacion->setReceta($id2);
                $Puntuacion->setUsuario($usuario);
            }
            else
            {
                $Puntuacion2->setPuntuacion($Puntuacion->getPuntuacion());
                $Puntuacion=$Puntuacion2;
            }
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($id2);
            $em->persist($Puntuacion);
            $flush=$em->flush();
            $id2->setMediaPuntuacion($this->get('doctrine')->getManager()->getRepository('AdminBundle:Puntuacion')->getMediaPuntuacionReceta($id2->getId()));
            $flush=$em->flush();
            if (!$request->isXmlHttpRequest()) 
            {
                return $this->redirectToRoute('App_user_listReceta');

            }else{
                $puntuacionMedia = $this->get('doctrine')->getManager()->getRepository('AdminBundle:Receta')->getPuntuacionMedia($id2);
                $answer['html'] = $this->render('UserBundle:Puntuacion:show.html.twig', array('puntuacionMedia' => $puntuacionMedia))->getContent(); 
                $response = new Response();                                                
                $response->headers->set('Content-type', 'application/json; charset=utf-8');
                $response->setContent(json_encode($answer));
                return $response;
            }
        }

        if (!$request->isXmlHttpRequest()) {
            return $this->render('UserBundle:Puntuacion:add.html.twig',array('form2' => $form->createView()));
        }else{
            return new JsonResponse( array('form2' => $this->renderView('UserBundle:Puntuacion:add.html.twig', array('receta'=>$id2,'form2' => $form->createView(),))), 400);
        }
    }

    

}


