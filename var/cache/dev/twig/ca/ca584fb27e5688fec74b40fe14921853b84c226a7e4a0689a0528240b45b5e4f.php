<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_470a0e745b365442fe00074d175fd817014f28ec268841d6a4c243f5bcfdba89 extends Twig_Template
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
        $__internal_7161dcd713c10f0aaabeaa5d623e87c2ea094f6d724b6da49deb1f642355a6ca = $this->env->getExtension("native_profiler");
        $__internal_7161dcd713c10f0aaabeaa5d623e87c2ea094f6d724b6da49deb1f642355a6ca->enter($__internal_7161dcd713c10f0aaabeaa5d623e87c2ea094f6d724b6da49deb1f642355a6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7161dcd713c10f0aaabeaa5d623e87c2ea094f6d724b6da49deb1f642355a6ca->leave($__internal_7161dcd713c10f0aaabeaa5d623e87c2ea094f6d724b6da49deb1f642355a6ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
