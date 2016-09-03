<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_bc91d7cb590409f2a3ecef249794f57d32bdfba51eab7b97fb7b6df7d2c6e246 extends Twig_Template
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
        $__internal_fb85a5a3524397544b82c75ad23ad6cdbf1ec349d54ad1df7ceb612097fce29f = $this->env->getExtension("native_profiler");
        $__internal_fb85a5a3524397544b82c75ad23ad6cdbf1ec349d54ad1df7ceb612097fce29f->enter($__internal_fb85a5a3524397544b82c75ad23ad6cdbf1ec349d54ad1df7ceb612097fce29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_fb85a5a3524397544b82c75ad23ad6cdbf1ec349d54ad1df7ceb612097fce29f->leave($__internal_fb85a5a3524397544b82c75ad23ad6cdbf1ec349d54ad1df7ceb612097fce29f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
