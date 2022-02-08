<?php

namespace App\Form;

use App\Entity\Video;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class VideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,[
                'required' => false,
                'label' => 'Nom de la video',
                'attr' => [
                    'placeholder' => 'Taper le nom de la video ici...'
                ]
            ])
            ->add('codeYoutube', TextType::class,[
                'required' => false,
                'label' => 'Code youtube',
                'attr' => [
                    'placeholder' => 'Taper le code youtube ici...'
                ]
            ])
            ->add('image', TextType::class,[
                'required' => false,
                'label' => 'Image de la video',
                'attr' => [
                    'placeholder' => 'Taper le chemin de l\'image ici...'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Video::class,
        ]);
    }
}
