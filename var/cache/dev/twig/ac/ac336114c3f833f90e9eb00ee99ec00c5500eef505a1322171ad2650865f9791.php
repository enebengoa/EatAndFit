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
        $__internal_65c931a0a54be00e5c82c171a5fc01cbc72aa51f61cbe893e09b6ddba6a07fe8 = $this->env->getExtension("native_profiler");
        $__internal_65c931a0a54be00e5c82c171a5fc01cbc72aa51f61cbe893e09b6ddba6a07fe8->enter($__internal_65c931a0a54be00e5c82c171a5fc01cbc72aa51f61cbe893e09b6ddba6a07fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65c931a0a54be00e5c82c171a5fc01cbc72aa51f61cbe893e09b6ddba6a07fe8->leave($__internal_65c931a0a54be00e5c82c171a5fc01cbc72aa51f61cbe893e09b6ddba6a07fe8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_395ce279b1e970a5af04986a67052b434e33e5cdd7d3bbc09b5112c512fede6b = $this->env->getExtension("native_profiler");
        $__internal_395ce279b1e970a5af04986a67052b434e33e5cdd7d3bbc09b5112c512fede6b->enter($__internal_395ce279b1e970a5af04986a67052b434e33e5cdd7d3bbc09b5112c512fede6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_395ce279b1e970a5af04986a67052b434e33e5cdd7d3bbc09b5112c512fede6b->leave($__internal_395ce279b1e970a5af04986a67052b434e33e5cdd7d3bbc09b5112c512fede6b_prof);

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
