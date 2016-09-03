<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_56eb03554a04753fc312687bb528c0476ed1681217803d633a7993459dd62ff0 extends Twig_Template
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
        $__internal_00a6bbb0bc50124002ed30fd885386cf3ce98aeb9df1eb4c0fb7320ee18b9878 = $this->env->getExtension("native_profiler");
        $__internal_00a6bbb0bc50124002ed30fd885386cf3ce98aeb9df1eb4c0fb7320ee18b9878->enter($__internal_00a6bbb0bc50124002ed30fd885386cf3ce98aeb9df1eb4c0fb7320ee18b9878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_00a6bbb0bc50124002ed30fd885386cf3ce98aeb9df1eb4c0fb7320ee18b9878->leave($__internal_00a6bbb0bc50124002ed30fd885386cf3ce98aeb9df1eb4c0fb7320ee18b9878_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
