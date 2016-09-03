<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6814a4121558c7994458a0668de80fbebe691efaef69981fe2b93248dfad61d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51a2f3ed22430187e0e3503e3220c6f55cefdf65ea30a856ad2bff9f076d914e = $this->env->getExtension("native_profiler");
        $__internal_51a2f3ed22430187e0e3503e3220c6f55cefdf65ea30a856ad2bff9f076d914e->enter($__internal_51a2f3ed22430187e0e3503e3220c6f55cefdf65ea30a856ad2bff9f076d914e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_51a2f3ed22430187e0e3503e3220c6f55cefdf65ea30a856ad2bff9f076d914e->leave($__internal_51a2f3ed22430187e0e3503e3220c6f55cefdf65ea30a856ad2bff9f076d914e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
