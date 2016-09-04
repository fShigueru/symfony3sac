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
        $__internal_c1dd45e23b37aaca090714e0ee5f8de3a15c49bcc5a7a63b6f7ad73db0936716 = $this->env->getExtension("native_profiler");
        $__internal_c1dd45e23b37aaca090714e0ee5f8de3a15c49bcc5a7a63b6f7ad73db0936716->enter($__internal_c1dd45e23b37aaca090714e0ee5f8de3a15c49bcc5a7a63b6f7ad73db0936716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_c1dd45e23b37aaca090714e0ee5f8de3a15c49bcc5a7a63b6f7ad73db0936716->leave($__internal_c1dd45e23b37aaca090714e0ee5f8de3a15c49bcc5a7a63b6f7ad73db0936716_prof);

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
