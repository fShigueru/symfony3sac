<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_26ba2fa619135f0b58b7f1429ab01d0e0d2dc4377c6f1e2180c5f7c738f9e915 extends Twig_Template
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
        $__internal_64e3234211c89f4da36febbd9df7e602eb0eff1cd06f3681fb8d3a1d8fdc03a2 = $this->env->getExtension("native_profiler");
        $__internal_64e3234211c89f4da36febbd9df7e602eb0eff1cd06f3681fb8d3a1d8fdc03a2->enter($__internal_64e3234211c89f4da36febbd9df7e602eb0eff1cd06f3681fb8d3a1d8fdc03a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_64e3234211c89f4da36febbd9df7e602eb0eff1cd06f3681fb8d3a1d8fdc03a2->leave($__internal_64e3234211c89f4da36febbd9df7e602eb0eff1cd06f3681fb8d3a1d8fdc03a2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
