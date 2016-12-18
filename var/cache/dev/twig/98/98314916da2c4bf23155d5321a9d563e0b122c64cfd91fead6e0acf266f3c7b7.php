<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2e3ea6c8f9c5891996b4d39b0cb63057b63ffa682226e3a69f4d29fb9784a0fc extends Twig_Template
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
        $__internal_ceace5e29b968b320cabe17548fc1ca421fab1e3c7a2c9731a205598735a64c5 = $this->env->getExtension("native_profiler");
        $__internal_ceace5e29b968b320cabe17548fc1ca421fab1e3c7a2c9731a205598735a64c5->enter($__internal_ceace5e29b968b320cabe17548fc1ca421fab1e3c7a2c9731a205598735a64c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ceace5e29b968b320cabe17548fc1ca421fab1e3c7a2c9731a205598735a64c5->leave($__internal_ceace5e29b968b320cabe17548fc1ca421fab1e3c7a2c9731a205598735a64c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
