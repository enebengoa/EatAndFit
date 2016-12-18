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
        $__internal_1a2e2a16357c30fe7313196df72a5d8a7205488811e8358928915fc969497092 = $this->env->getExtension("native_profiler");
        $__internal_1a2e2a16357c30fe7313196df72a5d8a7205488811e8358928915fc969497092->enter($__internal_1a2e2a16357c30fe7313196df72a5d8a7205488811e8358928915fc969497092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1a2e2a16357c30fe7313196df72a5d8a7205488811e8358928915fc969497092->leave($__internal_1a2e2a16357c30fe7313196df72a5d8a7205488811e8358928915fc969497092_prof);

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
