<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_59b64a49be7138e965014792a2110a4d43ee0f517e7964e7c16b1f58722aad9d extends Twig_Template
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
        $__internal_c5acdcc8dd1571fa80b09c6609680d7229d7a43fbe391addaacbeff3b35c1f5b = $this->env->getExtension("native_profiler");
        $__internal_c5acdcc8dd1571fa80b09c6609680d7229d7a43fbe391addaacbeff3b35c1f5b->enter($__internal_c5acdcc8dd1571fa80b09c6609680d7229d7a43fbe391addaacbeff3b35c1f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c5acdcc8dd1571fa80b09c6609680d7229d7a43fbe391addaacbeff3b35c1f5b->leave($__internal_c5acdcc8dd1571fa80b09c6609680d7229d7a43fbe391addaacbeff3b35c1f5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
