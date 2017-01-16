<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_88733636b9cf79e08c97c6c0c606c3fdd170f16ac221af83a496ffefac17286b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39e79497070c3d745a693b62897acae72bfbe6f0ffb635dd3baf9d2669d7b42a = $this->env->getExtension("native_profiler");
        $__internal_39e79497070c3d745a693b62897acae72bfbe6f0ffb635dd3baf9d2669d7b42a->enter($__internal_39e79497070c3d745a693b62897acae72bfbe6f0ffb635dd3baf9d2669d7b42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39e79497070c3d745a693b62897acae72bfbe6f0ffb635dd3baf9d2669d7b42a->leave($__internal_39e79497070c3d745a693b62897acae72bfbe6f0ffb635dd3baf9d2669d7b42a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81d8edf8d3f616f48a68872f29d05a49023f462b91146dc1a546ed9af6e0e840 = $this->env->getExtension("native_profiler");
        $__internal_81d8edf8d3f616f48a68872f29d05a49023f462b91146dc1a546ed9af6e0e840->enter($__internal_81d8edf8d3f616f48a68872f29d05a49023f462b91146dc1a546ed9af6e0e840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_81d8edf8d3f616f48a68872f29d05a49023f462b91146dc1a546ed9af6e0e840->leave($__internal_81d8edf8d3f616f48a68872f29d05a49023f462b91146dc1a546ed9af6e0e840_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
