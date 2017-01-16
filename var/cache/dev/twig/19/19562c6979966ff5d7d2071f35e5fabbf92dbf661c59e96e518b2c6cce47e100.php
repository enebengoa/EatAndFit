<?php

/* @Admin/Menu/modify.html.twig */
class __TwigTemplate_bac9b76bd01049131fff7ff5758975c18ce1f0ef21d418533cdfdaa007bc7892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Menu/modify.html.twig", 1);
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
        $__internal_b5fac1423e60dde1a51dbc47598d986e98572ee84eacbbd1ba58925215988dc2 = $this->env->getExtension("native_profiler");
        $__internal_b5fac1423e60dde1a51dbc47598d986e98572ee84eacbbd1ba58925215988dc2->enter($__internal_b5fac1423e60dde1a51dbc47598d986e98572ee84eacbbd1ba58925215988dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Menu/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5fac1423e60dde1a51dbc47598d986e98572ee84eacbbd1ba58925215988dc2->leave($__internal_b5fac1423e60dde1a51dbc47598d986e98572ee84eacbbd1ba58925215988dc2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3062bbda420a457c17b10dbda641c6f09a31d6908600840b7c9d4e4423ec6c24 = $this->env->getExtension("native_profiler");
        $__internal_3062bbda420a457c17b10dbda641c6f09a31d6908600840b7c9d4e4423ec6c24->enter($__internal_3062bbda420a457c17b10dbda641c6f09a31d6908600840b7c9d4e4423ec6c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar menú ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_3062bbda420a457c17b10dbda641c6f09a31d6908600840b7c9d4e4423ec6c24->leave($__internal_3062bbda420a457c17b10dbda641c6f09a31d6908600840b7c9d4e4423ec6c24_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f7adb9a9ac326cfb5be71587a0cda12a21feee5afc864761d9b861be2e1f2556 = $this->env->getExtension("native_profiler");
        $__internal_f7adb9a9ac326cfb5be71587a0cda12a21feee5afc864761d9b861be2e1f2556->enter($__internal_f7adb9a9ac326cfb5be71587a0cda12a21feee5afc864761d9b861be2e1f2556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_f7adb9a9ac326cfb5be71587a0cda12a21feee5afc864761d9b861be2e1f2556->leave($__internal_f7adb9a9ac326cfb5be71587a0cda12a21feee5afc864761d9b861be2e1f2556_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9e354ac9eb44f59ea6a0114ac9999e159e63880a7de9b9df0eae6e751b49e78 = $this->env->getExtension("native_profiler");
        $__internal_e9e354ac9eb44f59ea6a0114ac9999e159e63880a7de9b9df0eae6e751b49e78->enter($__internal_e9e354ac9eb44f59ea6a0114ac9999e159e63880a7de9b9df0eae6e751b49e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:Menu:form.html.twig", "@Admin/Menu/modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_e9e354ac9eb44f59ea6a0114ac9999e159e63880a7de9b9df0eae6e751b49e78->leave($__internal_e9e354ac9eb44f59ea6a0114ac9999e159e63880a7de9b9df0eae6e751b49e78_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Menu/modify.html.twig";
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
