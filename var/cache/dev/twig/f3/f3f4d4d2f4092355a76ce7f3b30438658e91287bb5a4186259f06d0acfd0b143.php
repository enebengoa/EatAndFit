<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_3f505cda05e58f9e3e9108f0a153c5c2b76e9644b095d3dc11f624f1ae927739 extends Twig_Template
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
        $__internal_d286b2e8ee1c4ec5b3c81565342c2725434e89c92c0907239b9337621af3cf04 = $this->env->getExtension("native_profiler");
        $__internal_d286b2e8ee1c4ec5b3c81565342c2725434e89c92c0907239b9337621af3cf04->enter($__internal_d286b2e8ee1c4ec5b3c81565342c2725434e89c92c0907239b9337621af3cf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d286b2e8ee1c4ec5b3c81565342c2725434e89c92c0907239b9337621af3cf04->leave($__internal_d286b2e8ee1c4ec5b3c81565342c2725434e89c92c0907239b9337621af3cf04_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
