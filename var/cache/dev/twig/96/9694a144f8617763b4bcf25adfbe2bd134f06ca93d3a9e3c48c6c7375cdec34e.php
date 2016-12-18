<?php

/* AdminBundle:Ingrediente:add.html.twig */
class __TwigTemplate_b231a8cac1f251cdec2b3abcd72e3bea66e0a3f4279118d18f53e60673e31913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Ingrediente:add.html.twig", 1);
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
        $__internal_e5d5cd9ba1138953626478200256d89aa053d345b74acad62ce22545906b1869 = $this->env->getExtension("native_profiler");
        $__internal_e5d5cd9ba1138953626478200256d89aa053d345b74acad62ce22545906b1869->enter($__internal_e5d5cd9ba1138953626478200256d89aa053d345b74acad62ce22545906b1869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Ingrediente:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5d5cd9ba1138953626478200256d89aa053d345b74acad62ce22545906b1869->leave($__internal_e5d5cd9ba1138953626478200256d89aa053d345b74acad62ce22545906b1869_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_82e9aae6ec008681622b4ef2cdfd60a36133413a4b5259bf003037285ba1c220 = $this->env->getExtension("native_profiler");
        $__internal_82e9aae6ec008681622b4ef2cdfd60a36133413a4b5259bf003037285ba1c220->enter($__internal_82e9aae6ec008681622b4ef2cdfd60a36133413a4b5259bf003037285ba1c220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir ingrediente ";
        
        $__internal_82e9aae6ec008681622b4ef2cdfd60a36133413a4b5259bf003037285ba1c220->leave($__internal_82e9aae6ec008681622b4ef2cdfd60a36133413a4b5259bf003037285ba1c220_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9aec9d99de486aaed0cc6619b36fda190e8062aad1a088515d4a2e505a9c93bd = $this->env->getExtension("native_profiler");
        $__internal_9aec9d99de486aaed0cc6619b36fda190e8062aad1a088515d4a2e505a9c93bd->enter($__internal_9aec9d99de486aaed0cc6619b36fda190e8062aad1a088515d4a2e505a9c93bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_9aec9d99de486aaed0cc6619b36fda190e8062aad1a088515d4a2e505a9c93bd->leave($__internal_9aec9d99de486aaed0cc6619b36fda190e8062aad1a088515d4a2e505a9c93bd_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7dcf11bc262c91dd4aebc08c11aa396d200d5adebd6b575bcd2791b4cfce01f = $this->env->getExtension("native_profiler");
        $__internal_e7dcf11bc262c91dd4aebc08c11aa396d200d5adebd6b575bcd2791b4cfce01f->enter($__internal_e7dcf11bc262c91dd4aebc08c11aa396d200d5adebd6b575bcd2791b4cfce01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:Ingrediente:form.html.twig", "AdminBundle:Ingrediente:add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_e7dcf11bc262c91dd4aebc08c11aa396d200d5adebd6b575bcd2791b4cfce01f->leave($__internal_e7dcf11bc262c91dd4aebc08c11aa396d200d5adebd6b575bcd2791b4cfce01f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Ingrediente:add.html.twig";
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
