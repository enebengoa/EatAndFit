<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_df4695586647a6abed4cf3f45a7c9747d7c69f7c7d9a9d71317c665f9d2879da extends Twig_Template
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
        $__internal_50bb7b2d94a6dbd4f804cd2d196a03dd9a0f30bf67c99eae67be6b70cdb711c9 = $this->env->getExtension("native_profiler");
        $__internal_50bb7b2d94a6dbd4f804cd2d196a03dd9a0f30bf67c99eae67be6b70cdb711c9->enter($__internal_50bb7b2d94a6dbd4f804cd2d196a03dd9a0f30bf67c99eae67be6b70cdb711c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_50bb7b2d94a6dbd4f804cd2d196a03dd9a0f30bf67c99eae67be6b70cdb711c9->leave($__internal_50bb7b2d94a6dbd4f804cd2d196a03dd9a0f30bf67c99eae67be6b70cdb711c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
