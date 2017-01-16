<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7befef2178ad85f35388ad520105c52984bb298109e1de3840a8be676bb4d103 extends Twig_Template
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
        $__internal_74e4139d8e8d140012c8a46bc9fc17cadce95ada67e4afa8a09cb17f58ed2848 = $this->env->getExtension("native_profiler");
        $__internal_74e4139d8e8d140012c8a46bc9fc17cadce95ada67e4afa8a09cb17f58ed2848->enter($__internal_74e4139d8e8d140012c8a46bc9fc17cadce95ada67e4afa8a09cb17f58ed2848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_74e4139d8e8d140012c8a46bc9fc17cadce95ada67e4afa8a09cb17f58ed2848->leave($__internal_74e4139d8e8d140012c8a46bc9fc17cadce95ada67e4afa8a09cb17f58ed2848_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
