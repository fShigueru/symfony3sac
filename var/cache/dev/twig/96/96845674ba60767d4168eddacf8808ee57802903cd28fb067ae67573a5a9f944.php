<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2faa069cf9966d1e064257765414beabb0db0053910921fb929ed754e8661de4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3a4a8dd89447846a373e92ba0c55f392e71e87b7aa9669b07bccb9f14cdfb79f = $this->env->getExtension("native_profiler");
        $__internal_3a4a8dd89447846a373e92ba0c55f392e71e87b7aa9669b07bccb9f14cdfb79f->enter($__internal_3a4a8dd89447846a373e92ba0c55f392e71e87b7aa9669b07bccb9f14cdfb79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a4a8dd89447846a373e92ba0c55f392e71e87b7aa9669b07bccb9f14cdfb79f->leave($__internal_3a4a8dd89447846a373e92ba0c55f392e71e87b7aa9669b07bccb9f14cdfb79f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e99519e030c976c76b779c7f7aa777267f96a61937d48f0e12dc38afe41c42a = $this->env->getExtension("native_profiler");
        $__internal_6e99519e030c976c76b779c7f7aa777267f96a61937d48f0e12dc38afe41c42a->enter($__internal_6e99519e030c976c76b779c7f7aa777267f96a61937d48f0e12dc38afe41c42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6e99519e030c976c76b779c7f7aa777267f96a61937d48f0e12dc38afe41c42a->leave($__internal_6e99519e030c976c76b779c7f7aa777267f96a61937d48f0e12dc38afe41c42a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca045a2b9824445ff2fc73184f95b07095e64a6870c5a0e3a9fda6e653d050dc = $this->env->getExtension("native_profiler");
        $__internal_ca045a2b9824445ff2fc73184f95b07095e64a6870c5a0e3a9fda6e653d050dc->enter($__internal_ca045a2b9824445ff2fc73184f95b07095e64a6870c5a0e3a9fda6e653d050dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ca045a2b9824445ff2fc73184f95b07095e64a6870c5a0e3a9fda6e653d050dc->leave($__internal_ca045a2b9824445ff2fc73184f95b07095e64a6870c5a0e3a9fda6e653d050dc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8340a633d2fcc19b88203849563fbe867960f6473cd70150c16f4090e7c45053 = $this->env->getExtension("native_profiler");
        $__internal_8340a633d2fcc19b88203849563fbe867960f6473cd70150c16f4090e7c45053->enter($__internal_8340a633d2fcc19b88203849563fbe867960f6473cd70150c16f4090e7c45053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8340a633d2fcc19b88203849563fbe867960f6473cd70150c16f4090e7c45053->leave($__internal_8340a633d2fcc19b88203849563fbe867960f6473cd70150c16f4090e7c45053_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
