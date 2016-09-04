<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_031ddb393e8bcdd0850283257535b3d2c44fc83473488d39ddb9670a640b604a extends Twig_Template
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
        $__internal_a6d2c58524ad16b5d40602e21dc6a5c11df28fa81975ddbc4a38abb1c7ce80e5 = $this->env->getExtension("native_profiler");
        $__internal_a6d2c58524ad16b5d40602e21dc6a5c11df28fa81975ddbc4a38abb1c7ce80e5->enter($__internal_a6d2c58524ad16b5d40602e21dc6a5c11df28fa81975ddbc4a38abb1c7ce80e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a6d2c58524ad16b5d40602e21dc6a5c11df28fa81975ddbc4a38abb1c7ce80e5->leave($__internal_a6d2c58524ad16b5d40602e21dc6a5c11df28fa81975ddbc4a38abb1c7ce80e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
