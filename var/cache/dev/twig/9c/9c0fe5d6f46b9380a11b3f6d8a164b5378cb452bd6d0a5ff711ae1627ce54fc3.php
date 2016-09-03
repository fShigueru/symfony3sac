<?php

/* SacBundle:sac:index.html.twig */
class __TwigTemplate_a480aa286297a0749cd5b6b2e252676e7108d21fe98047fc0d0c02a39af07871 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SacBundle:sac:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba1b98c9d8eeba2ecd91fe4177bb2c8c5e53d1549f216c65ec89a502b5f5df76 = $this->env->getExtension("native_profiler");
        $__internal_ba1b98c9d8eeba2ecd91fe4177bb2c8c5e53d1549f216c65ec89a502b5f5df76->enter($__internal_ba1b98c9d8eeba2ecd91fe4177bb2c8c5e53d1549f216c65ec89a502b5f5df76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SacBundle:sac:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba1b98c9d8eeba2ecd91fe4177bb2c8c5e53d1549f216c65ec89a502b5f5df76->leave($__internal_ba1b98c9d8eeba2ecd91fe4177bb2c8c5e53d1549f216c65ec89a502b5f5df76_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_47d549ed2249124ea23037d633a17645820f33c148ca4e0a9ab2bd8065ebc504 = $this->env->getExtension("native_profiler");
        $__internal_47d549ed2249124ea23037d633a17645820f33c148ca4e0a9ab2bd8065ebc504->enter($__internal_47d549ed2249124ea23037d633a17645820f33c148ca4e0a9ab2bd8065ebc504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("title.seo", 0, array(), "messagesPaginaBundle"), "html", null, true);
        echo "
";
        
        $__internal_47d549ed2249124ea23037d633a17645820f33c148ca4e0a9ab2bd8065ebc504->leave($__internal_47d549ed2249124ea23037d633a17645820f33c148ca4e0a9ab2bd8065ebc504_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfdf06e72194d98d927c4d3396c3a11d3e10c261ff515f866ed3736ce66b8c78 = $this->env->getExtension("native_profiler");
        $__internal_dfdf06e72194d98d927c4d3396c3a11d3e10c261ff515f866ed3736ce66b8c78->enter($__internal_dfdf06e72194d98d927c4d3396c3a11d3e10c261ff515f866ed3736ce66b8c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<br /><br />
    <div class=\"jumbotron\">
        <h1 class=\"text-center\">Sistema de SAC</h1>
        <p><a class=\"btn btn-primary btn-lg btn-block\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("sac_new");
        echo "\" role=\"button\">Novo Chamado</a></p>
        <p><a class=\"btn btn-default btn-lg btn-block\" href=\"#\" role=\"button\">Lista Chamados</a></p>
    </div>
";
        
        $__internal_dfdf06e72194d98d927c4d3396c3a11d3e10c261ff515f866ed3736ce66b8c78->leave($__internal_dfdf06e72194d98d927c4d3396c3a11d3e10c261ff515f866ed3736ce66b8c78_prof);

    }

    public function getTemplateName()
    {
        return "SacBundle:sac:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ 'title.seo'|transchoice(0,{}, 'messagesPaginaBundle') }}*/
/* {% endblock %}*/
/* */
/* {% block body -%}*/
/*     <br /><br />*/
/*     <div class="jumbotron">*/
/*         <h1 class="text-center">Sistema de SAC</h1>*/
/*         <p><a class="btn btn-primary btn-lg btn-block" href="{{ path('sac_new') }}" role="button">Novo Chamado</a></p>*/
/*         <p><a class="btn btn-default btn-lg btn-block" href="#" role="button">Lista Chamados</a></p>*/
/*     </div>*/
/* {% endblock %}*/
