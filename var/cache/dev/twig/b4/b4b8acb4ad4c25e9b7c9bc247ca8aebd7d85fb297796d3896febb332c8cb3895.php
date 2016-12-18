<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6fda7b6e370731a7830c5bbbd669586bc0ad99ef55b9b715e54e105ebcb9d960 extends Twig_Template
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
        $__internal_89a6c702654c6b0771f2b696569da2927f30c008fa8e4b33bfb8f2a48e5f9e67 = $this->env->getExtension("native_profiler");
        $__internal_89a6c702654c6b0771f2b696569da2927f30c008fa8e4b33bfb8f2a48e5f9e67->enter($__internal_89a6c702654c6b0771f2b696569da2927f30c008fa8e4b33bfb8f2a48e5f9e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_89a6c702654c6b0771f2b696569da2927f30c008fa8e4b33bfb8f2a48e5f9e67->leave($__internal_89a6c702654c6b0771f2b696569da2927f30c008fa8e4b33bfb8f2a48e5f9e67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
