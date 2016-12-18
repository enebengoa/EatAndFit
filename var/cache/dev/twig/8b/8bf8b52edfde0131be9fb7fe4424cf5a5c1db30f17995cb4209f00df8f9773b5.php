<?php

/* @Admin/TemaForo/modify.html.twig */
class __TwigTemplate_f5c4ff2bce88fd1e43d88f2c5778d8b988838f8c77a2519ebc713258f05f634a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/TemaForo/modify.html.twig", 1);
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
        $__internal_6b2189c96749d3db688ba2298fabf20abb3d55eea5deeb9233316598e2b03f52 = $this->env->getExtension("native_profiler");
        $__internal_6b2189c96749d3db688ba2298fabf20abb3d55eea5deeb9233316598e2b03f52->enter($__internal_6b2189c96749d3db688ba2298fabf20abb3d55eea5deeb9233316598e2b03f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/TemaForo/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b2189c96749d3db688ba2298fabf20abb3d55eea5deeb9233316598e2b03f52->leave($__internal_6b2189c96749d3db688ba2298fabf20abb3d55eea5deeb9233316598e2b03f52_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8e8f7d2e8c2a2c0eeb54a82e32adbe6a98c1c268a951b17984003ebfac52990 = $this->env->getExtension("native_profiler");
        $__internal_d8e8f7d2e8c2a2c0eeb54a82e32adbe6a98c1c268a951b17984003ebfac52990->enter($__internal_d8e8f7d2e8c2a2c0eeb54a82e32adbe6a98c1c268a951b17984003ebfac52990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar foro ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_d8e8f7d2e8c2a2c0eeb54a82e32adbe6a98c1c268a951b17984003ebfac52990->leave($__internal_d8e8f7d2e8c2a2c0eeb54a82e32adbe6a98c1c268a951b17984003ebfac52990_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a6d5fe60a7f6bdf2877d91d525458f7d4f913444e454767409ce18bc9d650341 = $this->env->getExtension("native_profiler");
        $__internal_a6d5fe60a7f6bdf2877d91d525458f7d4f913444e454767409ce18bc9d650341->enter($__internal_a6d5fe60a7f6bdf2877d91d525458f7d4f913444e454767409ce18bc9d650341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_a6d5fe60a7f6bdf2877d91d525458f7d4f913444e454767409ce18bc9d650341->leave($__internal_a6d5fe60a7f6bdf2877d91d525458f7d4f913444e454767409ce18bc9d650341_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b64088e58dba16a7aad79b316cee06286dc81d157ebe90d6cce0655dd65997df = $this->env->getExtension("native_profiler");
        $__internal_b64088e58dba16a7aad79b316cee06286dc81d157ebe90d6cce0655dd65997df->enter($__internal_b64088e58dba16a7aad79b316cee06286dc81d157ebe90d6cce0655dd65997df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:TemaForo:form.html.twig", "@Admin/TemaForo/modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_b64088e58dba16a7aad79b316cee06286dc81d157ebe90d6cce0655dd65997df->leave($__internal_b64088e58dba16a7aad79b316cee06286dc81d157ebe90d6cce0655dd65997df_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/TemaForo/modify.html.twig";
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
