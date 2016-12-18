<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7befef2178ad85f35388ad520105c52984bb298109e1de3840a8be676bb4d103 extends Twig_Template
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
        $__internal_03d33b3fec2e769ba6c3a9fdec4678051683f28baba9526a20df07d39fc7533a = $this->env->getExtension("native_profiler");
        $__internal_03d33b3fec2e769ba6c3a9fdec4678051683f28baba9526a20df07d39fc7533a->enter($__internal_03d33b3fec2e769ba6c3a9fdec4678051683f28baba9526a20df07d39fc7533a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_03d33b3fec2e769ba6c3a9fdec4678051683f28baba9526a20df07d39fc7533a->leave($__internal_03d33b3fec2e769ba6c3a9fdec4678051683f28baba9526a20df07d39fc7533a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
