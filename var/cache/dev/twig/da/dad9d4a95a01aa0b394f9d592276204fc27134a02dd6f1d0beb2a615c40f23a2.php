<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0588c3d1559664bd528087c28ef0ecd9514e1529ffaa1489e5b44de080ccbd95 extends Twig_Template
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
        $__internal_15694b94e84e2e61d1f675c9916884dff14eee976a8d926da396cbd9af64e404 = $this->env->getExtension("native_profiler");
        $__internal_15694b94e84e2e61d1f675c9916884dff14eee976a8d926da396cbd9af64e404->enter($__internal_15694b94e84e2e61d1f675c9916884dff14eee976a8d926da396cbd9af64e404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_15694b94e84e2e61d1f675c9916884dff14eee976a8d926da396cbd9af64e404->leave($__internal_15694b94e84e2e61d1f675c9916884dff14eee976a8d926da396cbd9af64e404_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
