<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9d2cacbc2cdc1900f82169ff54e8bf04eb3d098770887d05a0dc95635ebfdf20 extends Twig_Template
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
        $__internal_d73cfe0dc54315e76a82ae7044a352282aed40cbbcc53302c8e5ebaf6c7db9c6 = $this->env->getExtension("native_profiler");
        $__internal_d73cfe0dc54315e76a82ae7044a352282aed40cbbcc53302c8e5ebaf6c7db9c6->enter($__internal_d73cfe0dc54315e76a82ae7044a352282aed40cbbcc53302c8e5ebaf6c7db9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d73cfe0dc54315e76a82ae7044a352282aed40cbbcc53302c8e5ebaf6c7db9c6->leave($__internal_d73cfe0dc54315e76a82ae7044a352282aed40cbbcc53302c8e5ebaf6c7db9c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
