<?php

/* @Admin/TipoReceta/modify.html.twig */
class __TwigTemplate_777f6fc85965722639ed9a88728cbbec59e0f8ecf1b412978c3b4271b45ffd8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/TipoReceta/modify.html.twig", 1);
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
        $__internal_c5f01b75ae42ae8028314d430cec7dc51babec2d1a81699366a81d36a6d8f9e9 = $this->env->getExtension("native_profiler");
        $__internal_c5f01b75ae42ae8028314d430cec7dc51babec2d1a81699366a81d36a6d8f9e9->enter($__internal_c5f01b75ae42ae8028314d430cec7dc51babec2d1a81699366a81d36a6d8f9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/TipoReceta/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5f01b75ae42ae8028314d430cec7dc51babec2d1a81699366a81d36a6d8f9e9->leave($__internal_c5f01b75ae42ae8028314d430cec7dc51babec2d1a81699366a81d36a6d8f9e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aff93a5481c7329149112c3ef288a854ddde93477b92e32e05b92e7cc07912b4 = $this->env->getExtension("native_profiler");
        $__internal_aff93a5481c7329149112c3ef288a854ddde93477b92e32e05b92e7cc07912b4->enter($__internal_aff93a5481c7329149112c3ef288a854ddde93477b92e32e05b92e7cc07912b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar tipo de receta ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_aff93a5481c7329149112c3ef288a854ddde93477b92e32e05b92e7cc07912b4->leave($__internal_aff93a5481c7329149112c3ef288a854ddde93477b92e32e05b92e7cc07912b4_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a6a9b149f0ab7656df9f4d53a67583768cbc6f46a34bc6a90df7e061fa2fe392 = $this->env->getExtension("native_profiler");
        $__internal_a6a9b149f0ab7656df9f4d53a67583768cbc6f46a34bc6a90df7e061fa2fe392->enter($__internal_a6a9b149f0ab7656df9f4d53a67583768cbc6f46a34bc6a90df7e061fa2fe392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_a6a9b149f0ab7656df9f4d53a67583768cbc6f46a34bc6a90df7e061fa2fe392->leave($__internal_a6a9b149f0ab7656df9f4d53a67583768cbc6f46a34bc6a90df7e061fa2fe392_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_47015bc5e3a4a282a87a34dce2de35a19a1730905ec614cd90884fc7e688da81 = $this->env->getExtension("native_profiler");
        $__internal_47015bc5e3a4a282a87a34dce2de35a19a1730905ec614cd90884fc7e688da81->enter($__internal_47015bc5e3a4a282a87a34dce2de35a19a1730905ec614cd90884fc7e688da81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">TIPOS DE RECETAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar tipo de receta \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        echo "\"
                                            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("App_admin_listTipoReceta");
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formTipo"]) ? $context["formTipo"] : $this->getContext($context, "formTipo")), 'form_start');
        echo "
                                        ";
        // line 30
        $this->loadTemplate("AdminBundle:TipoReceta:form.html.twig", "@Admin/TipoReceta/modify.html.twig", 30)->display($context);
        // line 31
        echo "                                    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formTipo"]) ? $context["formTipo"] : $this->getContext($context, "formTipo")), 'form_end');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_47015bc5e3a4a282a87a34dce2de35a19a1730905ec614cd90884fc7e688da81->leave($__internal_47015bc5e3a4a282a87a34dce2de35a19a1730905ec614cd90884fc7e688da81_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/TipoReceta/modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 31,  103 => 30,  99 => 29,  88 => 21,  84 => 20,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Ver/Modificar tipo de receta {{entidad.nombre}}{% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">TIPOS DE RECETAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar tipo de receta \"{{entidad.nombre}}\"
                                            <a href=\"{{ path('App_admin_listTipoReceta')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                    {{ form_start(formTipo)}}
                                        {% include \"AdminBundle:TipoReceta:form.html.twig\" %}
                                    {{ form_end(formTipo) }}
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
