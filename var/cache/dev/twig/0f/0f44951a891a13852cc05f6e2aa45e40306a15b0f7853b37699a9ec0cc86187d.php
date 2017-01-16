<?php

/* AdminBundle:TipoReceta:modify.html.twig */
class __TwigTemplate_788ac8f4666fb9896d390b3df98b393ed62189deeff64da48220effc2e6822bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:TipoReceta:modify.html.twig", 1);
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
        $__internal_40956ae6c02f0e34db301ac498edee8adcd6efeba841643ba3460864b412ffc6 = $this->env->getExtension("native_profiler");
        $__internal_40956ae6c02f0e34db301ac498edee8adcd6efeba841643ba3460864b412ffc6->enter($__internal_40956ae6c02f0e34db301ac498edee8adcd6efeba841643ba3460864b412ffc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:TipoReceta:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40956ae6c02f0e34db301ac498edee8adcd6efeba841643ba3460864b412ffc6->leave($__internal_40956ae6c02f0e34db301ac498edee8adcd6efeba841643ba3460864b412ffc6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45483500bbbf936b324e491104c244b1a9eceda7ff05d6d6a5237e9937e44809 = $this->env->getExtension("native_profiler");
        $__internal_45483500bbbf936b324e491104c244b1a9eceda7ff05d6d6a5237e9937e44809->enter($__internal_45483500bbbf936b324e491104c244b1a9eceda7ff05d6d6a5237e9937e44809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar tipo de receta ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_45483500bbbf936b324e491104c244b1a9eceda7ff05d6d6a5237e9937e44809->leave($__internal_45483500bbbf936b324e491104c244b1a9eceda7ff05d6d6a5237e9937e44809_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_59b0bb59f79581e7f1b9a683c5e11b8f2dfb8943be77877ab97535679957a208 = $this->env->getExtension("native_profiler");
        $__internal_59b0bb59f79581e7f1b9a683c5e11b8f2dfb8943be77877ab97535679957a208->enter($__internal_59b0bb59f79581e7f1b9a683c5e11b8f2dfb8943be77877ab97535679957a208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_59b0bb59f79581e7f1b9a683c5e11b8f2dfb8943be77877ab97535679957a208->leave($__internal_59b0bb59f79581e7f1b9a683c5e11b8f2dfb8943be77877ab97535679957a208_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_150fd5c2037bcb4f04cefea505950676220fca19b008a07072bb3753d59e6650 = $this->env->getExtension("native_profiler");
        $__internal_150fd5c2037bcb4f04cefea505950676220fca19b008a07072bb3753d59e6650->enter($__internal_150fd5c2037bcb4f04cefea505950676220fca19b008a07072bb3753d59e6650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:TipoReceta:form.html.twig", "AdminBundle:TipoReceta:modify.html.twig", 30)->display($context);
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
        
        $__internal_150fd5c2037bcb4f04cefea505950676220fca19b008a07072bb3753d59e6650->leave($__internal_150fd5c2037bcb4f04cefea505950676220fca19b008a07072bb3753d59e6650_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:TipoReceta:modify.html.twig";
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
