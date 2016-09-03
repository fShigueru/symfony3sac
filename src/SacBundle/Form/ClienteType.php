<?php

namespace SacBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome',TextType::class, ['label' => 'title.nome' , 'required' => true, 'attr' => ['class' => 'form-control','ng-model'=>'nome']])
            ->add('email',EmailType::class, ['label' => 'title.email' , 'required' => true, 'attr' => ['class' => 'form-control','ng-model'=>'cliente.email']])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SacBundle\Entity\Cliente',
            'cascade_validation' => true
        ));
    }
}
