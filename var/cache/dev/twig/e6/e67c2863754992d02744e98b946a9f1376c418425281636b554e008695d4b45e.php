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
        $__internal_8480ca5be287d695a2d62fa9c0d4f05be0b6db0c78e20e6cd220ee89bfaf6f5b = $this->env->getExtension("native_profiler");
        $__internal_8480ca5be287d695a2d62fa9c0d4f05be0b6db0c78e20e6cd220ee89bfaf6f5b->enter($__internal_8480ca5be287d695a2d62fa9c0d4f05be0b6db0c78e20e6cd220ee89bfaf6f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_8480ca5be287d695a2d62fa9c0d4f05be0b6db0c78e20e6cd220ee89bfaf6f5b->leave($__internal_8480ca5be287d695a2d62fa9c0d4f05be0b6db0c78e20e6cd220ee89bfaf6f5b_prof);

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
