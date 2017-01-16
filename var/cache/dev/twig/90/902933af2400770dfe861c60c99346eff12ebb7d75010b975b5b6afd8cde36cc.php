<?php

/* AdminBundle:SubMenu:add.html.twig */
class __TwigTemplate_07752f3d32b4380cdd1b78addd74defe3a6ffafe4c3e215c5ca935c2921e663e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:SubMenu:add.html.twig", 1);
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
        $__internal_4b4d072ecd7be731beb4378e46352597d1d81a1bfe963d7f1bb1b16e135a7e35 = $this->env->getExtension("native_profiler");
        $__internal_4b4d072ecd7be731beb4378e46352597d1d81a1bfe963d7f1bb1b16e135a7e35->enter($__internal_4b4d072ecd7be731beb4378e46352597d1d81a1bfe963d7f1bb1b16e135a7e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:SubMenu:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b4d072ecd7be731beb4378e46352597d1d81a1bfe963d7f1bb1b16e135a7e35->leave($__internal_4b4d072ecd7be731beb4378e46352597d1d81a1bfe963d7f1bb1b16e135a7e35_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_326fdaed4d8c6cbb34a56ba4d1f0ef1efa2ce6927dd23afd5043049e3f5123fd = $this->env->getExtension("native_profiler");
        $__internal_326fdaed4d8c6cbb34a56ba4d1f0ef1efa2ce6927dd23afd5043049e3f5123fd->enter($__internal_326fdaed4d8c6cbb34a56ba4d1f0ef1efa2ce6927dd23afd5043049e3f5123fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir submenú";
        
        $__internal_326fdaed4d8c6cbb34a56ba4d1f0ef1efa2ce6927dd23afd5043049e3f5123fd->leave($__internal_326fdaed4d8c6cbb34a56ba4d1f0ef1efa2ce6927dd23afd5043049e3f5123fd_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d24437cbd119f769c37e30e3db3a500b166e72158ab8795468147fa5d7043107 = $this->env->getExtension("native_profiler");
        $__internal_d24437cbd119f769c37e30e3db3a500b166e72158ab8795468147fa5d7043107->enter($__internal_d24437cbd119f769c37e30e3db3a500b166e72158ab8795468147fa5d7043107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_d24437cbd119f769c37e30e3db3a500b166e72158ab8795468147fa5d7043107->leave($__internal_d24437cbd119f769c37e30e3db3a500b166e72158ab8795468147fa5d7043107_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_99bed21e6ee33d851ef988590ce2936597124ef08ec345a73813ac40e0e7d2fd = $this->env->getExtension("native_profiler");
        $__internal_99bed21e6ee33d851ef988590ce2936597124ef08ec345a73813ac40e0e7d2fd->enter($__internal_99bed21e6ee33d851ef988590ce2936597124ef08ec345a73813ac40e0e7d2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">SUBMENU</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nueva técnica 
                                            <a href=\"";
        // line 22
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
        // line 30
        $this->loadTemplate("AdminBundle:SubMenu:form.html.twig", "AdminBundle:SubMenu:add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_99bed21e6ee33d851ef988590ce2936597124ef08ec345a73813ac40e0e7d2fd->leave($__internal_99bed21e6ee33d851ef988590ce2936597124ef08ec345a73813ac40e0e7d2fd_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:SubMenu:add.html.twig";
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

{% block title %}Añadir submenú{% endblock %}
{% block stylesheets %}
{{ parent() }}
\t<link href=\"{{ asset('css/form.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">SUBMENU</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nueva técnica 
                                            <a href=\"{{ path('App_admin_listTecnica')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                        {% include \"AdminBundle:SubMenu:form.html.twig\" %}
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
