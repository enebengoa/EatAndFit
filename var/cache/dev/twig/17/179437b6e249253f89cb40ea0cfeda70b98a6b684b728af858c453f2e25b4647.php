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
        $__internal_d6526a6bbe6335c8fa21c1f0bbd668f63f34c1e07836b7b98b2e6fdfe41b5ea6 = $this->env->getExtension("native_profiler");
        $__internal_d6526a6bbe6335c8fa21c1f0bbd668f63f34c1e07836b7b98b2e6fdfe41b5ea6->enter($__internal_d6526a6bbe6335c8fa21c1f0bbd668f63f34c1e07836b7b98b2e6fdfe41b5ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_d6526a6bbe6335c8fa21c1f0bbd668f63f34c1e07836b7b98b2e6fdfe41b5ea6->leave($__internal_d6526a6bbe6335c8fa21c1f0bbd668f63f34c1e07836b7b98b2e6fdfe41b5ea6_prof);

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
