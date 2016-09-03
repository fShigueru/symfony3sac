<?php

namespace SacBundle\Form;

use SacBundle\Entity\Pedido;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChamadoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo',TextType::class, ['label' => 'title.title' , 'required' => true, 'attr' => ['class' => 'form-control']])
            ->add('observacao',TextareaType::class, ['label' => 'title.observacao' , 'required' => true, 'attr' => ['class' => 'form-control']])
            ->add('cliente', ClienteType::class, [
                'label' => false,
                'data_class' => 'SacBundle\Entity\Cliente'
            ])
            ->add('pedido', PedidoType::class, [
                'label' => false,
                'data_class' => 'SacBundle\Entity\Pedido'
            ])
            ->add('submit',SubmitType::class,['label'=>'title.enviar', 'attr' => ['class' => 'btn btn-primary btn-lg btn-block']])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SacBundle\Entity\Chamado',
            'cascade_validation' => true,
            'csrf_protection' => false
        ));
    }
}
