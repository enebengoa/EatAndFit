<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_dc0af60bc1b28b7b4b2e4c558ad8f35ec0e9f9f229f90ce7f8285f0baa311717 extends Twig_Template
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
        $__internal_88eaa2a4edc2f12454ee93086555ac86e80c5fa5689dabc86255e9bd50508328 = $this->env->getExtension("native_profiler");
        $__internal_88eaa2a4edc2f12454ee93086555ac86e80c5fa5689dabc86255e9bd50508328->enter($__internal_88eaa2a4edc2f12454ee93086555ac86e80c5fa5689dabc86255e9bd50508328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_88eaa2a4edc2f12454ee93086555ac86e80c5fa5689dabc86255e9bd50508328->leave($__internal_88eaa2a4edc2f12454ee93086555ac86e80c5fa5689dabc86255e9bd50508328_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
