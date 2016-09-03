<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_6843270960f41c866bb1a91406c8fdd812f84bdd409f882ecfcc1a062df5fb4f extends Twig_Template
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
        $__internal_79e3d9c1ae15aa70dd9c6aa856b0330f7cec9b1e75983651dc4d60e3d4d7e1aa = $this->env->getExtension("native_profiler");
        $__internal_79e3d9c1ae15aa70dd9c6aa856b0330f7cec9b1e75983651dc4d60e3d4d7e1aa->enter($__internal_79e3d9c1ae15aa70dd9c6aa856b0330f7cec9b1e75983651dc4d60e3d4d7e1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_79e3d9c1ae15aa70dd9c6aa856b0330f7cec9b1e75983651dc4d60e3d4d7e1aa->leave($__internal_79e3d9c1ae15aa70dd9c6aa856b0330f7cec9b1e75983651dc4d60e3d4d7e1aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
