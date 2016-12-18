<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_36f9e92d3aac3f368f0dbd7237feaed177080f5089be9d98459f54e9091581c4 extends Twig_Template
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
        $__internal_4d277a32379ab37a2e83849d957954847ac7bbce6cfa472c930d8d8f79c11df1 = $this->env->getExtension("native_profiler");
        $__internal_4d277a32379ab37a2e83849d957954847ac7bbce6cfa472c930d8d8f79c11df1->enter($__internal_4d277a32379ab37a2e83849d957954847ac7bbce6cfa472c930d8d8f79c11df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4d277a32379ab37a2e83849d957954847ac7bbce6cfa472c930d8d8f79c11df1->leave($__internal_4d277a32379ab37a2e83849d957954847ac7bbce6cfa472c930d8d8f79c11df1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
