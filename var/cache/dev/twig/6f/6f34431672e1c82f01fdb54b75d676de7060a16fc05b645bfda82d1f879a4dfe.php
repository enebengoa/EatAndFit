<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6e2d99a2729ca01403f30cf1e0b401802cf3cb241311f9150f55605da594b768 extends Twig_Template
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
        $__internal_041a9fc8059394c496df39645f9c3f4810543d389d5e24d2421e85e428493018 = $this->env->getExtension("native_profiler");
        $__internal_041a9fc8059394c496df39645f9c3f4810543d389d5e24d2421e85e428493018->enter($__internal_041a9fc8059394c496df39645f9c3f4810543d389d5e24d2421e85e428493018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_041a9fc8059394c496df39645f9c3f4810543d389d5e24d2421e85e428493018->leave($__internal_041a9fc8059394c496df39645f9c3f4810543d389d5e24d2421e85e428493018_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
