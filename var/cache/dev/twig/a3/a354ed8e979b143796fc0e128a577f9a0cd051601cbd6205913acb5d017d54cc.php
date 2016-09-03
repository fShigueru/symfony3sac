<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_61573ec28778b62f0f18f0073147073db65637a1abcdfd545fdb5aba9d065b09 extends Twig_Template
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
        $__internal_ea16db3d4cc05e518c78720e51b4e1a827af9a9ab712c7e77ea8206b0195a89f = $this->env->getExtension("native_profiler");
        $__internal_ea16db3d4cc05e518c78720e51b4e1a827af9a9ab712c7e77ea8206b0195a89f->enter($__internal_ea16db3d4cc05e518c78720e51b4e1a827af9a9ab712c7e77ea8206b0195a89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ea16db3d4cc05e518c78720e51b4e1a827af9a9ab712c7e77ea8206b0195a89f->leave($__internal_ea16db3d4cc05e518c78720e51b4e1a827af9a9ab712c7e77ea8206b0195a89f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
