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
        $__internal_c561072f83d3cddab8ef61363ddb84c9b14d8536910e6354e62116daa114f590 = $this->env->getExtension("native_profiler");
        $__internal_c561072f83d3cddab8ef61363ddb84c9b14d8536910e6354e62116daa114f590->enter($__internal_c561072f83d3cddab8ef61363ddb84c9b14d8536910e6354e62116daa114f590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c561072f83d3cddab8ef61363ddb84c9b14d8536910e6354e62116daa114f590->leave($__internal_c561072f83d3cddab8ef61363ddb84c9b14d8536910e6354e62116daa114f590_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99690f01f377c4f76269d9ce90e4bc6754c5ab5e811fcd32b7d3cfc09ce704d9 = $this->env->getExtension("native_profiler");
        $__internal_99690f01f377c4f76269d9ce90e4bc6754c5ab5e811fcd32b7d3cfc09ce704d9->enter($__internal_99690f01f377c4f76269d9ce90e4bc6754c5ab5e811fcd32b7d3cfc09ce704d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_99690f01f377c4f76269d9ce90e4bc6754c5ab5e811fcd32b7d3cfc09ce704d9->leave($__internal_99690f01f377c4f76269d9ce90e4bc6754c5ab5e811fcd32b7d3cfc09ce704d9_prof);

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
