<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
          ->add('email', EmailType::class)
          ->add('plainPassword', RepeatedType::class, [
              'type' => PasswordType::class,
              'first_options'  => ['label' => 'Contraseña'],
              'second_options' => ['label' => 'Repetir Contraseña'],
          ])
            ->add('Registrar', SubmitType::class, array('label' => 'Registrar'));
      }
    }
