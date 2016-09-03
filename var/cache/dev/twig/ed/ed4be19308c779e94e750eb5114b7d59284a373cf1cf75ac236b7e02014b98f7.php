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
        $__internal_91b17c84f9a8416d89aa2fd77706b394dd5ca7cef1610854da1fefca97450f9b = $this->env->getExtension("native_profiler");
        $__internal_91b17c84f9a8416d89aa2fd77706b394dd5ca7cef1610854da1fefca97450f9b->enter($__internal_91b17c84f9a8416d89aa2fd77706b394dd5ca7cef1610854da1fefca97450f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_91b17c84f9a8416d89aa2fd77706b394dd5ca7cef1610854da1fefca97450f9b->leave($__internal_91b17c84f9a8416d89aa2fd77706b394dd5ca7cef1610854da1fefca97450f9b_prof);

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
