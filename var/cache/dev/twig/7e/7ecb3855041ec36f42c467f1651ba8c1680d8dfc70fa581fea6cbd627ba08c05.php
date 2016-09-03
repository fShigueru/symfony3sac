<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3a0d9e2b9264234358f5aff2e78d3a8217972cc50042858ceed91d7648283a4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1d060f18c180590178bf9405bbe72799f656e6a86ee79a7350b449ec12c2ef00 = $this->env->getExtension("native_profiler");
        $__internal_1d060f18c180590178bf9405bbe72799f656e6a86ee79a7350b449ec12c2ef00->enter($__internal_1d060f18c180590178bf9405bbe72799f656e6a86ee79a7350b449ec12c2ef00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d060f18c180590178bf9405bbe72799f656e6a86ee79a7350b449ec12c2ef00->leave($__internal_1d060f18c180590178bf9405bbe72799f656e6a86ee79a7350b449ec12c2ef00_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7e4154b41b0e16e91d6e09c6a3f0430ff20ae3ddb5a659f37f5e17214311311 = $this->env->getExtension("native_profiler");
        $__internal_d7e4154b41b0e16e91d6e09c6a3f0430ff20ae3ddb5a659f37f5e17214311311->enter($__internal_d7e4154b41b0e16e91d6e09c6a3f0430ff20ae3ddb5a659f37f5e17214311311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d7e4154b41b0e16e91d6e09c6a3f0430ff20ae3ddb5a659f37f5e17214311311->leave($__internal_d7e4154b41b0e16e91d6e09c6a3f0430ff20ae3ddb5a659f37f5e17214311311_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc815606d65c9ef3e1f69c5d9eda185ae0d1d8040ce90be161443ab2bf671a85 = $this->env->getExtension("native_profiler");
        $__internal_cc815606d65c9ef3e1f69c5d9eda185ae0d1d8040ce90be161443ab2bf671a85->enter($__internal_cc815606d65c9ef3e1f69c5d9eda185ae0d1d8040ce90be161443ab2bf671a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_cc815606d65c9ef3e1f69c5d9eda185ae0d1d8040ce90be161443ab2bf671a85->leave($__internal_cc815606d65c9ef3e1f69c5d9eda185ae0d1d8040ce90be161443ab2bf671a85_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef50b0435844d9e078fe391ee0ed589ba748536e455847f1ed4923e65db29086 = $this->env->getExtension("native_profiler");
        $__internal_ef50b0435844d9e078fe391ee0ed589ba748536e455847f1ed4923e65db29086->enter($__internal_ef50b0435844d9e078fe391ee0ed589ba748536e455847f1ed4923e65db29086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ef50b0435844d9e078fe391ee0ed589ba748536e455847f1ed4923e65db29086->leave($__internal_ef50b0435844d9e078fe391ee0ed589ba748536e455847f1ed4923e65db29086_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
