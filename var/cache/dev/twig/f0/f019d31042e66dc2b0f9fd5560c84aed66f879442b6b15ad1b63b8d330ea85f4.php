<?php

/* SacBundle:Sac:new.html.twig */
class __TwigTemplate_911fb224cc34d0ec0bb9cd5fcae60f6b0817b2b3f8e5cabdb95753423c40f6ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SacBundle:Sac:new.html.twig", 1);
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
        $__internal_7e052671b412a9ac5bb2e065ee9387f31880598ec8785aea853d21824dac0e1c = $this->env->getExtension("native_profiler");
        $__internal_7e052671b412a9ac5bb2e065ee9387f31880598ec8785aea853d21824dac0e1c->enter($__internal_7e052671b412a9ac5bb2e065ee9387f31880598ec8785aea853d21824dac0e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SacBundle:Sac:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e052671b412a9ac5bb2e065ee9387f31880598ec8785aea853d21824dac0e1c->leave($__internal_7e052671b412a9ac5bb2e065ee9387f31880598ec8785aea853d21824dac0e1c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_79091ef001b3c3a7a4d21b3d9f34dad437d9a563d5fd1f5baf4072ec54bb7902 = $this->env->getExtension("native_profiler");
        $__internal_79091ef001b3c3a7a4d21b3d9f34dad437d9a563d5fd1f5baf4072ec54bb7902->enter($__internal_79091ef001b3c3a7a4d21b3d9f34dad437d9a563d5fd1f5baf4072ec54bb7902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("title", 0, array(), "messages"), "html", null, true);
        echo "
";
        
        $__internal_79091ef001b3c3a7a4d21b3d9f34dad437d9a563d5fd1f5baf4072ec54bb7902->leave($__internal_79091ef001b3c3a7a4d21b3d9f34dad437d9a563d5fd1f5baf4072ec54bb7902_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4ea3cefe184a86166e1cbadbdc87c6f6ee89d9ea64248b220994a68ea589088 = $this->env->getExtension("native_profiler");
        $__internal_e4ea3cefe184a86166e1cbadbdc87c6f6ee89d9ea64248b220994a68ea589088->enter($__internal_e4ea3cefe184a86166e1cbadbdc87c6f6ee89d9ea64248b220994a68ea589088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"page-header\">
        <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("title.chamado.novo", 0, array(), "messages"), "html", null, true);
        echo "</h2>
    </div>
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        <div ng-if=\"blocoNumPedido\">
            <label class=\"control-label\">
                ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pedido", array()), "numPedido", array()), "vars", array()), "label", array()), 0, array(), "messages"), "html", null, true);
        echo "
            </label>
            <div class=\"input-group\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pedido", array()), "numPedido", array()), 'row', array("label" => false));
        echo "
                <div class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-primary\" ng-click=\"verificarNumeroPedido(numPedido)\">
                        ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("btn.verificar", 0, array(), "messages"), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
            <div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\" ng-if=\"blocoNumError\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                </button>
                <strong ng-bind=\"msgNumError\"></strong>
            </div>
        </div>
        <div ng-if=\"blocoEmail\">
            <br />
            <label class=\"control-label\">
                ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), "email", array()), "vars", array()), "label", array()), 0, array(), "messages"), "html", null, true);
        echo "
            </label>
            <div class=\"input-group\">
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), "email", array()), 'row', array("label" => false));
        echo "
                <div class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-primary\" ng-click=\"verificarClienteEmail(cliente)\">
                        ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("btn.verificar", 0, array(), "messages"), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
            <br />
        </div>
        <div class=\"form-group\" ng-if=\"blocoNome\">
            <label class=\"control-label\">
                ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), "nome", array()), "vars", array()), "label", array()), 0, array(), "messages"), "html", null, true);
        echo "
            </label>
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), "nome", array()), 'row', array("label" => false));
        echo "
        </div>
        <div ng-if=\"blocoChamado\">
            <div class=\"form-group\">
                <label class=\"control-label\">
                    ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), "vars", array()), "label", array()), 0, array(), "messages"), "html", null, true);
        echo "
                </label>
                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'row', array("label" => false));
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"control-label\">
                    ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacao", array()), "vars", array()), "label", array()), 0, array(), "messages"), "html", null, true);
        echo "
                </label>
                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacao", array()), 'row', array("label" => false));
        echo "
            </div>
        </div>
        <div class=\"loader\" ng-show=\"loader\"></div>
        <hr />
        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("ng-disabled" => "chamado.\$invalid")));
        echo "

    ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_e4ea3cefe184a86166e1cbadbdc87c6f6ee89d9ea64248b220994a68ea589088->leave($__internal_e4ea3cefe184a86166e1cbadbdc87c6f6ee89d9ea64248b220994a68ea589088_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a7e843fb7f5b2d8ca4ae65014c0b8a050ec47d5b89cee10cddf8ab54644f6c2 = $this->env->getExtension("native_profiler");
        $__internal_7a7e843fb7f5b2d8ca4ae65014c0b8a050ec47d5b89cee10cddf8ab54644f6c2->enter($__internal_7a7e843fb7f5b2d8ca4ae65014c0b8a050ec47d5b89cee10cddf8ab54644f6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 73
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9261a84_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9261a84_0") : $this->env->getExtension('asset')->getAssetUrl("sac/js/script_configValue_1.js");
            // line 79
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
        
        $__internal_7a7e843fb7f5b2d8ca4ae65014c0b8a050ec47d5b89cee10cddf8ab54644f6c2->leave($__internal_7a7e843fb7f5b2d8ca4ae65014c0b8a050ec47d5b89cee10cddf8ab54644f6c2_prof);

    }

    public function getTemplateName()
    {
        return "SacBundle:Sac:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 79,  186 => 73,  181 => 72,  175 => 71,  166 => 69,  161 => 67,  153 => 62,  148 => 60,  141 => 56,  136 => 54,  128 => 49,  123 => 47,  112 => 39,  106 => 36,  100 => 33,  84 => 20,  78 => 17,  72 => 14,  66 => 11,  61 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ 'title'|transchoice(0,{}, 'messages') }}*/
/* {% endblock %}*/
/* */
/* {% block body -%}*/
/*     <div class="page-header">*/
/*         <h2>{{ 'title.chamado.novo'|transchoice(0,{}, 'messages') }}</h2>*/
/*     </div>*/
/*     {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}*/
/*         <div ng-if="blocoNumPedido">*/
/*             <label class="control-label">*/
/*                 {{ form.pedido.numPedido.vars.label|transchoice(0,{}, 'messages') }}*/
/*             </label>*/
/*             <div class="input-group">*/
/*                 {{ form_row(form.pedido.numPedido, { 'label': false }) }}*/
/*                 <div class="input-group-btn">*/
/*                     <button type="button" class="btn btn-primary" ng-click="verificarNumeroPedido(numPedido)">*/
/*                         {{ 'btn.verificar'|transchoice(0,{}, 'messages') }}*/
/*                     </button>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="alert alert-danger alert-dismissible fade in" role="alert" ng-if="blocoNumError">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>*/
/*                 </button>*/
/*                 <strong ng-bind="msgNumError"></strong>*/
/*             </div>*/
/*         </div>*/
/*         <div ng-if="blocoEmail">*/
/*             <br />*/
/*             <label class="control-label">*/
/*                 {{ form.cliente.email.vars.label|transchoice(0,{}, 'messages') }}*/
/*             </label>*/
/*             <div class="input-group">*/
/*                 {{ form_row(form.cliente.email, { 'label': false }) }}*/
/*                 <div class="input-group-btn">*/
/*                     <button type="button" class="btn btn-primary" ng-click="verificarClienteEmail(cliente)">*/
/*                         {{ 'btn.verificar'|transchoice(0,{}, 'messages') }}*/
/*                     </button>*/
/*                 </div>*/
/*             </div>*/
/*             <br />*/
/*         </div>*/
/*         <div class="form-group" ng-if="blocoNome">*/
/*             <label class="control-label">*/
/*                 {{ form.cliente.nome.vars.label|transchoice(0,{}, 'messages') }}*/
/*             </label>*/
/*             {{ form_row(form.cliente.nome, { 'label': false }) }}*/
/*         </div>*/
/*         <div ng-if="blocoChamado">*/
/*             <div class="form-group">*/
/*                 <label class="control-label">*/
/*                     {{ form.titulo.vars.label|transchoice(0,{}, 'messages') }}*/
/*                 </label>*/
/*                 {{ form_row(form.titulo, { 'label': false }) }}*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class="control-label">*/
/*                     {{ form.observacao.vars.label|transchoice(0,{}, 'messages') }}*/
/*                 </label>*/
/*                 {{ form_row(form.observacao, { 'label': false }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="loader" ng-show="loader"></div>*/
/*         <hr />*/
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
