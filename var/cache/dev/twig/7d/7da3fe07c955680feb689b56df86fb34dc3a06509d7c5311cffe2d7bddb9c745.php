<?php

/* AdminBundle:Receta:modify.html.twig */
class __TwigTemplate_298c65b31d174d69dd6738b44b5997984558e96589256dd176d0558f05df2c58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Receta:modify.html.twig", 1);
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
        $__internal_8a177388fad41594cbffb8586bad11d2c784ca45c0181ed799f25b3a36b31fc9 = $this->env->getExtension("native_profiler");
        $__internal_8a177388fad41594cbffb8586bad11d2c784ca45c0181ed799f25b3a36b31fc9->enter($__internal_8a177388fad41594cbffb8586bad11d2c784ca45c0181ed799f25b3a36b31fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Receta:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a177388fad41594cbffb8586bad11d2c784ca45c0181ed799f25b3a36b31fc9->leave($__internal_8a177388fad41594cbffb8586bad11d2c784ca45c0181ed799f25b3a36b31fc9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3c71c5e6631557b0c68535406b03c61f53e64f14e338930cf449ac770f39c50 = $this->env->getExtension("native_profiler");
        $__internal_e3c71c5e6631557b0c68535406b03c61f53e64f14e338930cf449ac770f39c50->enter($__internal_e3c71c5e6631557b0c68535406b03c61f53e64f14e338930cf449ac770f39c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar receta ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_e3c71c5e6631557b0c68535406b03c61f53e64f14e338930cf449ac770f39c50->leave($__internal_e3c71c5e6631557b0c68535406b03c61f53e64f14e338930cf449ac770f39c50_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6376a12a680a10f73934ae97121261b27727f9edeb30461b6c15c581f3e4af1 = $this->env->getExtension("native_profiler");
        $__internal_d6376a12a680a10f73934ae97121261b27727f9edeb30461b6c15c581f3e4af1->enter($__internal_d6376a12a680a10f73934ae97121261b27727f9edeb30461b6c15c581f3e4af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_d6376a12a680a10f73934ae97121261b27727f9edeb30461b6c15c581f3e4af1->leave($__internal_d6376a12a680a10f73934ae97121261b27727f9edeb30461b6c15c581f3e4af1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fe3df3ac441f93329ba772f1a34ada5737629e4cc597a69c06c1da85caba8a8 = $this->env->getExtension("native_profiler");
        $__internal_8fe3df3ac441f93329ba772f1a34ada5737629e4cc597a69c06c1da85caba8a8->enter($__internal_8fe3df3ac441f93329ba772f1a34ada5737629e4cc597a69c06c1da85caba8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">RECETAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar receta \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        echo "\"
                                            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("App_admin_listReceta");
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
        $this->loadTemplate("AdminBundle:Receta:form.html.twig", "AdminBundle:Receta:modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_8fe3df3ac441f93329ba772f1a34ada5737629e4cc597a69c06c1da85caba8a8->leave($__internal_8fe3df3ac441f93329ba772f1a34ada5737629e4cc597a69c06c1da85caba8a8_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Receta:modify.html.twig";
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

{% block title %}Ver/Modificar receta {{entidad.nombre}}{% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">RECETAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar receta \"{{entidad.nombre}}\"
                                            <a href=\"{{ path('App_admin_listReceta')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                        {% include \"AdminBundle:Receta:form.html.twig\" %}
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
