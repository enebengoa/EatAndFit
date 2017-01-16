<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_41d87f8cf730e59c76dac0a26257b31e6019bfffae2779060af0efa00f4717d1 extends Twig_Template
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
        $__internal_f7101fc8c220700cc690c81141958f3144a6138e79ec439d65bf1e0da811e0d0 = $this->env->getExtension("native_profiler");
        $__internal_f7101fc8c220700cc690c81141958f3144a6138e79ec439d65bf1e0da811e0d0->enter($__internal_f7101fc8c220700cc690c81141958f3144a6138e79ec439d65bf1e0da811e0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f7101fc8c220700cc690c81141958f3144a6138e79ec439d65bf1e0da811e0d0->leave($__internal_f7101fc8c220700cc690c81141958f3144a6138e79ec439d65bf1e0da811e0d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
