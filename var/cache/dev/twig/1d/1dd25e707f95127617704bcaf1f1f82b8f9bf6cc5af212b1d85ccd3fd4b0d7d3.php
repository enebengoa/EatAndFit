<?php

/* @Admin/Receta/add.html.twig */
class __TwigTemplate_5c4da0bf4befca015318ca6c0713204bed0aa1435f2f983e31f2378ccdff5624 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Receta/add.html.twig", 1);
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
        $__internal_db631e1801daa93e3ee1bcab9976b9cb796a21145a9f5fdc8def058cf25eb4c4 = $this->env->getExtension("native_profiler");
        $__internal_db631e1801daa93e3ee1bcab9976b9cb796a21145a9f5fdc8def058cf25eb4c4->enter($__internal_db631e1801daa93e3ee1bcab9976b9cb796a21145a9f5fdc8def058cf25eb4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Receta/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db631e1801daa93e3ee1bcab9976b9cb796a21145a9f5fdc8def058cf25eb4c4->leave($__internal_db631e1801daa93e3ee1bcab9976b9cb796a21145a9f5fdc8def058cf25eb4c4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_936f0514d3e9e892f570727e869ed608b60aba1636d2409f92cef4b67502229e = $this->env->getExtension("native_profiler");
        $__internal_936f0514d3e9e892f570727e869ed608b60aba1636d2409f92cef4b67502229e->enter($__internal_936f0514d3e9e892f570727e869ed608b60aba1636d2409f92cef4b67502229e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir receta ";
        
        $__internal_936f0514d3e9e892f570727e869ed608b60aba1636d2409f92cef4b67502229e->leave($__internal_936f0514d3e9e892f570727e869ed608b60aba1636d2409f92cef4b67502229e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d5d3e3cf30f3684bf03b4dc053834129017227072f688904924d5820e3c9b0f1 = $this->env->getExtension("native_profiler");
        $__internal_d5d3e3cf30f3684bf03b4dc053834129017227072f688904924d5820e3c9b0f1->enter($__internal_d5d3e3cf30f3684bf03b4dc053834129017227072f688904924d5820e3c9b0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_d5d3e3cf30f3684bf03b4dc053834129017227072f688904924d5820e3c9b0f1->leave($__internal_d5d3e3cf30f3684bf03b4dc053834129017227072f688904924d5820e3c9b0f1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9c818bf6f7ed1530fd9d1c9d3af75de0c7880a5f4466552e1385cf97f666781 = $this->env->getExtension("native_profiler");
        $__internal_f9c818bf6f7ed1530fd9d1c9d3af75de0c7880a5f4466552e1385cf97f666781->enter($__internal_f9c818bf6f7ed1530fd9d1c9d3af75de0c7880a5f4466552e1385cf97f666781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">RECETAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nueva receta 
                                            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("App_admin_listReceta");
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
        $this->loadTemplate("AdminBundle:Receta:form.html.twig", "@Admin/Receta/add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_f9c818bf6f7ed1530fd9d1c9d3af75de0c7880a5f4466552e1385cf97f666781->leave($__internal_f9c818bf6f7ed1530fd9d1c9d3af75de0c7880a5f4466552e1385cf97f666781_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Receta/add.html.twig";
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

{% block title %}Añadir receta {% endblock %}
{% block stylesheets %}
{{ parent() }}
\t<link href=\"{{ asset('css/form.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">RECETAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nueva receta 
                                            <a href=\"{{ path('App_admin_listReceta')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                        {% include \"AdminBundle:Receta:form.html.twig\" %}
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
