<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a6adec3a0a5a789d25d503a2512e734d565d3332604037019ef6d0ac2ea2994e extends Twig_Template
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
        $__internal_94b2f8f942d2e749e6be9d06b585b2974e7b641827fd8e061f1d306af03fd60f = $this->env->getExtension("native_profiler");
        $__internal_94b2f8f942d2e749e6be9d06b585b2974e7b641827fd8e061f1d306af03fd60f->enter($__internal_94b2f8f942d2e749e6be9d06b585b2974e7b641827fd8e061f1d306af03fd60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_94b2f8f942d2e749e6be9d06b585b2974e7b641827fd8e061f1d306af03fd60f->leave($__internal_94b2f8f942d2e749e6be9d06b585b2974e7b641827fd8e061f1d306af03fd60f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
