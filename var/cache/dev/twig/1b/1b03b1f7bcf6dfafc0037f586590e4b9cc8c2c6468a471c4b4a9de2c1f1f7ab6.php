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
        $__internal_b44b2b68cd8fb58ecdf8141de302b3d245ecfd8cf032cd8ab9b09a1d4b40eb31 = $this->env->getExtension("native_profiler");
        $__internal_b44b2b68cd8fb58ecdf8141de302b3d245ecfd8cf032cd8ab9b09a1d4b40eb31->enter($__internal_b44b2b68cd8fb58ecdf8141de302b3d245ecfd8cf032cd8ab9b09a1d4b40eb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b44b2b68cd8fb58ecdf8141de302b3d245ecfd8cf032cd8ab9b09a1d4b40eb31->leave($__internal_b44b2b68cd8fb58ecdf8141de302b3d245ecfd8cf032cd8ab9b09a1d4b40eb31_prof);

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
