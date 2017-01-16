<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_6ead3fb0513e1fe70b1f700a998e3b03ae9475f83b2ba4697a3554e705eb83d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:password_already_requested.html.twig", 1);
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
        $__internal_6cfed04d033a5be7855bf65250d774375109ee4aa113aee8bc3fb8efc8f41b33 = $this->env->getExtension("native_profiler");
        $__internal_6cfed04d033a5be7855bf65250d774375109ee4aa113aee8bc3fb8efc8f41b33->enter($__internal_6cfed04d033a5be7855bf65250d774375109ee4aa113aee8bc3fb8efc8f41b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cfed04d033a5be7855bf65250d774375109ee4aa113aee8bc3fb8efc8f41b33->leave($__internal_6cfed04d033a5be7855bf65250d774375109ee4aa113aee8bc3fb8efc8f41b33_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_330a010da12ec19e753726473cac4c51e073cd91b9027c2f1f9783d509b7196a = $this->env->getExtension("native_profiler");
        $__internal_330a010da12ec19e753726473cac4c51e073cd91b9027c2f1f9783d509b7196a->enter($__internal_330a010da12ec19e753726473cac4c51e073cd91b9027c2f1f9783d509b7196a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_330a010da12ec19e753726473cac4c51e073cd91b9027c2f1f9783d509b7196a->leave($__internal_330a010da12ec19e753726473cac4c51e073cd91b9027c2f1f9783d509b7196a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
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
