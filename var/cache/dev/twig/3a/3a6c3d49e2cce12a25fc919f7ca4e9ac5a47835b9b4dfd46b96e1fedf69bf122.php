<?php

/* @User/Blog/menuBlog.html.twig */
class __TwigTemplate_cde679ea94c56a1825fdec18676d1d3de25d579eba1290c70866fc0fe7827e8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "@User/Blog/menuBlog.html.twig", 1);
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
        $__internal_add62c19e4670efc1cf47e04c2c28ee7eda1c289ddb84a13c13d2ce50ba03bc0 = $this->env->getExtension("native_profiler");
        $__internal_add62c19e4670efc1cf47e04c2c28ee7eda1c289ddb84a13c13d2ce50ba03bc0->enter($__internal_add62c19e4670efc1cf47e04c2c28ee7eda1c289ddb84a13c13d2ce50ba03bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Blog/menuBlog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_add62c19e4670efc1cf47e04c2c28ee7eda1c289ddb84a13c13d2ce50ba03bc0->leave($__internal_add62c19e4670efc1cf47e04c2c28ee7eda1c289ddb84a13c13d2ce50ba03bc0_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bae92ffb2d7988dadb47c739f9c02c04d96a844734decdd9849bde9b0aeca7ad = $this->env->getExtension("native_profiler");
        $__internal_bae92ffb2d7988dadb47c739f9c02c04d96a844734decdd9849bde9b0aeca7ad->enter($__internal_bae92ffb2d7988dadb47c739f9c02c04d96a844734decdd9849bde9b0aeca7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
        
        $__internal_bae92ffb2d7988dadb47c739f9c02c04d96a844734decdd9849bde9b0aeca7ad->leave($__internal_bae92ffb2d7988dadb47c739f9c02c04d96a844734decdd9849bde9b0aeca7ad_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c756e058821920287dfd5c962c5e4ceca1c163c9e8339a700f618010e0a7fc14 = $this->env->getExtension("native_profiler");
        $__internal_c756e058821920287dfd5c962c5e4ceca1c163c9e8339a700f618010e0a7fc14->enter($__internal_c756e058821920287dfd5c962c5e4ceca1c163c9e8339a700f618010e0a7fc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Eat&Fit";
        
        $__internal_c756e058821920287dfd5c962c5e4ceca1c163c9e8339a700f618010e0a7fc14->leave($__internal_c756e058821920287dfd5c962c5e4ceca1c163c9e8339a700f618010e0a7fc14_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_03eb0b1d66e3aa62880a59841fdf9494d2514156942e06fa26e07c431ebdb5cc = $this->env->getExtension("native_profiler");
        $__internal_03eb0b1d66e3aa62880a59841fdf9494d2514156942e06fa26e07c431ebdb5cc->enter($__internal_03eb0b1d66e3aa62880a59841fdf9494d2514156942e06fa26e07c431ebdb5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "\t
";
        
        $__internal_03eb0b1d66e3aa62880a59841fdf9494d2514156942e06fa26e07c431ebdb5cc->leave($__internal_03eb0b1d66e3aa62880a59841fdf9494d2514156942e06fa26e07c431ebdb5cc_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_f91f56c33ac5d6cd01b244bb49bab20049d0ab9b727ea0e9e28ef41a11f28f51 = $this->env->getExtension("native_profiler");
        $__internal_f91f56c33ac5d6cd01b244bb49bab20049d0ab9b727ea0e9e28ef41a11f28f51->enter($__internal_f91f56c33ac5d6cd01b244bb49bab20049d0ab9b727ea0e9e28ef41a11f28f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
<div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">
            <div class=\"content-mid\">
                <a  href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("App_user_listReceta");
        echo "\">
                    <div class=\"col-md-4 food-grid animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\" >
                        <div class=\" hover-fold\">
                          <h4>RECETAS</h4>
                          <div class=\"top\">
                            <div class=\"back face\" >
                            <p>Hay una gran variedad de recetas disponibles que se adaptan a tus gustos y necesidades </p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("App_user_listUtensilio");
        echo "\">
                    <div class=\"col-md-4 food-grid animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>UTENSILIOS</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Hay una gran variedad de utensilios que te ayudarán a realizar tus recetas eficiente y eficazmente</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("App_user_listTecnica");
        echo "\">
                    <div class=\"col-md-4 food-grid animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>TÉCNICAS</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Hay una gran variedad de técnicas que te ayudarán a obtener las habilidades culinarias necesarias para iniciarte en el mundo de la comida saludable</p>
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
        
        $__internal_f91f56c33ac5d6cd01b244bb49bab20049d0ab9b727ea0e9e28ef41a11f28f51->leave($__internal_f91f56c33ac5d6cd01b244bb49bab20049d0ab9b727ea0e9e28ef41a11f28f51_prof);

    }

    public function getTemplateName()
    {
        return "@User/Blog/menuBlog.html.twig";
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
                <a  href=\"{{ path('App_user_listReceta') }}\">
                    <div class=\"col-md-4 food-grid animated wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\" >
                        <div class=\" hover-fold\">
                          <h4>RECETAS</h4>
                          <div class=\"top\">
                            <div class=\"back face\" >
                            <p>Hay una gran variedad de recetas disponibles que se adaptan a tus gustos y necesidades </p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"{{ path('App_user_listUtensilio') }}\">
                    <div class=\"col-md-4 food-grid animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>UTENSILIOS</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Hay una gran variedad de utensilios que te ayudarán a realizar tus recetas eficiente y eficazmente</p>
                            </div>
                          </div>
                        </div>
                    </div>
                </a>
                <a  href=\"{{ path('App_user_listTecnica') }}\">
                    <div class=\"col-md-4 food-grid animated wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                        <div class=\" hover-fold\">
                          <h4>TÉCNICAS</h4>
                          <div class=\"top\">
                            <div class=\"back face\">
                            <p>Hay una gran variedad de técnicas que te ayudarán a obtener las habilidades culinarias necesarias para iniciarte en el mundo de la comida saludable</p>
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
