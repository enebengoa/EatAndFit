<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_ee5fdefb13c126f1603c9d19827f2550c019f8cbd5cd0e27b521f438ec25f27a extends Twig_Template
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
        $__internal_7134d34f76399be73748d94db2e78531ff29cc5dcae1a3cf3ec3a58dae1f6b68 = $this->env->getExtension("native_profiler");
        $__internal_7134d34f76399be73748d94db2e78531ff29cc5dcae1a3cf3ec3a58dae1f6b68->enter($__internal_7134d34f76399be73748d94db2e78531ff29cc5dcae1a3cf3ec3a58dae1f6b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_7134d34f76399be73748d94db2e78531ff29cc5dcae1a3cf3ec3a58dae1f6b68->leave($__internal_7134d34f76399be73748d94db2e78531ff29cc5dcae1a3cf3ec3a58dae1f6b68_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
