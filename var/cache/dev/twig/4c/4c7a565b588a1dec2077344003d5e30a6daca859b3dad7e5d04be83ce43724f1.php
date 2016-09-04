<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_58f007c81596e27c76c9cbdd45d0c98ccd7a8c8f0f103d4fc35a4dcad2f81823 extends Twig_Template
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
        $__internal_5c4edfa857f2aa4361f7d3fb26e1de1a228d2c8ba6787fad6de254d5aef953c7 = $this->env->getExtension("native_profiler");
        $__internal_5c4edfa857f2aa4361f7d3fb26e1de1a228d2c8ba6787fad6de254d5aef953c7->enter($__internal_5c4edfa857f2aa4361f7d3fb26e1de1a228d2c8ba6787fad6de254d5aef953c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5c4edfa857f2aa4361f7d3fb26e1de1a228d2c8ba6787fad6de254d5aef953c7->leave($__internal_5c4edfa857f2aa4361f7d3fb26e1de1a228d2c8ba6787fad6de254d5aef953c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
