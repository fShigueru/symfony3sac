<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_046568665ebd1a3a37367387879a84e1b88631e4c459dbd9226baa7abebef149 extends Twig_Template
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
        $__internal_e489c845a39d24624962a7a6ffe6262fc4873aa972df5b7245a76fdd5d5c00db = $this->env->getExtension("native_profiler");
        $__internal_e489c845a39d24624962a7a6ffe6262fc4873aa972df5b7245a76fdd5d5c00db->enter($__internal_e489c845a39d24624962a7a6ffe6262fc4873aa972df5b7245a76fdd5d5c00db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e489c845a39d24624962a7a6ffe6262fc4873aa972df5b7245a76fdd5d5c00db->leave($__internal_e489c845a39d24624962a7a6ffe6262fc4873aa972df5b7245a76fdd5d5c00db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
