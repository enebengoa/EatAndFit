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
        $__internal_dabd34a7a8c8d28e7681fa05ce99670215427d5cffd9e29da13c66123336ddf9 = $this->env->getExtension("native_profiler");
        $__internal_dabd34a7a8c8d28e7681fa05ce99670215427d5cffd9e29da13c66123336ddf9->enter($__internal_dabd34a7a8c8d28e7681fa05ce99670215427d5cffd9e29da13c66123336ddf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_dabd34a7a8c8d28e7681fa05ce99670215427d5cffd9e29da13c66123336ddf9->leave($__internal_dabd34a7a8c8d28e7681fa05ce99670215427d5cffd9e29da13c66123336ddf9_prof);

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
