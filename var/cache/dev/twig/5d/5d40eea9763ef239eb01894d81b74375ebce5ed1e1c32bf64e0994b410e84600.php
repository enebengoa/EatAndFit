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
        $__internal_382b9a464bdf0bdcccc1709e99e8ecf1f3b710c5b12d8793111acbfa3136e8f8 = $this->env->getExtension("native_profiler");
        $__internal_382b9a464bdf0bdcccc1709e99e8ecf1f3b710c5b12d8793111acbfa3136e8f8->enter($__internal_382b9a464bdf0bdcccc1709e99e8ecf1f3b710c5b12d8793111acbfa3136e8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Receta:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382b9a464bdf0bdcccc1709e99e8ecf1f3b710c5b12d8793111acbfa3136e8f8->leave($__internal_382b9a464bdf0bdcccc1709e99e8ecf1f3b710c5b12d8793111acbfa3136e8f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df750f603d72f890a9c65ee618346364a2f4e6e15c27fcb0b2e30fbd80e40f44 = $this->env->getExtension("native_profiler");
        $__internal_df750f603d72f890a9c65ee618346364a2f4e6e15c27fcb0b2e30fbd80e40f44->enter($__internal_df750f603d72f890a9c65ee618346364a2f4e6e15c27fcb0b2e30fbd80e40f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir receta ";
        
        $__internal_df750f603d72f890a9c65ee618346364a2f4e6e15c27fcb0b2e30fbd80e40f44->leave($__internal_df750f603d72f890a9c65ee618346364a2f4e6e15c27fcb0b2e30fbd80e40f44_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0454f03ab07a4beacac7f46a3265df992553b224a1cf366ab597a0fb725f77ad = $this->env->getExtension("native_profiler");
        $__internal_0454f03ab07a4beacac7f46a3265df992553b224a1cf366ab597a0fb725f77ad->enter($__internal_0454f03ab07a4beacac7f46a3265df992553b224a1cf366ab597a0fb725f77ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_0454f03ab07a4beacac7f46a3265df992553b224a1cf366ab597a0fb725f77ad->leave($__internal_0454f03ab07a4beacac7f46a3265df992553b224a1cf366ab597a0fb725f77ad_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_3323dbf63898017c281cb0703d2ea010a201f269f49b811695c63a6dc43ac114 = $this->env->getExtension("native_profiler");
        $__internal_3323dbf63898017c281cb0703d2ea010a201f269f49b811695c63a6dc43ac114->enter($__internal_3323dbf63898017c281cb0703d2ea010a201f269f49b811695c63a6dc43ac114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3323dbf63898017c281cb0703d2ea010a201f269f49b811695c63a6dc43ac114->leave($__internal_3323dbf63898017c281cb0703d2ea010a201f269f49b811695c63a6dc43ac114_prof);

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
