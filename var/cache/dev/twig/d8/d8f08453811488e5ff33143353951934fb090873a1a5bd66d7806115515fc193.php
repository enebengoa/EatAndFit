<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_e85afe5a2076ce3701c8b614f3de347261593105b8418d56032a19bd028ae7d7 extends Twig_Template
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
        $__internal_223a091647e08629b3871d8340689b0f964ebca9aa4d87ea3e5e412a85eb187d = $this->env->getExtension("native_profiler");
        $__internal_223a091647e08629b3871d8340689b0f964ebca9aa4d87ea3e5e412a85eb187d->enter($__internal_223a091647e08629b3871d8340689b0f964ebca9aa4d87ea3e5e412a85eb187d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_223a091647e08629b3871d8340689b0f964ebca9aa4d87ea3e5e412a85eb187d->leave($__internal_223a091647e08629b3871d8340689b0f964ebca9aa4d87ea3e5e412a85eb187d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
