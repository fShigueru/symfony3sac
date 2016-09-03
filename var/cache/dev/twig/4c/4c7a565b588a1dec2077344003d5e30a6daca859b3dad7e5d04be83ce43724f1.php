<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_58f007c81596e27c76c9cbdd45d0c98ccd7a8c8f0f103d4fc35a4dcad2f81823 extends Twig_Template
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
        $__internal_97a91fbed9431f81cb294bcbb9892640db25b638f3e6d64edde3e675b5bbfc88 = $this->env->getExtension("native_profiler");
        $__internal_97a91fbed9431f81cb294bcbb9892640db25b638f3e6d64edde3e675b5bbfc88->enter($__internal_97a91fbed9431f81cb294bcbb9892640db25b638f3e6d64edde3e675b5bbfc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_97a91fbed9431f81cb294bcbb9892640db25b638f3e6d64edde3e675b5bbfc88->leave($__internal_97a91fbed9431f81cb294bcbb9892640db25b638f3e6d64edde3e675b5bbfc88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
