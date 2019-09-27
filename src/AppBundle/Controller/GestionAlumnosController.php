<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\AlumnoType;
use AppBundle\Entity\alumno;
use AppBundle\Entity\usuariot;

/**
 * @Route("/gestionalumno")
 */

class GestionAlumnosController extends Controller
{
    /**
     * @Route("/nuevoalumno/{id}", name="nuevoalumno")
     */
    public function nuevoAlumnoAction(Request $request,$id=null)
    {

      if($id!=null){
        $alumnoRepository=$this->getDoctrine()->getRepository(alumno::class);
        $alumno = $alumnoRepository->find($id);
      }
      else {
         $alumno = new alumno();
      }
      $form = $this->createForm(AlumnoType::class, $alumno);
      // recogemos la informacion
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
          // rellenar el entity alumno
          $alumno = $form->getData();
          //$alumno -> setTelefono("");
          $alumno -> setLegajoPrefijo("2020");
          $alumno -> setLegajoNumero(0);
          $alumno -> setApellidoMaterno("");
          //$alumno -> setActivo(1);
          $alumno -> setMatricula("");
          $alumno -> setTelefonoFijo("");
          //$alumno -> setAdeuda("");
          // almacenar nuevo alumno
          $em = $this->getDoctrine()->getManager();
          // Le vamos a decir cual es el objeto que queremos almacenar
          $em->persist($alumno);
          // finalizar la comunicacion con la BD
          $em->flush();
          return $this->redirectToRoute('alumno',array('id'=> $alumno->getId()));
     }
      return $this->render('gestionAlumnos/nuevoAlumno.html.twig',array('form'=>$form->createView()));
    }

    /**
     * @Route("/inscripcionalumno", name="inscripcion")
     */
    public function inscripcionAlumnoAction(Request $request)
    {

       $user = $this->getUser();
       //$alu2=$user->getAlumno(getId());

       //$aaa = new usuariot();
       $mm = $this->getDoctrine()->getEntityManager();
       //$usua = $mm->getRepository('AppBundle:usuariot')->find($user->getId());
       $usua = $mm->getRepository('AppBundle:usuariot')->findOneByUsername($user);
       //$aaa->setAlumno($usua);
      //var_dump($user);
       //$alu= 1;
       //return $this->redirectToRoute('alumno',array('id'=> $alumno->getId()));
      return $this->redirectToRoute('nuevoalumno',array('id'=> $user->getOrden()));
      //return $this->redirectToRoute('nuevoalumno',array('id'=>$user->getAlumno()));
   }
}
