<?php

/* SacBundle:Sac:index.html.twig */
class __TwigTemplate_9a9f5af5cd2066ac4340b647257a34759788d23bed4f1a4a5447b7a1f9180c0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SacBundle:Sac:index.html.twig", 1);
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
        $__internal_3ae885ff29fe7155492945eb30977fd55a94ff2c72829832bc03d49ec85470cb = $this->env->getExtension("native_profiler");
        $__internal_3ae885ff29fe7155492945eb30977fd55a94ff2c72829832bc03d49ec85470cb->enter($__internal_3ae885ff29fe7155492945eb30977fd55a94ff2c72829832bc03d49ec85470cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SacBundle:Sac:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ae885ff29fe7155492945eb30977fd55a94ff2c72829832bc03d49ec85470cb->leave($__internal_3ae885ff29fe7155492945eb30977fd55a94ff2c72829832bc03d49ec85470cb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ab81eb733d9db36b8f35550b045f9e2b682bef5e42eb28ecfaa7c2f3761d20e = $this->env->getExtension("native_profiler");
        $__internal_7ab81eb733d9db36b8f35550b045f9e2b682bef5e42eb28ecfaa7c2f3761d20e->enter($__internal_7ab81eb733d9db36b8f35550b045f9e2b682bef5e42eb28ecfaa7c2f3761d20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("title", 0, array(), "messages"), "html", null, true);
        echo "
";
        
        $__internal_7ab81eb733d9db36b8f35550b045f9e2b682bef5e42eb28ecfaa7c2f3761d20e->leave($__internal_7ab81eb733d9db36b8f35550b045f9e2b682bef5e42eb28ecfaa7c2f3761d20e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d87c199a3e6cf13e352a5c9e1c819195d0d4b4eb4892f8a94a613822d97ffee9 = $this->env->getExtension("native_profiler");
        $__internal_d87c199a3e6cf13e352a5c9e1c819195d0d4b4eb4892f8a94a613822d97ffee9->enter($__internal_d87c199a3e6cf13e352a5c9e1c819195d0d4b4eb4892f8a94a613822d97ffee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d87c199a3e6cf13e352a5c9e1c819195d0d4b4eb4892f8a94a613822d97ffee9->leave($__internal_d87c199a3e6cf13e352a5c9e1c819195d0d4b4eb4892f8a94a613822d97ffee9_prof);

    }

    public function getTemplateName()
    {
        return "SacBundle:Sac:index.html.twig";
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
/*     {{ 'title'|transchoice(0,{}, 'messages') }}*/
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
