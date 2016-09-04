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
        $__internal_4726ef9ec03c070f0e5aa40ddc04e1e5b8fa220dae133189a13165b4f191f099 = $this->env->getExtension("native_profiler");
        $__internal_4726ef9ec03c070f0e5aa40ddc04e1e5b8fa220dae133189a13165b4f191f099->enter($__internal_4726ef9ec03c070f0e5aa40ddc04e1e5b8fa220dae133189a13165b4f191f099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SacBundle:sac:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4726ef9ec03c070f0e5aa40ddc04e1e5b8fa220dae133189a13165b4f191f099->leave($__internal_4726ef9ec03c070f0e5aa40ddc04e1e5b8fa220dae133189a13165b4f191f099_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_672a87e9f2965a680df2606b7bf9ed2365efa10ebac39a85bcd4fb3677dec4cc = $this->env->getExtension("native_profiler");
        $__internal_672a87e9f2965a680df2606b7bf9ed2365efa10ebac39a85bcd4fb3677dec4cc->enter($__internal_672a87e9f2965a680df2606b7bf9ed2365efa10ebac39a85bcd4fb3677dec4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("title", 0, array(), "messages"), "html", null, true);
        echo "
";
        
        $__internal_672a87e9f2965a680df2606b7bf9ed2365efa10ebac39a85bcd4fb3677dec4cc->leave($__internal_672a87e9f2965a680df2606b7bf9ed2365efa10ebac39a85bcd4fb3677dec4cc_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bb6cf9fbc2bdb28a02dc9274f4b548e0e6c9e4af39f312b4e4ba4235cf96e6a = $this->env->getExtension("native_profiler");
        $__internal_0bb6cf9fbc2bdb28a02dc9274f4b548e0e6c9e4af39f312b4e4ba4235cf96e6a->enter($__internal_0bb6cf9fbc2bdb28a02dc9274f4b548e0e6c9e4af39f312b4e4ba4235cf96e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div ng-if=\"blocoChamado\">
            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("ng-disabled" => "chamado.\$invalid")));
        echo "
        </div>
    ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_0bb6cf9fbc2bdb28a02dc9274f4b548e0e6c9e4af39f312b4e4ba4235cf96e6a->leave($__internal_0bb6cf9fbc2bdb28a02dc9274f4b548e0e6c9e4af39f312b4e4ba4235cf96e6a_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4e206b92c925652cc39ddaa76f83f9a9c7a1130f3c8c8fbcb5b41d4ade443fb = $this->env->getExtension("native_profiler");
        $__internal_e4e206b92c925652cc39ddaa76f83f9a9c7a1130f3c8c8fbcb5b41d4ade443fb->enter($__internal_e4e206b92c925652cc39ddaa76f83f9a9c7a1130f3c8c8fbcb5b41d4ade443fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 74
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9261a84_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9261a84_0") : $this->env->getExtension('asset')->getAssetUrl("sac/js/script_configValue_1.js");
            // line 80
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
        
        $__internal_e4e206b92c925652cc39ddaa76f83f9a9c7a1130f3c8c8fbcb5b41d4ade443fb->leave($__internal_e4e206b92c925652cc39ddaa76f83f9a9c7a1130f3c8c8fbcb5b41d4ade443fb_prof);

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
        return array (  191 => 80,  187 => 74,  182 => 73,  176 => 72,  167 => 70,  162 => 68,  153 => 62,  148 => 60,  141 => 56,  136 => 54,  128 => 49,  123 => 47,  112 => 39,  106 => 36,  100 => 33,  84 => 20,  78 => 17,  72 => 14,  66 => 11,  61 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/*         <div ng-if="blocoChamado">*/
/*             {{ form_row(form.submit, {'attr': {'ng-disabled': 'chamado.$invalid'}}) }}*/
/*         </div>*/
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
