<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a07b83a0a4596bef455c442625558c71318c8c09cf4732bd02592b5a7379ba81 extends Twig_Template
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
        $__internal_31266fabc478609cb24f05e8ca6a80647c82a6f30db1824c319d1091f7aa806e = $this->env->getExtension("native_profiler");
        $__internal_31266fabc478609cb24f05e8ca6a80647c82a6f30db1824c319d1091f7aa806e->enter($__internal_31266fabc478609cb24f05e8ca6a80647c82a6f30db1824c319d1091f7aa806e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_31266fabc478609cb24f05e8ca6a80647c82a6f30db1824c319d1091f7aa806e->leave($__internal_31266fabc478609cb24f05e8ca6a80647c82a6f30db1824c319d1091f7aa806e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
