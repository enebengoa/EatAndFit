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
        $__internal_7a4a0ffbe5133683ca0e78544a722992096fbc23f66ecaeceb430d3f3ca1188b = $this->env->getExtension("native_profiler");
        $__internal_7a4a0ffbe5133683ca0e78544a722992096fbc23f66ecaeceb430d3f3ca1188b->enter($__internal_7a4a0ffbe5133683ca0e78544a722992096fbc23f66ecaeceb430d3f3ca1188b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Menu:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a4a0ffbe5133683ca0e78544a722992096fbc23f66ecaeceb430d3f3ca1188b->leave($__internal_7a4a0ffbe5133683ca0e78544a722992096fbc23f66ecaeceb430d3f3ca1188b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_51090313ab168d277b88ae09d2897e5efada7eb86e5894790fe5157700c5a461 = $this->env->getExtension("native_profiler");
        $__internal_51090313ab168d277b88ae09d2897e5efada7eb86e5894790fe5157700c5a461->enter($__internal_51090313ab168d277b88ae09d2897e5efada7eb86e5894790fe5157700c5a461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar menú ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_51090313ab168d277b88ae09d2897e5efada7eb86e5894790fe5157700c5a461->leave($__internal_51090313ab168d277b88ae09d2897e5efada7eb86e5894790fe5157700c5a461_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d751665b3bed558903e0b1a4d8e0cfa5b9e16b1bdb5178c58ca0789fa47c7f1 = $this->env->getExtension("native_profiler");
        $__internal_2d751665b3bed558903e0b1a4d8e0cfa5b9e16b1bdb5178c58ca0789fa47c7f1->enter($__internal_2d751665b3bed558903e0b1a4d8e0cfa5b9e16b1bdb5178c58ca0789fa47c7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_2d751665b3bed558903e0b1a4d8e0cfa5b9e16b1bdb5178c58ca0789fa47c7f1->leave($__internal_2d751665b3bed558903e0b1a4d8e0cfa5b9e16b1bdb5178c58ca0789fa47c7f1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_67d363916efbd29133d90b6e807bb5817f5c53d61ff86162a5984cd1198ed303 = $this->env->getExtension("native_profiler");
        $__internal_67d363916efbd29133d90b6e807bb5817f5c53d61ff86162a5984cd1198ed303->enter($__internal_67d363916efbd29133d90b6e807bb5817f5c53d61ff86162a5984cd1198ed303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_67d363916efbd29133d90b6e807bb5817f5c53d61ff86162a5984cd1198ed303->leave($__internal_67d363916efbd29133d90b6e807bb5817f5c53d61ff86162a5984cd1198ed303_prof);

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
