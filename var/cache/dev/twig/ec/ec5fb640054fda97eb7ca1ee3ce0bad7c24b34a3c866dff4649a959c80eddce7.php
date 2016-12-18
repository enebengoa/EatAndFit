<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_3d2762b8920e3423b22c369b466942aa9b6a4a962c27dbb9c859dec0e30f893d extends Twig_Template
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
        $__internal_e48eb29aa8fa3d91bb3f5d3a1b14b89b2c275343aa792979a20f4fe16645b1d4 = $this->env->getExtension("native_profiler");
        $__internal_e48eb29aa8fa3d91bb3f5d3a1b14b89b2c275343aa792979a20f4fe16645b1d4->enter($__internal_e48eb29aa8fa3d91bb3f5d3a1b14b89b2c275343aa792979a20f4fe16645b1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e48eb29aa8fa3d91bb3f5d3a1b14b89b2c275343aa792979a20f4fe16645b1d4->leave($__internal_e48eb29aa8fa3d91bb3f5d3a1b14b89b2c275343aa792979a20f4fe16645b1d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
