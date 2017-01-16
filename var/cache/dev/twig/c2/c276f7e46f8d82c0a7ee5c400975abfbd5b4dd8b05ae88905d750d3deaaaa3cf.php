<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_3a7486c2c940fac6ce3fdf148c73e635d408f204992f8df700eda09a4237443e extends Twig_Template
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
        $__internal_7711e7bc253bb3640387b564df0e0b11fea2377e9c851b31992a539f1172de51 = $this->env->getExtension("native_profiler");
        $__internal_7711e7bc253bb3640387b564df0e0b11fea2377e9c851b31992a539f1172de51->enter($__internal_7711e7bc253bb3640387b564df0e0b11fea2377e9c851b31992a539f1172de51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7711e7bc253bb3640387b564df0e0b11fea2377e9c851b31992a539f1172de51->leave($__internal_7711e7bc253bb3640387b564df0e0b11fea2377e9c851b31992a539f1172de51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
