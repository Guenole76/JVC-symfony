<?php

namespace App\Form;

use App\Entity\Comments;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentaireFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',EmailType::class, [
                'attr' -> [
                    'class' -> 'form-control'
                ]
            ])
            ->add('pseudo', TextType::class, [
                'attr' -> [
                    'class' -> 'form-control'
                ]
            ])
            ->add('Contenu', TextareaType::class, [
                'attr' -> [
                    'class' -> 'form-control'
                ]
            ])

            ->add('RGPD', CheckboxType::class, [
                'label' => 'J\'accepte la collecte de mes données'
            ])
            ->add('Envoyer',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comments::class,
        ]);
    }
}
