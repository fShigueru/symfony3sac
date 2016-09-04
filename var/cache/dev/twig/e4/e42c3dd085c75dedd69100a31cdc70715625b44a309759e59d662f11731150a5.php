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
        $__internal_0ba95eb07b96eeb773332dcb14026e05e8ec065f4e2e226aac86ecd8da8d52ee = $this->env->getExtension("native_profiler");
        $__internal_0ba95eb07b96eeb773332dcb14026e05e8ec065f4e2e226aac86ecd8da8d52ee->enter($__internal_0ba95eb07b96eeb773332dcb14026e05e8ec065f4e2e226aac86ecd8da8d52ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0ba95eb07b96eeb773332dcb14026e05e8ec065f4e2e226aac86ecd8da8d52ee->leave($__internal_0ba95eb07b96eeb773332dcb14026e05e8ec065f4e2e226aac86ecd8da8d52ee_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b02feb7ebb48dc885e86d3d87a186775ca1d108059b081791ffc86d99ad3a56 = $this->env->getExtension("native_profiler");
        $__internal_4b02feb7ebb48dc885e86d3d87a186775ca1d108059b081791ffc86d99ad3a56->enter($__internal_4b02feb7ebb48dc885e86d3d87a186775ca1d108059b081791ffc86d99ad3a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4b02feb7ebb48dc885e86d3d87a186775ca1d108059b081791ffc86d99ad3a56->leave($__internal_4b02feb7ebb48dc885e86d3d87a186775ca1d108059b081791ffc86d99ad3a56_prof);

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
