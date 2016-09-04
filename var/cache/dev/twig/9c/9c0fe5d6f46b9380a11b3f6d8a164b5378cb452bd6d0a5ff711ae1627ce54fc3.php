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
        $__internal_d3e24684630dc5561da6ff3fa5e6a9ed480be1fb75dfdba4e467407e4e15343b = $this->env->getExtension("native_profiler");
        $__internal_d3e24684630dc5561da6ff3fa5e6a9ed480be1fb75dfdba4e467407e4e15343b->enter($__internal_d3e24684630dc5561da6ff3fa5e6a9ed480be1fb75dfdba4e467407e4e15343b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SacBundle:sac:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3e24684630dc5561da6ff3fa5e6a9ed480be1fb75dfdba4e467407e4e15343b->leave($__internal_d3e24684630dc5561da6ff3fa5e6a9ed480be1fb75dfdba4e467407e4e15343b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1918d77efbeb88df3030d93921b8c7c2c70dbd1a97dda761c1e128cf1e3ebc16 = $this->env->getExtension("native_profiler");
        $__internal_1918d77efbeb88df3030d93921b8c7c2c70dbd1a97dda761c1e128cf1e3ebc16->enter($__internal_1918d77efbeb88df3030d93921b8c7c2c70dbd1a97dda761c1e128cf1e3ebc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("title", 0, array(), "messages"), "html", null, true);
        echo "
";
        
        $__internal_1918d77efbeb88df3030d93921b8c7c2c70dbd1a97dda761c1e128cf1e3ebc16->leave($__internal_1918d77efbeb88df3030d93921b8c7c2c70dbd1a97dda761c1e128cf1e3ebc16_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4d19b48b78261a3434aeb053545f639a9fb4a2b3d01b2a486edc3403b04e92f = $this->env->getExtension("native_profiler");
        $__internal_e4d19b48b78261a3434aeb053545f639a9fb4a2b3d01b2a486edc3403b04e92f->enter($__internal_e4d19b48b78261a3434aeb053545f639a9fb4a2b3d01b2a486edc3403b04e92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<br /><br />
    <div class=\"jumbotron\">
        <h1 class=\"text-center\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("title", 0, array(), "messages"), "html", null, true);
        echo "</h1>
        <p>
            <a class=\"btn btn-primary btn-lg btn-block\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("sac_new");
        echo "\" role=\"button\">
                ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("title.enviar.chamado", 0, array(), "messages"), "html", null, true);
        echo "
            </a>
        </p>
        <p>
            <a class=\"btn btn-default btn-lg btn-block\" href=\"#\" role=\"button\">
                ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("title.relatorio", 1, array(), "messages"), "html", null, true);
        echo "
            </a>
        </p>
    </div>
";
        
        $__internal_e4d19b48b78261a3434aeb053545f639a9fb4a2b3d01b2a486edc3403b04e92f->leave($__internal_e4d19b48b78261a3434aeb053545f639a9fb4a2b3d01b2a486edc3403b04e92f_prof);

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
        return array (  78 => 18,  70 => 13,  66 => 12,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/*         <h1 class="text-center">{{ 'title'|transchoice(0,{}, 'messages') }}</h1>*/
/*         <p>*/
/*             <a class="btn btn-primary btn-lg btn-block" href="{{ path('sac_new') }}" role="button">*/
/*                 {{ 'title.enviar.chamado'|transchoice(0,{}, 'messages') }}*/
/*             </a>*/
/*         </p>*/
/*         <p>*/
/*             <a class="btn btn-default btn-lg btn-block" href="#" role="button">*/
/*                 {{ 'title.relatorio'|transchoice(1,{}, 'messages') }}*/
/*             </a>*/
/*         </p>*/
/*     </div>*/
/* {% endblock %}*/
