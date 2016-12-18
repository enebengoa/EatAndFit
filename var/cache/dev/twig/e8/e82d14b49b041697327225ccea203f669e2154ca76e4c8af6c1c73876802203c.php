<?php

/* AdminBundle:Utensilio:add.html.twig */
class __TwigTemplate_7a425e2bfc3a42d69badeae79fa3db7f2754fc6b6f552ef794e21b22c593978c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Utensilio:add.html.twig", 1);
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
        $__internal_45c1e22d59181ec8ef823ad949775d6dd12548d1fb68f7be98e1ddac7f9c9170 = $this->env->getExtension("native_profiler");
        $__internal_45c1e22d59181ec8ef823ad949775d6dd12548d1fb68f7be98e1ddac7f9c9170->enter($__internal_45c1e22d59181ec8ef823ad949775d6dd12548d1fb68f7be98e1ddac7f9c9170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Utensilio:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45c1e22d59181ec8ef823ad949775d6dd12548d1fb68f7be98e1ddac7f9c9170->leave($__internal_45c1e22d59181ec8ef823ad949775d6dd12548d1fb68f7be98e1ddac7f9c9170_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad78b310c6bfb1fa26ca159fb2a04c698b78ca7268c184efd56e42c9c0bd9562 = $this->env->getExtension("native_profiler");
        $__internal_ad78b310c6bfb1fa26ca159fb2a04c698b78ca7268c184efd56e42c9c0bd9562->enter($__internal_ad78b310c6bfb1fa26ca159fb2a04c698b78ca7268c184efd56e42c9c0bd9562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir utensilio ";
        
        $__internal_ad78b310c6bfb1fa26ca159fb2a04c698b78ca7268c184efd56e42c9c0bd9562->leave($__internal_ad78b310c6bfb1fa26ca159fb2a04c698b78ca7268c184efd56e42c9c0bd9562_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a84b8f92763dec1727b9021b7d7c94bba9e112354c697fcc0bf2258f077ac4a3 = $this->env->getExtension("native_profiler");
        $__internal_a84b8f92763dec1727b9021b7d7c94bba9e112354c697fcc0bf2258f077ac4a3->enter($__internal_a84b8f92763dec1727b9021b7d7c94bba9e112354c697fcc0bf2258f077ac4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_a84b8f92763dec1727b9021b7d7c94bba9e112354c697fcc0bf2258f077ac4a3->leave($__internal_a84b8f92763dec1727b9021b7d7c94bba9e112354c697fcc0bf2258f077ac4a3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_01daa4c85a31ed9534b0c51567a0f227de50a620c67f4bf25b5c43b2fa7fdf3f = $this->env->getExtension("native_profiler");
        $__internal_01daa4c85a31ed9534b0c51567a0f227de50a620c67f4bf25b5c43b2fa7fdf3f->enter($__internal_01daa4c85a31ed9534b0c51567a0f227de50a620c67f4bf25b5c43b2fa7fdf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">UTENSILIOS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nuevo utensilio
                                            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("App_admin_listUtensilio");
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
        $this->loadTemplate("AdminBundle:Utensilio:form.html.twig", "AdminBundle:Utensilio:add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_01daa4c85a31ed9534b0c51567a0f227de50a620c67f4bf25b5c43b2fa7fdf3f->leave($__internal_01daa4c85a31ed9534b0c51567a0f227de50a620c67f4bf25b5c43b2fa7fdf3f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Utensilio:add.html.twig";
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

{% block title %}Añadir utensilio {% endblock %}
{% block stylesheets %}
{{ parent() }}
\t<link href=\"{{ asset('css/form.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">UTENSILIOS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nuevo utensilio
                                            <a href=\"{{ path('App_admin_listUtensilio')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                        {% include \"AdminBundle:Utensilio:form.html.twig\" %}
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
