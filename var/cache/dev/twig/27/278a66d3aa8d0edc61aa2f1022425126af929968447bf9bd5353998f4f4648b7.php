<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_ff598a043e64207a491ed00d88f4d9f76212fdbc51744e06ce7d7262da1aff96 extends Twig_Template
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
        $__internal_c317443a68bdc4ba53b1b2233e630fe84576a52202ea3ede0ad6ac9791394815 = $this->env->getExtension("native_profiler");
        $__internal_c317443a68bdc4ba53b1b2233e630fe84576a52202ea3ede0ad6ac9791394815->enter($__internal_c317443a68bdc4ba53b1b2233e630fe84576a52202ea3ede0ad6ac9791394815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c317443a68bdc4ba53b1b2233e630fe84576a52202ea3ede0ad6ac9791394815->leave($__internal_c317443a68bdc4ba53b1b2233e630fe84576a52202ea3ede0ad6ac9791394815_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
