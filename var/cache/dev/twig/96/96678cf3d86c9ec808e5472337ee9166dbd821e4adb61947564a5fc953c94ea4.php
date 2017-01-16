<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_603a24afd454d5e8d076ef86f55665d12ebeb56cdc874f63a663372a897348cd extends Twig_Template
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
        $__internal_1e6f53dccf652f8f11e29c12d84c9e1ced564764aa0fe6c90c942330aa0f3f3d = $this->env->getExtension("native_profiler");
        $__internal_1e6f53dccf652f8f11e29c12d84c9e1ced564764aa0fe6c90c942330aa0f3f3d->enter($__internal_1e6f53dccf652f8f11e29c12d84c9e1ced564764aa0fe6c90c942330aa0f3f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_1e6f53dccf652f8f11e29c12d84c9e1ced564764aa0fe6c90c942330aa0f3f3d->leave($__internal_1e6f53dccf652f8f11e29c12d84c9e1ced564764aa0fe6c90c942330aa0f3f3d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
