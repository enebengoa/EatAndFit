<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3a546681106486dfc80f5ab7bd5fbc87712f06615961231e09f9e46c466232e6 extends Twig_Template
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
        $__internal_d655b44977cd4d20e02d9f08f60edf34fa2465eb5f3221ae84074203b8b13889 = $this->env->getExtension("native_profiler");
        $__internal_d655b44977cd4d20e02d9f08f60edf34fa2465eb5f3221ae84074203b8b13889->enter($__internal_d655b44977cd4d20e02d9f08f60edf34fa2465eb5f3221ae84074203b8b13889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d655b44977cd4d20e02d9f08f60edf34fa2465eb5f3221ae84074203b8b13889->leave($__internal_d655b44977cd4d20e02d9f08f60edf34fa2465eb5f3221ae84074203b8b13889_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
