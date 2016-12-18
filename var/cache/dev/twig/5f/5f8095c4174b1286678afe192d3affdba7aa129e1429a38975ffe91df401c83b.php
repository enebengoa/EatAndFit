<?php

/* @Admin/HoraIngesta/add.html.twig */
class __TwigTemplate_c5ab387369aa2e076b8f1983f7bb5cba1a7f5d5e82c8c3c1a9e03130badbc9d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/HoraIngesta/add.html.twig", 1);
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
        $__internal_8e63d52da92262aac640068d31a3096e590fc412615fa9beff5e6258a9303c2c = $this->env->getExtension("native_profiler");
        $__internal_8e63d52da92262aac640068d31a3096e590fc412615fa9beff5e6258a9303c2c->enter($__internal_8e63d52da92262aac640068d31a3096e590fc412615fa9beff5e6258a9303c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/HoraIngesta/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e63d52da92262aac640068d31a3096e590fc412615fa9beff5e6258a9303c2c->leave($__internal_8e63d52da92262aac640068d31a3096e590fc412615fa9beff5e6258a9303c2c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_124eda05dee6981ff3973efdf8e07333751d2e3247bf60b95d3406242cc81f08 = $this->env->getExtension("native_profiler");
        $__internal_124eda05dee6981ff3973efdf8e07333751d2e3247bf60b95d3406242cc81f08->enter($__internal_124eda05dee6981ff3973efdf8e07333751d2e3247bf60b95d3406242cc81f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir hora de ingesta ";
        
        $__internal_124eda05dee6981ff3973efdf8e07333751d2e3247bf60b95d3406242cc81f08->leave($__internal_124eda05dee6981ff3973efdf8e07333751d2e3247bf60b95d3406242cc81f08_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1362f7a05aaa56a7d5f387eedc53bc2c490ccdbe8618ba86c3e2c6bcbc1b5044 = $this->env->getExtension("native_profiler");
        $__internal_1362f7a05aaa56a7d5f387eedc53bc2c490ccdbe8618ba86c3e2c6bcbc1b5044->enter($__internal_1362f7a05aaa56a7d5f387eedc53bc2c490ccdbe8618ba86c3e2c6bcbc1b5044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_1362f7a05aaa56a7d5f387eedc53bc2c490ccdbe8618ba86c3e2c6bcbc1b5044->leave($__internal_1362f7a05aaa56a7d5f387eedc53bc2c490ccdbe8618ba86c3e2c6bcbc1b5044_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e8cf93f322617801ae47dc75960a7b4c5cbdf280aa9ae351fa455f62aaa39b7 = $this->env->getExtension("native_profiler");
        $__internal_5e8cf93f322617801ae47dc75960a7b4c5cbdf280aa9ae351fa455f62aaa39b7->enter($__internal_5e8cf93f322617801ae47dc75960a7b4c5cbdf280aa9ae351fa455f62aaa39b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">HORAS DE INGESTA</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nueva hora de ingesta
                                            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("App_admin_listHoraIngesta");
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
        $this->loadTemplate("AdminBundle:HoraIngesta:form.html.twig", "@Admin/HoraIngesta/add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_5e8cf93f322617801ae47dc75960a7b4c5cbdf280aa9ae351fa455f62aaa39b7->leave($__internal_5e8cf93f322617801ae47dc75960a7b4c5cbdf280aa9ae351fa455f62aaa39b7_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/HoraIngesta/add.html.twig";
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

{% block title %}Añadir hora de ingesta {% endblock %}
{% block stylesheets %}
{{ parent() }}
\t<link href=\"{{ asset('css/form.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">HORAS DE INGESTA</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nueva hora de ingesta
                                            <a href=\"{{ path('App_admin_listHoraIngesta')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                       {% include \"AdminBundle:HoraIngesta:form.html.twig\" %}
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
