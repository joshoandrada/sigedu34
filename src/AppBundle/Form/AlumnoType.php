<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AlumnoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class, array('label' => 'Nombre '))
            ->add('apellido', TextType::class)
            ->add('fechaNacimiento', DateType::class, [
              'years' => range(1940,2020),
              'format' => 'dd-MM-yyyy',
              ])
            ->add('direccion', TextType::class)
            ->add('ciudad', TextType::class)
            ->add('codigo_postal', TextType::class)
            ->add('telefono', TextType::class)
            ->add('nro_documento', TextType::class)
            ->add('tipodocumento')
            ->add('sexo', ChoiceType::class, [
               'choices' => ['Masculino' => 'm', 'Femenino' => 'f'],
               ])
            //->add('email', EmailType::class)
            ->add('provincia')
            ->add('observacion', TextType::class)
            //->add('adeuda')
            //->add('activo', CheckboxType::class, ['label' => 'Está Activo ?  .'])

            //->add('carrera')
            //->add('establecimientos')
            //->add('estadosalumnos')
            ///->add('pais')
            //->add('conceptob')

            ->add('salvar', SubmitType::class, array('label' => 'Enviar Inscripción'))
            ;

      }
    }
