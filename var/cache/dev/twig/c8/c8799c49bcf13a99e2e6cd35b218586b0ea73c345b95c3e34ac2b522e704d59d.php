<?php

/* @Admin/HoraIngesta/modify.html.twig */
class __TwigTemplate_61439d871ae7e15408d93b488a7540fa416396ff9429fcdad2ead0ad91270437 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/HoraIngesta/modify.html.twig", 1);
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
        $__internal_13a910970a5bc5cc3d6de24982adc1dde0fe82ce863a3d4bbf6dbc9f374a1d09 = $this->env->getExtension("native_profiler");
        $__internal_13a910970a5bc5cc3d6de24982adc1dde0fe82ce863a3d4bbf6dbc9f374a1d09->enter($__internal_13a910970a5bc5cc3d6de24982adc1dde0fe82ce863a3d4bbf6dbc9f374a1d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/HoraIngesta/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a910970a5bc5cc3d6de24982adc1dde0fe82ce863a3d4bbf6dbc9f374a1d09->leave($__internal_13a910970a5bc5cc3d6de24982adc1dde0fe82ce863a3d4bbf6dbc9f374a1d09_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_665b0658a214ff35c545e990c899abcf5dca0d8eb33cbc36024f3f8acdeab5f4 = $this->env->getExtension("native_profiler");
        $__internal_665b0658a214ff35c545e990c899abcf5dca0d8eb33cbc36024f3f8acdeab5f4->enter($__internal_665b0658a214ff35c545e990c899abcf5dca0d8eb33cbc36024f3f8acdeab5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar hora de ingesta ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_665b0658a214ff35c545e990c899abcf5dca0d8eb33cbc36024f3f8acdeab5f4->leave($__internal_665b0658a214ff35c545e990c899abcf5dca0d8eb33cbc36024f3f8acdeab5f4_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5fc1379b4fabe19cc4b07a719e4b8ce4dc9f7e07d791c2efce7b1f0b09cffdc3 = $this->env->getExtension("native_profiler");
        $__internal_5fc1379b4fabe19cc4b07a719e4b8ce4dc9f7e07d791c2efce7b1f0b09cffdc3->enter($__internal_5fc1379b4fabe19cc4b07a719e4b8ce4dc9f7e07d791c2efce7b1f0b09cffdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_5fc1379b4fabe19cc4b07a719e4b8ce4dc9f7e07d791c2efce7b1f0b09cffdc3->leave($__internal_5fc1379b4fabe19cc4b07a719e4b8ce4dc9f7e07d791c2efce7b1f0b09cffdc3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b1edcb42599bad40dcc0d29ebbfbd0e41a36aa3834a3c6f274005adea06443c = $this->env->getExtension("native_profiler");
        $__internal_9b1edcb42599bad40dcc0d29ebbfbd0e41a36aa3834a3c6f274005adea06443c->enter($__internal_9b1edcb42599bad40dcc0d29ebbfbd0e41a36aa3834a3c6f274005adea06443c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
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
                                        <div class=\"title\">Ver/Modificar hora de ingesta\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        echo "\"
                                            <a href=\"";
        // line 21
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
        // line 29
        $this->loadTemplate("AdminBundle:HoraIngesta:form.html.twig", "@Admin/HoraIngesta/modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_9b1edcb42599bad40dcc0d29ebbfbd0e41a36aa3834a3c6f274005adea06443c->leave($__internal_9b1edcb42599bad40dcc0d29ebbfbd0e41a36aa3834a3c6f274005adea06443c_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/HoraIngesta/modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  99 => 29,  88 => 21,  84 => 20,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Ver/Modificar hora de ingesta {{entidad.nombre}}{% endblock %}
{% block stylesheets %}
{{ parent() }}
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
                                        <div class=\"title\">Ver/Modificar hora de ingesta\"{{entidad.nombre}}\"
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
{% endblock %}

";
    }
}
