<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_aeff326ad3e3ac9abeb0aa4701a7a2c0f84df3f4cfd5d6ce8c63da3410e4273f extends Twig_Template
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
        $__internal_506ed37c98048a76dd1362d43a79b22e13b911f0cd753122b10d059b17fb6214 = $this->env->getExtension("native_profiler");
        $__internal_506ed37c98048a76dd1362d43a79b22e13b911f0cd753122b10d059b17fb6214->enter($__internal_506ed37c98048a76dd1362d43a79b22e13b911f0cd753122b10d059b17fb6214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_506ed37c98048a76dd1362d43a79b22e13b911f0cd753122b10d059b17fb6214->leave($__internal_506ed37c98048a76dd1362d43a79b22e13b911f0cd753122b10d059b17fb6214_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
