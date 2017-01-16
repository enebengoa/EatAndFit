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
        $__internal_f90b0d91f17d48bc6089c8562a33c7cd2df5e3039ff7f1331e0f4fb6a96b10d1 = $this->env->getExtension("native_profiler");
        $__internal_f90b0d91f17d48bc6089c8562a33c7cd2df5e3039ff7f1331e0f4fb6a96b10d1->enter($__internal_f90b0d91f17d48bc6089c8562a33c7cd2df5e3039ff7f1331e0f4fb6a96b10d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f90b0d91f17d48bc6089c8562a33c7cd2df5e3039ff7f1331e0f4fb6a96b10d1->leave($__internal_f90b0d91f17d48bc6089c8562a33c7cd2df5e3039ff7f1331e0f4fb6a96b10d1_prof);

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
