<?php

/* AdminBundle:Tecnica:modify.html.twig */
class __TwigTemplate_3876d892f184a5849db2e72eb1ebeaba3b61d4ceb981749569a77cacb083deb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Tecnica:modify.html.twig", 1);
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
        $__internal_942659fb4321a78dd7789014799c97f818f39563dc51e7412f97a91e0e34c930 = $this->env->getExtension("native_profiler");
        $__internal_942659fb4321a78dd7789014799c97f818f39563dc51e7412f97a91e0e34c930->enter($__internal_942659fb4321a78dd7789014799c97f818f39563dc51e7412f97a91e0e34c930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Tecnica:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_942659fb4321a78dd7789014799c97f818f39563dc51e7412f97a91e0e34c930->leave($__internal_942659fb4321a78dd7789014799c97f818f39563dc51e7412f97a91e0e34c930_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8188ab551c91ef654f4806dd919528deeb20db3d00188234424ed57900a85126 = $this->env->getExtension("native_profiler");
        $__internal_8188ab551c91ef654f4806dd919528deeb20db3d00188234424ed57900a85126->enter($__internal_8188ab551c91ef654f4806dd919528deeb20db3d00188234424ed57900a85126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar técnica ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_8188ab551c91ef654f4806dd919528deeb20db3d00188234424ed57900a85126->leave($__internal_8188ab551c91ef654f4806dd919528deeb20db3d00188234424ed57900a85126_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7b362e8bc0348d7a0660ca935ea39f70cad229c3a2e365a44e44d5c58d048b0a = $this->env->getExtension("native_profiler");
        $__internal_7b362e8bc0348d7a0660ca935ea39f70cad229c3a2e365a44e44d5c58d048b0a->enter($__internal_7b362e8bc0348d7a0660ca935ea39f70cad229c3a2e365a44e44d5c58d048b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_7b362e8bc0348d7a0660ca935ea39f70cad229c3a2e365a44e44d5c58d048b0a->leave($__internal_7b362e8bc0348d7a0660ca935ea39f70cad229c3a2e365a44e44d5c58d048b0a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2edc926797756301aca9a47d3d04fc1db74ad28b94e71980f0f019b596f1047 = $this->env->getExtension("native_profiler");
        $__internal_d2edc926797756301aca9a47d3d04fc1db74ad28b94e71980f0f019b596f1047->enter($__internal_d2edc926797756301aca9a47d3d04fc1db74ad28b94e71980f0f019b596f1047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">TÉCNICAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar técnica \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        echo "\"
                                            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("App_admin_listTecnica");
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
        $this->loadTemplate("AdminBundle:Tecnica:form.html.twig", "AdminBundle:Tecnica:modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_d2edc926797756301aca9a47d3d04fc1db74ad28b94e71980f0f019b596f1047->leave($__internal_d2edc926797756301aca9a47d3d04fc1db74ad28b94e71980f0f019b596f1047_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Tecnica:modify.html.twig";
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

{% block title %}Ver/Modificar técnica {{entidad.nombre}}{% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">TÉCNICAS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar técnica \"{{entidad.nombre}}\"
                                            <a href=\"{{ path('App_admin_listTecnica')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                        {% include \"AdminBundle:Tecnica:form.html.twig\" %}
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
