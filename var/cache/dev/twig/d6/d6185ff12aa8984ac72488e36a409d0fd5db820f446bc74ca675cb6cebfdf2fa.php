<?php

/* base.html.twig */
class __TwigTemplate_58b5ffb7a246e011c290047b5f177bb5a1dab4af7838f622438d06ace6e935f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31e4bba14c64d3dc067463737070edf5023856fa9801a198762673f95e71619f = $this->env->getExtension("native_profiler");
        $__internal_31e4bba14c64d3dc067463737070edf5023856fa9801a198762673f95e71619f->enter($__internal_31e4bba14c64d3dc067463737070edf5023856fa9801a198762673f95e71619f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"app\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\" ng-controller=\"SacCtrl\">
            ";
        // line 25
        echo twig_include($this->env, $context, "@Sac/elements/alertas/error.html.twig");
        echo "
            ";
        // line 26
        echo twig_include($this->env, $context, "@Sac/elements/alertas/sucesso.html.twig");
        echo "
            ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "        </div>
        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    ";
        // line 43
        echo "    </body>
</html>
";
        
        $__internal_31e4bba14c64d3dc067463737070edf5023856fa9801a198762673f95e71619f->leave($__internal_31e4bba14c64d3dc067463737070edf5023856fa9801a198762673f95e71619f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_30231e289fcd9920a6136c716f8d37f050c2a92f28d50529ff3003b7ba2b5bb8 = $this->env->getExtension("native_profiler");
        $__internal_30231e289fcd9920a6136c716f8d37f050c2a92f28d50529ff3003b7ba2b5bb8->enter($__internal_30231e289fcd9920a6136c716f8d37f050c2a92f28d50529ff3003b7ba2b5bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sac";
        
        $__internal_30231e289fcd9920a6136c716f8d37f050c2a92f28d50529ff3003b7ba2b5bb8->leave($__internal_30231e289fcd9920a6136c716f8d37f050c2a92f28d50529ff3003b7ba2b5bb8_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_132ed87c7ac772c6533cca9d227330cd762c92c16a27f45e268685d046056da2 = $this->env->getExtension("native_profiler");
        $__internal_132ed87c7ac772c6533cca9d227330cd762c92c16a27f45e268685d046056da2->enter($__internal_132ed87c7ac772c6533cca9d227330cd762c92c16a27f45e268685d046056da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        // asset "00ace79"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_00ace79") : $this->env->getExtension('asset')->getAssetUrl("sac/css/main.css");
        // line 18
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\" />
            ";
        unset($context["asset_url"]);
        // line 20
        echo "        ";
        
        $__internal_132ed87c7ac772c6533cca9d227330cd762c92c16a27f45e268685d046056da2->leave($__internal_132ed87c7ac772c6533cca9d227330cd762c92c16a27f45e268685d046056da2_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_773ef332147f37b57e80810be005c7b37547d958b76d26b9c10ad83c2fe0eb00 = $this->env->getExtension("native_profiler");
        $__internal_773ef332147f37b57e80810be005c7b37547d958b76d26b9c10ad83c2fe0eb00->enter($__internal_773ef332147f37b57e80810be005c7b37547d958b76d26b9c10ad83c2fe0eb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_773ef332147f37b57e80810be005c7b37547d958b76d26b9c10ad83c2fe0eb00->leave($__internal_773ef332147f37b57e80810be005c7b37547d958b76d26b9c10ad83c2fe0eb00_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1520dd960e9d5bfe4e022637b93a11863e3859f2dd4d5661a8bb9ff53732cf0 = $this->env->getExtension("native_profiler");
        $__internal_e1520dd960e9d5bfe4e022637b93a11863e3859f2dd4d5661a8bb9ff53732cf0->enter($__internal_e1520dd960e9d5bfe4e022637b93a11863e3859f2dd4d5661a8bb9ff53732cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "91cadeb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_91cadeb_0") : $this->env->getExtension('asset')->getAssetUrl("sac/js/main_part_1.js");
            // line 38
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "91cadeb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_91cadeb_1") : $this->env->getExtension('asset')->getAssetUrl("sac/js/main_part_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "91cadeb_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_91cadeb_2") : $this->env->getExtension('asset')->getAssetUrl("sac/js/main_part_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "91cadeb_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_91cadeb_3") : $this->env->getExtension('asset')->getAssetUrl("sac/js/main_part_4.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "91cadeb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_91cadeb") : $this->env->getExtension('asset')->getAssetUrl("sac/js/main.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 40
        echo "        ";
        
        $__internal_e1520dd960e9d5bfe4e022637b93a11863e3859f2dd4d5661a8bb9ff53732cf0->leave($__internal_e1520dd960e9d5bfe4e022637b93a11863e3859f2dd4d5661a8bb9ff53732cf0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 40,  131 => 38,  126 => 30,  120 => 29,  109 => 27,  102 => 20,  96 => 18,  92 => 9,  86 => 8,  74 => 7,  65 => 43,  63 => 41,  61 => 29,  58 => 28,  56 => 27,  52 => 26,  48 => 25,  40 => 21,  38 => 8,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html ng-app="app">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <title>{% block title %}Sac{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             {% stylesheets*/
/*             '@bootstrap_css'*/
/*             '@SacBundle/Resources/public/scss/style.scss'*/
/*             combine=true*/
/*             filter='uglifycss'*/
/*             filter='scssphp'*/
/*             filter='cssrewrite'*/
/*             output='sac/css/main.css'*/
/*             %}*/
/*             <link rel="stylesheet" href="{{ asset_url }}" />*/
/*             {% endstylesheets %}*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="container" ng-controller="SacCtrl">*/
/*             {{ include('@Sac/elements/alertas/error.html.twig') }}*/
/*             {{ include('@Sac/elements/alertas/sucesso.html.twig') }}*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*         {% block javascripts %}*/
/*             {% javascripts*/
/*             '@jquery'*/
/*             '@bootstrap'*/
/*             '@angular'*/
/*             '@angular_init'*/
/*             filter='uglifyjs2'*/
/*             output='sac/js/main.js'*/
/*             %}*/
/*             <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         {% endblock %}*/
/*     {#combine=true*/
/*             filter='uglifyjs2'#}*/
/*     </body>*/
/* </html>*/
/* */
