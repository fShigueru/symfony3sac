<?php

namespace SacBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BuscaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numPedido',IntegerType::class,
                ['label' => false , 'required' => false,
                    'attr' => ['class' => 'form-control', 'placeholder' => 'title.numero.pedido']
                ]
            )
            ->add('email',EmailType::class,
                ['label' => false , 'required' => false,
                    'attr' => ['class' => 'form-control', 'placeholder' => 'title.email']
                ]
            )
            ->add('submit',SubmitType::class,
                ['label'=>'title.filtrar', 'attr' =>
                    ['class' => 'btn btn-primary']
                ]
            )
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
        ));
    }
}
