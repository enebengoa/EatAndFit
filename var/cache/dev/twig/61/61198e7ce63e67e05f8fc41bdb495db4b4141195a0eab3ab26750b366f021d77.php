<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_4d6331d3454346a0f92822e82f4a37daadefe27e1cd12a5cf97a5237f9efab7b extends Twig_Template
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
        $__internal_faddb2f63ac7797504464cd9ac3fffb2e777a596d08d4cc0aa03ff7e9523893a = $this->env->getExtension("native_profiler");
        $__internal_faddb2f63ac7797504464cd9ac3fffb2e777a596d08d4cc0aa03ff7e9523893a->enter($__internal_faddb2f63ac7797504464cd9ac3fffb2e777a596d08d4cc0aa03ff7e9523893a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_faddb2f63ac7797504464cd9ac3fffb2e777a596d08d4cc0aa03ff7e9523893a->leave($__internal_faddb2f63ac7797504464cd9ac3fffb2e777a596d08d4cc0aa03ff7e9523893a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
