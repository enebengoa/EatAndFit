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
        $__internal_71fa0503476c66ceaad50f24a0c4d8150b120d875593bf064f87b6c176d5ea47 = $this->env->getExtension("native_profiler");
        $__internal_71fa0503476c66ceaad50f24a0c4d8150b120d875593bf064f87b6c176d5ea47->enter($__internal_71fa0503476c66ceaad50f24a0c4d8150b120d875593bf064f87b6c176d5ea47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_71fa0503476c66ceaad50f24a0c4d8150b120d875593bf064f87b6c176d5ea47->leave($__internal_71fa0503476c66ceaad50f24a0c4d8150b120d875593bf064f87b6c176d5ea47_prof);

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
