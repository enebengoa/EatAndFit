<?php

/* @Admin/Tecnica/modify.html.twig */
class __TwigTemplate_b6cc2cc19d266ddfa2cd33ab0b52e16b6e665fdad3fc584872cc0bb2a766f380 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Tecnica/modify.html.twig", 1);
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
        $__internal_bb4ecd20fa64c59dfc4ebaea03a681b08f3a4f1bd44ed714378fbe49f530b394 = $this->env->getExtension("native_profiler");
        $__internal_bb4ecd20fa64c59dfc4ebaea03a681b08f3a4f1bd44ed714378fbe49f530b394->enter($__internal_bb4ecd20fa64c59dfc4ebaea03a681b08f3a4f1bd44ed714378fbe49f530b394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Tecnica/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb4ecd20fa64c59dfc4ebaea03a681b08f3a4f1bd44ed714378fbe49f530b394->leave($__internal_bb4ecd20fa64c59dfc4ebaea03a681b08f3a4f1bd44ed714378fbe49f530b394_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3647ec33c2bf9b8be8b89b39f804e469260848a26d3b0abcd6644f74b6aeed86 = $this->env->getExtension("native_profiler");
        $__internal_3647ec33c2bf9b8be8b89b39f804e469260848a26d3b0abcd6644f74b6aeed86->enter($__internal_3647ec33c2bf9b8be8b89b39f804e469260848a26d3b0abcd6644f74b6aeed86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar técnica ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_3647ec33c2bf9b8be8b89b39f804e469260848a26d3b0abcd6644f74b6aeed86->leave($__internal_3647ec33c2bf9b8be8b89b39f804e469260848a26d3b0abcd6644f74b6aeed86_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4dee5bf16196b386f4b41c17c41db925fb2fe1ebb81b22cee922d65a374c8934 = $this->env->getExtension("native_profiler");
        $__internal_4dee5bf16196b386f4b41c17c41db925fb2fe1ebb81b22cee922d65a374c8934->enter($__internal_4dee5bf16196b386f4b41c17c41db925fb2fe1ebb81b22cee922d65a374c8934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_4dee5bf16196b386f4b41c17c41db925fb2fe1ebb81b22cee922d65a374c8934->leave($__internal_4dee5bf16196b386f4b41c17c41db925fb2fe1ebb81b22cee922d65a374c8934_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_88a6006ca82cfab795046bf1d46e90825a915b6d3da7f7eebcb78d376ec978b8 = $this->env->getExtension("native_profiler");
        $__internal_88a6006ca82cfab795046bf1d46e90825a915b6d3da7f7eebcb78d376ec978b8->enter($__internal_88a6006ca82cfab795046bf1d46e90825a915b6d3da7f7eebcb78d376ec978b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
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
                                        <div class=\"title\">Ver/Modificar técnica \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        echo "\"
                                            <a href=\"";
        // line 21
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
        // line 29
        $this->loadTemplate("AdminBundle:Tecnica:form.html.twig", "@Admin/Tecnica/modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_88a6006ca82cfab795046bf1d46e90825a915b6d3da7f7eebcb78d376ec978b8->leave($__internal_88a6006ca82cfab795046bf1d46e90825a915b6d3da7f7eebcb78d376ec978b8_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Tecnica/modify.html.twig";
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

{% block title %}Ver/Modificar técnica {{entidad.nombre}}{% endblock %}
{% block stylesheets %}
{{ parent() }}
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
                                        <div class=\"title\">Ver/Modificar técnica \"{{entidad.nombre}}\"
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
{% endblock %}

";
    }
}
