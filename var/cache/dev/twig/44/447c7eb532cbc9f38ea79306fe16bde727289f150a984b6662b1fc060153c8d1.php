<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_9d53cdfd0702be856b891f51629d5e5de85100622eaa136975fd4c48dff1632c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_19ff7b39ad4e67d30df6ac4c3dc523cea4b9b69f284745e58a4088c86f34352a = $this->env->getExtension("native_profiler");
        $__internal_19ff7b39ad4e67d30df6ac4c3dc523cea4b9b69f284745e58a4088c86f34352a->enter($__internal_19ff7b39ad4e67d30df6ac4c3dc523cea4b9b69f284745e58a4088c86f34352a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19ff7b39ad4e67d30df6ac4c3dc523cea4b9b69f284745e58a4088c86f34352a->leave($__internal_19ff7b39ad4e67d30df6ac4c3dc523cea4b9b69f284745e58a4088c86f34352a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b924dc8b94ac5cf2884e6236c5753ab7431ae7e0630d3f28cc70edf22cc7724 = $this->env->getExtension("native_profiler");
        $__internal_8b924dc8b94ac5cf2884e6236c5753ab7431ae7e0630d3f28cc70edf22cc7724->enter($__internal_8b924dc8b94ac5cf2884e6236c5753ab7431ae7e0630d3f28cc70edf22cc7724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_8b924dc8b94ac5cf2884e6236c5753ab7431ae7e0630d3f28cc70edf22cc7724->leave($__internal_8b924dc8b94ac5cf2884e6236c5753ab7431ae7e0630d3f28cc70edf22cc7724_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
