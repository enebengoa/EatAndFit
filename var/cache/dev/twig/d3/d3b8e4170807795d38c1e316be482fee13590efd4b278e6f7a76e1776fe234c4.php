<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_d8ed848046dadced98001681905204ea87a326e874a13bba0b992eb77d3e4f3c extends Twig_Template
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
        $__internal_9304d889122435d6ee5a4a2a6ca42de68d191d7d13d2a50d8613c48236a17595 = $this->env->getExtension("native_profiler");
        $__internal_9304d889122435d6ee5a4a2a6ca42de68d191d7d13d2a50d8613c48236a17595->enter($__internal_9304d889122435d6ee5a4a2a6ca42de68d191d7d13d2a50d8613c48236a17595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_9304d889122435d6ee5a4a2a6ca42de68d191d7d13d2a50d8613c48236a17595->leave($__internal_9304d889122435d6ee5a4a2a6ca42de68d191d7d13d2a50d8613c48236a17595_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
