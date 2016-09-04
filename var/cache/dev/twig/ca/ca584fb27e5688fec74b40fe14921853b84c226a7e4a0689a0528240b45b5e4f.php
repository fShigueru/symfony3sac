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
        $__internal_a7a694dd1c71d7c7a46299253fdcd0924ed67572b81571c9e416512178f2ed94 = $this->env->getExtension("native_profiler");
        $__internal_a7a694dd1c71d7c7a46299253fdcd0924ed67572b81571c9e416512178f2ed94->enter($__internal_a7a694dd1c71d7c7a46299253fdcd0924ed67572b81571c9e416512178f2ed94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a7a694dd1c71d7c7a46299253fdcd0924ed67572b81571c9e416512178f2ed94->leave($__internal_a7a694dd1c71d7c7a46299253fdcd0924ed67572b81571c9e416512178f2ed94_prof);

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
