<?php

namespace App\Form;

use App\Entity\Juegos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class JuegosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre',TextType::class,[
                'attr' => array('class' => 'form-control'),
                'constraints' => [
                    new NotBlank([
                        'message' => 'El campo username no puede estar vacio'
                    ]),
                    new Length([
                        'min' => 2,
                        'minMessage' => 'El username debe tener almenos {{ limit }} letras',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ], 
                ])
            ->add('ancho',IntegerType::class,[
                'attr' => array('class' => 'form-control'),
                'constraints' => [
                    new NotBlank([
                        'message' => 'El campo ancho no puede estar vacio'
                    ])
                ], 
                ])
            ->add('alto',IntegerType::class,[
                'attr' => array('class' => 'form-control'),
                'constraints' => [
                    new NotBlank([
                        'message' => 'El campo alto no puede estar vacio'
                    ])
                ], 
                ])
            ->add('minPlayers',IntegerType::class,[
                'attr' => array('class' => 'form-control'),
                'constraints' => [
                    new NotBlank([
                        'message' => 'El campo minimo de jugadores no puede estar vacio'
                    ])
                ], 
                ])
            ->add('maxPlayers',IntegerType::class,[
                'attr' => array('class' => 'form-control'),
                'constraints' => [
                    new NotBlank([
                        'message' => 'El campo maximo de jugadores no puede estar vacio'
                    ])
                ], 
                ])
            ->add('descripcion',TextType::class,[
                'attr' => array('class' => 'form-control form-control-lg'),
                ])
            ->add('imagen',TextType::class,[
                'attr' => array('class' => 'form-control')
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Juegos::class,
        ]);
    }
}
