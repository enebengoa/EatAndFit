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
        $__internal_b195c9cc3ee1e6e11636c3d5ab99e58bf60b70b326e4d9f4218bd1abf31ae015 = $this->env->getExtension("native_profiler");
        $__internal_b195c9cc3ee1e6e11636c3d5ab99e58bf60b70b326e4d9f4218bd1abf31ae015->enter($__internal_b195c9cc3ee1e6e11636c3d5ab99e58bf60b70b326e4d9f4218bd1abf31ae015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Tecnica:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b195c9cc3ee1e6e11636c3d5ab99e58bf60b70b326e4d9f4218bd1abf31ae015->leave($__internal_b195c9cc3ee1e6e11636c3d5ab99e58bf60b70b326e4d9f4218bd1abf31ae015_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_243bae36698ab231d33a5a0c04e0b4e7b644b20422b231a542c0bfadf0d9e293 = $this->env->getExtension("native_profiler");
        $__internal_243bae36698ab231d33a5a0c04e0b4e7b644b20422b231a542c0bfadf0d9e293->enter($__internal_243bae36698ab231d33a5a0c04e0b4e7b644b20422b231a542c0bfadf0d9e293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Técnica ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_243bae36698ab231d33a5a0c04e0b4e7b644b20422b231a542c0bfadf0d9e293->leave($__internal_243bae36698ab231d33a5a0c04e0b4e7b644b20422b231a542c0bfadf0d9e293_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_33fcb1327cd05fece94eb073aaa2a386ca86a94e7e6fd507e8cfb542b18ddd22 = $this->env->getExtension("native_profiler");
        $__internal_33fcb1327cd05fece94eb073aaa2a386ca86a94e7e6fd507e8cfb542b18ddd22->enter($__internal_33fcb1327cd05fece94eb073aaa2a386ca86a94e7e6fd507e8cfb542b18ddd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_33fcb1327cd05fece94eb073aaa2a386ca86a94e7e6fd507e8cfb542b18ddd22->leave($__internal_33fcb1327cd05fece94eb073aaa2a386ca86a94e7e6fd507e8cfb542b18ddd22_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e6d21b7fc16f44bde3a376485e0744fa4ac9597a9f5d69f278621a334e85325 = $this->env->getExtension("native_profiler");
        $__internal_5e6d21b7fc16f44bde3a376485e0744fa4ac9597a9f5d69f278621a334e85325->enter($__internal_5e6d21b7fc16f44bde3a376485e0744fa4ac9597a9f5d69f278621a334e85325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5e6d21b7fc16f44bde3a376485e0744fa4ac9597a9f5d69f278621a334e85325->leave($__internal_5e6d21b7fc16f44bde3a376485e0744fa4ac9597a9f5d69f278621a334e85325_prof);

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
