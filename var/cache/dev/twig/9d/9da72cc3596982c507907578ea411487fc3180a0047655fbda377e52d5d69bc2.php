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
        $__internal_bf59b0d7bdd379bcd0b463b9ae6e393483b5443fdf653bfd801006a08948717d = $this->env->getExtension("native_profiler");
        $__internal_bf59b0d7bdd379bcd0b463b9ae6e393483b5443fdf653bfd801006a08948717d->enter($__internal_bf59b0d7bdd379bcd0b463b9ae6e393483b5443fdf653bfd801006a08948717d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bf59b0d7bdd379bcd0b463b9ae6e393483b5443fdf653bfd801006a08948717d->leave($__internal_bf59b0d7bdd379bcd0b463b9ae6e393483b5443fdf653bfd801006a08948717d_prof);

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
