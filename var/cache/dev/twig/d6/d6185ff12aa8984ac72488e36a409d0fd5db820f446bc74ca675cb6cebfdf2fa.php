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
        $__internal_67bf9b2e5836b56b2d842dccc26fd808e40a9a168adc456e9047710d06469772 = $this->env->getExtension("native_profiler");
        $__internal_67bf9b2e5836b56b2d842dccc26fd808e40a9a168adc456e9047710d06469772->enter($__internal_67bf9b2e5836b56b2d842dccc26fd808e40a9a168adc456e9047710d06469772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        ";
        // line 24
        echo twig_include($this->env, $context, "@Sac/elements/menu.html.twig");
        echo "
        <br clear=\"all\" />
        <br clear=\"all\" />
        <div class=\"container\" ng-controller=\"SacCtrl\">
            ";
        // line 28
        echo twig_include($this->env, $context, "@Sac/elements/alertas/error.html.twig");
        echo "
            ";
        // line 29
        echo twig_include($this->env, $context, "@Sac/elements/alertas/sucesso.html.twig");
        echo "
            ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "        </div>
        ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    ";
        // line 46
        echo "    </body>
</html>
";
        
        $__internal_67bf9b2e5836b56b2d842dccc26fd808e40a9a168adc456e9047710d06469772->leave($__internal_67bf9b2e5836b56b2d842dccc26fd808e40a9a168adc456e9047710d06469772_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f989baa9fc5ddcc0262324c76048a174b07aaa45b05fb448b3b6a673d9787c50 = $this->env->getExtension("native_profiler");
        $__internal_f989baa9fc5ddcc0262324c76048a174b07aaa45b05fb448b3b6a673d9787c50->enter($__internal_f989baa9fc5ddcc0262324c76048a174b07aaa45b05fb448b3b6a673d9787c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sac";
        
        $__internal_f989baa9fc5ddcc0262324c76048a174b07aaa45b05fb448b3b6a673d9787c50->leave($__internal_f989baa9fc5ddcc0262324c76048a174b07aaa45b05fb448b3b6a673d9787c50_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c090edef8b8909bc8a6bfda7e2e515654d94f3e38c9c42d33c961fe812b4a1b7 = $this->env->getExtension("native_profiler");
        $__internal_c090edef8b8909bc8a6bfda7e2e515654d94f3e38c9c42d33c961fe812b4a1b7->enter($__internal_c090edef8b8909bc8a6bfda7e2e515654d94f3e38c9c42d33c961fe812b4a1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c090edef8b8909bc8a6bfda7e2e515654d94f3e38c9c42d33c961fe812b4a1b7->leave($__internal_c090edef8b8909bc8a6bfda7e2e515654d94f3e38c9c42d33c961fe812b4a1b7_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_801c0b60b61a0f2193743e7f0054726e70a1ef7ebc9581dcabc366b18d4f10a9 = $this->env->getExtension("native_profiler");
        $__internal_801c0b60b61a0f2193743e7f0054726e70a1ef7ebc9581dcabc366b18d4f10a9->enter($__internal_801c0b60b61a0f2193743e7f0054726e70a1ef7ebc9581dcabc366b18d4f10a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_801c0b60b61a0f2193743e7f0054726e70a1ef7ebc9581dcabc366b18d4f10a9->leave($__internal_801c0b60b61a0f2193743e7f0054726e70a1ef7ebc9581dcabc366b18d4f10a9_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09f36931fb899ed66da0f10ebe864aa533b104a435be8a8f1d240898bd80be1e = $this->env->getExtension("native_profiler");
        $__internal_09f36931fb899ed66da0f10ebe864aa533b104a435be8a8f1d240898bd80be1e->enter($__internal_09f36931fb899ed66da0f10ebe864aa533b104a435be8a8f1d240898bd80be1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "91cadeb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_91cadeb_0") : $this->env->getExtension('asset')->getAssetUrl("sac/js/main_part_1.js");
            // line 41
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
        // line 43
        echo "        ";
        
        $__internal_09f36931fb899ed66da0f10ebe864aa533b104a435be8a8f1d240898bd80be1e->leave($__internal_09f36931fb899ed66da0f10ebe864aa533b104a435be8a8f1d240898bd80be1e_prof);

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
        return array (  169 => 43,  137 => 41,  132 => 33,  126 => 32,  115 => 30,  108 => 20,  102 => 18,  98 => 9,  92 => 8,  80 => 7,  71 => 46,  69 => 44,  67 => 32,  64 => 31,  62 => 30,  58 => 29,  54 => 28,  47 => 24,  40 => 21,  38 => 8,  34 => 7,  26 => 1,);
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
/*         {{ include('@Sac/elements/menu.html.twig') }}*/
/*         <br clear="all" />*/
/*         <br clear="all" />*/
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
