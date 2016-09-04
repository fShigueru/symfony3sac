<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2faa069cf9966d1e064257765414beabb0db0053910921fb929ed754e8661de4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_e91cb88316cb1bac2c6b659bc20f024f68f649e6682f1857f9ac0d709cf327b6 = $this->env->getExtension("native_profiler");
        $__internal_e91cb88316cb1bac2c6b659bc20f024f68f649e6682f1857f9ac0d709cf327b6->enter($__internal_e91cb88316cb1bac2c6b659bc20f024f68f649e6682f1857f9ac0d709cf327b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e91cb88316cb1bac2c6b659bc20f024f68f649e6682f1857f9ac0d709cf327b6->leave($__internal_e91cb88316cb1bac2c6b659bc20f024f68f649e6682f1857f9ac0d709cf327b6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f2745433e3525201d005f1d09570d61237a0ce054d1dcb0de01413482ac7444 = $this->env->getExtension("native_profiler");
        $__internal_1f2745433e3525201d005f1d09570d61237a0ce054d1dcb0de01413482ac7444->enter($__internal_1f2745433e3525201d005f1d09570d61237a0ce054d1dcb0de01413482ac7444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1f2745433e3525201d005f1d09570d61237a0ce054d1dcb0de01413482ac7444->leave($__internal_1f2745433e3525201d005f1d09570d61237a0ce054d1dcb0de01413482ac7444_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0a7077a56367e6f160a339adf19b52a49b27c229dd5d8a756d218559b5b5ea9 = $this->env->getExtension("native_profiler");
        $__internal_a0a7077a56367e6f160a339adf19b52a49b27c229dd5d8a756d218559b5b5ea9->enter($__internal_a0a7077a56367e6f160a339adf19b52a49b27c229dd5d8a756d218559b5b5ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a0a7077a56367e6f160a339adf19b52a49b27c229dd5d8a756d218559b5b5ea9->leave($__internal_a0a7077a56367e6f160a339adf19b52a49b27c229dd5d8a756d218559b5b5ea9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c2ecd54763bd3587096a6e29a707e3d937152c78a044283301dc249d523d24e = $this->env->getExtension("native_profiler");
        $__internal_4c2ecd54763bd3587096a6e29a707e3d937152c78a044283301dc249d523d24e->enter($__internal_4c2ecd54763bd3587096a6e29a707e3d937152c78a044283301dc249d523d24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4c2ecd54763bd3587096a6e29a707e3d937152c78a044283301dc249d523d24e->leave($__internal_4c2ecd54763bd3587096a6e29a707e3d937152c78a044283301dc249d523d24e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
