<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f831ae17c32f3c628f3e76bdac2ab318954336d031628eef648fc66c676849f8 extends Twig_Template
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
        $__internal_128206fe038abbf253df1b5b8f49caad64845a30a985a0a554aac38a1f7599b1 = $this->env->getExtension("native_profiler");
        $__internal_128206fe038abbf253df1b5b8f49caad64845a30a985a0a554aac38a1f7599b1->enter($__internal_128206fe038abbf253df1b5b8f49caad64845a30a985a0a554aac38a1f7599b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_128206fe038abbf253df1b5b8f49caad64845a30a985a0a554aac38a1f7599b1->leave($__internal_128206fe038abbf253df1b5b8f49caad64845a30a985a0a554aac38a1f7599b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
