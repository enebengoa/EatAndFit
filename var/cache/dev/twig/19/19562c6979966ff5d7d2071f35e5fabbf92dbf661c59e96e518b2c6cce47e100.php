<?php

/* @Admin/Menu/modify.html.twig */
class __TwigTemplate_bac9b76bd01049131fff7ff5758975c18ce1f0ef21d418533cdfdaa007bc7892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Menu/modify.html.twig", 1);
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
        $__internal_cced8ce94f2491f1e038ae327196f8dc3b25a350a9b608b39c62422f82ce4e26 = $this->env->getExtension("native_profiler");
        $__internal_cced8ce94f2491f1e038ae327196f8dc3b25a350a9b608b39c62422f82ce4e26->enter($__internal_cced8ce94f2491f1e038ae327196f8dc3b25a350a9b608b39c62422f82ce4e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Menu/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cced8ce94f2491f1e038ae327196f8dc3b25a350a9b608b39c62422f82ce4e26->leave($__internal_cced8ce94f2491f1e038ae327196f8dc3b25a350a9b608b39c62422f82ce4e26_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fda1ce7de7e05f2d75aca138194de0e2faf0a681be6b1507f25f0916ed4c5555 = $this->env->getExtension("native_profiler");
        $__internal_fda1ce7de7e05f2d75aca138194de0e2faf0a681be6b1507f25f0916ed4c5555->enter($__internal_fda1ce7de7e05f2d75aca138194de0e2faf0a681be6b1507f25f0916ed4c5555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar menú ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_fda1ce7de7e05f2d75aca138194de0e2faf0a681be6b1507f25f0916ed4c5555->leave($__internal_fda1ce7de7e05f2d75aca138194de0e2faf0a681be6b1507f25f0916ed4c5555_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_355836e432aeaf564493677406567ac661df3299c97fe773bfaecd54d71e1e40 = $this->env->getExtension("native_profiler");
        $__internal_355836e432aeaf564493677406567ac661df3299c97fe773bfaecd54d71e1e40->enter($__internal_355836e432aeaf564493677406567ac661df3299c97fe773bfaecd54d71e1e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_355836e432aeaf564493677406567ac661df3299c97fe773bfaecd54d71e1e40->leave($__internal_355836e432aeaf564493677406567ac661df3299c97fe773bfaecd54d71e1e40_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b91dcc464b8ab8aa469bebad4bfa73a338613cc4d26519c7f0e45f847de32c68 = $this->env->getExtension("native_profiler");
        $__internal_b91dcc464b8ab8aa469bebad4bfa73a338613cc4d26519c7f0e45f847de32c68->enter($__internal_b91dcc464b8ab8aa469bebad4bfa73a338613cc4d26519c7f0e45f847de32c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">MENÚS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar menú \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        echo "\"
                                            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("App_admin_listMenu");
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
        $this->loadTemplate("AdminBundle:Menu:form.html.twig", "@Admin/Menu/modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_b91dcc464b8ab8aa469bebad4bfa73a338613cc4d26519c7f0e45f847de32c68->leave($__internal_b91dcc464b8ab8aa469bebad4bfa73a338613cc4d26519c7f0e45f847de32c68_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Menu/modify.html.twig";
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

{% block title %}Ver/Modificar menú {{entidad.nombre}}{% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">MENÚS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar menú \"{{entidad.nombre}}\"
                                            <a href=\"{{ path('App_admin_listMenu')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                        {% include \"AdminBundle:Menu:form.html.twig\" %}
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
