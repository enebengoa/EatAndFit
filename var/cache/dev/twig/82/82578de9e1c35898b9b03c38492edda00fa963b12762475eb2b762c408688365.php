<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_bcef4b14464989786b5bb435caaa1289db7b07f7ca196829ece1085771e6e875 extends Twig_Template
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
        $__internal_8d55d84a67e924c3734753338bf21d1ee651ce79674d69496a01cf9baad760b3 = $this->env->getExtension("native_profiler");
        $__internal_8d55d84a67e924c3734753338bf21d1ee651ce79674d69496a01cf9baad760b3->enter($__internal_8d55d84a67e924c3734753338bf21d1ee651ce79674d69496a01cf9baad760b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8d55d84a67e924c3734753338bf21d1ee651ce79674d69496a01cf9baad760b3->leave($__internal_8d55d84a67e924c3734753338bf21d1ee651ce79674d69496a01cf9baad760b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
