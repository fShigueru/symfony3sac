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
        $__internal_65f14d11a8f2ad21ce57f28f91a34fa26f1d60cc46fffa8808d956c2a21c0910 = $this->env->getExtension("native_profiler");
        $__internal_65f14d11a8f2ad21ce57f28f91a34fa26f1d60cc46fffa8808d956c2a21c0910->enter($__internal_65f14d11a8f2ad21ce57f28f91a34fa26f1d60cc46fffa8808d956c2a21c0910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65f14d11a8f2ad21ce57f28f91a34fa26f1d60cc46fffa8808d956c2a21c0910->leave($__internal_65f14d11a8f2ad21ce57f28f91a34fa26f1d60cc46fffa8808d956c2a21c0910_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d026af38c2f224601d189dcf04915aa002e1ba656cc2ce34a6c9f5dbadfb8d9 = $this->env->getExtension("native_profiler");
        $__internal_1d026af38c2f224601d189dcf04915aa002e1ba656cc2ce34a6c9f5dbadfb8d9->enter($__internal_1d026af38c2f224601d189dcf04915aa002e1ba656cc2ce34a6c9f5dbadfb8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1d026af38c2f224601d189dcf04915aa002e1ba656cc2ce34a6c9f5dbadfb8d9->leave($__internal_1d026af38c2f224601d189dcf04915aa002e1ba656cc2ce34a6c9f5dbadfb8d9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_091755021c5f9a611feb628c17ee09aedd54256d39659109ba4b333bb7d8ac8e = $this->env->getExtension("native_profiler");
        $__internal_091755021c5f9a611feb628c17ee09aedd54256d39659109ba4b333bb7d8ac8e->enter($__internal_091755021c5f9a611feb628c17ee09aedd54256d39659109ba4b333bb7d8ac8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_091755021c5f9a611feb628c17ee09aedd54256d39659109ba4b333bb7d8ac8e->leave($__internal_091755021c5f9a611feb628c17ee09aedd54256d39659109ba4b333bb7d8ac8e_prof);

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
