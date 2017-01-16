<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_982f420cc2659001c01a10aa4bb19ba58c4e6e2c57f1665e11c3ae8ae379a894 extends Twig_Template
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
        $__internal_a5084ced02320147668dd16e0c7f59477f35f1f3d0b035c85803dd7280c3926a = $this->env->getExtension("native_profiler");
        $__internal_a5084ced02320147668dd16e0c7f59477f35f1f3d0b035c85803dd7280c3926a->enter($__internal_a5084ced02320147668dd16e0c7f59477f35f1f3d0b035c85803dd7280c3926a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a5084ced02320147668dd16e0c7f59477f35f1f3d0b035c85803dd7280c3926a->leave($__internal_a5084ced02320147668dd16e0c7f59477f35f1f3d0b035c85803dd7280c3926a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
