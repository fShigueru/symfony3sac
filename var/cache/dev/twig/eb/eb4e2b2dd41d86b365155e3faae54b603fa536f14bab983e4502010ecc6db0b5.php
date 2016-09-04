<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4d940f7db2d622cd789f8c41b9a36336eeced80fabf52fc4249e057fc1087ced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d536b52e067989911607218fffd75d921fae6f9a98f12cfb901b90cbd8d5a50 = $this->env->getExtension("native_profiler");
        $__internal_5d536b52e067989911607218fffd75d921fae6f9a98f12cfb901b90cbd8d5a50->enter($__internal_5d536b52e067989911607218fffd75d921fae6f9a98f12cfb901b90cbd8d5a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d536b52e067989911607218fffd75d921fae6f9a98f12cfb901b90cbd8d5a50->leave($__internal_5d536b52e067989911607218fffd75d921fae6f9a98f12cfb901b90cbd8d5a50_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_32d9c4c3a7a4b28c9acdeb41cc2701df1b382350f9f6c46ec10e9643cec886a0 = $this->env->getExtension("native_profiler");
        $__internal_32d9c4c3a7a4b28c9acdeb41cc2701df1b382350f9f6c46ec10e9643cec886a0->enter($__internal_32d9c4c3a7a4b28c9acdeb41cc2701df1b382350f9f6c46ec10e9643cec886a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_32d9c4c3a7a4b28c9acdeb41cc2701df1b382350f9f6c46ec10e9643cec886a0->leave($__internal_32d9c4c3a7a4b28c9acdeb41cc2701df1b382350f9f6c46ec10e9643cec886a0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7cf91a1213b94d45dea046d32df772f31d2a09fcdfd7db74cf11c2fc4a9abccf = $this->env->getExtension("native_profiler");
        $__internal_7cf91a1213b94d45dea046d32df772f31d2a09fcdfd7db74cf11c2fc4a9abccf->enter($__internal_7cf91a1213b94d45dea046d32df772f31d2a09fcdfd7db74cf11c2fc4a9abccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7cf91a1213b94d45dea046d32df772f31d2a09fcdfd7db74cf11c2fc4a9abccf->leave($__internal_7cf91a1213b94d45dea046d32df772f31d2a09fcdfd7db74cf11c2fc4a9abccf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6cb5967b044a31aa3cd63c0939c054f9642ab6f77ae0a20612d26e7b8da9c098 = $this->env->getExtension("native_profiler");
        $__internal_6cb5967b044a31aa3cd63c0939c054f9642ab6f77ae0a20612d26e7b8da9c098->enter($__internal_6cb5967b044a31aa3cd63c0939c054f9642ab6f77ae0a20612d26e7b8da9c098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6cb5967b044a31aa3cd63c0939c054f9642ab6f77ae0a20612d26e7b8da9c098->leave($__internal_6cb5967b044a31aa3cd63c0939c054f9642ab6f77ae0a20612d26e7b8da9c098_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
