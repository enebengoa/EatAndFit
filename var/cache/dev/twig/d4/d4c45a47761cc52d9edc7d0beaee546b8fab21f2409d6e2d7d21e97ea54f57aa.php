<?php

/* AdminBundle:Tecnica:add.html.twig */
class __TwigTemplate_2339c03e1d89ff8a58731a2e19bfe3e5823502e33365bc362a7aedc99fb549e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Tecnica:add.html.twig", 1);
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
        $__internal_d289b0a69bc6111efbf6e72ed90eedb0d7cf8fa53b180079d99da1489a8c9e45 = $this->env->getExtension("native_profiler");
        $__internal_d289b0a69bc6111efbf6e72ed90eedb0d7cf8fa53b180079d99da1489a8c9e45->enter($__internal_d289b0a69bc6111efbf6e72ed90eedb0d7cf8fa53b180079d99da1489a8c9e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Tecnica:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d289b0a69bc6111efbf6e72ed90eedb0d7cf8fa53b180079d99da1489a8c9e45->leave($__internal_d289b0a69bc6111efbf6e72ed90eedb0d7cf8fa53b180079d99da1489a8c9e45_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_864c5a7f93429e578eec6e6c562fe85f838de13e157b104c03628a4e5392ba90 = $this->env->getExtension("native_profiler");
        $__internal_864c5a7f93429e578eec6e6c562fe85f838de13e157b104c03628a4e5392ba90->enter($__internal_864c5a7f93429e578eec6e6c562fe85f838de13e157b104c03628a4e5392ba90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir técnica";
        
        $__internal_864c5a7f93429e578eec6e6c562fe85f838de13e157b104c03628a4e5392ba90->leave($__internal_864c5a7f93429e578eec6e6c562fe85f838de13e157b104c03628a4e5392ba90_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cb54b1a906aefc20497258599625c389dd2bdeac247909e9dac2a09d8df13c0c = $this->env->getExtension("native_profiler");
        $__internal_cb54b1a906aefc20497258599625c389dd2bdeac247909e9dac2a09d8df13c0c->enter($__internal_cb54b1a906aefc20497258599625c389dd2bdeac247909e9dac2a09d8df13c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_cb54b1a906aefc20497258599625c389dd2bdeac247909e9dac2a09d8df13c0c->leave($__internal_cb54b1a906aefc20497258599625c389dd2bdeac247909e9dac2a09d8df13c0c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_358118d010da23403f61d6716bf04a24796e06217bcbef649eaa4730ad93582c = $this->env->getExtension("native_profiler");
        $__internal_358118d010da23403f61d6716bf04a24796e06217bcbef649eaa4730ad93582c->enter($__internal_358118d010da23403f61d6716bf04a24796e06217bcbef649eaa4730ad93582c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">TÉCNICAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nueva técnica 
                                            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("App_admin_listTecnica");
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
        $this->loadTemplate("AdminBundle:Tecnica:form.html.twig", "AdminBundle:Tecnica:add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_358118d010da23403f61d6716bf04a24796e06217bcbef649eaa4730ad93582c->leave($__internal_358118d010da23403f61d6716bf04a24796e06217bcbef649eaa4730ad93582c_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Tecnica:add.html.twig";
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

{% block title %}Añadir técnica{% endblock %}
{% block stylesheets %}
{{ parent() }}
\t<link href=\"{{ asset('css/form.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">TÉCNICAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nueva técnica 
                                            <a href=\"{{ path('App_admin_listTecnica')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                        {% include \"AdminBundle:Tecnica:form.html.twig\" %}
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
