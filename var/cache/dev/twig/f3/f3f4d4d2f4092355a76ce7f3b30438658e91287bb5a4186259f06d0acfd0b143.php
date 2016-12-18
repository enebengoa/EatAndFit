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
        $__internal_b9dc3d4b547db721f1bc2d8153f2b716221e1276722bd89d1014af9e8aa1bc62 = $this->env->getExtension("native_profiler");
        $__internal_b9dc3d4b547db721f1bc2d8153f2b716221e1276722bd89d1014af9e8aa1bc62->enter($__internal_b9dc3d4b547db721f1bc2d8153f2b716221e1276722bd89d1014af9e8aa1bc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b9dc3d4b547db721f1bc2d8153f2b716221e1276722bd89d1014af9e8aa1bc62->leave($__internal_b9dc3d4b547db721f1bc2d8153f2b716221e1276722bd89d1014af9e8aa1bc62_prof);

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
