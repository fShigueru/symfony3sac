<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_426ed7c82719865936de84cdf1b5574b4ddfdd2cd5ff29bb226f3594f67e021a extends Twig_Template
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
        $__internal_9517ef6ac5a9dc19031b199d3da03543431022d86cf9679030f0d965071fd11e = $this->env->getExtension("native_profiler");
        $__internal_9517ef6ac5a9dc19031b199d3da03543431022d86cf9679030f0d965071fd11e->enter($__internal_9517ef6ac5a9dc19031b199d3da03543431022d86cf9679030f0d965071fd11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9517ef6ac5a9dc19031b199d3da03543431022d86cf9679030f0d965071fd11e->leave($__internal_9517ef6ac5a9dc19031b199d3da03543431022d86cf9679030f0d965071fd11e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
