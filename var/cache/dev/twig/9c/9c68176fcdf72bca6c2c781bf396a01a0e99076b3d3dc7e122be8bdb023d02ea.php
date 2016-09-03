<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_aa0a3a504db0187655ca16e738bb0843d539d073353ea6aed669a926f00adb9d extends Twig_Template
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
        $__internal_0e9549e44c7cae2ea9d5b643361fc91f1420fb46fc877a12c0e2ad5479c21966 = $this->env->getExtension("native_profiler");
        $__internal_0e9549e44c7cae2ea9d5b643361fc91f1420fb46fc877a12c0e2ad5479c21966->enter($__internal_0e9549e44c7cae2ea9d5b643361fc91f1420fb46fc877a12c0e2ad5479c21966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0e9549e44c7cae2ea9d5b643361fc91f1420fb46fc877a12c0e2ad5479c21966->leave($__internal_0e9549e44c7cae2ea9d5b643361fc91f1420fb46fc877a12c0e2ad5479c21966_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
