<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ee9ed1c7c2dc78dc00fc577d93f64808216472decf20fe7f727f550bef7d4d44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31ce5fb25bf686dcd414fedfc1711fdda24c10d9771d22646ff5444bb7ce2e1e = $this->env->getExtension("native_profiler");
        $__internal_31ce5fb25bf686dcd414fedfc1711fdda24c10d9771d22646ff5444bb7ce2e1e->enter($__internal_31ce5fb25bf686dcd414fedfc1711fdda24c10d9771d22646ff5444bb7ce2e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31ce5fb25bf686dcd414fedfc1711fdda24c10d9771d22646ff5444bb7ce2e1e->leave($__internal_31ce5fb25bf686dcd414fedfc1711fdda24c10d9771d22646ff5444bb7ce2e1e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a095609a13c7029720289a4f669c550a0244141f3a6fa6be238ff7593d6028ed = $this->env->getExtension("native_profiler");
        $__internal_a095609a13c7029720289a4f669c550a0244141f3a6fa6be238ff7593d6028ed->enter($__internal_a095609a13c7029720289a4f669c550a0244141f3a6fa6be238ff7593d6028ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a095609a13c7029720289a4f669c550a0244141f3a6fa6be238ff7593d6028ed->leave($__internal_a095609a13c7029720289a4f669c550a0244141f3a6fa6be238ff7593d6028ed_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0d20066a861ee7373992f2743348affde9d5e2c6afc85cd4859b34577a023ef = $this->env->getExtension("native_profiler");
        $__internal_e0d20066a861ee7373992f2743348affde9d5e2c6afc85cd4859b34577a023ef->enter($__internal_e0d20066a861ee7373992f2743348affde9d5e2c6afc85cd4859b34577a023ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e0d20066a861ee7373992f2743348affde9d5e2c6afc85cd4859b34577a023ef->leave($__internal_e0d20066a861ee7373992f2743348affde9d5e2c6afc85cd4859b34577a023ef_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
