<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c610f491ba6ad63984d4930ef86dc97e1760eef926acbdba61c823e9c73a07b1 extends Twig_Template
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
        $__internal_32c09f23d56e0f4ad0c5c0bfc6731d90c0e92ad77cf751664a4d689d554a6988 = $this->env->getExtension("native_profiler");
        $__internal_32c09f23d56e0f4ad0c5c0bfc6731d90c0e92ad77cf751664a4d689d554a6988->enter($__internal_32c09f23d56e0f4ad0c5c0bfc6731d90c0e92ad77cf751664a4d689d554a6988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_32c09f23d56e0f4ad0c5c0bfc6731d90c0e92ad77cf751664a4d689d554a6988->leave($__internal_32c09f23d56e0f4ad0c5c0bfc6731d90c0e92ad77cf751664a4d689d554a6988_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
