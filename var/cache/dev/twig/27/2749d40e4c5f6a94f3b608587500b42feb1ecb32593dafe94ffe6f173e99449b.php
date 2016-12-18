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
        $__internal_136621d47047851672bec0afa3747aa67e07fb74e4e5b7defb8ddccd2bbb15b4 = $this->env->getExtension("native_profiler");
        $__internal_136621d47047851672bec0afa3747aa67e07fb74e4e5b7defb8ddccd2bbb15b4->enter($__internal_136621d47047851672bec0afa3747aa67e07fb74e4e5b7defb8ddccd2bbb15b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Ingrediente:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_136621d47047851672bec0afa3747aa67e07fb74e4e5b7defb8ddccd2bbb15b4->leave($__internal_136621d47047851672bec0afa3747aa67e07fb74e4e5b7defb8ddccd2bbb15b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d6de5420db2d660f3d5e542b70ac9cf30e923f0d2b27bbf56953cf6310fadc6 = $this->env->getExtension("native_profiler");
        $__internal_2d6de5420db2d660f3d5e542b70ac9cf30e923f0d2b27bbf56953cf6310fadc6->enter($__internal_2d6de5420db2d660f3d5e542b70ac9cf30e923f0d2b27bbf56953cf6310fadc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar ingrediente ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_2d6de5420db2d660f3d5e542b70ac9cf30e923f0d2b27bbf56953cf6310fadc6->leave($__internal_2d6de5420db2d660f3d5e542b70ac9cf30e923f0d2b27bbf56953cf6310fadc6_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_45c5c580de3f2a34d5ebaa090dae187b0dbc8b45a0b58945a2b3ee4d146cc2eb = $this->env->getExtension("native_profiler");
        $__internal_45c5c580de3f2a34d5ebaa090dae187b0dbc8b45a0b58945a2b3ee4d146cc2eb->enter($__internal_45c5c580de3f2a34d5ebaa090dae187b0dbc8b45a0b58945a2b3ee4d146cc2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_45c5c580de3f2a34d5ebaa090dae187b0dbc8b45a0b58945a2b3ee4d146cc2eb->leave($__internal_45c5c580de3f2a34d5ebaa090dae187b0dbc8b45a0b58945a2b3ee4d146cc2eb_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b2e1eedeca88faddd7181856853f4ea2eff26a60639d81da171a3db90ef8075 = $this->env->getExtension("native_profiler");
        $__internal_3b2e1eedeca88faddd7181856853f4ea2eff26a60639d81da171a3db90ef8075->enter($__internal_3b2e1eedeca88faddd7181856853f4ea2eff26a60639d81da171a3db90ef8075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:Ingrediente:form.html.twig", "AdminBundle:Ingrediente:modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_3b2e1eedeca88faddd7181856853f4ea2eff26a60639d81da171a3db90ef8075->leave($__internal_3b2e1eedeca88faddd7181856853f4ea2eff26a60639d81da171a3db90ef8075_prof);

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
