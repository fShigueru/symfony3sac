<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c746becdc58005326efc1658f2e39472e9f98fc418943ce900a8b853041a2f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bb391fe545cee379dfc40d6c4d17944a78aba4cf14a6fbb59786691e0672e59 = $this->env->getExtension("native_profiler");
        $__internal_4bb391fe545cee379dfc40d6c4d17944a78aba4cf14a6fbb59786691e0672e59->enter($__internal_4bb391fe545cee379dfc40d6c4d17944a78aba4cf14a6fbb59786691e0672e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4bb391fe545cee379dfc40d6c4d17944a78aba4cf14a6fbb59786691e0672e59->leave($__internal_4bb391fe545cee379dfc40d6c4d17944a78aba4cf14a6fbb59786691e0672e59_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2da591e7af2172662be3c9d3d8a112a066cdddbf641ddb8b498d2c01f01575d1 = $this->env->getExtension("native_profiler");
        $__internal_2da591e7af2172662be3c9d3d8a112a066cdddbf641ddb8b498d2c01f01575d1->enter($__internal_2da591e7af2172662be3c9d3d8a112a066cdddbf641ddb8b498d2c01f01575d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2da591e7af2172662be3c9d3d8a112a066cdddbf641ddb8b498d2c01f01575d1->leave($__internal_2da591e7af2172662be3c9d3d8a112a066cdddbf641ddb8b498d2c01f01575d1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
