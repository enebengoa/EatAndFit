<?php

/* @Admin/Menu/add.html.twig */
class __TwigTemplate_7a966bf57cfc9282143375f15a1d8481f35d87925ec7d6c138bc04e929f0cbd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Menu/add.html.twig", 1);
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
        $__internal_c45c1e0b744eb3c7b2865294c4f411140a8c7e3e312bb9408785ff1bf1f26568 = $this->env->getExtension("native_profiler");
        $__internal_c45c1e0b744eb3c7b2865294c4f411140a8c7e3e312bb9408785ff1bf1f26568->enter($__internal_c45c1e0b744eb3c7b2865294c4f411140a8c7e3e312bb9408785ff1bf1f26568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Menu/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c45c1e0b744eb3c7b2865294c4f411140a8c7e3e312bb9408785ff1bf1f26568->leave($__internal_c45c1e0b744eb3c7b2865294c4f411140a8c7e3e312bb9408785ff1bf1f26568_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a76b528b5ccd4512003a5de21db678651613ca717299216fcb7938bafd5418b = $this->env->getExtension("native_profiler");
        $__internal_0a76b528b5ccd4512003a5de21db678651613ca717299216fcb7938bafd5418b->enter($__internal_0a76b528b5ccd4512003a5de21db678651613ca717299216fcb7938bafd5418b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir menú ";
        
        $__internal_0a76b528b5ccd4512003a5de21db678651613ca717299216fcb7938bafd5418b->leave($__internal_0a76b528b5ccd4512003a5de21db678651613ca717299216fcb7938bafd5418b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3594ae98bc6981ddfd3d8f5896e15864785e91eaf1ce4f229e9383953d14ae74 = $this->env->getExtension("native_profiler");
        $__internal_3594ae98bc6981ddfd3d8f5896e15864785e91eaf1ce4f229e9383953d14ae74->enter($__internal_3594ae98bc6981ddfd3d8f5896e15864785e91eaf1ce4f229e9383953d14ae74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_3594ae98bc6981ddfd3d8f5896e15864785e91eaf1ce4f229e9383953d14ae74->leave($__internal_3594ae98bc6981ddfd3d8f5896e15864785e91eaf1ce4f229e9383953d14ae74_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3a9517dd70b0c012bdb299231a5bafd9f71897e9e40ec0beac20bd747184455 = $this->env->getExtension("native_profiler");
        $__internal_f3a9517dd70b0c012bdb299231a5bafd9f71897e9e40ec0beac20bd747184455->enter($__internal_f3a9517dd70b0c012bdb299231a5bafd9f71897e9e40ec0beac20bd747184455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">MENÚS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nuevo menú 
                                            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("App_admin_listMenu");
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
        $this->loadTemplate("AdminBundle:Menu:form.html.twig", "@Admin/Menu/add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_f3a9517dd70b0c012bdb299231a5bafd9f71897e9e40ec0beac20bd747184455->leave($__internal_f3a9517dd70b0c012bdb299231a5bafd9f71897e9e40ec0beac20bd747184455_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Menu/add.html.twig";
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

{% block title %}Añadir menú {% endblock %}
{% block stylesheets %}
{{ parent() }}
\t<link href=\"{{ asset('css/form.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">MENÚS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nuevo menú 
                                            <a href=\"{{ path('App_admin_listMenu')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                        {% include \"AdminBundle:Menu:form.html.twig\" %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
{% endblock %} 
";
    }
}
