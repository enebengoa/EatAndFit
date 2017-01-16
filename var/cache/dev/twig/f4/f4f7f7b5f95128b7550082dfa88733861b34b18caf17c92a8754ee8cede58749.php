<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_edf25c2fda7fc6a33b93cf7e12bc46fcc3fae5a47e80396fb60452334505001a extends Twig_Template
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
        $__internal_3737981a7f10d20bdb5f5914a8ca291b5f69cfcd65d7b6312c880be3ce0bb805 = $this->env->getExtension("native_profiler");
        $__internal_3737981a7f10d20bdb5f5914a8ca291b5f69cfcd65d7b6312c880be3ce0bb805->enter($__internal_3737981a7f10d20bdb5f5914a8ca291b5f69cfcd65d7b6312c880be3ce0bb805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3737981a7f10d20bdb5f5914a8ca291b5f69cfcd65d7b6312c880be3ce0bb805->leave($__internal_3737981a7f10d20bdb5f5914a8ca291b5f69cfcd65d7b6312c880be3ce0bb805_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
