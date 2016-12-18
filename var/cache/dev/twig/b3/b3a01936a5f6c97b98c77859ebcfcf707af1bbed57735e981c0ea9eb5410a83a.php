<?php

/* UserBundle:Foro:add.html.twig */
class __TwigTemplate_6508cf5905d96bf8eb7a6444c21c2cfd05f60c50e200e1034194c11149b4a211 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseuser.html.twig", "UserBundle:Foro:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseuser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_decb34e19b228bf9c1db50bbba2488d68e8fd97dcc18be2e5c06f7160ebafb4e = $this->env->getExtension("native_profiler");
        $__internal_decb34e19b228bf9c1db50bbba2488d68e8fd97dcc18be2e5c06f7160ebafb4e->enter($__internal_decb34e19b228bf9c1db50bbba2488d68e8fd97dcc18be2e5c06f7160ebafb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Foro:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_decb34e19b228bf9c1db50bbba2488d68e8fd97dcc18be2e5c06f7160ebafb4e->leave($__internal_decb34e19b228bf9c1db50bbba2488d68e8fd97dcc18be2e5c06f7160ebafb4e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99835af596ee94012466c937aa8d2aa3afd1cab6f634de00620b49bc5cc02c2b = $this->env->getExtension("native_profiler");
        $__internal_99835af596ee94012466c937aa8d2aa3afd1cab6f634de00620b49bc5cc02c2b->enter($__internal_99835af596ee94012466c937aa8d2aa3afd1cab6f634de00620b49bc5cc02c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir  nuevo foro ";
        
        $__internal_99835af596ee94012466c937aa8d2aa3afd1cab6f634de00620b49bc5cc02c2b->leave($__internal_99835af596ee94012466c937aa8d2aa3afd1cab6f634de00620b49bc5cc02c2b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c23047fb4f8fddbe9f736c9ea79e11df32522561d47c4758eb651063ded6523e = $this->env->getExtension("native_profiler");
        $__internal_c23047fb4f8fddbe9f736c9ea79e11df32522561d47c4758eb651063ded6523e->enter($__internal_c23047fb4f8fddbe9f736c9ea79e11df32522561d47c4758eb651063ded6523e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_c23047fb4f8fddbe9f736c9ea79e11df32522561d47c4758eb651063ded6523e->leave($__internal_c23047fb4f8fddbe9f736c9ea79e11df32522561d47c4758eb651063ded6523e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_79311b7fab4bd6b8ccd29af6ae1cbfd968f80669712d3a7872aa90863e643479 = $this->env->getExtension("native_profiler");
        $__internal_79311b7fab4bd6b8ccd29af6ae1cbfd968f80669712d3a7872aa90863e643479->enter($__internal_79311b7fab4bd6b8ccd29af6ae1cbfd968f80669712d3a7872aa90863e643479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<!-- Main Content -->
<div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">
              <div class=\"events-top\">
                  <div class=\"col-md-4 events-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <h3><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("App_user_listForo");
        echo "\">Nuevo foro</a></h3>
                    <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                    <span></span>
                  </div>
                  <div class=\"clearfix\"> </div>
            </div>    
            <div class=\"content-mid\">
                    <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                       ";
        // line 32
        $this->loadTemplate("AdminBundle:TemaForo:form.html.twig", "UserBundle:Foro:add.html.twig", 32)->display($context);
        // line 33
        echo "                                    </div>
                                </div>
                            </div>
                    </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_79311b7fab4bd6b8ccd29af6ae1cbfd968f80669712d3a7872aa90863e643479->leave($__internal_79311b7fab4bd6b8ccd29af6ae1cbfd968f80669712d3a7872aa90863e643479_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Foro:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 33,  101 => 32,  81 => 15,  73 => 9,  67 => 8,  58 => 6,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseuser.html.twig' %}

{% block title %}Añadir  nuevo foro {% endblock %}
{% block stylesheets %}
{{ parent() }}
\t<link href=\"{{ asset('css/form.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}
{% block body %}
<!-- Main Content -->
<div class=\"content\" id=\"content-down\">
    <div class=\"content-top-top\">
        <div class=\"container\">
              <div class=\"events-top\">
                  <div class=\"col-md-4 events-left animated wow fadeInLeft\" data-wow-duration=\"1000ms\" data-wow-delay=\"500ms\">
                    <h3><a href=\"{{ path('App_user_listForo') }}\">Nuevo foro</a></h3>
                    <label><i class=\"glyphicon glyphicon-menu-up\"></i></label>
                    <span></span>
                  </div>
                  <div class=\"clearfix\"> </div>
            </div>    
            <div class=\"content-mid\">
                    <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">
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
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
</div>
{% endblock %}";
    }
}
