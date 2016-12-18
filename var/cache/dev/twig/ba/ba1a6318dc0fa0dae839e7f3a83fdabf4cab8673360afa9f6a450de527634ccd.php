<?php

/* @Admin/Tecnica/show.html.twig */
class __TwigTemplate_3b9d86acfb59c48bf0b2bfad3024caecc385731500f3c972512d2065b13003de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "@Admin/Tecnica/show.html.twig", 1);
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
        $__internal_68d8bd57c33d7ad8b7ef6271472abd180b0368a4509dde0b79cb1bc598b85541 = $this->env->getExtension("native_profiler");
        $__internal_68d8bd57c33d7ad8b7ef6271472abd180b0368a4509dde0b79cb1bc598b85541->enter($__internal_68d8bd57c33d7ad8b7ef6271472abd180b0368a4509dde0b79cb1bc598b85541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Tecnica/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68d8bd57c33d7ad8b7ef6271472abd180b0368a4509dde0b79cb1bc598b85541->leave($__internal_68d8bd57c33d7ad8b7ef6271472abd180b0368a4509dde0b79cb1bc598b85541_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_50a9b11418ab970d3d5b80c379b4ba23e6e2df58b965883fcde55193def33bb4 = $this->env->getExtension("native_profiler");
        $__internal_50a9b11418ab970d3d5b80c379b4ba23e6e2df58b965883fcde55193def33bb4->enter($__internal_50a9b11418ab970d3d5b80c379b4ba23e6e2df58b965883fcde55193def33bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Técnica ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_50a9b11418ab970d3d5b80c379b4ba23e6e2df58b965883fcde55193def33bb4->leave($__internal_50a9b11418ab970d3d5b80c379b4ba23e6e2df58b965883fcde55193def33bb4_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa260ee46fc700786e90c00e13da102d025bd2a1e00b1429913d18ce1bab65a0 = $this->env->getExtension("native_profiler");
        $__internal_aa260ee46fc700786e90c00e13da102d025bd2a1e00b1429913d18ce1bab65a0->enter($__internal_aa260ee46fc700786e90c00e13da102d025bd2a1e00b1429913d18ce1bab65a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_aa260ee46fc700786e90c00e13da102d025bd2a1e00b1429913d18ce1bab65a0->leave($__internal_aa260ee46fc700786e90c00e13da102d025bd2a1e00b1429913d18ce1bab65a0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf783f93df3c2b899401a8a5b6f42b798861f42b74dbe42f86b0a025b78c6450 = $this->env->getExtension("native_profiler");
        $__internal_bf783f93df3c2b899401a8a5b6f42b798861f42b74dbe42f86b0a025b78c6450->enter($__internal_bf783f93df3c2b899401a8a5b6f42b798861f42b74dbe42f86b0a025b78c6450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bf783f93df3c2b899401a8a5b6f42b798861f42b74dbe42f86b0a025b78c6450->leave($__internal_bf783f93df3c2b899401a8a5b6f42b798861f42b74dbe42f86b0a025b78c6450_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Tecnica/show.html.twig";
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
