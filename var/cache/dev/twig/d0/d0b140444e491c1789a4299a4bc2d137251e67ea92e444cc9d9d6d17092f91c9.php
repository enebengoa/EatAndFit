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
        $__internal_7a55252cb4e81a4adecc27771b8b6f78195b22adeadf3a487d4b141436360138 = $this->env->getExtension("native_profiler");
        $__internal_7a55252cb4e81a4adecc27771b8b6f78195b22adeadf3a487d4b141436360138->enter($__internal_7a55252cb4e81a4adecc27771b8b6f78195b22adeadf3a487d4b141436360138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Ingrediente/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a55252cb4e81a4adecc27771b8b6f78195b22adeadf3a487d4b141436360138->leave($__internal_7a55252cb4e81a4adecc27771b8b6f78195b22adeadf3a487d4b141436360138_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_03b767fda3f4d1d25f48961cca8f9c43cf4e36a8ee341787a7386edde87ba0af = $this->env->getExtension("native_profiler");
        $__internal_03b767fda3f4d1d25f48961cca8f9c43cf4e36a8ee341787a7386edde87ba0af->enter($__internal_03b767fda3f4d1d25f48961cca8f9c43cf4e36a8ee341787a7386edde87ba0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar ingrediente ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_03b767fda3f4d1d25f48961cca8f9c43cf4e36a8ee341787a7386edde87ba0af->leave($__internal_03b767fda3f4d1d25f48961cca8f9c43cf4e36a8ee341787a7386edde87ba0af_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4a0ab1c2ac3f534bc32e99313102cc06253e5e4f5de1e76b084a39312cafbaed = $this->env->getExtension("native_profiler");
        $__internal_4a0ab1c2ac3f534bc32e99313102cc06253e5e4f5de1e76b084a39312cafbaed->enter($__internal_4a0ab1c2ac3f534bc32e99313102cc06253e5e4f5de1e76b084a39312cafbaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_4a0ab1c2ac3f534bc32e99313102cc06253e5e4f5de1e76b084a39312cafbaed->leave($__internal_4a0ab1c2ac3f534bc32e99313102cc06253e5e4f5de1e76b084a39312cafbaed_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_415e7f4fb94fa75ed94d89be5ca9115dbb0a362ab3b484aa8370cd55e3211ea8 = $this->env->getExtension("native_profiler");
        $__internal_415e7f4fb94fa75ed94d89be5ca9115dbb0a362ab3b484aa8370cd55e3211ea8->enter($__internal_415e7f4fb94fa75ed94d89be5ca9115dbb0a362ab3b484aa8370cd55e3211ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")), 'form_start');
        echo "
                                        ";
        // line 30
        $this->loadTemplate("AdminBundle:Ingrediente:form.html.twig", "@Admin/Ingrediente/modify.html.twig", 30)->display($context);
        // line 31
        echo "                                    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")), 'form_end');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_415e7f4fb94fa75ed94d89be5ca9115dbb0a362ab3b484aa8370cd55e3211ea8->leave($__internal_415e7f4fb94fa75ed94d89be5ca9115dbb0a362ab3b484aa8370cd55e3211ea8_prof);

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
        return array (  105 => 31,  103 => 30,  99 => 29,  88 => 21,  84 => 20,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  36 => 3,  11 => 1,);
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
                                    {{ form_start(formIngrediente)}}
                                        {% include \"AdminBundle:Ingrediente:form.html.twig\" %}
                                    {{ form_end(formIngrediente) }}
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
