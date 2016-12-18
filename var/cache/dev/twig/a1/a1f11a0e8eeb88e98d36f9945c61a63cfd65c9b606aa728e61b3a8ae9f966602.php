<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_ec181370d60ef49dc6b9f193b2dc5c34ee16b2bd8d71b239e7fa4f728624854c extends Twig_Template
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
        $__internal_06d81b8c525ec2eb974fb8876387dc1a60f70de5185115ae2973a8d74204e2aa = $this->env->getExtension("native_profiler");
        $__internal_06d81b8c525ec2eb974fb8876387dc1a60f70de5185115ae2973a8d74204e2aa->enter($__internal_06d81b8c525ec2eb974fb8876387dc1a60f70de5185115ae2973a8d74204e2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_06d81b8c525ec2eb974fb8876387dc1a60f70de5185115ae2973a8d74204e2aa->leave($__internal_06d81b8c525ec2eb974fb8876387dc1a60f70de5185115ae2973a8d74204e2aa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
