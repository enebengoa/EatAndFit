<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1b3120d54118d3aed74d7b46a5e7aae0129b2ab5f4166a4d5ba9967457714df9 extends Twig_Template
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
        $__internal_8618a65db10ab681e68a6676c3de49ef2d2f82c31e6bd436e29f540110d88735 = $this->env->getExtension("native_profiler");
        $__internal_8618a65db10ab681e68a6676c3de49ef2d2f82c31e6bd436e29f540110d88735->enter($__internal_8618a65db10ab681e68a6676c3de49ef2d2f82c31e6bd436e29f540110d88735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8618a65db10ab681e68a6676c3de49ef2d2f82c31e6bd436e29f540110d88735->leave($__internal_8618a65db10ab681e68a6676c3de49ef2d2f82c31e6bd436e29f540110d88735_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
