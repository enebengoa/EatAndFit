<?php

/* @Admin/TipoReceta/add.html.twig */
class __TwigTemplate_a11ad8052ebdc74654cc0be2a19bb6c4e2fadf7d25a263d3a3ab7843e8ad6a35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/TipoReceta/add.html.twig", 1);
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
        $__internal_41d2a37443fa46cc27b6edf9c20febe265e15ec9bc9446810e10fd8e2db569d3 = $this->env->getExtension("native_profiler");
        $__internal_41d2a37443fa46cc27b6edf9c20febe265e15ec9bc9446810e10fd8e2db569d3->enter($__internal_41d2a37443fa46cc27b6edf9c20febe265e15ec9bc9446810e10fd8e2db569d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/TipoReceta/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41d2a37443fa46cc27b6edf9c20febe265e15ec9bc9446810e10fd8e2db569d3->leave($__internal_41d2a37443fa46cc27b6edf9c20febe265e15ec9bc9446810e10fd8e2db569d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e2fbbdc6e18c37fbc67715cf877519f181e167185f1e4c51e84368cbaf2ba4e = $this->env->getExtension("native_profiler");
        $__internal_6e2fbbdc6e18c37fbc67715cf877519f181e167185f1e4c51e84368cbaf2ba4e->enter($__internal_6e2fbbdc6e18c37fbc67715cf877519f181e167185f1e4c51e84368cbaf2ba4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir tipo de receta ";
        
        $__internal_6e2fbbdc6e18c37fbc67715cf877519f181e167185f1e4c51e84368cbaf2ba4e->leave($__internal_6e2fbbdc6e18c37fbc67715cf877519f181e167185f1e4c51e84368cbaf2ba4e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c3d222dbe14aebacea503a9e4b495c3ef499116d94143d95feb443e8b259b77 = $this->env->getExtension("native_profiler");
        $__internal_1c3d222dbe14aebacea503a9e4b495c3ef499116d94143d95feb443e8b259b77->enter($__internal_1c3d222dbe14aebacea503a9e4b495c3ef499116d94143d95feb443e8b259b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_1c3d222dbe14aebacea503a9e4b495c3ef499116d94143d95feb443e8b259b77->leave($__internal_1c3d222dbe14aebacea503a9e4b495c3ef499116d94143d95feb443e8b259b77_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4b65d0a66d46401692c01cd9c67d2b8133ca05cb1237046762441cbed1cf346 = $this->env->getExtension("native_profiler");
        $__internal_c4b65d0a66d46401692c01cd9c67d2b8133ca05cb1237046762441cbed1cf346->enter($__internal_c4b65d0a66d46401692c01cd9c67d2b8133ca05cb1237046762441cbed1cf346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">TIPOS DE RECETAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nuevo tipos de receta
                                            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("App_admin_listTipoReceta");
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
        $this->loadTemplate("AdminBundle:TipoReceta:form.html.twig", "@Admin/TipoReceta/add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_c4b65d0a66d46401692c01cd9c67d2b8133ca05cb1237046762441cbed1cf346->leave($__internal_c4b65d0a66d46401692c01cd9c67d2b8133ca05cb1237046762441cbed1cf346_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/TipoReceta/add.html.twig";
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

{% block title %}Añadir tipo de receta {% endblock %}
{% block stylesheets %}
{{ parent() }}
\t<link href=\"{{ asset('css/form.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">TIPOS DE RECETAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nuevo tipos de receta
                                            <a href=\"{{ path('App_admin_listTipoReceta')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                       {% include \"AdminBundle:TipoReceta:form.html.twig\" %}
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
