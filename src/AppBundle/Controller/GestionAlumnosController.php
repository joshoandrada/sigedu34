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
      return $this->render('gestionAlumnos/nuevoAlumno.html.twig',array('form'=>$form->createView()));
    }
}
