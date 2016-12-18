<?php

/* @Admin/TemaForo/add.html.twig */
class __TwigTemplate_305691a5db1550fbad06aa1b7b752513b4795ec9fc6d460db4de58a4b1c3f986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/TemaForo/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f5b223a4a4d5b1620ad4e35d59242c9342f2be9a81ad76ecc7614bb871787f7 = $this->env->getExtension("native_profiler");
        $__internal_7f5b223a4a4d5b1620ad4e35d59242c9342f2be9a81ad76ecc7614bb871787f7->enter($__internal_7f5b223a4a4d5b1620ad4e35d59242c9342f2be9a81ad76ecc7614bb871787f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/TemaForo/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f5b223a4a4d5b1620ad4e35d59242c9342f2be9a81ad76ecc7614bb871787f7->leave($__internal_7f5b223a4a4d5b1620ad4e35d59242c9342f2be9a81ad76ecc7614bb871787f7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9354b72863a6aac97770128e20d772f33c181a59d1190b2e7d1b772f84ce391 = $this->env->getExtension("native_profiler");
        $__internal_a9354b72863a6aac97770128e20d772f33c181a59d1190b2e7d1b772f84ce391->enter($__internal_a9354b72863a6aac97770128e20d772f33c181a59d1190b2e7d1b772f84ce391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir tema de foro ";
        
        $__internal_a9354b72863a6aac97770128e20d772f33c181a59d1190b2e7d1b772f84ce391->leave($__internal_a9354b72863a6aac97770128e20d772f33c181a59d1190b2e7d1b772f84ce391_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_249c12fcdf419f5c9b212958c6bb6000580f3cc9d47d180287ab98d0b841856a = $this->env->getExtension("native_profiler");
        $__internal_249c12fcdf419f5c9b212958c6bb6000580f3cc9d47d180287ab98d0b841856a->enter($__internal_249c12fcdf419f5c9b212958c6bb6000580f3cc9d47d180287ab98d0b841856a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_249c12fcdf419f5c9b212958c6bb6000580f3cc9d47d180287ab98d0b841856a->leave($__internal_249c12fcdf419f5c9b212958c6bb6000580f3cc9d47d180287ab98d0b841856a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_343ea12a991a234c07aab056a05306779c8216aa2793143edfac79fc26d3cea7 = $this->env->getExtension("native_profiler");
        $__internal_343ea12a991a234c07aab056a05306779c8216aa2793143edfac79fc26d3cea7->enter($__internal_343ea12a991a234c07aab056a05306779c8216aa2793143edfac79fc26d3cea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">FOROS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nuevo foro
                                            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("App_admin_listTemaForo");
        echo "\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                       ";
        // line 30
        $this->loadTemplate("AdminBundle:TemaForo:form.html.twig", "@Admin/TemaForo/add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_343ea12a991a234c07aab056a05306779c8216aa2793143edfac79fc26d3cea7->leave($__internal_343ea12a991a234c07aab056a05306779c8216aa2793143edfac79fc26d3cea7_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/TemaForo/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  99 => 30,  88 => 22,  73 => 9,  67 => 8,  58 => 6,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Añadir tema de foro {% endblock %}
{% block stylesheets %}
{{ parent() }}
\t<link href=\"{{ asset('css/form.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">FOROS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nuevo foro
                                            <a href=\"{{ path('App_admin_listTemaForo')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                       {% include \"AdminBundle:TemaForo:form.html.twig\" %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
{% endblock %}";
    }
}
