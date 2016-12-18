<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0cb0e24b95a1918d365a8cd5c64fb8497f398cece8e0c638da647b17925a3ce0 extends Twig_Template
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
        $__internal_0d253a41d049f20bdcfc579645b59337a09e79c1e6ee9c5b6313351f4b86f601 = $this->env->getExtension("native_profiler");
        $__internal_0d253a41d049f20bdcfc579645b59337a09e79c1e6ee9c5b6313351f4b86f601->enter($__internal_0d253a41d049f20bdcfc579645b59337a09e79c1e6ee9c5b6313351f4b86f601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0d253a41d049f20bdcfc579645b59337a09e79c1e6ee9c5b6313351f4b86f601->leave($__internal_0d253a41d049f20bdcfc579645b59337a09e79c1e6ee9c5b6313351f4b86f601_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
