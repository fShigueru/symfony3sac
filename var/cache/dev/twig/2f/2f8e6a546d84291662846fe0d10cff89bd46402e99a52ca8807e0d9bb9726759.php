<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4fb10fa7b3e17c823b4a8efc8af99a88abc4e9318a252077fd2781d29d62533a extends Twig_Template
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
        $__internal_9871eb33e9ee2c1e59984b0c4c300994cbea0a634af2aebc057a68248dba91e7 = $this->env->getExtension("native_profiler");
        $__internal_9871eb33e9ee2c1e59984b0c4c300994cbea0a634af2aebc057a68248dba91e7->enter($__internal_9871eb33e9ee2c1e59984b0c4c300994cbea0a634af2aebc057a68248dba91e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9871eb33e9ee2c1e59984b0c4c300994cbea0a634af2aebc057a68248dba91e7->leave($__internal_9871eb33e9ee2c1e59984b0c4c300994cbea0a634af2aebc057a68248dba91e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
