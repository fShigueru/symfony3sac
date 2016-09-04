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
        $__internal_c0167138b82c6e910c24a99d1ce62450dc4151c3883883d1842247899f466d34 = $this->env->getExtension("native_profiler");
        $__internal_c0167138b82c6e910c24a99d1ce62450dc4151c3883883d1842247899f466d34->enter($__internal_c0167138b82c6e910c24a99d1ce62450dc4151c3883883d1842247899f466d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_c0167138b82c6e910c24a99d1ce62450dc4151c3883883d1842247899f466d34->leave($__internal_c0167138b82c6e910c24a99d1ce62450dc4151c3883883d1842247899f466d34_prof);

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
