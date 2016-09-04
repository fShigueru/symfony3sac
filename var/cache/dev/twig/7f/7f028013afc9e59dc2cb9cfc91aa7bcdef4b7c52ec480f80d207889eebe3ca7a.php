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
        $__internal_f65cc7dccc6292d6793afee18d912e31f5592a1a49d4a9f75403c904853424f7 = $this->env->getExtension("native_profiler");
        $__internal_f65cc7dccc6292d6793afee18d912e31f5592a1a49d4a9f75403c904853424f7->enter($__internal_f65cc7dccc6292d6793afee18d912e31f5592a1a49d4a9f75403c904853424f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f65cc7dccc6292d6793afee18d912e31f5592a1a49d4a9f75403c904853424f7->leave($__internal_f65cc7dccc6292d6793afee18d912e31f5592a1a49d4a9f75403c904853424f7_prof);

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
