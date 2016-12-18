<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_87b37352788186fce87a03ecc8deae71e14e59d245849fc00e8532b5615cfb30 extends Twig_Template
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
        $__internal_afe0e30c7f763f5a49734932ec70a099d1cf523069779331c98282daa7720a8d = $this->env->getExtension("native_profiler");
        $__internal_afe0e30c7f763f5a49734932ec70a099d1cf523069779331c98282daa7720a8d->enter($__internal_afe0e30c7f763f5a49734932ec70a099d1cf523069779331c98282daa7720a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_afe0e30c7f763f5a49734932ec70a099d1cf523069779331c98282daa7720a8d->leave($__internal_afe0e30c7f763f5a49734932ec70a099d1cf523069779331c98282daa7720a8d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
