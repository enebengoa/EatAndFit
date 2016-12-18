<?php

/* AdminBundle:Receta:add.html.twig */
class __TwigTemplate_7c8f509601cd56349393350a9a8f533939f6558efc413800fc1211ba0c6a7a8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Receta:add.html.twig", 1);
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
        $__internal_312c195834dd0ec48168b12575073df2872df36bcb1c54f6172c2f9a2db53fdb = $this->env->getExtension("native_profiler");
        $__internal_312c195834dd0ec48168b12575073df2872df36bcb1c54f6172c2f9a2db53fdb->enter($__internal_312c195834dd0ec48168b12575073df2872df36bcb1c54f6172c2f9a2db53fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Receta:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_312c195834dd0ec48168b12575073df2872df36bcb1c54f6172c2f9a2db53fdb->leave($__internal_312c195834dd0ec48168b12575073df2872df36bcb1c54f6172c2f9a2db53fdb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_64efcf0daf33f8d75a71144e087ae402857023e6832df9155cf66ac0d817749a = $this->env->getExtension("native_profiler");
        $__internal_64efcf0daf33f8d75a71144e087ae402857023e6832df9155cf66ac0d817749a->enter($__internal_64efcf0daf33f8d75a71144e087ae402857023e6832df9155cf66ac0d817749a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir receta ";
        
        $__internal_64efcf0daf33f8d75a71144e087ae402857023e6832df9155cf66ac0d817749a->leave($__internal_64efcf0daf33f8d75a71144e087ae402857023e6832df9155cf66ac0d817749a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_59354fcc9263b309fd9d87cfc7f9f0bc4cb30746bf4bedb7ae46a41aa33424b6 = $this->env->getExtension("native_profiler");
        $__internal_59354fcc9263b309fd9d87cfc7f9f0bc4cb30746bf4bedb7ae46a41aa33424b6->enter($__internal_59354fcc9263b309fd9d87cfc7f9f0bc4cb30746bf4bedb7ae46a41aa33424b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_59354fcc9263b309fd9d87cfc7f9f0bc4cb30746bf4bedb7ae46a41aa33424b6->leave($__internal_59354fcc9263b309fd9d87cfc7f9f0bc4cb30746bf4bedb7ae46a41aa33424b6_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef7f1c75476ab25c42cb908bb0e9a8b9bcfd338596d2f943031629047e84b699 = $this->env->getExtension("native_profiler");
        $__internal_ef7f1c75476ab25c42cb908bb0e9a8b9bcfd338596d2f943031629047e84b699->enter($__internal_ef7f1c75476ab25c42cb908bb0e9a8b9bcfd338596d2f943031629047e84b699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
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
                                        <div class=\"title\">Añadir nueva receta 
                                            <a href=\"";
        // line 22
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
        // line 30
        $this->loadTemplate("AdminBundle:Receta:form.html.twig", "AdminBundle:Receta:add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_ef7f1c75476ab25c42cb908bb0e9a8b9bcfd338596d2f943031629047e84b699->leave($__internal_ef7f1c75476ab25c42cb908bb0e9a8b9bcfd338596d2f943031629047e84b699_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Receta:add.html.twig";
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

{% block title %}Añadir receta {% endblock %}
{% block stylesheets %}
{{ parent() }}
\t<link href=\"{{ asset('css/form.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
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
                                        <div class=\"title\">Añadir nueva receta 
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
{% endblock %}";
    }
}
