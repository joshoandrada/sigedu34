<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use AppBundle\Entity\alumno;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        // capturar el repositorio de la Tabla contra la BD
      //$alumnoRepository = $this -> getDoctrine() -> getRepository ( alumno::class ) ;
      //$alumnos = $alumnoRepository->findAll();
      //return $this->render('frontal/index.html.twig',array('alumnos'=>$alumnos));
      return $this->render('frontal/index.html.twig');
        // , [ 'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR, ]
    }
    /**
     * @Route("/nosotros", name="nosotros")
     */
    public function nosotrosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/nosotros.html.twig');
        // , [ 'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR, ]
    }
    /**
     * @Route("/ubicacion", name="ubicacion")
     */
    public function ubicacionAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/ubicacion.html.twig');
        // , [ 'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR, ]
    }
    /**
     * @Route("/alumno/{id}", name="alumno")
     */
    public function alumnoAction(Request $request,$id=null)
    {

        if($id!=null){
          $alumnoRepository=$this-getDoctrine()->getRepository(alumno::class);
          $alumno =$alumnoRepository->find($id);
          return $this->render('frontal/alumno.html.twig',array("alumno"=>$alumno));
        }
        else {
          return $this->render('frontal/alumno.html.twig');
        }
        // , [ 'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR, ]
    }


}
