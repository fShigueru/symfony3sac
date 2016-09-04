<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7b4d5ea621165f2f2e03072d941ff07a811e772c376365d82e6189c58959cce3 extends Twig_Template
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
        $__internal_a5f6c83b903d86b608a55c7d962a0d021280ebf2bc200df3468e8d5c13ef2607 = $this->env->getExtension("native_profiler");
        $__internal_a5f6c83b903d86b608a55c7d962a0d021280ebf2bc200df3468e8d5c13ef2607->enter($__internal_a5f6c83b903d86b608a55c7d962a0d021280ebf2bc200df3468e8d5c13ef2607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a5f6c83b903d86b608a55c7d962a0d021280ebf2bc200df3468e8d5c13ef2607->leave($__internal_a5f6c83b903d86b608a55c7d962a0d021280ebf2bc200df3468e8d5c13ef2607_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
