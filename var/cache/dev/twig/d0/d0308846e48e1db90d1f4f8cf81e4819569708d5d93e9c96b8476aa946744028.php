<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_e57a9447d010e4fdb11df72e29e830028f0346f2eed9551dd788836bba91bc2b extends Twig_Template
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
        $__internal_a332054100a9d4ae0f23ac8f9bc2996280ba31dc9bec17a04c7a503009e3781f = $this->env->getExtension("native_profiler");
        $__internal_a332054100a9d4ae0f23ac8f9bc2996280ba31dc9bec17a04c7a503009e3781f->enter($__internal_a332054100a9d4ae0f23ac8f9bc2996280ba31dc9bec17a04c7a503009e3781f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a332054100a9d4ae0f23ac8f9bc2996280ba31dc9bec17a04c7a503009e3781f->leave($__internal_a332054100a9d4ae0f23ac8f9bc2996280ba31dc9bec17a04c7a503009e3781f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
