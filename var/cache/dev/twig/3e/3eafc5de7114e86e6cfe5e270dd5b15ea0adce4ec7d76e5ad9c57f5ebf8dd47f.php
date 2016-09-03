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
        $__internal_ae81323ddf052d4f02cdec6c6ab4fd762caa856a84ed66ea71122d0583d41cce = $this->env->getExtension("native_profiler");
        $__internal_ae81323ddf052d4f02cdec6c6ab4fd762caa856a84ed66ea71122d0583d41cce->enter($__internal_ae81323ddf052d4f02cdec6c6ab4fd762caa856a84ed66ea71122d0583d41cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ae81323ddf052d4f02cdec6c6ab4fd762caa856a84ed66ea71122d0583d41cce->leave($__internal_ae81323ddf052d4f02cdec6c6ab4fd762caa856a84ed66ea71122d0583d41cce_prof);

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
