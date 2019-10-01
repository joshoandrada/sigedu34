<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use AppBundle\Form\UsuarioType;
use AppBundle\Entity\usuariot;
use AppBundle\Entity\alumno;
use AppBundle\Entity\provincia;
use AppBundle\Entity\pais;
use AppBundle\Entity\carrera;
use AppBundle\Entity\establecimiento;
use AppBundle\Entity\estadosalumnos;
use AppBundle\Entity\concepto;

use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

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
     * @Route("/requisitos", name="requisitos")
     */
    public function requisitosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/requisitos.html.twig');
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
          $alumnoRepository=$this->getDoctrine()->getRepository(alumno::class);
          $alumno = $alumnoRepository->find($id);
          //return $this->render('frontal/alumno.html.twig');
          return $this->render('frontal/alumno.html.twig',array("alumno"=>$alumno));
        }
        else {
          return $this->render('frontal/alumno.html.twig');
        }
        // , [ 'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR, ]
    }

    /**
     * @Route("/registro", name="registro")
     */
    public function registroAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
      $usuario = new usuariot();
      $form = $this->createForm(UsuarioType::class, $usuario);
      // recogemos la informacion
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
        //registro en blanco de alumnos
        $alumno = new alumno();
        $alumno->setLegajoPrefijo("2020");
        $alumno->setLegajoNumero(0);
        $alumno->setNombre("");
        $alumno->setEmail("tobar@gmail.com");
        $alumno->setApellidoMaterno("");
        $alumno->setApellido("");
        $alumno->setFechaNacimiento(new \DateTime());
        $alumno->setDireccion("");
        $alumno->setCiudad("");
        $alumno->setCodigoPostal("");
        $alumno->setTelefono("");
        $alumno->setNroDocumento("");
        $alumno->setSexo("");
        $alumno->setEmail("");
        $alumno->setActivo("1");
        $alumno->setMatricula("");
        $alumno->setObservacion("");
        $alumno->setTelefonoFijo("");
        $alumno->setMatricula("");
        $alumno->setAdeuda("0");
        // fk_provincia_id
        $am = $this->getDoctrine()->getEntityManager();
        $provi = $am->getRepository('AppBundle:provincia')->find(1);
        $alumno->setProvincia($provi);
        // fk_carrera_id
        $aam = $this->getDoctrine()->getEntityManager();
        $carre = $aam->getRepository('AppBundle:carrera')->find(7);
        $alumno->setCarrera($carre);
        // fk_establecimiento_id
        $aaa = $this->getDoctrine()->getEntityManager();
        $esta = $aaa->getRepository('AppBundle:establecimiento')->find(3);
        $alumno->setEstablecimientos($esta);
        // fk_estadoalumno_id
        $aae = $this->getDoctrine()->getEntityManager();
        $estado = $aae->getRepository('AppBundle:estadosalumnos')->find(1);
        $alumno->setEstadosalumnos($estado);
        // fk_pais_id
        $eae = $this->getDoctrine()->getEntityManager();
        $pai = $eae->getRepository('AppBundle:pais')->find(2);
        $alumno->setPais($pai);
        // fk_conceptobaja_id
        $eee = $this->getDoctrine()->getEntityManager();
        $concept = $eee->getRepository('AppBundle:concepto')->find(7);
        $alumno->setConceptob($concept);


        $alu = $this->getDoctrine()->getEntityManager();
        $alu->persist($alumno);
        $alu->flush();

        // 3) Encode the password (you could also do this via Doctrine listener)
        $password = $passwordEncoder->encodePassword($usuario, $usuario->getPlainPassword());
        $usuario->setPassword($password);
        // 3b) $username = $email
        $usuario->setUsername($usuario->getEmail());

        $usuario->setOrden($alumno->getId());
        // 3c) $roles
        $usuario->setRoles(array('ROLE_USER'));
        // cargar id alumno nuevo....
        $em = $this->getDoctrine()->getEntityManager();
        $alum = $em->getRepository('AppBundle:alumno')->find($alumno->getId());
        $usuario->setAlumno($alum);
        // 4) save the User!
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($usuario);
        $entityManager->flush();



        return $this->redirectToRoute('login');
     }
      return $this->render('frontal/registro.html.twig',array('form'=>$form->createView()));
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
    {

      // get the login error if there is one
      $error = $authenticationUtils->getLastAuthenticationError();

      // last username entered by the user
      $lastUsername = $authenticationUtils->getLastUsername();
      return $this->render('frontal/login.html.twig', array(
        'last_username' => $lastUsername,
        'error'         => $error,
      ));
     }
}
