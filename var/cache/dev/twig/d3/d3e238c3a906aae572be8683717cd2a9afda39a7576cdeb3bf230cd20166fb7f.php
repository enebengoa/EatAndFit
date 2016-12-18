<?php

/* @Admin/Receta/modify.html.twig */
class __TwigTemplate_3686d4247f220fb1376977f58c545dff874a7e482fc071a170d39268d7df9455 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Receta/modify.html.twig", 1);
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
        $__internal_04b3c6a4682be4efdb9dce76a9a356f8e1079c97d43a307d5b3e4dd8f9c449f1 = $this->env->getExtension("native_profiler");
        $__internal_04b3c6a4682be4efdb9dce76a9a356f8e1079c97d43a307d5b3e4dd8f9c449f1->enter($__internal_04b3c6a4682be4efdb9dce76a9a356f8e1079c97d43a307d5b3e4dd8f9c449f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Receta/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04b3c6a4682be4efdb9dce76a9a356f8e1079c97d43a307d5b3e4dd8f9c449f1->leave($__internal_04b3c6a4682be4efdb9dce76a9a356f8e1079c97d43a307d5b3e4dd8f9c449f1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f4d5be3e76fe9fb73c82bc08498ef40f1df5484f2b446219285154ade5db2f2 = $this->env->getExtension("native_profiler");
        $__internal_2f4d5be3e76fe9fb73c82bc08498ef40f1df5484f2b446219285154ade5db2f2->enter($__internal_2f4d5be3e76fe9fb73c82bc08498ef40f1df5484f2b446219285154ade5db2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar receta ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_2f4d5be3e76fe9fb73c82bc08498ef40f1df5484f2b446219285154ade5db2f2->leave($__internal_2f4d5be3e76fe9fb73c82bc08498ef40f1df5484f2b446219285154ade5db2f2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8f8168f1775193e74e227334517a4a096b8b18972ab9bc7bad2c160eff8dd36 = $this->env->getExtension("native_profiler");
        $__internal_d8f8168f1775193e74e227334517a4a096b8b18972ab9bc7bad2c160eff8dd36->enter($__internal_d8f8168f1775193e74e227334517a4a096b8b18972ab9bc7bad2c160eff8dd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_d8f8168f1775193e74e227334517a4a096b8b18972ab9bc7bad2c160eff8dd36->leave($__internal_d8f8168f1775193e74e227334517a4a096b8b18972ab9bc7bad2c160eff8dd36_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_da1d1ac9de68f9db5cf0eda26f1129ad8ac0e2d0f4e9ce858a2704878265ba1a = $this->env->getExtension("native_profiler");
        $__internal_da1d1ac9de68f9db5cf0eda26f1129ad8ac0e2d0f4e9ce858a2704878265ba1a->enter($__internal_da1d1ac9de68f9db5cf0eda26f1129ad8ac0e2d0f4e9ce858a2704878265ba1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
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
                                        <div class=\"title\">Ver/Modificar receta \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        echo "\"
                                            <a href=\"";
        // line 21
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
        // line 29
        $this->loadTemplate("AdminBundle:Receta:form.html.twig", "@Admin/Receta/modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_da1d1ac9de68f9db5cf0eda26f1129ad8ac0e2d0f4e9ce858a2704878265ba1a->leave($__internal_da1d1ac9de68f9db5cf0eda26f1129ad8ac0e2d0f4e9ce858a2704878265ba1a_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Receta/modify.html.twig";
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

{% block title %}Ver/Modificar receta {{entidad.nombre}}{% endblock %}
{% block stylesheets %}
{{ parent() }}
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
                                        <div class=\"title\">Ver/Modificar receta \"{{entidad.nombre}}\"
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
{% endblock %}

";
    }
}
