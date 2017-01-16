<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_16b17ebd5ee94bdc7d4202012e7c6c8cc8bdfe5ae094cc8b1789181df92806af extends Twig_Template
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
        $__internal_c40ad26daa50241465557b2a95e23e930dd9c8530a4cce222a6e90435f4ab377 = $this->env->getExtension("native_profiler");
        $__internal_c40ad26daa50241465557b2a95e23e930dd9c8530a4cce222a6e90435f4ab377->enter($__internal_c40ad26daa50241465557b2a95e23e930dd9c8530a4cce222a6e90435f4ab377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c40ad26daa50241465557b2a95e23e930dd9c8530a4cce222a6e90435f4ab377->leave($__internal_c40ad26daa50241465557b2a95e23e930dd9c8530a4cce222a6e90435f4ab377_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
