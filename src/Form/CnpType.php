<?php

namespace App\Form;

use App\Entity\ECnp;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CnpType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cnp', NumberType::class, ['attr' => [
                'placeholder' => 'type your cnp here...',
                'class' => 'flex-1 appearance-none rounded shadow p-3 text-grey-dark mr-2 focus:outline-none'
            ]])
            ->add('save', SubmitType::class, ['attr' => [
                'class' => 'appearance-none bg-red-500 text-white text-base font-semibold tracking-wide uppercase p-3 rounded shadow hover:bg-red-light'
            ]]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ECnp::class,
        ]);
    }
}
