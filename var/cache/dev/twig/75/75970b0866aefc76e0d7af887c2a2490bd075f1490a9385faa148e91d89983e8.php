<?php

/* @Admin/SubMenu/add.html.twig */
class __TwigTemplate_083deaef70ac66bbc45fc2dde27a4d26c06c78308c30d052a1aaef3ea7cec4d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/SubMenu/add.html.twig", 1);
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
        $__internal_670e6c0abab5303b40f43360c873f56dfb93de2e30a3354d8234c0bb5e2590d1 = $this->env->getExtension("native_profiler");
        $__internal_670e6c0abab5303b40f43360c873f56dfb93de2e30a3354d8234c0bb5e2590d1->enter($__internal_670e6c0abab5303b40f43360c873f56dfb93de2e30a3354d8234c0bb5e2590d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/SubMenu/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_670e6c0abab5303b40f43360c873f56dfb93de2e30a3354d8234c0bb5e2590d1->leave($__internal_670e6c0abab5303b40f43360c873f56dfb93de2e30a3354d8234c0bb5e2590d1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2ac3eab6447aeb5dfbf2700077a250458f668b153f42cce7ab3e3078223292b = $this->env->getExtension("native_profiler");
        $__internal_b2ac3eab6447aeb5dfbf2700077a250458f668b153f42cce7ab3e3078223292b->enter($__internal_b2ac3eab6447aeb5dfbf2700077a250458f668b153f42cce7ab3e3078223292b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir submenú";
        
        $__internal_b2ac3eab6447aeb5dfbf2700077a250458f668b153f42cce7ab3e3078223292b->leave($__internal_b2ac3eab6447aeb5dfbf2700077a250458f668b153f42cce7ab3e3078223292b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86b0aa5b46d8cb28278b3eb03bdb2001b7799abcbacb2f684733205d81994eb7 = $this->env->getExtension("native_profiler");
        $__internal_86b0aa5b46d8cb28278b3eb03bdb2001b7799abcbacb2f684733205d81994eb7->enter($__internal_86b0aa5b46d8cb28278b3eb03bdb2001b7799abcbacb2f684733205d81994eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_86b0aa5b46d8cb28278b3eb03bdb2001b7799abcbacb2f684733205d81994eb7->leave($__internal_86b0aa5b46d8cb28278b3eb03bdb2001b7799abcbacb2f684733205d81994eb7_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a2016b3b400fa9611f848039d5698d2a7d0e40dbd2289f3d37ce4a06292b0c4 = $this->env->getExtension("native_profiler");
        $__internal_8a2016b3b400fa9611f848039d5698d2a7d0e40dbd2289f3d37ce4a06292b0c4->enter($__internal_8a2016b3b400fa9611f848039d5698d2a7d0e40dbd2289f3d37ce4a06292b0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:SubMenu:form.html.twig", "@Admin/SubMenu/add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_8a2016b3b400fa9611f848039d5698d2a7d0e40dbd2289f3d37ce4a06292b0c4->leave($__internal_8a2016b3b400fa9611f848039d5698d2a7d0e40dbd2289f3d37ce4a06292b0c4_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/SubMenu/add.html.twig";
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
