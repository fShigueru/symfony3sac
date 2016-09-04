<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a65a5c3cf0880214b0f5028d86ebafa32a50d6d90f3fac5212b996ac6802d5b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbc44b45996dbdbf1a9e9cf053f1c883799c422ed76191112890651b03473899 = $this->env->getExtension("native_profiler");
        $__internal_bbc44b45996dbdbf1a9e9cf053f1c883799c422ed76191112890651b03473899->enter($__internal_bbc44b45996dbdbf1a9e9cf053f1c883799c422ed76191112890651b03473899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_bbc44b45996dbdbf1a9e9cf053f1c883799c422ed76191112890651b03473899->leave($__internal_bbc44b45996dbdbf1a9e9cf053f1c883799c422ed76191112890651b03473899_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
