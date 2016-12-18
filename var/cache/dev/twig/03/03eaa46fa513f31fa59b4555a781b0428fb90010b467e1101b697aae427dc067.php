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
        $__internal_736543632f9c65ac08da34390364b13f765a6f2a8c32a32c475dd9979e04fab7 = $this->env->getExtension("native_profiler");
        $__internal_736543632f9c65ac08da34390364b13f765a6f2a8c32a32c475dd9979e04fab7->enter($__internal_736543632f9c65ac08da34390364b13f765a6f2a8c32a32c475dd9979e04fab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/TipoReceta/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_736543632f9c65ac08da34390364b13f765a6f2a8c32a32c475dd9979e04fab7->leave($__internal_736543632f9c65ac08da34390364b13f765a6f2a8c32a32c475dd9979e04fab7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2744bc88a8e528ec6cd39c2bd2e0bc1bf28bbb1198041a092a4b21ad32ac50c5 = $this->env->getExtension("native_profiler");
        $__internal_2744bc88a8e528ec6cd39c2bd2e0bc1bf28bbb1198041a092a4b21ad32ac50c5->enter($__internal_2744bc88a8e528ec6cd39c2bd2e0bc1bf28bbb1198041a092a4b21ad32ac50c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar tipo de receta ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_2744bc88a8e528ec6cd39c2bd2e0bc1bf28bbb1198041a092a4b21ad32ac50c5->leave($__internal_2744bc88a8e528ec6cd39c2bd2e0bc1bf28bbb1198041a092a4b21ad32ac50c5_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_253e3787a8e22c4210d40f02143271705416e01597aff8063e41a836cb1b3d4b = $this->env->getExtension("native_profiler");
        $__internal_253e3787a8e22c4210d40f02143271705416e01597aff8063e41a836cb1b3d4b->enter($__internal_253e3787a8e22c4210d40f02143271705416e01597aff8063e41a836cb1b3d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_253e3787a8e22c4210d40f02143271705416e01597aff8063e41a836cb1b3d4b->leave($__internal_253e3787a8e22c4210d40f02143271705416e01597aff8063e41a836cb1b3d4b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_65b420d06f3d12142765afcaf70cdf89f4dfecc14169edf68fe9122ce2ec4367 = $this->env->getExtension("native_profiler");
        $__internal_65b420d06f3d12142765afcaf70cdf89f4dfecc14169edf68fe9122ce2ec4367->enter($__internal_65b420d06f3d12142765afcaf70cdf89f4dfecc14169edf68fe9122ce2ec4367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:TipoReceta:form.html.twig", "@Admin/TipoReceta/modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_65b420d06f3d12142765afcaf70cdf89f4dfecc14169edf68fe9122ce2ec4367->leave($__internal_65b420d06f3d12142765afcaf70cdf89f4dfecc14169edf68fe9122ce2ec4367_prof);

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
        return array (  101 => 30,  99 => 29,  88 => 21,  84 => 20,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  36 => 3,  11 => 1,);
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
                                        {% include \"AdminBundle:TipoReceta:form.html.twig\" %}
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
