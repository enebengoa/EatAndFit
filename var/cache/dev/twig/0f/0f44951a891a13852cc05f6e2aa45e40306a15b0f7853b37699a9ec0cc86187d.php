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
        $__internal_acff77270d39641f5cfee56afe1f49d3b603d1ba2eec2a59047a88245f2ed661 = $this->env->getExtension("native_profiler");
        $__internal_acff77270d39641f5cfee56afe1f49d3b603d1ba2eec2a59047a88245f2ed661->enter($__internal_acff77270d39641f5cfee56afe1f49d3b603d1ba2eec2a59047a88245f2ed661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:TipoReceta:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acff77270d39641f5cfee56afe1f49d3b603d1ba2eec2a59047a88245f2ed661->leave($__internal_acff77270d39641f5cfee56afe1f49d3b603d1ba2eec2a59047a88245f2ed661_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_976998c2b3951b1528ebb0e0c95bf944d4fa9db9fc00e5bd39bd009e5981d69c = $this->env->getExtension("native_profiler");
        $__internal_976998c2b3951b1528ebb0e0c95bf944d4fa9db9fc00e5bd39bd009e5981d69c->enter($__internal_976998c2b3951b1528ebb0e0c95bf944d4fa9db9fc00e5bd39bd009e5981d69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar tipo de receta ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_976998c2b3951b1528ebb0e0c95bf944d4fa9db9fc00e5bd39bd009e5981d69c->leave($__internal_976998c2b3951b1528ebb0e0c95bf944d4fa9db9fc00e5bd39bd009e5981d69c_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7262d0c5b5b963aeff8fb1896e696b37c58a2b5e95c577ce2482388edc0c992 = $this->env->getExtension("native_profiler");
        $__internal_e7262d0c5b5b963aeff8fb1896e696b37c58a2b5e95c577ce2482388edc0c992->enter($__internal_e7262d0c5b5b963aeff8fb1896e696b37c58a2b5e95c577ce2482388edc0c992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_e7262d0c5b5b963aeff8fb1896e696b37c58a2b5e95c577ce2482388edc0c992->leave($__internal_e7262d0c5b5b963aeff8fb1896e696b37c58a2b5e95c577ce2482388edc0c992_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_971f6f05789a76a73793127a61d1052ad1bb1e2b4cf406cf63fda60e1a9fb040 = $this->env->getExtension("native_profiler");
        $__internal_971f6f05789a76a73793127a61d1052ad1bb1e2b4cf406cf63fda60e1a9fb040->enter($__internal_971f6f05789a76a73793127a61d1052ad1bb1e2b4cf406cf63fda60e1a9fb040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:TipoReceta:form.html.twig", "AdminBundle:TipoReceta:modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_971f6f05789a76a73793127a61d1052ad1bb1e2b4cf406cf63fda60e1a9fb040->leave($__internal_971f6f05789a76a73793127a61d1052ad1bb1e2b4cf406cf63fda60e1a9fb040_prof);

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
        return array (  101 => 30,  99 => 29,  88 => 21,  84 => 20,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  36 => 3,  11 => 1,);
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
                                        {% include \"AdminBundle:TipoReceta:form.html.twig\" %}
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
