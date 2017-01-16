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
        $__internal_bd880662127cca7cf0ef00491a65c3779f0e9969ceda8da06b496ed40c8a652b = $this->env->getExtension("native_profiler");
        $__internal_bd880662127cca7cf0ef00491a65c3779f0e9969ceda8da06b496ed40c8a652b->enter($__internal_bd880662127cca7cf0ef00491a65c3779f0e9969ceda8da06b496ed40c8a652b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Tecnica/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd880662127cca7cf0ef00491a65c3779f0e9969ceda8da06b496ed40c8a652b->leave($__internal_bd880662127cca7cf0ef00491a65c3779f0e9969ceda8da06b496ed40c8a652b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_899af1a2cb4810f1c3006ef5676d761a31463bd7dd69c50bd490963178cf924a = $this->env->getExtension("native_profiler");
        $__internal_899af1a2cb4810f1c3006ef5676d761a31463bd7dd69c50bd490963178cf924a->enter($__internal_899af1a2cb4810f1c3006ef5676d761a31463bd7dd69c50bd490963178cf924a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Técnica ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_899af1a2cb4810f1c3006ef5676d761a31463bd7dd69c50bd490963178cf924a->leave($__internal_899af1a2cb4810f1c3006ef5676d761a31463bd7dd69c50bd490963178cf924a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d5d784e212fc52a619963941d34ab508951b064c8c43b71f6fd10c03b99e50a2 = $this->env->getExtension("native_profiler");
        $__internal_d5d784e212fc52a619963941d34ab508951b064c8c43b71f6fd10c03b99e50a2->enter($__internal_d5d784e212fc52a619963941d34ab508951b064c8c43b71f6fd10c03b99e50a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_d5d784e212fc52a619963941d34ab508951b064c8c43b71f6fd10c03b99e50a2->leave($__internal_d5d784e212fc52a619963941d34ab508951b064c8c43b71f6fd10c03b99e50a2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8a105fc95a6fae146144643d114a1206d5fd6fc726348e219d20eca8cce65e7 = $this->env->getExtension("native_profiler");
        $__internal_c8a105fc95a6fae146144643d114a1206d5fd6fc726348e219d20eca8cce65e7->enter($__internal_c8a105fc95a6fae146144643d114a1206d5fd6fc726348e219d20eca8cce65e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c8a105fc95a6fae146144643d114a1206d5fd6fc726348e219d20eca8cce65e7->leave($__internal_c8a105fc95a6fae146144643d114a1206d5fd6fc726348e219d20eca8cce65e7_prof);

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
