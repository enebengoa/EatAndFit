<?php

/* @Admin/HoraIngesta/modify.html.twig */
class __TwigTemplate_61439d871ae7e15408d93b488a7540fa416396ff9429fcdad2ead0ad91270437 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/HoraIngesta/modify.html.twig", 1);
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
        $__internal_3cb5636edcfbae8964674e9b7e6a137d80e41191edc815c9c7213421ac979065 = $this->env->getExtension("native_profiler");
        $__internal_3cb5636edcfbae8964674e9b7e6a137d80e41191edc815c9c7213421ac979065->enter($__internal_3cb5636edcfbae8964674e9b7e6a137d80e41191edc815c9c7213421ac979065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/HoraIngesta/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cb5636edcfbae8964674e9b7e6a137d80e41191edc815c9c7213421ac979065->leave($__internal_3cb5636edcfbae8964674e9b7e6a137d80e41191edc815c9c7213421ac979065_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba80544f990480e7ee8e79cb5e8cc5406b7140bef21b42841ee16267a746aaba = $this->env->getExtension("native_profiler");
        $__internal_ba80544f990480e7ee8e79cb5e8cc5406b7140bef21b42841ee16267a746aaba->enter($__internal_ba80544f990480e7ee8e79cb5e8cc5406b7140bef21b42841ee16267a746aaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar hora de ingesta ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_ba80544f990480e7ee8e79cb5e8cc5406b7140bef21b42841ee16267a746aaba->leave($__internal_ba80544f990480e7ee8e79cb5e8cc5406b7140bef21b42841ee16267a746aaba_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_417f361bd69e5302e28e47e6a422680a065883cb8ba63cb4db320fd675396175 = $this->env->getExtension("native_profiler");
        $__internal_417f361bd69e5302e28e47e6a422680a065883cb8ba63cb4db320fd675396175->enter($__internal_417f361bd69e5302e28e47e6a422680a065883cb8ba63cb4db320fd675396175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_417f361bd69e5302e28e47e6a422680a065883cb8ba63cb4db320fd675396175->leave($__internal_417f361bd69e5302e28e47e6a422680a065883cb8ba63cb4db320fd675396175_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7985db30b59f34f3ca413d4d19418ddc6fc843adb69fa9c110de355586092549 = $this->env->getExtension("native_profiler");
        $__internal_7985db30b59f34f3ca413d4d19418ddc6fc843adb69fa9c110de355586092549->enter($__internal_7985db30b59f34f3ca413d4d19418ddc6fc843adb69fa9c110de355586092549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">HORAS DE INGESTA</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar hora de ingesta \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        echo "\"
                                            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("App_admin_listHoraIngesta");
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHora"]) ? $context["formHora"] : $this->getContext($context, "formHora")), 'form_start');
        echo "
                                        ";
        // line 30
        $this->loadTemplate("AdminBundle:HoraIngesta:form.html.twig", "@Admin/HoraIngesta/modify.html.twig", 30)->display($context);
        // line 31
        echo "                                    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHora"]) ? $context["formHora"] : $this->getContext($context, "formHora")), 'form_end');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_7985db30b59f34f3ca413d4d19418ddc6fc843adb69fa9c110de355586092549->leave($__internal_7985db30b59f34f3ca413d4d19418ddc6fc843adb69fa9c110de355586092549_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/HoraIngesta/modify.html.twig";
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

{% block title %}Ver/Modificar hora de ingesta {{entidad.nombre}}{% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">HORAS DE INGESTA</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar hora de ingesta \"{{entidad.nombre}}\"
                                            <a href=\"{{ path('App_admin_listHoraIngesta')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                    {{ form_start(formHora)}}
                                        {% include \"AdminBundle:HoraIngesta:form.html.twig\" %}
                                    {{ form_end(formHora) }}
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
