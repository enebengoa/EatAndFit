<?php

/* @FOSUser/Resetting/password_already_requested.html.twig */
class __TwigTemplate_afa6b39d5b4a47f8da1d35bb1d336040afa727cc274b1196fdc09e1f0419ca74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/password_already_requested.html.twig", 1);
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
        $__internal_d36e695f896908d9032732e3f134ecf1ad3b7b5e15866a881a249c0b83fc4e61 = $this->env->getExtension("native_profiler");
        $__internal_d36e695f896908d9032732e3f134ecf1ad3b7b5e15866a881a249c0b83fc4e61->enter($__internal_d36e695f896908d9032732e3f134ecf1ad3b7b5e15866a881a249c0b83fc4e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d36e695f896908d9032732e3f134ecf1ad3b7b5e15866a881a249c0b83fc4e61->leave($__internal_d36e695f896908d9032732e3f134ecf1ad3b7b5e15866a881a249c0b83fc4e61_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b9bb836fe8e5d3e301ac2ed5c2081782df60809ac2882e3b0b7730921e0e9d6 = $this->env->getExtension("native_profiler");
        $__internal_6b9bb836fe8e5d3e301ac2ed5c2081782df60809ac2882e3b0b7730921e0e9d6->enter($__internal_6b9bb836fe8e5d3e301ac2ed5c2081782df60809ac2882e3b0b7730921e0e9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6b9bb836fe8e5d3e301ac2ed5c2081782df60809ac2882e3b0b7730921e0e9d6->leave($__internal_6b9bb836fe8e5d3e301ac2ed5c2081782df60809ac2882e3b0b7730921e0e9d6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/password_already_requested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
";
    }
}
