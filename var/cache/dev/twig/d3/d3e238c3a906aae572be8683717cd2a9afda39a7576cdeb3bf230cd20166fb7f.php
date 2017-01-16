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
        $__internal_17b3b4a3ef5b25384d8b573f599cfc124f5c4fa8fb9c2a3d8775c302a8cb41c9 = $this->env->getExtension("native_profiler");
        $__internal_17b3b4a3ef5b25384d8b573f599cfc124f5c4fa8fb9c2a3d8775c302a8cb41c9->enter($__internal_17b3b4a3ef5b25384d8b573f599cfc124f5c4fa8fb9c2a3d8775c302a8cb41c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Receta/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17b3b4a3ef5b25384d8b573f599cfc124f5c4fa8fb9c2a3d8775c302a8cb41c9->leave($__internal_17b3b4a3ef5b25384d8b573f599cfc124f5c4fa8fb9c2a3d8775c302a8cb41c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_de2f22079c74e6d4368892c01448aafaee6dcd2e34e0d359d6ecf605f9124f72 = $this->env->getExtension("native_profiler");
        $__internal_de2f22079c74e6d4368892c01448aafaee6dcd2e34e0d359d6ecf605f9124f72->enter($__internal_de2f22079c74e6d4368892c01448aafaee6dcd2e34e0d359d6ecf605f9124f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar receta ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_de2f22079c74e6d4368892c01448aafaee6dcd2e34e0d359d6ecf605f9124f72->leave($__internal_de2f22079c74e6d4368892c01448aafaee6dcd2e34e0d359d6ecf605f9124f72_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c1d937830df18fd4ffc7979d09c8e03ffaa8a876a7df4968c6bc4415e44ce00 = $this->env->getExtension("native_profiler");
        $__internal_7c1d937830df18fd4ffc7979d09c8e03ffaa8a876a7df4968c6bc4415e44ce00->enter($__internal_7c1d937830df18fd4ffc7979d09c8e03ffaa8a876a7df4968c6bc4415e44ce00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_7c1d937830df18fd4ffc7979d09c8e03ffaa8a876a7df4968c6bc4415e44ce00->leave($__internal_7c1d937830df18fd4ffc7979d09c8e03ffaa8a876a7df4968c6bc4415e44ce00_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b19622499b2df105bdac2cd937a5850e26808069432399ff78f6802f4dcc3f0 = $this->env->getExtension("native_profiler");
        $__internal_0b19622499b2df105bdac2cd937a5850e26808069432399ff78f6802f4dcc3f0->enter($__internal_0b19622499b2df105bdac2cd937a5850e26808069432399ff78f6802f4dcc3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0b19622499b2df105bdac2cd937a5850e26808069432399ff78f6802f4dcc3f0->leave($__internal_0b19622499b2df105bdac2cd937a5850e26808069432399ff78f6802f4dcc3f0_prof);

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
