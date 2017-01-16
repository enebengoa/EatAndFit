<?php

/* AdminBundle:Ingrediente:modify.html.twig */
class __TwigTemplate_85fe914fd8576f3d9c61e4789f5aa83b47f957ba6e29b469c751aefde0ccc44f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Ingrediente:modify.html.twig", 1);
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
        $__internal_4cd914a673c589b03aee4beba869c41e15316c9071e6787ad4fefe3ca5cad6bd = $this->env->getExtension("native_profiler");
        $__internal_4cd914a673c589b03aee4beba869c41e15316c9071e6787ad4fefe3ca5cad6bd->enter($__internal_4cd914a673c589b03aee4beba869c41e15316c9071e6787ad4fefe3ca5cad6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Ingrediente:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cd914a673c589b03aee4beba869c41e15316c9071e6787ad4fefe3ca5cad6bd->leave($__internal_4cd914a673c589b03aee4beba869c41e15316c9071e6787ad4fefe3ca5cad6bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e4405c1ad9dcd2f42b620ed90a0df493eb61310eab00b504098f701f06a6320 = $this->env->getExtension("native_profiler");
        $__internal_1e4405c1ad9dcd2f42b620ed90a0df493eb61310eab00b504098f701f06a6320->enter($__internal_1e4405c1ad9dcd2f42b620ed90a0df493eb61310eab00b504098f701f06a6320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar ingrediente ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_1e4405c1ad9dcd2f42b620ed90a0df493eb61310eab00b504098f701f06a6320->leave($__internal_1e4405c1ad9dcd2f42b620ed90a0df493eb61310eab00b504098f701f06a6320_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15c7c4cca5d78fd114849bfdffe83643f6a80fcf1825595195bbc4f77a4bd387 = $this->env->getExtension("native_profiler");
        $__internal_15c7c4cca5d78fd114849bfdffe83643f6a80fcf1825595195bbc4f77a4bd387->enter($__internal_15c7c4cca5d78fd114849bfdffe83643f6a80fcf1825595195bbc4f77a4bd387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_15c7c4cca5d78fd114849bfdffe83643f6a80fcf1825595195bbc4f77a4bd387->leave($__internal_15c7c4cca5d78fd114849bfdffe83643f6a80fcf1825595195bbc4f77a4bd387_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7f4ebf097ecee32a9a8471de7579b755d19f925e457426def33963e43301a0a = $this->env->getExtension("native_profiler");
        $__internal_c7f4ebf097ecee32a9a8471de7579b755d19f925e457426def33963e43301a0a->enter($__internal_c7f4ebf097ecee32a9a8471de7579b755d19f925e457426def33963e43301a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:Ingrediente:form.html.twig", "AdminBundle:Ingrediente:modify.html.twig", 30)->display($context);
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
        
        $__internal_c7f4ebf097ecee32a9a8471de7579b755d19f925e457426def33963e43301a0a->leave($__internal_c7f4ebf097ecee32a9a8471de7579b755d19f925e457426def33963e43301a0a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Ingrediente:modify.html.twig";
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
