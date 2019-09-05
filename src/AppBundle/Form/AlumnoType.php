<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AlumnoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class)
            ->add('apellido', TextType::class)
            ->add('fechaNacimiento', DateType::class)
            ->add('direccion', TextType::class)
            ->add('ciudad', TextType::class)
            ->add('codigo_postal', TextType::class)
            ->add('telefono', TextType::class)
            ->add('nro_documento', TextType::class)
            ->add('sexo', TextType::class)
            ->add('email', TextType::class)
            ->add('observacion', TextType::class)
            ->add('adeuda')
            ->add('activo')
            ->add('provincia')
            ->add('carrera')
            ->add('establecimientos')
            ->add('estadosalumnos')
            ->add('pais')
            ->add('conceptob')
            ->add('tipodocumento')
            //->add('fk_estadoalumno_id', TextType::class)
            //->add('fk_pais_id', TextType::class)
            //->add('fk_tipodocumento_id', TextType::class)
            ->add('salvar', SubmitType::class, array('label' => 'Nuevo Alumno'))
            ;

      }
    }
