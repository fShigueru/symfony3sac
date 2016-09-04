<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_1694852e148440263ce15dd44045c8e3a446231271f985d05b3452719dd159a4 extends Twig_Template
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
        $__internal_e0421ad8aad91c1766d65816b0a3a2d5782bd0567833ba853eb06d2e159d8cf7 = $this->env->getExtension("native_profiler");
        $__internal_e0421ad8aad91c1766d65816b0a3a2d5782bd0567833ba853eb06d2e159d8cf7->enter($__internal_e0421ad8aad91c1766d65816b0a3a2d5782bd0567833ba853eb06d2e159d8cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e0421ad8aad91c1766d65816b0a3a2d5782bd0567833ba853eb06d2e159d8cf7->leave($__internal_e0421ad8aad91c1766d65816b0a3a2d5782bd0567833ba853eb06d2e159d8cf7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
