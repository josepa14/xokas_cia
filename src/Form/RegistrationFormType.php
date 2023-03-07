<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username',TextType::class,[
                'attr' => array('class' => 'form-control form-control-lg'),
                'constraints' => [
                    new NotBlank([
                        'message' => 'El campo username no puede estar vacio'
                    ]),
                    new Length([
                        'min' => 4,
                        'minMessage' => 'El username debe tener almenos {{ limit }} letras',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ], 
                ])
            ->add('email',EmailType::class,array('attr' => array('class' => 'form-control form-control-lg')))
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Aceptas los terminos y condiciones.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password','class' => 'form-control form-control-lg'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'El campo contraseña no puede estar vacio',
                    ]),
                    new Length([
                        'min' => 4,
                        'minMessage' => 'La Password debe tener almenos {{ limit }} letras',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
