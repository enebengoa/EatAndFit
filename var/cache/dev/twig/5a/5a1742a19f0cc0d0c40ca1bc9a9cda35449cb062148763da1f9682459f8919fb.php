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
        $__internal_ca8d66ce86cce58a0ecda7875443408c9940d0a64f5216b462d8a14bc4cac479 = $this->env->getExtension("native_profiler");
        $__internal_ca8d66ce86cce58a0ecda7875443408c9940d0a64f5216b462d8a14bc4cac479->enter($__internal_ca8d66ce86cce58a0ecda7875443408c9940d0a64f5216b462d8a14bc4cac479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ca8d66ce86cce58a0ecda7875443408c9940d0a64f5216b462d8a14bc4cac479->leave($__internal_ca8d66ce86cce58a0ecda7875443408c9940d0a64f5216b462d8a14bc4cac479_prof);

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
