<?php

/* @Admin/Ingrediente/modify.html.twig */
class __TwigTemplate_ef012aee9b859c0e376104b7708bac09e4c9217469b2bcc18641662d3d2919e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Ingrediente/modify.html.twig", 1);
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
        $__internal_fafa18e8f4c6f7ddb8045db87109c232bf6cc1bb730714f1369ad93f6dee0374 = $this->env->getExtension("native_profiler");
        $__internal_fafa18e8f4c6f7ddb8045db87109c232bf6cc1bb730714f1369ad93f6dee0374->enter($__internal_fafa18e8f4c6f7ddb8045db87109c232bf6cc1bb730714f1369ad93f6dee0374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Ingrediente/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fafa18e8f4c6f7ddb8045db87109c232bf6cc1bb730714f1369ad93f6dee0374->leave($__internal_fafa18e8f4c6f7ddb8045db87109c232bf6cc1bb730714f1369ad93f6dee0374_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b6d669d6f3aa5b3bb20215cfdea1196dccf397733f24ab6f28353f4c3038216 = $this->env->getExtension("native_profiler");
        $__internal_3b6d669d6f3aa5b3bb20215cfdea1196dccf397733f24ab6f28353f4c3038216->enter($__internal_3b6d669d6f3aa5b3bb20215cfdea1196dccf397733f24ab6f28353f4c3038216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar ingrediente ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_3b6d669d6f3aa5b3bb20215cfdea1196dccf397733f24ab6f28353f4c3038216->leave($__internal_3b6d669d6f3aa5b3bb20215cfdea1196dccf397733f24ab6f28353f4c3038216_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2058eb75a4eca6609c7071294f5ec875355a2ffd30f634bc91652a4645d11238 = $this->env->getExtension("native_profiler");
        $__internal_2058eb75a4eca6609c7071294f5ec875355a2ffd30f634bc91652a4645d11238->enter($__internal_2058eb75a4eca6609c7071294f5ec875355a2ffd30f634bc91652a4645d11238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_2058eb75a4eca6609c7071294f5ec875355a2ffd30f634bc91652a4645d11238->leave($__internal_2058eb75a4eca6609c7071294f5ec875355a2ffd30f634bc91652a4645d11238_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_40db6c6ffce0a9ed98dc1d75eba89ee62c5f2fcbeefb8331ad0ed0d779196b7e = $this->env->getExtension("native_profiler");
        $__internal_40db6c6ffce0a9ed98dc1d75eba89ee62c5f2fcbeefb8331ad0ed0d779196b7e->enter($__internal_40db6c6ffce0a9ed98dc1d75eba89ee62c5f2fcbeefb8331ad0ed0d779196b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">INGREDIENTES</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar ingrediente \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        echo "\"
                                            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("App_admin_listIngrediente");
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
        $this->loadTemplate("AdminBundle:Ingrediente:form.html.twig", "@Admin/Ingrediente/modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_40db6c6ffce0a9ed98dc1d75eba89ee62c5f2fcbeefb8331ad0ed0d779196b7e->leave($__internal_40db6c6ffce0a9ed98dc1d75eba89ee62c5f2fcbeefb8331ad0ed0d779196b7e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Ingrediente/modify.html.twig";
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

{% block title %}Ver/Modificar ingrediente {{entidad.nombre}}{% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">INGREDIENTES</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar ingrediente \"{{entidad.nombre}}\"
                                            <a href=\"{{ path('App_admin_listIngrediente')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                        {% include \"AdminBundle:Ingrediente:form.html.twig\" %}
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
