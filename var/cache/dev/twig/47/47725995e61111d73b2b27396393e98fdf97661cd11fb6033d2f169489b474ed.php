<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5dabdf5269f61969079f25f9229df33865d60dd3632f6d49a943d3ab991a6488 extends Twig_Template
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
        $__internal_6d04de51d8d503fbda6d7f79b86fb6fc12c1b4c7dee96b47bf306db9caf623e5 = $this->env->getExtension("native_profiler");
        $__internal_6d04de51d8d503fbda6d7f79b86fb6fc12c1b4c7dee96b47bf306db9caf623e5->enter($__internal_6d04de51d8d503fbda6d7f79b86fb6fc12c1b4c7dee96b47bf306db9caf623e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6d04de51d8d503fbda6d7f79b86fb6fc12c1b4c7dee96b47bf306db9caf623e5->leave($__internal_6d04de51d8d503fbda6d7f79b86fb6fc12c1b4c7dee96b47bf306db9caf623e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
