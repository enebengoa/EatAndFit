<?php

/* AdminBundle:TemaForo:add.html.twig */
class __TwigTemplate_7c063056ba81d1a557dadf60a6a2fcab9c41ea366baab9e025864fa7dfb43d5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:TemaForo:add.html.twig", 1);
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
        $__internal_c6da66767902ac6012ca53f4b52eaf7ff01ed4dd9f27b9b6e2a6138237822bd1 = $this->env->getExtension("native_profiler");
        $__internal_c6da66767902ac6012ca53f4b52eaf7ff01ed4dd9f27b9b6e2a6138237822bd1->enter($__internal_c6da66767902ac6012ca53f4b52eaf7ff01ed4dd9f27b9b6e2a6138237822bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:TemaForo:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6da66767902ac6012ca53f4b52eaf7ff01ed4dd9f27b9b6e2a6138237822bd1->leave($__internal_c6da66767902ac6012ca53f4b52eaf7ff01ed4dd9f27b9b6e2a6138237822bd1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_963a1309875bd396964c39cc1912651c70f7a256adee45487efbe001e85032da = $this->env->getExtension("native_profiler");
        $__internal_963a1309875bd396964c39cc1912651c70f7a256adee45487efbe001e85032da->enter($__internal_963a1309875bd396964c39cc1912651c70f7a256adee45487efbe001e85032da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir tema de foro ";
        
        $__internal_963a1309875bd396964c39cc1912651c70f7a256adee45487efbe001e85032da->leave($__internal_963a1309875bd396964c39cc1912651c70f7a256adee45487efbe001e85032da_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a96e8a75bef2318e23858100a7ef5913ecc9eb36bd976824e6b157cf1663142 = $this->env->getExtension("native_profiler");
        $__internal_6a96e8a75bef2318e23858100a7ef5913ecc9eb36bd976824e6b157cf1663142->enter($__internal_6a96e8a75bef2318e23858100a7ef5913ecc9eb36bd976824e6b157cf1663142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_6a96e8a75bef2318e23858100a7ef5913ecc9eb36bd976824e6b157cf1663142->leave($__internal_6a96e8a75bef2318e23858100a7ef5913ecc9eb36bd976824e6b157cf1663142_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6bb6d64e6852db79384d9bf6a3756de60b1cb2180f17948093352fba70cab7e = $this->env->getExtension("native_profiler");
        $__internal_a6bb6d64e6852db79384d9bf6a3756de60b1cb2180f17948093352fba70cab7e->enter($__internal_a6bb6d64e6852db79384d9bf6a3756de60b1cb2180f17948093352fba70cab7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">FOROS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nuevo foro
                                            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("App_admin_listTemaForo");
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
        $this->loadTemplate("AdminBundle:TemaForo:form.html.twig", "AdminBundle:TemaForo:add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_a6bb6d64e6852db79384d9bf6a3756de60b1cb2180f17948093352fba70cab7e->leave($__internal_a6bb6d64e6852db79384d9bf6a3756de60b1cb2180f17948093352fba70cab7e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:TemaForo:add.html.twig";
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

{% block title %}Añadir tema de foro {% endblock %}
{% block stylesheets %}
{{ parent() }}
\t<link href=\"{{ asset('css/form.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">FOROS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nuevo foro
                                            <a href=\"{{ path('App_admin_listTemaForo')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                       {% include \"AdminBundle:TemaForo:form.html.twig\" %}
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
