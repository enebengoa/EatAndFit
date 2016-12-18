<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_c350bac371cb89693f52d1f4d969744be8160cfe6f8f2b83dff12b2732642c35 extends Twig_Template
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
        $__internal_f2dc489f04eacaebc98500e733422e5e6ae26bdf220d047daec25ffc84611774 = $this->env->getExtension("native_profiler");
        $__internal_f2dc489f04eacaebc98500e733422e5e6ae26bdf220d047daec25ffc84611774->enter($__internal_f2dc489f04eacaebc98500e733422e5e6ae26bdf220d047daec25ffc84611774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_f2dc489f04eacaebc98500e733422e5e6ae26bdf220d047daec25ffc84611774->leave($__internal_f2dc489f04eacaebc98500e733422e5e6ae26bdf220d047daec25ffc84611774_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
