<?php

/* @Sac/elements/alertas/sucesso.html.twig */
class __TwigTemplate_e94a7cf5587dab0db139dac48123b3f552c161061b98658fa8787b3b899dd8b9 extends Twig_Template
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
        $__internal_e511dcad4d9e0a21e8b4492e976cd3202921b13ef403047ca0243ceba771d5f6 = $this->env->getExtension("native_profiler");
        $__internal_e511dcad4d9e0a21e8b4492e976cd3202921b13ef403047ca0243ceba771d5f6->enter($__internal_e511dcad4d9e0a21e8b4492e976cd3202921b13ef403047ca0243ceba771d5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Sac/elements/alertas/sucesso.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "sucesso"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "    <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
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
        
        $__internal_e511dcad4d9e0a21e8b4492e976cd3202921b13ef403047ca0243ceba771d5f6->leave($__internal_e511dcad4d9e0a21e8b4492e976cd3202921b13ef403047ca0243ceba771d5f6_prof);

    }

    public function getTemplateName()
    {
        return "@Sac/elements/alertas/sucesso.html.twig";
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
/* {% for flashMessage in app.session.flashbag.get('sucesso') %}*/
/*     <div class="alert alert-success alert-dismissible fade in" role="alert">*/
/*         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>*/
/*         </button>*/
/*         <strong>{{ flashMessage }}</strong>*/
/*     </div>*/
/* {% endfor %}*/