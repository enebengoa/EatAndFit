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
        $__internal_d504fb55d16709df0d384052fb4ba05d6d077cb47e7ff190b8498bf944210c9f = $this->env->getExtension("native_profiler");
        $__internal_d504fb55d16709df0d384052fb4ba05d6d077cb47e7ff190b8498bf944210c9f->enter($__internal_d504fb55d16709df0d384052fb4ba05d6d077cb47e7ff190b8498bf944210c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d504fb55d16709df0d384052fb4ba05d6d077cb47e7ff190b8498bf944210c9f->leave($__internal_d504fb55d16709df0d384052fb4ba05d6d077cb47e7ff190b8498bf944210c9f_prof);

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
