<?php

/* SacBundle:sac:new.html.twig */
class __TwigTemplate_b9dab50d8580ede453358de1620a00c199acfa525eb71e78478712acd501fadc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SacBundle:sac:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e476b7a341b518748311149e89cc4d38327e7536e9a4584c7a27cf1a1c92666d = $this->env->getExtension("native_profiler");
        $__internal_e476b7a341b518748311149e89cc4d38327e7536e9a4584c7a27cf1a1c92666d->enter($__internal_e476b7a341b518748311149e89cc4d38327e7536e9a4584c7a27cf1a1c92666d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SacBundle:sac:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e476b7a341b518748311149e89cc4d38327e7536e9a4584c7a27cf1a1c92666d->leave($__internal_e476b7a341b518748311149e89cc4d38327e7536e9a4584c7a27cf1a1c92666d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e63ac1e522f73261c330ef2c7bf77c63ab62de3060eb7481c9cb91b2f7be466 = $this->env->getExtension("native_profiler");
        $__internal_5e63ac1e522f73261c330ef2c7bf77c63ab62de3060eb7481c9cb91b2f7be466->enter($__internal_5e63ac1e522f73261c330ef2c7bf77c63ab62de3060eb7481c9cb91b2f7be466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("title.seo", 0, array(), "messagesPaginaBundle"), "html", null, true);
        echo "
";
        
        $__internal_5e63ac1e522f73261c330ef2c7bf77c63ab62de3060eb7481c9cb91b2f7be466->leave($__internal_5e63ac1e522f73261c330ef2c7bf77c63ab62de3060eb7481c9cb91b2f7be466_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_adf080fd9afed1196fcd300b05bcf5a186077bae14fa2b7c9209b68be9115034 = $this->env->getExtension("native_profiler");
        $__internal_adf080fd9afed1196fcd300b05bcf5a186077bae14fa2b7c9209b68be9115034->enter($__internal_adf080fd9afed1196fcd300b05bcf5a186077bae14fa2b7c9209b68be9115034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<br /><br />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "

        <div class=\"form-inline\" ng-if=\"blocoNumPedido\">
            <div class=\"form-group\">
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pedido", array()), "numPedido", array()), 'row');
        echo "
            </div>
            <button type=\"button\" class=\"btn btn-primary\" ng-click=\"verificarNumeroPedido(numPedido)\">Verificar</button>
        </div>
        <div class=\"form-inline\" ng-if=\"blocoEmail\">
            <div class=\"form-group\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), "email", array()), 'row');
        echo "
            </div>
            <button type=\"button\" class=\"btn btn-primary\" ng-click=\"verificarClienteEmail(cliente)\">Verificar</button>
        </div>
        <div class=\"form-group\" ng-if=\"blocoNome\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), "nome", array()), 'row');
        echo "
        </div>
        <div ng-if=\"blocoChamado\">
            <div class=\"form-group\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'row');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacao", array()), 'row');
        echo "
            </div>
        </div>
        <div class=\"loader\" ng-show=\"loader\"></div>

        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("ng-disabled" => "chamado.\$invalid")));
        echo "

    ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_adf080fd9afed1196fcd300b05bcf5a186077bae14fa2b7c9209b68be9115034->leave($__internal_adf080fd9afed1196fcd300b05bcf5a186077bae14fa2b7c9209b68be9115034_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_339d72dd26c52be14b725724b45dfc2588ee205d3e6cb344c654801de36901e6 = $this->env->getExtension("native_profiler");
        $__internal_339d72dd26c52be14b725724b45dfc2588ee205d3e6cb344c654801de36901e6->enter($__internal_339d72dd26c52be14b725724b45dfc2588ee205d3e6cb344c654801de36901e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 42
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9261a84_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9261a84_0") : $this->env->getExtension('asset')->getAssetUrl("sac/js/script_configValue_1.js");
            // line 48
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "9261a84_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9261a84_1") : $this->env->getExtension('asset')->getAssetUrl("sac/js/script_part_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "9261a84_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9261a84_2") : $this->env->getExtension('asset')->getAssetUrl("sac/js/script_sacCtrl_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "9261a84"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9261a84") : $this->env->getExtension('asset')->getAssetUrl("sac/js/script.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_339d72dd26c52be14b725724b45dfc2588ee205d3e6cb344c654801de36901e6->leave($__internal_339d72dd26c52be14b725724b45dfc2588ee205d3e6cb344c654801de36901e6_prof);

    }

    public function getTemplateName()
    {
        return "SacBundle:sac:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 48,  131 => 42,  126 => 41,  120 => 40,  111 => 38,  106 => 36,  98 => 31,  92 => 28,  85 => 24,  77 => 19,  68 => 13,  61 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/*     {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}*/
/* */
/*         <div class="form-inline" ng-if="blocoNumPedido">*/
/*             <div class="form-group">*/
/*                 {{ form_row(form.pedido.numPedido) }}*/
/*             </div>*/
/*             <button type="button" class="btn btn-primary" ng-click="verificarNumeroPedido(numPedido)">Verificar</button>*/
/*         </div>*/
/*         <div class="form-inline" ng-if="blocoEmail">*/
/*             <div class="form-group">*/
/*                 {{ form_row(form.cliente.email) }}*/
/*             </div>*/
/*             <button type="button" class="btn btn-primary" ng-click="verificarClienteEmail(cliente)">Verificar</button>*/
/*         </div>*/
/*         <div class="form-group" ng-if="blocoNome">*/
/*             {{ form_row(form.cliente.nome) }}*/
/*         </div>*/
/*         <div ng-if="blocoChamado">*/
/*             <div class="form-group">*/
/*                 {{ form_row(form.titulo) }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 {{ form_row(form.observacao) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="loader" ng-show="loader"></div>*/
/* */
/*         {{ form_row(form.submit, {'attr': {'ng-disabled': 'chamado.$invalid'}}) }}*/
/* */
/*     {{form_end(form) }}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     {% javascripts*/
/*     '@SacBundle/Resources/public/js/angular/value/configValue.js'*/
/*     '@angular_http_post'*/
/*     '@SacBundle/Resources/public/js/angular/controller/sacCtrl.js'*/
/*     output='sac/js/script.js'*/
/*     %}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
/* */
