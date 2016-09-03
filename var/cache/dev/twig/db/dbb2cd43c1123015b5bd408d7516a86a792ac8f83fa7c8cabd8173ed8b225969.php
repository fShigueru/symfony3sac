<?php

/* @Sac/elements/alertas/error.html.twig */
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
        $__internal_93ccaa65545d14755e42af05edeb1b5f8f37b07fe2cfb95dd2d927166afb2ec5 = $this->env->getExtension("native_profiler");
        $__internal_93ccaa65545d14755e42af05edeb1b5f8f37b07fe2cfb95dd2d927166afb2ec5->enter($__internal_93ccaa65545d14755e42af05edeb1b5f8f37b07fe2cfb95dd2d927166afb2ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Sac/elements/alertas/error.html.twig"));

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
        
        $__internal_93ccaa65545d14755e42af05edeb1b5f8f37b07fe2cfb95dd2d927166afb2ec5->leave($__internal_93ccaa65545d14755e42af05edeb1b5f8f37b07fe2cfb95dd2d927166afb2ec5_prof);

    }

    public function getTemplateName()
    {
        return "@Sac/elements/alertas/error.html.twig";
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
