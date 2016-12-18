<?php

/* AdminBundle:Utensilio:modify.html.twig */
class __TwigTemplate_157ceb885ff79bfefe61a47e820f7f0c6d7253b10f2d45d752a56291c4e34d7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Utensilio:modify.html.twig", 1);
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
        $__internal_72ee65e737a56fd25dbfb2187096322d06dcbf7c74f5c83a6135602ac4f5b56f = $this->env->getExtension("native_profiler");
        $__internal_72ee65e737a56fd25dbfb2187096322d06dcbf7c74f5c83a6135602ac4f5b56f->enter($__internal_72ee65e737a56fd25dbfb2187096322d06dcbf7c74f5c83a6135602ac4f5b56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Utensilio:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72ee65e737a56fd25dbfb2187096322d06dcbf7c74f5c83a6135602ac4f5b56f->leave($__internal_72ee65e737a56fd25dbfb2187096322d06dcbf7c74f5c83a6135602ac4f5b56f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_48dc0d384108c1629b69fae2b6a5bc56f6f92eb9ca5fd3d588d9b97328564dc9 = $this->env->getExtension("native_profiler");
        $__internal_48dc0d384108c1629b69fae2b6a5bc56f6f92eb9ca5fd3d588d9b97328564dc9->enter($__internal_48dc0d384108c1629b69fae2b6a5bc56f6f92eb9ca5fd3d588d9b97328564dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar utensilio ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_48dc0d384108c1629b69fae2b6a5bc56f6f92eb9ca5fd3d588d9b97328564dc9->leave($__internal_48dc0d384108c1629b69fae2b6a5bc56f6f92eb9ca5fd3d588d9b97328564dc9_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d0aaac548d5b39a1de48f072d16a9e9f18ba53fdd14f7f515195a791cbc1e6ca = $this->env->getExtension("native_profiler");
        $__internal_d0aaac548d5b39a1de48f072d16a9e9f18ba53fdd14f7f515195a791cbc1e6ca->enter($__internal_d0aaac548d5b39a1de48f072d16a9e9f18ba53fdd14f7f515195a791cbc1e6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_d0aaac548d5b39a1de48f072d16a9e9f18ba53fdd14f7f515195a791cbc1e6ca->leave($__internal_d0aaac548d5b39a1de48f072d16a9e9f18ba53fdd14f7f515195a791cbc1e6ca_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f752a8c7d98a18a502d36c3f6a6a195e710daa81b583e7c9d6127c4549d68bcb = $this->env->getExtension("native_profiler");
        $__internal_f752a8c7d98a18a502d36c3f6a6a195e710daa81b583e7c9d6127c4549d68bcb->enter($__internal_f752a8c7d98a18a502d36c3f6a6a195e710daa81b583e7c9d6127c4549d68bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">UTENSILIOS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar utensilio \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        echo "\"
                                            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("App_admin_listUtensilio");
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
        $this->loadTemplate("AdminBundle:Utensilio:form.html.twig", "AdminBundle:Utensilio:modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_f752a8c7d98a18a502d36c3f6a6a195e710daa81b583e7c9d6127c4549d68bcb->leave($__internal_f752a8c7d98a18a502d36c3f6a6a195e710daa81b583e7c9d6127c4549d68bcb_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Utensilio:modify.html.twig";
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

{% block title %}Ver/Modificar utensilio {{entidad.nombre}}{% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">UTENSILIOS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar utensilio \"{{entidad.nombre}}\"
                                            <a href=\"{{ path('App_admin_listUtensilio')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                        {% include \"AdminBundle:Utensilio:form.html.twig\" %}
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
