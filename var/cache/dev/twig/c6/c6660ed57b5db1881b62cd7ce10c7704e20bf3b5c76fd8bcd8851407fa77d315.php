<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_02d08eafcd625c9695d9d28ea4c11338d53f3ad282b71ebc81a884bf4bb7c9d4 extends Twig_Template
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
        $__internal_1b4e12e6b3002f0a49b08e4a7f1774ac15635c2679f0e554ad7dbcc2e7ecc6d8 = $this->env->getExtension("native_profiler");
        $__internal_1b4e12e6b3002f0a49b08e4a7f1774ac15635c2679f0e554ad7dbcc2e7ecc6d8->enter($__internal_1b4e12e6b3002f0a49b08e4a7f1774ac15635c2679f0e554ad7dbcc2e7ecc6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_1b4e12e6b3002f0a49b08e4a7f1774ac15635c2679f0e554ad7dbcc2e7ecc6d8->leave($__internal_1b4e12e6b3002f0a49b08e4a7f1774ac15635c2679f0e554ad7dbcc2e7ecc6d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
