<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_fb5c3abba50af933e24a9825cda49e2bc51ce68fbe04db72f0819232a1aa2f44 extends Twig_Template
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
        $__internal_ab39907d8c4ee17758d504aae5eafb928b815391a837f1a81bcb0a2cf35d311f = $this->env->getExtension("native_profiler");
        $__internal_ab39907d8c4ee17758d504aae5eafb928b815391a837f1a81bcb0a2cf35d311f->enter($__internal_ab39907d8c4ee17758d504aae5eafb928b815391a837f1a81bcb0a2cf35d311f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ab39907d8c4ee17758d504aae5eafb928b815391a837f1a81bcb0a2cf35d311f->leave($__internal_ab39907d8c4ee17758d504aae5eafb928b815391a837f1a81bcb0a2cf35d311f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
