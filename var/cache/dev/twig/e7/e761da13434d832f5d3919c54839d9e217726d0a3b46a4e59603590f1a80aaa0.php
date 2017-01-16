<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_2aba2e77d64cd5b429ba8e5bc0243ab94830cbba125612659b45538c2bc27061 extends Twig_Template
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
        $__internal_a51e7edae8fee33194f633f11515ad28e92df90963f2bb3ef480688a3440d19f = $this->env->getExtension("native_profiler");
        $__internal_a51e7edae8fee33194f633f11515ad28e92df90963f2bb3ef480688a3440d19f->enter($__internal_a51e7edae8fee33194f633f11515ad28e92df90963f2bb3ef480688a3440d19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_a51e7edae8fee33194f633f11515ad28e92df90963f2bb3ef480688a3440d19f->leave($__internal_a51e7edae8fee33194f633f11515ad28e92df90963f2bb3ef480688a3440d19f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
