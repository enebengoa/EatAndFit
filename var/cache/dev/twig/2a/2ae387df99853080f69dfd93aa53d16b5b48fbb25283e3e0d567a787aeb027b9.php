<?php

/* AdminBundle:Menu:modify.html.twig */
class __TwigTemplate_8b6b7dfeb4bdc6e299d9c037f7947dcef713252d54d9604ce75191219e5690ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Menu:modify.html.twig", 1);
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
        $__internal_05227c18f405388c89301c6d9c5a94bbc7a9223004a132ee457ae689d9552961 = $this->env->getExtension("native_profiler");
        $__internal_05227c18f405388c89301c6d9c5a94bbc7a9223004a132ee457ae689d9552961->enter($__internal_05227c18f405388c89301c6d9c5a94bbc7a9223004a132ee457ae689d9552961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Menu:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05227c18f405388c89301c6d9c5a94bbc7a9223004a132ee457ae689d9552961->leave($__internal_05227c18f405388c89301c6d9c5a94bbc7a9223004a132ee457ae689d9552961_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d93bbf4919529188798e5770ef95750f538c9dd92525545d73085ca292a5a043 = $this->env->getExtension("native_profiler");
        $__internal_d93bbf4919529188798e5770ef95750f538c9dd92525545d73085ca292a5a043->enter($__internal_d93bbf4919529188798e5770ef95750f538c9dd92525545d73085ca292a5a043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar menú ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_d93bbf4919529188798e5770ef95750f538c9dd92525545d73085ca292a5a043->leave($__internal_d93bbf4919529188798e5770ef95750f538c9dd92525545d73085ca292a5a043_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4801bf7ea8d3763da207434b0a8bb9951744943a22cf79aaf722df2298cd56f2 = $this->env->getExtension("native_profiler");
        $__internal_4801bf7ea8d3763da207434b0a8bb9951744943a22cf79aaf722df2298cd56f2->enter($__internal_4801bf7ea8d3763da207434b0a8bb9951744943a22cf79aaf722df2298cd56f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_4801bf7ea8d3763da207434b0a8bb9951744943a22cf79aaf722df2298cd56f2->leave($__internal_4801bf7ea8d3763da207434b0a8bb9951744943a22cf79aaf722df2298cd56f2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d117ebb1f487881e73e6986d6218863cbecaf03b50e250e23a7fc719ae60253b = $this->env->getExtension("native_profiler");
        $__internal_d117ebb1f487881e73e6986d6218863cbecaf03b50e250e23a7fc719ae60253b->enter($__internal_d117ebb1f487881e73e6986d6218863cbecaf03b50e250e23a7fc719ae60253b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">MENÚS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar menú \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        echo "\"
                                            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("App_admin_listMenu");
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
        $this->loadTemplate("AdminBundle:Menu:form.html.twig", "AdminBundle:Menu:modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_d117ebb1f487881e73e6986d6218863cbecaf03b50e250e23a7fc719ae60253b->leave($__internal_d117ebb1f487881e73e6986d6218863cbecaf03b50e250e23a7fc719ae60253b_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Menu:modify.html.twig";
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

{% block title %}Ver/Modificar menú {{entidad.nombre}}{% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">MENÚS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar menú \"{{entidad.nombre}}\"
                                            <a href=\"{{ path('App_admin_listMenu')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                        {% include \"AdminBundle:Menu:form.html.twig\" %}
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
