<?php

namespace ViajeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ViajeBundle\Entity\Carro;
use ViajeBundle\Entity\Modelo;
use ViajeBundle\Entity\Presupuesto;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Ps\PdfBundle\Annotation\Pdf;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {

        if ($request->getMethod() == 'POST'){
            //die("hola");
    $ip=$this->getDoctrine()->getEntityManager();  
                        $presupuesto = new presupuesto();                       
                        $presupuesto->setCarrospresupuesto($ip->getReference('ViajeBundle:Modelo',$_POST['vehiculos']));
                        $presupuesto->setHotelespresupuesto($ip->getReference('ViajeBundle:Hotel',$_POST['estrellavalueguardar']));
                        $presupuesto->setKilometros($_POST['km']);
                        $presupuesto->setPersonas($_POST['cantidadpersona']);
                        $presupuesto->setDias($_POST['cantidaddias']);                      
                        $em=$this->getDoctrine()->getManager();
                        $em->persist($presupuesto);        
                        $em->flush();


            return $this->redirect($this->generateUrl('reportes_hoteles', array('id' => $presupuesto->getId())));

        }
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
            $localidad['id'] = $entity->getId();
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
    WHERE a.estrella = :estrella and b.id = a.ciudad
    ORDER BY b.id ASC'
)->setParameter('estrella', $id);

$products = $query->getResult();

        //$datos = $em->getRepository('ViajeBundle:Hotel')->findAll();

    $generardatos = array();
        foreach($products as $entity){
            if($entity->getEstrella() == 1){
                $estrella = "<i class='fa fa-star' style='color:#ffbf00;'></i>";
            }else if($entity->getEstrella() == 2){
                $estrella = "<i class='fa fa-star' style='color:#ffbf00;'></i><i class='fa fa-star' style='color:#ffbf00;'></i>";
            }else if($entity->getEstrella() == 3){
                $estrella = "<i class='fa fa-star' style='color:#ffbf00;'></i><i class='fa fa-star' style='color:#ffbf00;'></i><i class='fa fa-star' style='color:#ffbf00;'></i>";
            }else if($entity->getEstrella() == 4){
                $estrella = "<i class='fa fa-star' style='color:#ffbf00;'></i><i class='fa fa-star' style='color:#ffbf00;'></i><i class='fa fa-star' style='color:#ffbf00;'></i><i class='fa fa-star' style='color:#ffbf00;'></i>";
            }else if($entity->getEstrella() == 5){
                $estrella = "<i class='fa fa-star' style='color:#ffbf00;'></i><i class='fa fa-star' style='color:#ffbf00;'></i><i class='fa fa-star' style='color:#ffbf00;'></i><i class='fa fa-star' style='color:#ffbf00;'>";
            }


            $localidad['estrella'] = $estrella;
            $localidad['ubicacion'] = $entity->getUbicacion();
            $localidad['talta'] = $entity->getTalta();
            $localidad['tbaja'] = $entity->getTbaja();
            $localidad['id'] = $entity->getId();
            $localidad['ubicacion'] = $entity->getUbicacion();
            $localidad['ciudad'] = $entity->getCiudad()->getNombreciudad();
            $generardatos[] = $localidad;
        }                             
       //sleep(2);
        
            //var_dump($generardatos);
            //exit;
        return new JsonResponse($generardatos);
    }


  
public function reporteAction(Request $request,$id){

    // Vamos a mostrar un PDF
header('Content-type: application/pdf');

// Se llamará downloaded.pdf
header('Content-Disposition: attachment; filename="downloaded.pdf"');




        $em = $this->getDoctrine()->getManager();


        $datos = $em->getRepository('ViajeBundle:Presupuesto')->findById($id);

   
        $facade = $this->get('ps_pdf.facade');
        $response = new Response();
        $this->render('ViajeBundle:Default:template.pdf.twig', array('datos'=> $datos),$response);
        $xml = $response->getContent();
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));

      
}
}
