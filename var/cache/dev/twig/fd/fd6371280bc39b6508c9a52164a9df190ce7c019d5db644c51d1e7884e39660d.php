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
        $__internal_aeaf9d96e740542b01a8fd26e6442b579ff9fb4e2224ff85db8be7d927b03c38 = $this->env->getExtension("native_profiler");
        $__internal_aeaf9d96e740542b01a8fd26e6442b579ff9fb4e2224ff85db8be7d927b03c38->enter($__internal_aeaf9d96e740542b01a8fd26e6442b579ff9fb4e2224ff85db8be7d927b03c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeaf9d96e740542b01a8fd26e6442b579ff9fb4e2224ff85db8be7d927b03c38->leave($__internal_aeaf9d96e740542b01a8fd26e6442b579ff9fb4e2224ff85db8be7d927b03c38_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ca617cbceee8602e0c2489101e73ea4a00aadfb3cfefa270af0c4f3fa701232 = $this->env->getExtension("native_profiler");
        $__internal_2ca617cbceee8602e0c2489101e73ea4a00aadfb3cfefa270af0c4f3fa701232->enter($__internal_2ca617cbceee8602e0c2489101e73ea4a00aadfb3cfefa270af0c4f3fa701232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2ca617cbceee8602e0c2489101e73ea4a00aadfb3cfefa270af0c4f3fa701232->leave($__internal_2ca617cbceee8602e0c2489101e73ea4a00aadfb3cfefa270af0c4f3fa701232_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6cbbc9e366354217386d874693a62a051464701d163e0825c35acd333d79dc1 = $this->env->getExtension("native_profiler");
        $__internal_b6cbbc9e366354217386d874693a62a051464701d163e0825c35acd333d79dc1->enter($__internal_b6cbbc9e366354217386d874693a62a051464701d163e0825c35acd333d79dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b6cbbc9e366354217386d874693a62a051464701d163e0825c35acd333d79dc1->leave($__internal_b6cbbc9e366354217386d874693a62a051464701d163e0825c35acd333d79dc1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4500dc9673709a85d2c2ebf604a54ccf5c2a67b76420c461c42f120dd4a0c793 = $this->env->getExtension("native_profiler");
        $__internal_4500dc9673709a85d2c2ebf604a54ccf5c2a67b76420c461c42f120dd4a0c793->enter($__internal_4500dc9673709a85d2c2ebf604a54ccf5c2a67b76420c461c42f120dd4a0c793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4500dc9673709a85d2c2ebf604a54ccf5c2a67b76420c461c42f120dd4a0c793->leave($__internal_4500dc9673709a85d2c2ebf604a54ccf5c2a67b76420c461c42f120dd4a0c793_prof);

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
