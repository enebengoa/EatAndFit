<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f17e1be5c90538510593c90a000f3be055a159521c2c6a33ec020e615722c831 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e50310d86f24d3060761a6d3679f7ec4d6238eafe71d3f26488bca3f2505d26c = $this->env->getExtension("native_profiler");
        $__internal_e50310d86f24d3060761a6d3679f7ec4d6238eafe71d3f26488bca3f2505d26c->enter($__internal_e50310d86f24d3060761a6d3679f7ec4d6238eafe71d3f26488bca3f2505d26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e50310d86f24d3060761a6d3679f7ec4d6238eafe71d3f26488bca3f2505d26c->leave($__internal_e50310d86f24d3060761a6d3679f7ec4d6238eafe71d3f26488bca3f2505d26c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2a43a239b8ec3b3eb7c13f23ffa0a79ee24dae456802470005ddbaab1edb915 = $this->env->getExtension("native_profiler");
        $__internal_c2a43a239b8ec3b3eb7c13f23ffa0a79ee24dae456802470005ddbaab1edb915->enter($__internal_c2a43a239b8ec3b3eb7c13f23ffa0a79ee24dae456802470005ddbaab1edb915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c2a43a239b8ec3b3eb7c13f23ffa0a79ee24dae456802470005ddbaab1edb915->leave($__internal_c2a43a239b8ec3b3eb7c13f23ffa0a79ee24dae456802470005ddbaab1edb915_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_09bab78a7e8debd1dbc5275d3e6aacc54bddc5e925e565a8461c9f47d4542def = $this->env->getExtension("native_profiler");
        $__internal_09bab78a7e8debd1dbc5275d3e6aacc54bddc5e925e565a8461c9f47d4542def->enter($__internal_09bab78a7e8debd1dbc5275d3e6aacc54bddc5e925e565a8461c9f47d4542def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_09bab78a7e8debd1dbc5275d3e6aacc54bddc5e925e565a8461c9f47d4542def->leave($__internal_09bab78a7e8debd1dbc5275d3e6aacc54bddc5e925e565a8461c9f47d4542def_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e998d12a5a1db1a2d654d2d2bd3723ad4e2ada83480fd3615cdad4de420722ba = $this->env->getExtension("native_profiler");
        $__internal_e998d12a5a1db1a2d654d2d2bd3723ad4e2ada83480fd3615cdad4de420722ba->enter($__internal_e998d12a5a1db1a2d654d2d2bd3723ad4e2ada83480fd3615cdad4de420722ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e998d12a5a1db1a2d654d2d2bd3723ad4e2ada83480fd3615cdad4de420722ba->leave($__internal_e998d12a5a1db1a2d654d2d2bd3723ad4e2ada83480fd3615cdad4de420722ba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
