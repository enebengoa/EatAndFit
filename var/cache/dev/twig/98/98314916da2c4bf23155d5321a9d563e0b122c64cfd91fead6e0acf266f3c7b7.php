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
        $__internal_9c2a3d4e2356017a57958e02c1b40583867653515e6cfe30e925cd57ef34a028 = $this->env->getExtension("native_profiler");
        $__internal_9c2a3d4e2356017a57958e02c1b40583867653515e6cfe30e925cd57ef34a028->enter($__internal_9c2a3d4e2356017a57958e02c1b40583867653515e6cfe30e925cd57ef34a028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9c2a3d4e2356017a57958e02c1b40583867653515e6cfe30e925cd57ef34a028->leave($__internal_9c2a3d4e2356017a57958e02c1b40583867653515e6cfe30e925cd57ef34a028_prof);

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
