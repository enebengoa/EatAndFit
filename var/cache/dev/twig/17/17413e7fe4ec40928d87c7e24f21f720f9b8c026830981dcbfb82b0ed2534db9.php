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
        $__internal_7117ac42c9f288102591f727a3ac8c62544b3620ff3644a3294517644bc02aeb = $this->env->getExtension("native_profiler");
        $__internal_7117ac42c9f288102591f727a3ac8c62544b3620ff3644a3294517644bc02aeb->enter($__internal_7117ac42c9f288102591f727a3ac8c62544b3620ff3644a3294517644bc02aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7117ac42c9f288102591f727a3ac8c62544b3620ff3644a3294517644bc02aeb->leave($__internal_7117ac42c9f288102591f727a3ac8c62544b3620ff3644a3294517644bc02aeb_prof);

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
