<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e7b296fe704f85804ecee6dd893ada499e78ab73433e8dc8ea671155482c2be3 extends Twig_Template
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
        $__internal_8fcf653f9da53ed1ca59401cf9613c9499bfa9bce170bf45457777cef22d92e0 = $this->env->getExtension("native_profiler");
        $__internal_8fcf653f9da53ed1ca59401cf9613c9499bfa9bce170bf45457777cef22d92e0->enter($__internal_8fcf653f9da53ed1ca59401cf9613c9499bfa9bce170bf45457777cef22d92e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8fcf653f9da53ed1ca59401cf9613c9499bfa9bce170bf45457777cef22d92e0->leave($__internal_8fcf653f9da53ed1ca59401cf9613c9499bfa9bce170bf45457777cef22d92e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
