<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9142fa20c189a782f6828c27c336f6d8b07fe92d1cce55b8dbb2f692f1913292 extends Twig_Template
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
        $__internal_750bbc923844e0c01672760c0948ed7b5cc35c2a9c69bbd7cdea4652794560a6 = $this->env->getExtension("native_profiler");
        $__internal_750bbc923844e0c01672760c0948ed7b5cc35c2a9c69bbd7cdea4652794560a6->enter($__internal_750bbc923844e0c01672760c0948ed7b5cc35c2a9c69bbd7cdea4652794560a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_750bbc923844e0c01672760c0948ed7b5cc35c2a9c69bbd7cdea4652794560a6->leave($__internal_750bbc923844e0c01672760c0948ed7b5cc35c2a9c69bbd7cdea4652794560a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
