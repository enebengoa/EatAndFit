<?php

/* @Admin/Ingrediente/add.html.twig */
class __TwigTemplate_dd66182bf2b4631619918d8b740c208851558a64017b83b3d43eaddd9f60c594 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Ingrediente/add.html.twig", 1);
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
        $__internal_504180fbb4cec827a94308d81c5006c1b6afc56762c4adb0579451d560bfaef9 = $this->env->getExtension("native_profiler");
        $__internal_504180fbb4cec827a94308d81c5006c1b6afc56762c4adb0579451d560bfaef9->enter($__internal_504180fbb4cec827a94308d81c5006c1b6afc56762c4adb0579451d560bfaef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Ingrediente/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_504180fbb4cec827a94308d81c5006c1b6afc56762c4adb0579451d560bfaef9->leave($__internal_504180fbb4cec827a94308d81c5006c1b6afc56762c4adb0579451d560bfaef9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_715e8bc2f545763954f56e53deb19a93eac154988836fd1b34767f847a893e1a = $this->env->getExtension("native_profiler");
        $__internal_715e8bc2f545763954f56e53deb19a93eac154988836fd1b34767f847a893e1a->enter($__internal_715e8bc2f545763954f56e53deb19a93eac154988836fd1b34767f847a893e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir ingrediente ";
        
        $__internal_715e8bc2f545763954f56e53deb19a93eac154988836fd1b34767f847a893e1a->leave($__internal_715e8bc2f545763954f56e53deb19a93eac154988836fd1b34767f847a893e1a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c58dfb5411b11ee84984c6de00d40b76adcec9354e99d147fd1f1c59bea51b45 = $this->env->getExtension("native_profiler");
        $__internal_c58dfb5411b11ee84984c6de00d40b76adcec9354e99d147fd1f1c59bea51b45->enter($__internal_c58dfb5411b11ee84984c6de00d40b76adcec9354e99d147fd1f1c59bea51b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_c58dfb5411b11ee84984c6de00d40b76adcec9354e99d147fd1f1c59bea51b45->leave($__internal_c58dfb5411b11ee84984c6de00d40b76adcec9354e99d147fd1f1c59bea51b45_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fb6bff510e8ac772fb7da9152e628b301fb4c8f58da8e3bace81dfd4463c8c7 = $this->env->getExtension("native_profiler");
        $__internal_9fb6bff510e8ac772fb7da9152e628b301fb4c8f58da8e3bace81dfd4463c8c7->enter($__internal_9fb6bff510e8ac772fb7da9152e628b301fb4c8f58da8e3bace81dfd4463c8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
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
                                        <div class=\"title\">Añadir nuevo ingrediente
                                            <a href=\"";
        // line 22
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
        // line 30
        $this->loadTemplate("AdminBundle:Ingrediente:form.html.twig", "@Admin/Ingrediente/add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_9fb6bff510e8ac772fb7da9152e628b301fb4c8f58da8e3bace81dfd4463c8c7->leave($__internal_9fb6bff510e8ac772fb7da9152e628b301fb4c8f58da8e3bace81dfd4463c8c7_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Ingrediente/add.html.twig";
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

{% block title %}Añadir ingrediente {% endblock %}
{% block stylesheets %}
{{ parent() }}
\t<link href=\"{{ asset('css/form.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
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
                                        <div class=\"title\">Añadir nuevo ingrediente
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
{% endblock %}";
    }
}
