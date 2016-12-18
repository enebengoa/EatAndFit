<?php

/* AdminBundle:HoraIngesta:modify.html.twig */
class __TwigTemplate_b76e4478d972de8a22ff7aaf184b5fa80b91a71c3c99ee1a5717b3f885e55882 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:HoraIngesta:modify.html.twig", 1);
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
        $__internal_caf98128a9543688c887b7af4fab325c0cf52b8c047c51a0ff9715419119545b = $this->env->getExtension("native_profiler");
        $__internal_caf98128a9543688c887b7af4fab325c0cf52b8c047c51a0ff9715419119545b->enter($__internal_caf98128a9543688c887b7af4fab325c0cf52b8c047c51a0ff9715419119545b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:HoraIngesta:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caf98128a9543688c887b7af4fab325c0cf52b8c047c51a0ff9715419119545b->leave($__internal_caf98128a9543688c887b7af4fab325c0cf52b8c047c51a0ff9715419119545b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1890afc6fdb17ab168c2312ced14df80f977e6936a1648c5d608f4d76f29d877 = $this->env->getExtension("native_profiler");
        $__internal_1890afc6fdb17ab168c2312ced14df80f977e6936a1648c5d608f4d76f29d877->enter($__internal_1890afc6fdb17ab168c2312ced14df80f977e6936a1648c5d608f4d76f29d877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar hora de ingesta ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_1890afc6fdb17ab168c2312ced14df80f977e6936a1648c5d608f4d76f29d877->leave($__internal_1890afc6fdb17ab168c2312ced14df80f977e6936a1648c5d608f4d76f29d877_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a45d3e5078e51c7ae851077a16863da549d0125dea5b8b946a3672caf0d33b2 = $this->env->getExtension("native_profiler");
        $__internal_2a45d3e5078e51c7ae851077a16863da549d0125dea5b8b946a3672caf0d33b2->enter($__internal_2a45d3e5078e51c7ae851077a16863da549d0125dea5b8b946a3672caf0d33b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_2a45d3e5078e51c7ae851077a16863da549d0125dea5b8b946a3672caf0d33b2->leave($__internal_2a45d3e5078e51c7ae851077a16863da549d0125dea5b8b946a3672caf0d33b2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_802e1837350fc0109ca8f81b1f81a2b62527f68828860a926018cc24f32691d8 = $this->env->getExtension("native_profiler");
        $__internal_802e1837350fc0109ca8f81b1f81a2b62527f68828860a926018cc24f32691d8->enter($__internal_802e1837350fc0109ca8f81b1f81a2b62527f68828860a926018cc24f32691d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                        <div class=\"title\">Ver/Modificar hora de ingesta\"";
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
        $this->loadTemplate("AdminBundle:HoraIngesta:form.html.twig", "AdminBundle:HoraIngesta:modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_802e1837350fc0109ca8f81b1f81a2b62527f68828860a926018cc24f32691d8->leave($__internal_802e1837350fc0109ca8f81b1f81a2b62527f68828860a926018cc24f32691d8_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:HoraIngesta:modify.html.twig";
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
                                        <div class=\"title\">Ver/Modificar hora de ingesta\"{{entidad.nombre}}\"
                                            <a href=\"{{ path('App_admin_listHoraIngesta')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                        {% include \"AdminBundle:HoraIngesta:form.html.twig\" %}
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
