<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_88637194e9f16793ef0da17a5d8b7674a87cd3b4d2869d43bfd83c806e107fb2 extends Twig_Template
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
        $__internal_d54572439a338d9bc45a51fb03dffb4bf9c00d20601627e01505e3a54afa5537 = $this->env->getExtension("native_profiler");
        $__internal_d54572439a338d9bc45a51fb03dffb4bf9c00d20601627e01505e3a54afa5537->enter($__internal_d54572439a338d9bc45a51fb03dffb4bf9c00d20601627e01505e3a54afa5537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d54572439a338d9bc45a51fb03dffb4bf9c00d20601627e01505e3a54afa5537->leave($__internal_d54572439a338d9bc45a51fb03dffb4bf9c00d20601627e01505e3a54afa5537_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
