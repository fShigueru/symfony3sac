<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_2474dcc661bc9775b1d9788f44a18364acc1d90f6a21a51905786865dc33395c extends Twig_Template
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
        $__internal_e6f02dc6a562318a7df96874b297053b2471a59e73b3fe95dd6cf0927fb0c326 = $this->env->getExtension("native_profiler");
        $__internal_e6f02dc6a562318a7df96874b297053b2471a59e73b3fe95dd6cf0927fb0c326->enter($__internal_e6f02dc6a562318a7df96874b297053b2471a59e73b3fe95dd6cf0927fb0c326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_e6f02dc6a562318a7df96874b297053b2471a59e73b3fe95dd6cf0927fb0c326->leave($__internal_e6f02dc6a562318a7df96874b297053b2471a59e73b3fe95dd6cf0927fb0c326_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
