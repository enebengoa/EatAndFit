<?php

/* AdminBundle:TemaForo:modify.html.twig */
class __TwigTemplate_43fd94382fb78704a78bc05f30dd631179ac7cca142760e04aa589c32ec4f90e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:TemaForo:modify.html.twig", 1);
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
        $__internal_64b6d64a18002a8a3604e5e425708d977502b03ff331bd1a8eeb91d30cb77369 = $this->env->getExtension("native_profiler");
        $__internal_64b6d64a18002a8a3604e5e425708d977502b03ff331bd1a8eeb91d30cb77369->enter($__internal_64b6d64a18002a8a3604e5e425708d977502b03ff331bd1a8eeb91d30cb77369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:TemaForo:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64b6d64a18002a8a3604e5e425708d977502b03ff331bd1a8eeb91d30cb77369->leave($__internal_64b6d64a18002a8a3604e5e425708d977502b03ff331bd1a8eeb91d30cb77369_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a54d7668b80ff3d30a7f8d9dc7e53fd7b1e63e37861975d983b213e5cc64d16a = $this->env->getExtension("native_profiler");
        $__internal_a54d7668b80ff3d30a7f8d9dc7e53fd7b1e63e37861975d983b213e5cc64d16a->enter($__internal_a54d7668b80ff3d30a7f8d9dc7e53fd7b1e63e37861975d983b213e5cc64d16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar foro ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_a54d7668b80ff3d30a7f8d9dc7e53fd7b1e63e37861975d983b213e5cc64d16a->leave($__internal_a54d7668b80ff3d30a7f8d9dc7e53fd7b1e63e37861975d983b213e5cc64d16a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d95718d2abf9124989aa758d6298c267374bca231eead701b8c8144241cd7cb = $this->env->getExtension("native_profiler");
        $__internal_0d95718d2abf9124989aa758d6298c267374bca231eead701b8c8144241cd7cb->enter($__internal_0d95718d2abf9124989aa758d6298c267374bca231eead701b8c8144241cd7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_0d95718d2abf9124989aa758d6298c267374bca231eead701b8c8144241cd7cb->leave($__internal_0d95718d2abf9124989aa758d6298c267374bca231eead701b8c8144241cd7cb_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d0cc17e1668b9ee2cc72379a4049ef9de7ccf304687163c1ad9c0606ba67a12 = $this->env->getExtension("native_profiler");
        $__internal_0d0cc17e1668b9ee2cc72379a4049ef9de7ccf304687163c1ad9c0606ba67a12->enter($__internal_0d0cc17e1668b9ee2cc72379a4049ef9de7ccf304687163c1ad9c0606ba67a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
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
                                        <div class=\"title\">Ver/Modificar foro \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        echo "\"
                                            <a href=\"";
        // line 21
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
        // line 29
        $this->loadTemplate("AdminBundle:TemaForo:form.html.twig", "AdminBundle:TemaForo:modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_0d0cc17e1668b9ee2cc72379a4049ef9de7ccf304687163c1ad9c0606ba67a12->leave($__internal_0d0cc17e1668b9ee2cc72379a4049ef9de7ccf304687163c1ad9c0606ba67a12_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:TemaForo:modify.html.twig";
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

{% block title %}Ver/Modificar foro {{entidad.nombre}}{% endblock %}
{% block stylesheets %}
{{ parent() }}
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
                                        <div class=\"title\">Ver/Modificar foro \"{{entidad.nombre}}\"
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
{% endblock %}

";
    }
}
