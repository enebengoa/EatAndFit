<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e2bb034844d3838bfb2defbee10a4c718b2c1b24c31aff6fe267d1967ff02e42 extends Twig_Template
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
        $__internal_4323a538d38f0fe5fba2e0c3c31652051dff0d6515a4902d8dad062ade15096c = $this->env->getExtension("native_profiler");
        $__internal_4323a538d38f0fe5fba2e0c3c31652051dff0d6515a4902d8dad062ade15096c->enter($__internal_4323a538d38f0fe5fba2e0c3c31652051dff0d6515a4902d8dad062ade15096c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4323a538d38f0fe5fba2e0c3c31652051dff0d6515a4902d8dad062ade15096c->leave($__internal_4323a538d38f0fe5fba2e0c3c31652051dff0d6515a4902d8dad062ade15096c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
