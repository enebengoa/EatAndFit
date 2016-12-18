<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_bbb5e745ad2ef1ef84f79f3b431c50272cade5762d3ae2edd00835d1d806af49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_0c4408272685203c0f830dad13d56120e9a31a5a0b0faa3c3ccfb9057ad4ce4d = $this->env->getExtension("native_profiler");
        $__internal_0c4408272685203c0f830dad13d56120e9a31a5a0b0faa3c3ccfb9057ad4ce4d->enter($__internal_0c4408272685203c0f830dad13d56120e9a31a5a0b0faa3c3ccfb9057ad4ce4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c4408272685203c0f830dad13d56120e9a31a5a0b0faa3c3ccfb9057ad4ce4d->leave($__internal_0c4408272685203c0f830dad13d56120e9a31a5a0b0faa3c3ccfb9057ad4ce4d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_205a5d53e15a0bcf1a2de678362bf806e49d5a6c4b48a99b6c9f90366deb1545 = $this->env->getExtension("native_profiler");
        $__internal_205a5d53e15a0bcf1a2de678362bf806e49d5a6c4b48a99b6c9f90366deb1545->enter($__internal_205a5d53e15a0bcf1a2de678362bf806e49d5a6c4b48a99b6c9f90366deb1545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_205a5d53e15a0bcf1a2de678362bf806e49d5a6c4b48a99b6c9f90366deb1545->leave($__internal_205a5d53e15a0bcf1a2de678362bf806e49d5a6c4b48a99b6c9f90366deb1545_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
";
    }
}
