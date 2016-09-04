<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_24dae839e00a52c6c940d860ef3e456791ca67c9b9070a8218d787eb070f64f2 extends Twig_Template
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
        $__internal_3aead7ac8136967300c5aeb02d4916e809de6ee89754e38edda5496ff1f577b6 = $this->env->getExtension("native_profiler");
        $__internal_3aead7ac8136967300c5aeb02d4916e809de6ee89754e38edda5496ff1f577b6->enter($__internal_3aead7ac8136967300c5aeb02d4916e809de6ee89754e38edda5496ff1f577b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3aead7ac8136967300c5aeb02d4916e809de6ee89754e38edda5496ff1f577b6->leave($__internal_3aead7ac8136967300c5aeb02d4916e809de6ee89754e38edda5496ff1f577b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
