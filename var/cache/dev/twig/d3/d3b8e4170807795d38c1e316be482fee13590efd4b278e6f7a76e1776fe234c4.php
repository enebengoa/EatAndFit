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
        $__internal_b9d64fdaad4629f131fd9906e71dfaf22f9301cb1b51b029422e5531b41004c1 = $this->env->getExtension("native_profiler");
        $__internal_b9d64fdaad4629f131fd9906e71dfaf22f9301cb1b51b029422e5531b41004c1->enter($__internal_b9d64fdaad4629f131fd9906e71dfaf22f9301cb1b51b029422e5531b41004c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_b9d64fdaad4629f131fd9906e71dfaf22f9301cb1b51b029422e5531b41004c1->leave($__internal_b9d64fdaad4629f131fd9906e71dfaf22f9301cb1b51b029422e5531b41004c1_prof);

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
