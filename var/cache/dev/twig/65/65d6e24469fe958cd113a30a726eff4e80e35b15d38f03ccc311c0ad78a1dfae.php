<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8026c01a92f4f44cea1eb24ffc4997c50fb7999962c3e2d7633cdfdf28409389 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_5d3182df0ddf416869f7ca398a69d888fe0d2de2f023effa38e746003c0127da = $this->env->getExtension("native_profiler");
        $__internal_5d3182df0ddf416869f7ca398a69d888fe0d2de2f023effa38e746003c0127da->enter($__internal_5d3182df0ddf416869f7ca398a69d888fe0d2de2f023effa38e746003c0127da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d3182df0ddf416869f7ca398a69d888fe0d2de2f023effa38e746003c0127da->leave($__internal_5d3182df0ddf416869f7ca398a69d888fe0d2de2f023effa38e746003c0127da_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_98b4d4f12e90be16643665ec9e80a25f916e4b0dad7a819f286a3ea0fea634e8 = $this->env->getExtension("native_profiler");
        $__internal_98b4d4f12e90be16643665ec9e80a25f916e4b0dad7a819f286a3ea0fea634e8->enter($__internal_98b4d4f12e90be16643665ec9e80a25f916e4b0dad7a819f286a3ea0fea634e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_98b4d4f12e90be16643665ec9e80a25f916e4b0dad7a819f286a3ea0fea634e8->leave($__internal_98b4d4f12e90be16643665ec9e80a25f916e4b0dad7a819f286a3ea0fea634e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e938340660a4ef910aca0ff41fca9f952426457bb84d8a29d1edd518e4de48d8 = $this->env->getExtension("native_profiler");
        $__internal_e938340660a4ef910aca0ff41fca9f952426457bb84d8a29d1edd518e4de48d8->enter($__internal_e938340660a4ef910aca0ff41fca9f952426457bb84d8a29d1edd518e4de48d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e938340660a4ef910aca0ff41fca9f952426457bb84d8a29d1edd518e4de48d8->leave($__internal_e938340660a4ef910aca0ff41fca9f952426457bb84d8a29d1edd518e4de48d8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c8d3ca7c17585935db0761ecffdd2b3a763320dd26ce6b5505a68222119aba4 = $this->env->getExtension("native_profiler");
        $__internal_5c8d3ca7c17585935db0761ecffdd2b3a763320dd26ce6b5505a68222119aba4->enter($__internal_5c8d3ca7c17585935db0761ecffdd2b3a763320dd26ce6b5505a68222119aba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5c8d3ca7c17585935db0761ecffdd2b3a763320dd26ce6b5505a68222119aba4->leave($__internal_5c8d3ca7c17585935db0761ecffdd2b3a763320dd26ce6b5505a68222119aba4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
