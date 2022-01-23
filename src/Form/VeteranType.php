<?php

namespace App\Form;

use App\Entity\Veteran;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VeteranType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('first_name', null, ['label' => 'Имя'])
            ->add('surname', null, ['label' => 'Фамилия'])
            ->add('patronymic', null, ['label' => 'Отчество'])
            ->add('date_of_birth', BirthdayType::class, ['label' => 'Дата рождения'])
            ->add('address', null, ['label' => 'Адрес'])
            ->add('phone_home', null, ['label' => 'Домашний телефон'])
            ->add('phone_mobile', null, ['label' => 'Мобильный телефон'])
            ->add('email_address', EmailType::class, ['label' => 'Email'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Veteran::class,
        ]);
    }
}
