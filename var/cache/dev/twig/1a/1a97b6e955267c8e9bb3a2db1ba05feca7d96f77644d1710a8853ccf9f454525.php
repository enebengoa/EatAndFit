<?php

/* AdminBundle:Tecnica:show.html.twig */
class __TwigTemplate_71bc7fdb922ef6a2a7e9637f2a2510954218849638f10954dc6be801052abff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "AdminBundle:Tecnica:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseuser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e254cf6bfc2feafbbc7ea70f9f1595dfb83242062961a86a7b00c0695ffc469 = $this->env->getExtension("native_profiler");
        $__internal_0e254cf6bfc2feafbbc7ea70f9f1595dfb83242062961a86a7b00c0695ffc469->enter($__internal_0e254cf6bfc2feafbbc7ea70f9f1595dfb83242062961a86a7b00c0695ffc469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Tecnica:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e254cf6bfc2feafbbc7ea70f9f1595dfb83242062961a86a7b00c0695ffc469->leave($__internal_0e254cf6bfc2feafbbc7ea70f9f1595dfb83242062961a86a7b00c0695ffc469_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7e844aea57fe345b430dbf7d8ae1df4fe9219138552b4dbdd193909e0a57885 = $this->env->getExtension("native_profiler");
        $__internal_e7e844aea57fe345b430dbf7d8ae1df4fe9219138552b4dbdd193909e0a57885->enter($__internal_e7e844aea57fe345b430dbf7d8ae1df4fe9219138552b4dbdd193909e0a57885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Técnica ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_e7e844aea57fe345b430dbf7d8ae1df4fe9219138552b4dbdd193909e0a57885->leave($__internal_e7e844aea57fe345b430dbf7d8ae1df4fe9219138552b4dbdd193909e0a57885_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6cfbd0d00ebc35a5d7765cc74dc6479dfc8a619915e1932f542f334c764e06c8 = $this->env->getExtension("native_profiler");
        $__internal_6cfbd0d00ebc35a5d7765cc74dc6479dfc8a619915e1932f542f334c764e06c8->enter($__internal_6cfbd0d00ebc35a5d7765cc74dc6479dfc8a619915e1932f542f334c764e06c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_6cfbd0d00ebc35a5d7765cc74dc6479dfc8a619915e1932f542f334c764e06c8->leave($__internal_6cfbd0d00ebc35a5d7765cc74dc6479dfc8a619915e1932f542f334c764e06c8_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa0bc02ad1616360a128c476c86a2b0109171f8c62732321bacf2fd2bf602448 = $this->env->getExtension("native_profiler");
        $__internal_fa0bc02ad1616360a128c476c86a2b0109171f8c62732321bacf2fd2bf602448->enter($__internal_fa0bc02ad1616360a128c476c86a2b0109171f8c62732321bacf2fd2bf602448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"page-title\">
        <span class=\"title\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        echo "</span>
    </div>

    <div class=\"row\">
       <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">   
                      
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_fa0bc02ad1616360a128c476c86a2b0109171f8c62732321bacf2fd2bf602448->leave($__internal_fa0bc02ad1616360a128c476c86a2b0109171f8c62732321bacf2fd2bf602448_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Tecnica:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 10,  70 => 9,  64 => 8,  55 => 5,  49 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseuser.html.twig' %}

{% block title %}Técnica {{entidad.nombre}}{% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}

{% block body %}
    <div class=\"page-title\">
        <span class=\"title\">{{entidad.nombre}}</span>
    </div>

    <div class=\"row\">
       <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">   
                      
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

";
    }
}
