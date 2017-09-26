<?php

namespace ViajeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ViajeBundle\Entity\Carro;
use ViajeBundle\Entity\Modelo;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	 $em = $this->getDoctrine()->getManager();

        $carros = $em->getRepository('ViajeBundle:Carro')->findAll();
        return $this->render('ViajeBundle:Default:home.html.twig', array(
            'carros' => $carros,
        ));
    }


    public function datosAction(Request $request){

     
         $id = $request->request->get('id');
        // $id = 2;
        
        $em = $this->getDoctrine()->getManager();
        $datos = $em->getRepository('ViajeBundle:Modelo')->findById($id);

    $generardatos = array();
        foreach($datos as $entity){
            $localidad['cedula'] = $entity->getModelonombre();
            $generardatos[] = $localidad;
        }                             
        //sleep(2);
        
                                              
            return new JsonResponse($generardatos);
    }
}
