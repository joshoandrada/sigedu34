<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\AlumnoType;
use AppBundle\Entity\alumno;

class GestionAlumnosController extends Controller
{
    /**
     * @Route("/nuevoalumno", name="nuevoalumno")
     */
    public function nuevoAlumnoAction(Request $request)
    {
      $alumno = new alumno();
      $form = $this->createForm(AlumnoType::class, $alumno);
      // recogemos la informacion
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
          // rellenar el entity alumno
          $alumno = $form->getData();
          $alumno -> setTelefono("");
          $alumno -> setLegajoPrefijo("");
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
}
