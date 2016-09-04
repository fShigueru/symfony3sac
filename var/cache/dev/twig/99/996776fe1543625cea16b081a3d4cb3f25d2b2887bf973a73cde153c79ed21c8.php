<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7b1e105433cb070f9a9b4929996c1054e559dd6139ada40c9c071ea1bb620057 extends Twig_Template
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
        $__internal_9967eb23360d9b1ada8629ea5f2adb2c6a32fc283b3a84d3f81d82a0e42cfb43 = $this->env->getExtension("native_profiler");
        $__internal_9967eb23360d9b1ada8629ea5f2adb2c6a32fc283b3a84d3f81d82a0e42cfb43->enter($__internal_9967eb23360d9b1ada8629ea5f2adb2c6a32fc283b3a84d3f81d82a0e42cfb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9967eb23360d9b1ada8629ea5f2adb2c6a32fc283b3a84d3f81d82a0e42cfb43->leave($__internal_9967eb23360d9b1ada8629ea5f2adb2c6a32fc283b3a84d3f81d82a0e42cfb43_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
