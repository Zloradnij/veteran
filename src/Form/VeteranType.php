<?php

namespace App\Form;

use App\Entity\Veteran;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VeteranType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('first_name')
            ->add('surname')
            ->add('patronymic')
            ->add('date_of_birth')
            ->add('address')
            ->add('phone_home')
            ->add('phone_mobile')
            ->add('email_address')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Veteran::class,
        ]);
    }
}
