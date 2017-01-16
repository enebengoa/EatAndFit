<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_02d08eafcd625c9695d9d28ea4c11338d53f3ad282b71ebc81a884bf4bb7c9d4 extends Twig_Template
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
        $__internal_c05de94f6dcbadc0ad7e8bf75450046e552de6c8c143cdab9fdd47c1f02d075d = $this->env->getExtension("native_profiler");
        $__internal_c05de94f6dcbadc0ad7e8bf75450046e552de6c8c143cdab9fdd47c1f02d075d->enter($__internal_c05de94f6dcbadc0ad7e8bf75450046e552de6c8c143cdab9fdd47c1f02d075d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c05de94f6dcbadc0ad7e8bf75450046e552de6c8c143cdab9fdd47c1f02d075d->leave($__internal_c05de94f6dcbadc0ad7e8bf75450046e552de6c8c143cdab9fdd47c1f02d075d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
