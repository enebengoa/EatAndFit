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
        $__internal_6dcbc2e7048f9350a0cd32e1ee6af6cfa226cce962f2816bb7e7f645f2cf3f3c = $this->env->getExtension("native_profiler");
        $__internal_6dcbc2e7048f9350a0cd32e1ee6af6cfa226cce962f2816bb7e7f645f2cf3f3c->enter($__internal_6dcbc2e7048f9350a0cd32e1ee6af6cfa226cce962f2816bb7e7f645f2cf3f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6dcbc2e7048f9350a0cd32e1ee6af6cfa226cce962f2816bb7e7f645f2cf3f3c->leave($__internal_6dcbc2e7048f9350a0cd32e1ee6af6cfa226cce962f2816bb7e7f645f2cf3f3c_prof);

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
