<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_45c938f9d14fc98d74007f981426d4cc44c30b17cdedf55a7eb5f6bd5315cbdc extends Twig_Template
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
        $__internal_6ae5aec4496125e98f15466f472955bad983d6c2715160cb56e759eceb7f15df = $this->env->getExtension("native_profiler");
        $__internal_6ae5aec4496125e98f15466f472955bad983d6c2715160cb56e759eceb7f15df->enter($__internal_6ae5aec4496125e98f15466f472955bad983d6c2715160cb56e759eceb7f15df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_6ae5aec4496125e98f15466f472955bad983d6c2715160cb56e759eceb7f15df->leave($__internal_6ae5aec4496125e98f15466f472955bad983d6c2715160cb56e759eceb7f15df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }
}
