<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_fb9b4584fd92109a56d1665b6e8ae4218321e1d6109b00f765e97cd4da67eac3 extends Twig_Template
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
        $__internal_643ee45caef208c33e11232da12ed886ad03cea24be5a1dce2b0c0b9a67a8a25 = $this->env->getExtension("native_profiler");
        $__internal_643ee45caef208c33e11232da12ed886ad03cea24be5a1dce2b0c0b9a67a8a25->enter($__internal_643ee45caef208c33e11232da12ed886ad03cea24be5a1dce2b0c0b9a67a8a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_643ee45caef208c33e11232da12ed886ad03cea24be5a1dce2b0c0b9a67a8a25->leave($__internal_643ee45caef208c33e11232da12ed886ad03cea24be5a1dce2b0c0b9a67a8a25_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
