<?php

/* AdminBundle:Receta:modify.html.twig */
class __TwigTemplate_298c65b31d174d69dd6738b44b5997984558e96589256dd176d0558f05df2c58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Receta:modify.html.twig", 1);
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
        $__internal_d93af1e14417d1093f077418fab51a38b5400e844fa67c317287c382b720bf14 = $this->env->getExtension("native_profiler");
        $__internal_d93af1e14417d1093f077418fab51a38b5400e844fa67c317287c382b720bf14->enter($__internal_d93af1e14417d1093f077418fab51a38b5400e844fa67c317287c382b720bf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Receta:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d93af1e14417d1093f077418fab51a38b5400e844fa67c317287c382b720bf14->leave($__internal_d93af1e14417d1093f077418fab51a38b5400e844fa67c317287c382b720bf14_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_33e18ebb080e4e84900772395abdb7b91b76053902e7d0fb93256fda93ccc567 = $this->env->getExtension("native_profiler");
        $__internal_33e18ebb080e4e84900772395abdb7b91b76053902e7d0fb93256fda93ccc567->enter($__internal_33e18ebb080e4e84900772395abdb7b91b76053902e7d0fb93256fda93ccc567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar receta ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_33e18ebb080e4e84900772395abdb7b91b76053902e7d0fb93256fda93ccc567->leave($__internal_33e18ebb080e4e84900772395abdb7b91b76053902e7d0fb93256fda93ccc567_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f35964ca682c0c48b926d54887c452e0e1f5c6a32254e909e5c2b9b8352b5230 = $this->env->getExtension("native_profiler");
        $__internal_f35964ca682c0c48b926d54887c452e0e1f5c6a32254e909e5c2b9b8352b5230->enter($__internal_f35964ca682c0c48b926d54887c452e0e1f5c6a32254e909e5c2b9b8352b5230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_f35964ca682c0c48b926d54887c452e0e1f5c6a32254e909e5c2b9b8352b5230->leave($__internal_f35964ca682c0c48b926d54887c452e0e1f5c6a32254e909e5c2b9b8352b5230_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_29cd8f95576ae9aa75c1fdd66815e1f802abdb1bcda4f6c19a4d9c92e0455494 = $this->env->getExtension("native_profiler");
        $__internal_29cd8f95576ae9aa75c1fdd66815e1f802abdb1bcda4f6c19a4d9c92e0455494->enter($__internal_29cd8f95576ae9aa75c1fdd66815e1f802abdb1bcda4f6c19a4d9c92e0455494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:Receta:form.html.twig", "AdminBundle:Receta:modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_29cd8f95576ae9aa75c1fdd66815e1f802abdb1bcda4f6c19a4d9c92e0455494->leave($__internal_29cd8f95576ae9aa75c1fdd66815e1f802abdb1bcda4f6c19a4d9c92e0455494_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Receta:modify.html.twig";
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
