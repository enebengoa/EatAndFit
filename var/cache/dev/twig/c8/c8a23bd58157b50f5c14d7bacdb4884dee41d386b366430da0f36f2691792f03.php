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
        $__internal_4eae3e4325f855601755817357d97f6bb97d9f557f48e96e0bb15856bf4bd218 = $this->env->getExtension("native_profiler");
        $__internal_4eae3e4325f855601755817357d97f6bb97d9f557f48e96e0bb15856bf4bd218->enter($__internal_4eae3e4325f855601755817357d97f6bb97d9f557f48e96e0bb15856bf4bd218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_4eae3e4325f855601755817357d97f6bb97d9f557f48e96e0bb15856bf4bd218->leave($__internal_4eae3e4325f855601755817357d97f6bb97d9f557f48e96e0bb15856bf4bd218_prof);

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
