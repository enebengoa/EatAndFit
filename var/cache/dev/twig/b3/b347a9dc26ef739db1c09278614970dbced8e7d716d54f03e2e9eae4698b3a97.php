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
        $__internal_39227e8430df46f4ca40dd3c7431bf019bda9e36303ad9e47a2c26fd61f7853f = $this->env->getExtension("native_profiler");
        $__internal_39227e8430df46f4ca40dd3c7431bf019bda9e36303ad9e47a2c26fd61f7853f->enter($__internal_39227e8430df46f4ca40dd3c7431bf019bda9e36303ad9e47a2c26fd61f7853f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39227e8430df46f4ca40dd3c7431bf019bda9e36303ad9e47a2c26fd61f7853f->leave($__internal_39227e8430df46f4ca40dd3c7431bf019bda9e36303ad9e47a2c26fd61f7853f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d02b619224581971be84ece85c0620ca22c8fb70d0c4e3bb44f4e2358829248f = $this->env->getExtension("native_profiler");
        $__internal_d02b619224581971be84ece85c0620ca22c8fb70d0c4e3bb44f4e2358829248f->enter($__internal_d02b619224581971be84ece85c0620ca22c8fb70d0c4e3bb44f4e2358829248f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d02b619224581971be84ece85c0620ca22c8fb70d0c4e3bb44f4e2358829248f->leave($__internal_d02b619224581971be84ece85c0620ca22c8fb70d0c4e3bb44f4e2358829248f_prof);

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
