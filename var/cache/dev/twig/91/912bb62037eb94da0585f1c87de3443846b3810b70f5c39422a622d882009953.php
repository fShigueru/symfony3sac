<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6208da4b4074be34d00b93c9e1fb43ab3e0c478a619b6a1c0132dcda9de2412f extends Twig_Template
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
        $__internal_d8efe934c15cd4eb4d7bb8960a09b411797c9dd270baafe4c1c30ef788827ebf = $this->env->getExtension("native_profiler");
        $__internal_d8efe934c15cd4eb4d7bb8960a09b411797c9dd270baafe4c1c30ef788827ebf->enter($__internal_d8efe934c15cd4eb4d7bb8960a09b411797c9dd270baafe4c1c30ef788827ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d8efe934c15cd4eb4d7bb8960a09b411797c9dd270baafe4c1c30ef788827ebf->leave($__internal_d8efe934c15cd4eb4d7bb8960a09b411797c9dd270baafe4c1c30ef788827ebf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
