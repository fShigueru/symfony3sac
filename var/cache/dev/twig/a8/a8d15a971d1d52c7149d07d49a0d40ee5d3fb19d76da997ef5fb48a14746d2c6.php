<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0cf873ba16ad2fe054f0699153876cf758dcf90989f6a7afb9171ab9cd10251e extends Twig_Template
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
        $__internal_2dc06fce928435902721231413baadc3fe844a532e9301ba0a897c68d7264805 = $this->env->getExtension("native_profiler");
        $__internal_2dc06fce928435902721231413baadc3fe844a532e9301ba0a897c68d7264805->enter($__internal_2dc06fce928435902721231413baadc3fe844a532e9301ba0a897c68d7264805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2dc06fce928435902721231413baadc3fe844a532e9301ba0a897c68d7264805->leave($__internal_2dc06fce928435902721231413baadc3fe844a532e9301ba0a897c68d7264805_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */