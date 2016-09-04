<?php

/* SacBundle:elements/alertas:error.html.twig */
class __TwigTemplate_475b47b6af5abea354f8dabdc457462165c3c8b2ccd56516b3feee54576f33a0 extends Twig_Template
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
        $__internal_3f5241e9da564559050ae412834074a2edfd5e05bb9bc81bec8a0ba94d54a667 = $this->env->getExtension("native_profiler");
        $__internal_3f5241e9da564559050ae412834074a2edfd5e05bb9bc81bec8a0ba94d54a667->enter($__internal_3f5241e9da564559050ae412834074a2edfd5e05bb9bc81bec8a0ba94d54a667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SacBundle:elements/alertas:error.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "    <div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
        </button>
        <strong>";
            // line 5
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</strong>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3f5241e9da564559050ae412834074a2edfd5e05bb9bc81bec8a0ba94d54a667->leave($__internal_3f5241e9da564559050ae412834074a2edfd5e05bb9bc81bec8a0ba94d54a667_prof);

    }

    public function getTemplateName()
    {
        return "SacBundle:elements/alertas:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  26 => 2,  22 => 1,);
    }
}
/* {% for flashMessage in app.session.flashbag.get('error') %}*/
/*     <div class="alert alert-danger alert-dismissible fade in" role="alert">*/
/*         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>*/
/*         </button>*/
/*         <strong>{{ flashMessage }}</strong>*/
/*     </div>*/
/* {% endfor %}*/
