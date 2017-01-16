<?php

/* @Admin/Tecnica/modify.html.twig */
class __TwigTemplate_b6cc2cc19d266ddfa2cd33ab0b52e16b6e665fdad3fc584872cc0bb2a766f380 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Tecnica/modify.html.twig", 1);
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
        $__internal_dde9ff0df6279a243b587b0ab14b98c62067f7b666a976295e4afc439f059739 = $this->env->getExtension("native_profiler");
        $__internal_dde9ff0df6279a243b587b0ab14b98c62067f7b666a976295e4afc439f059739->enter($__internal_dde9ff0df6279a243b587b0ab14b98c62067f7b666a976295e4afc439f059739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Tecnica/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dde9ff0df6279a243b587b0ab14b98c62067f7b666a976295e4afc439f059739->leave($__internal_dde9ff0df6279a243b587b0ab14b98c62067f7b666a976295e4afc439f059739_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b47ffa435681f23c37c84a8deb4f99ac714b276c330a308a2bd2b9483d96ba92 = $this->env->getExtension("native_profiler");
        $__internal_b47ffa435681f23c37c84a8deb4f99ac714b276c330a308a2bd2b9483d96ba92->enter($__internal_b47ffa435681f23c37c84a8deb4f99ac714b276c330a308a2bd2b9483d96ba92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar técnica ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_b47ffa435681f23c37c84a8deb4f99ac714b276c330a308a2bd2b9483d96ba92->leave($__internal_b47ffa435681f23c37c84a8deb4f99ac714b276c330a308a2bd2b9483d96ba92_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d5504cbf38204122b31faffb9a56288bee20393b0b972485a0ad3a766ca1ec2 = $this->env->getExtension("native_profiler");
        $__internal_1d5504cbf38204122b31faffb9a56288bee20393b0b972485a0ad3a766ca1ec2->enter($__internal_1d5504cbf38204122b31faffb9a56288bee20393b0b972485a0ad3a766ca1ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_1d5504cbf38204122b31faffb9a56288bee20393b0b972485a0ad3a766ca1ec2->leave($__internal_1d5504cbf38204122b31faffb9a56288bee20393b0b972485a0ad3a766ca1ec2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9122f53e6c31499798704e046cb0fbae30fe857afeff02ceaad2a11b9a74fff7 = $this->env->getExtension("native_profiler");
        $__internal_9122f53e6c31499798704e046cb0fbae30fe857afeff02ceaad2a11b9a74fff7->enter($__internal_9122f53e6c31499798704e046cb0fbae30fe857afeff02ceaad2a11b9a74fff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formTecnica"]) ? $context["formTecnica"] : $this->getContext($context, "formTecnica")), 'form_start');
        echo "
                                        ";
        // line 30
        $this->loadTemplate("AdminBundle:Tecnica:form.html.twig", "@Admin/Tecnica/modify.html.twig", 30)->display($context);
        // line 31
        echo "                                    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formTecnica"]) ? $context["formTecnica"] : $this->getContext($context, "formTecnica")), 'form_end');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_9122f53e6c31499798704e046cb0fbae30fe857afeff02ceaad2a11b9a74fff7->leave($__internal_9122f53e6c31499798704e046cb0fbae30fe857afeff02ceaad2a11b9a74fff7_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Tecnica/modify.html.twig";
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
                                    {{ form_start(formTecnica)}}
                                        {% include \"AdminBundle:Tecnica:form.html.twig\" %}
                                    {{ form_end(formTecnica) }}
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
