<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_bc1c5e27a6442c5509d81e3a7249a63eb19cdae1ddabb0b202b820cd80417871 extends Twig_Template
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
        $__internal_ac421e553638ec9a1d5309a4a2a1bb8bf13d8e2dcc477e90d4f218a572a72423 = $this->env->getExtension("native_profiler");
        $__internal_ac421e553638ec9a1d5309a4a2a1bb8bf13d8e2dcc477e90d4f218a572a72423->enter($__internal_ac421e553638ec9a1d5309a4a2a1bb8bf13d8e2dcc477e90d4f218a572a72423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ac421e553638ec9a1d5309a4a2a1bb8bf13d8e2dcc477e90d4f218a572a72423->leave($__internal_ac421e553638ec9a1d5309a4a2a1bb8bf13d8e2dcc477e90d4f218a572a72423_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
