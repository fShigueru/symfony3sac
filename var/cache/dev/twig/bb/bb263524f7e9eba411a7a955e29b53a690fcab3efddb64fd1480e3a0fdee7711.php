<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_866da2ca18bd0f53e0b68da52286c54dfa414a4bbdbd6e196ede20f1a2a9a1d1 extends Twig_Template
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
        $__internal_b7b48bcd720745735eada6aea129fb752db9948e1f45960759704295f2ff4dbc = $this->env->getExtension("native_profiler");
        $__internal_b7b48bcd720745735eada6aea129fb752db9948e1f45960759704295f2ff4dbc->enter($__internal_b7b48bcd720745735eada6aea129fb752db9948e1f45960759704295f2ff4dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b7b48bcd720745735eada6aea129fb752db9948e1f45960759704295f2ff4dbc->leave($__internal_b7b48bcd720745735eada6aea129fb752db9948e1f45960759704295f2ff4dbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
