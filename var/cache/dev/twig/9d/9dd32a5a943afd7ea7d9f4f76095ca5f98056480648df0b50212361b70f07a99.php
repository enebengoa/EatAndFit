<?php

/* AdminBundle:TipoReceta:add.html.twig */
class __TwigTemplate_88e1b3bc41a1c295ffc5ffe191f1fccd4222b3372d60305c861dc89ce999565f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:TipoReceta:add.html.twig", 1);
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
        $__internal_40f8885dc473938c8e845656178a04b86824cf356835babafab0df018d63c7f5 = $this->env->getExtension("native_profiler");
        $__internal_40f8885dc473938c8e845656178a04b86824cf356835babafab0df018d63c7f5->enter($__internal_40f8885dc473938c8e845656178a04b86824cf356835babafab0df018d63c7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:TipoReceta:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40f8885dc473938c8e845656178a04b86824cf356835babafab0df018d63c7f5->leave($__internal_40f8885dc473938c8e845656178a04b86824cf356835babafab0df018d63c7f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1ae3ecff70ea567b14dbb45d20a22e4466715041d1590b5d4ab8a8e061d97e3 = $this->env->getExtension("native_profiler");
        $__internal_c1ae3ecff70ea567b14dbb45d20a22e4466715041d1590b5d4ab8a8e061d97e3->enter($__internal_c1ae3ecff70ea567b14dbb45d20a22e4466715041d1590b5d4ab8a8e061d97e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir tipo de receta ";
        
        $__internal_c1ae3ecff70ea567b14dbb45d20a22e4466715041d1590b5d4ab8a8e061d97e3->leave($__internal_c1ae3ecff70ea567b14dbb45d20a22e4466715041d1590b5d4ab8a8e061d97e3_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26c31e79d054fb5d9eb79c7405504d3b019ee8e8f9fe2f1b01a6698305966edd = $this->env->getExtension("native_profiler");
        $__internal_26c31e79d054fb5d9eb79c7405504d3b019ee8e8f9fe2f1b01a6698305966edd->enter($__internal_26c31e79d054fb5d9eb79c7405504d3b019ee8e8f9fe2f1b01a6698305966edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_26c31e79d054fb5d9eb79c7405504d3b019ee8e8f9fe2f1b01a6698305966edd->leave($__internal_26c31e79d054fb5d9eb79c7405504d3b019ee8e8f9fe2f1b01a6698305966edd_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f23a76ba4e8e954fc53e16b16da831a3134f418b5c4675002944102072a08af5 = $this->env->getExtension("native_profiler");
        $__internal_f23a76ba4e8e954fc53e16b16da831a3134f418b5c4675002944102072a08af5->enter($__internal_f23a76ba4e8e954fc53e16b16da831a3134f418b5c4675002944102072a08af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:TipoReceta:form.html.twig", "AdminBundle:TipoReceta:add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_f23a76ba4e8e954fc53e16b16da831a3134f418b5c4675002944102072a08af5->leave($__internal_f23a76ba4e8e954fc53e16b16da831a3134f418b5c4675002944102072a08af5_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:TipoReceta:add.html.twig";
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
