<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_63435edb12ec583630311e9a983d15afd748d3e962beb817dbfa5ae6923569d8 extends Twig_Template
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
        $__internal_ea978c739ab5e703c7788a09e2b93cceb52e1b1c82853d69d22191302586bf2c = $this->env->getExtension("native_profiler");
        $__internal_ea978c739ab5e703c7788a09e2b93cceb52e1b1c82853d69d22191302586bf2c->enter($__internal_ea978c739ab5e703c7788a09e2b93cceb52e1b1c82853d69d22191302586bf2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ea978c739ab5e703c7788a09e2b93cceb52e1b1c82853d69d22191302586bf2c->leave($__internal_ea978c739ab5e703c7788a09e2b93cceb52e1b1c82853d69d22191302586bf2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
