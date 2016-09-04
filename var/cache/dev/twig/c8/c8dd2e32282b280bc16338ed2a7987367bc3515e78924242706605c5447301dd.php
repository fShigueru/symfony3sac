<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a1930ed3be9473302d54bdf79b5536c3196deb8f53183c31acf09783912423ac extends Twig_Template
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
        $__internal_977019036d06660c4749401cb7d71df5425d491e1bc135c9103922604a8a8727 = $this->env->getExtension("native_profiler");
        $__internal_977019036d06660c4749401cb7d71df5425d491e1bc135c9103922604a8a8727->enter($__internal_977019036d06660c4749401cb7d71df5425d491e1bc135c9103922604a8a8727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_977019036d06660c4749401cb7d71df5425d491e1bc135c9103922604a8a8727->leave($__internal_977019036d06660c4749401cb7d71df5425d491e1bc135c9103922604a8a8727_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
