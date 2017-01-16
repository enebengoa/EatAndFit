<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6fda7b6e370731a7830c5bbbd669586bc0ad99ef55b9b715e54e105ebcb9d960 extends Twig_Template
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
        $__internal_86bb3c38e068e8689f310fb08795a1f64428a6e13052df2777c5981b6024b366 = $this->env->getExtension("native_profiler");
        $__internal_86bb3c38e068e8689f310fb08795a1f64428a6e13052df2777c5981b6024b366->enter($__internal_86bb3c38e068e8689f310fb08795a1f64428a6e13052df2777c5981b6024b366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_86bb3c38e068e8689f310fb08795a1f64428a6e13052df2777c5981b6024b366->leave($__internal_86bb3c38e068e8689f310fb08795a1f64428a6e13052df2777c5981b6024b366_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
