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
        $__internal_30125dbd335b59223a802578e980765e2698ecfa6906f2d58b8da606fa04e8c0 = $this->env->getExtension("native_profiler");
        $__internal_30125dbd335b59223a802578e980765e2698ecfa6906f2d58b8da606fa04e8c0->enter($__internal_30125dbd335b59223a802578e980765e2698ecfa6906f2d58b8da606fa04e8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_30125dbd335b59223a802578e980765e2698ecfa6906f2d58b8da606fa04e8c0->leave($__internal_30125dbd335b59223a802578e980765e2698ecfa6906f2d58b8da606fa04e8c0_prof);

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
