<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8cf79e891addda627bd8477cc5e072652b19007f95dde0932cd7f46bd10ad991 extends Twig_Template
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
        $__internal_7a19bd364e8120ab5c18e849e8c95f5faae7807ed1c8981ff9687afa64310957 = $this->env->getExtension("native_profiler");
        $__internal_7a19bd364e8120ab5c18e849e8c95f5faae7807ed1c8981ff9687afa64310957->enter($__internal_7a19bd364e8120ab5c18e849e8c95f5faae7807ed1c8981ff9687afa64310957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7a19bd364e8120ab5c18e849e8c95f5faae7807ed1c8981ff9687afa64310957->leave($__internal_7a19bd364e8120ab5c18e849e8c95f5faae7807ed1c8981ff9687afa64310957_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
