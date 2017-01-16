<?php

/* @User/Servicio/menuServicio.html.twig */
class __TwigTemplate_8946101f417744501a1bdf1c773ecda2a6105557bfe2d0b7453c4b8a14875e1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "@User/Servicio/menuServicio.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseuser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5221faea6617cb9edc1ce7ad8b4c87a8a69f73df4e1a35b7607cb6c111b5c0ef = $this->env->getExtension("native_profiler");
        $__internal_5221faea6617cb9edc1ce7ad8b4c87a8a69f73df4e1a35b7607cb6c111b5c0ef->enter($__internal_5221faea6617cb9edc1ce7ad8b4c87a8a69f73df4e1a35b7607cb6c111b5c0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Servicio/menuServicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5221faea6617cb9edc1ce7ad8b4c87a8a69f73df4e1a35b7607cb6c111b5c0ef->leave($__internal_5221faea6617cb9edc1ce7ad8b4c87a8a69f73df4e1a35b7607cb6c111b5c0ef_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f4348c498bfdcfacc60dd8b5b6e5978d7831b204637adb83dd78000d2c79673 = $this->env->getExtension("native_profiler");
        $__internal_8f4348c498bfdcfacc60dd8b5b6e5978d7831b204637adb83dd78000d2c79673->enter($__internal_8f4348c498bfdcfacc60dd8b5b6e5978d7831b204637adb83dd78000d2c79673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_8f4348c498bfdcfacc60dd8b5b6e5978d7831b204637adb83dd78000d2c79673->leave($__internal_8f4348c498bfdcfacc60dd8b5b6e5978d7831b204637adb83dd78000d2c79673_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5e0393bc54dd0285c5560fb010c75313b326f7e8e94727050fee84509b5a076 = $this->env->getExtension("native_profiler");
        $__internal_b5e0393bc54dd0285c5560fb010c75313b326f7e8e94727050fee84509b5a076->enter($__internal_b5e0393bc54dd0285c5560fb010c75313b326f7e8e94727050fee84509b5a076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_b5e0393bc54dd0285c5560fb010c75313b326f7e8e94727050fee84509b5a076->leave($__internal_b5e0393bc54dd0285c5560fb010c75313b326f7e8e94727050fee84509b5a076_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0b783a582e27554f98ce28a43d1cb5af998f815cc719330c1488e0fca8fd341 = $this->env->getExtension("native_profiler");
        $__internal_d0b783a582e27554f98ce28a43d1cb5af998f815cc719330c1488e0fca8fd341->enter($__internal_d0b783a582e27554f98ce28a43d1cb5af998f815cc719330c1488e0fca8fd341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_d0b783a582e27554f98ce28a43d1cb5af998f815cc719330c1488e0fca8fd341->leave($__internal_d0b783a582e27554f98ce28a43d1cb5af998f815cc719330c1488e0fca8fd341_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_afa29c7b4d959d78b760ae58f47980263946210bd109d7b9ebfdcb31f7787119 = $this->env->getExtension("native_profiler");
        $__internal_afa29c7b4d959d78b760ae58f47980263946210bd109d7b9ebfdcb31f7787119->enter($__internal_afa29c7b4d959d78b760ae58f47980263946210bd109d7b9ebfdcb31f7787119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
<div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">
            <div class=\"content-mid\">
                <a  href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("App_user_listForo");
        echo "\">
                    <div class=\"col-md-4 food-grid animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>FORO</h4>
                          <div class=\"top\">
                            <div class=\"back face\" >
                            <p>En caso de que tengas una duda que quieras compartir con el resto de usuarios podrás crear nuevos temas para el foro para lograr así obtener diferentes respuestas a la duda planteada</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("App_user_listMenu");
        echo "\">
                    <div class=\"col-md-4 food-grid animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>MENÚ</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Con las diferentes recetas disponibles serás capaz de crear menús totalmente personalizados a tus necesidades</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("App_user_listLista");
        echo "\">
                    <div class=\"col-md-4 food-grid animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>LISTA DE COMPRA</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Por último, a través de esta herramienta serás capaz de crear diferentes listas de mercado conformada por los ingredientes de las recetas y menús seleccionados</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_afa29c7b4d959d78b760ae58f47980263946210bd109d7b9ebfdcb31f7787119->leave($__internal_afa29c7b4d959d78b760ae58f47980263946210bd109d7b9ebfdcb31f7787119_prof);

    }

    public function getTemplateName()
    {
        return "@User/Servicio/menuServicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 43,  112 => 31,  97 => 19,  90 => 14,  84 => 13,  76 => 10,  70 => 9,  58 => 4,  48 => 5,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseuser.html.twig' %}
{% block stylesheets %}

{% block title %}Eat&Fit{% endblock%}
{{ parent() }}

{% endblock %}

{% block head %}
\t
{% endblock %}

{% block body %}

<div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">
            <div class=\"content-mid\">
                <a  href=\"{{ path('App_user_listForo') }}\">
                    <div class=\"col-md-4 food-grid animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>FORO</h4>
                          <div class=\"top\">
                            <div class=\"back face\" >
                            <p>En caso de que tengas una duda que quieras compartir con el resto de usuarios podrás crear nuevos temas para el foro para lograr así obtener diferentes respuestas a la duda planteada</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"{{ path('App_user_listMenu') }}\">
                    <div class=\"col-md-4 food-grid animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>MENÚ</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Con las diferentes recetas disponibles serás capaz de crear menús totalmente personalizados a tus necesidades</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"{{ path('App_user_listLista') }}\">
                    <div class=\"col-md-4 food-grid animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>LISTA DE COMPRA</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Por último, a través de esta herramienta serás capaz de crear diferentes listas de mercado conformada por los ingredientes de las recetas y menús seleccionados</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>

{% endblock %}";
    }
}
