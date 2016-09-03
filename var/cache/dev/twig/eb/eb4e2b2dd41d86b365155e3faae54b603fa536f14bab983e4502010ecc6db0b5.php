<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4d940f7db2d622cd789f8c41b9a36336eeced80fabf52fc4249e057fc1087ced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_6755444d599bbde07faf768b70cee22ac8abf3934af296c6e146c15cc700d4c8 = $this->env->getExtension("native_profiler");
        $__internal_6755444d599bbde07faf768b70cee22ac8abf3934af296c6e146c15cc700d4c8->enter($__internal_6755444d599bbde07faf768b70cee22ac8abf3934af296c6e146c15cc700d4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6755444d599bbde07faf768b70cee22ac8abf3934af296c6e146c15cc700d4c8->leave($__internal_6755444d599bbde07faf768b70cee22ac8abf3934af296c6e146c15cc700d4c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c8a8161f2e0162b317767922f3a6831d527918c9d443fa1a149ce044482cbd49 = $this->env->getExtension("native_profiler");
        $__internal_c8a8161f2e0162b317767922f3a6831d527918c9d443fa1a149ce044482cbd49->enter($__internal_c8a8161f2e0162b317767922f3a6831d527918c9d443fa1a149ce044482cbd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c8a8161f2e0162b317767922f3a6831d527918c9d443fa1a149ce044482cbd49->leave($__internal_c8a8161f2e0162b317767922f3a6831d527918c9d443fa1a149ce044482cbd49_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fbb0adb8f52d4f608e8fb1ccd60b31ba11f334915e5bfff99df5c80dd31b38be = $this->env->getExtension("native_profiler");
        $__internal_fbb0adb8f52d4f608e8fb1ccd60b31ba11f334915e5bfff99df5c80dd31b38be->enter($__internal_fbb0adb8f52d4f608e8fb1ccd60b31ba11f334915e5bfff99df5c80dd31b38be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fbb0adb8f52d4f608e8fb1ccd60b31ba11f334915e5bfff99df5c80dd31b38be->leave($__internal_fbb0adb8f52d4f608e8fb1ccd60b31ba11f334915e5bfff99df5c80dd31b38be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebd284045e89b62fe4ee99c515e58ef537e91f90b1ff77ce49ac6428909434a2 = $this->env->getExtension("native_profiler");
        $__internal_ebd284045e89b62fe4ee99c515e58ef537e91f90b1ff77ce49ac6428909434a2->enter($__internal_ebd284045e89b62fe4ee99c515e58ef537e91f90b1ff77ce49ac6428909434a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ebd284045e89b62fe4ee99c515e58ef537e91f90b1ff77ce49ac6428909434a2->leave($__internal_ebd284045e89b62fe4ee99c515e58ef537e91f90b1ff77ce49ac6428909434a2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
