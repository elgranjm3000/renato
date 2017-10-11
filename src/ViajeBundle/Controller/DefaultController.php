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
        $pais = $em->getRepository('ViajeBundle:Pais')->findAll();
        
        return $this->render('ViajeBundle:Default:home.html.twig', array(
            'carros' => $carros,'pais'=>$pais
        ));
    }


    public function datosAction(Request $request){

     
         $id = $request->request->get('id');
         //$id = 1;
        
        $em = $this->getDoctrine()->getManager();
        $datos = $em->getRepository('ViajeBundle:Modelo')->findBy(array('carro_id'=>$id));

    $generardatos = array();
        foreach($datos as $entity){
            $localidad['modelonombre'] = $entity->getModelonombre();
            $localidad['ruta'] = $entity->getRuta();
            $localidad['descripcion'] = $entity->getDescripcion();
            $generardatos[] = $localidad;
        }                             
       //sleep(2);
        
           //  var_dump($generardatos);
            return new JsonResponse($generardatos);
    }

    public function hotelesAction(Request $request){

        $id = $request->request->get('id');
         //$id = 1;
        
        $em = $this->getDoctrine()->getManager();

$query = $em->createQuery(
    'SELECT a
    FROM ViajeBundle:Hotel a, ViajeBundle:Ciudad b
    WHERE b.paisid = :paisid and b.id = a.ciudad
    ORDER BY b.id ASC'
)->setParameter('paisid', $id);

$products = $query->getResult();

        //$datos = $em->getRepository('ViajeBundle:Hotel')->findAll();

    $generardatos = array();
        foreach($products as $entity){
            $localidad['estrella'] = $entity->getEstrella();
            $localidad['ubicacion'] = $entity->getUbicacion();
            $localidad['talta'] = $entity->getTalta();
            $localidad['tbaja'] = $entity->getTbaja();
            $generardatos[] = $localidad;
        }                             
       //sleep(2);
        
            //var_dump($generardatos);
            //exit;
        return new JsonResponse($generardatos);
    }
}
