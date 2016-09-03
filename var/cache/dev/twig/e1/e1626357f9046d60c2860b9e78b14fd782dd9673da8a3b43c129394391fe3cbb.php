<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f813f1e12b41f03e5b6d19cc9a5f2dd47c76b83591a70c3ed18f850fdcaca9ec extends Twig_Template
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
        $__internal_8c5092b951da5a730939e504aae05653e23a012868ef932851eb50614d78467e = $this->env->getExtension("native_profiler");
        $__internal_8c5092b951da5a730939e504aae05653e23a012868ef932851eb50614d78467e->enter($__internal_8c5092b951da5a730939e504aae05653e23a012868ef932851eb50614d78467e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8c5092b951da5a730939e504aae05653e23a012868ef932851eb50614d78467e->leave($__internal_8c5092b951da5a730939e504aae05653e23a012868ef932851eb50614d78467e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
