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
        $__internal_8093167c5f47582337d81eceffe35f27250adaaf3be5a6f155582d00b42b86ba = $this->env->getExtension("native_profiler");
        $__internal_8093167c5f47582337d81eceffe35f27250adaaf3be5a6f155582d00b42b86ba->enter($__internal_8093167c5f47582337d81eceffe35f27250adaaf3be5a6f155582d00b42b86ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Tecnica:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8093167c5f47582337d81eceffe35f27250adaaf3be5a6f155582d00b42b86ba->leave($__internal_8093167c5f47582337d81eceffe35f27250adaaf3be5a6f155582d00b42b86ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec414d1286e01754e87ec1353540256c8642144b4dfdf236f23ecb466d1d70eb = $this->env->getExtension("native_profiler");
        $__internal_ec414d1286e01754e87ec1353540256c8642144b4dfdf236f23ecb466d1d70eb->enter($__internal_ec414d1286e01754e87ec1353540256c8642144b4dfdf236f23ecb466d1d70eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar técnica ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_ec414d1286e01754e87ec1353540256c8642144b4dfdf236f23ecb466d1d70eb->leave($__internal_ec414d1286e01754e87ec1353540256c8642144b4dfdf236f23ecb466d1d70eb_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1191fa4679a07f7c305a55506a04c3594c333a34e5e3acb4fb4df031c7b36b4f = $this->env->getExtension("native_profiler");
        $__internal_1191fa4679a07f7c305a55506a04c3594c333a34e5e3acb4fb4df031c7b36b4f->enter($__internal_1191fa4679a07f7c305a55506a04c3594c333a34e5e3acb4fb4df031c7b36b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_1191fa4679a07f7c305a55506a04c3594c333a34e5e3acb4fb4df031c7b36b4f->leave($__internal_1191fa4679a07f7c305a55506a04c3594c333a34e5e3acb4fb4df031c7b36b4f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbf9a3e1cbc89f6fcc6eedbdfc6d47e84566ccb8c67d7849f89d9d511ec31bbc = $this->env->getExtension("native_profiler");
        $__internal_dbf9a3e1cbc89f6fcc6eedbdfc6d47e84566ccb8c67d7849f89d9d511ec31bbc->enter($__internal_dbf9a3e1cbc89f6fcc6eedbdfc6d47e84566ccb8c67d7849f89d9d511ec31bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:Tecnica:form.html.twig", "AdminBundle:Tecnica:modify.html.twig", 30)->display($context);
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
        
        $__internal_dbf9a3e1cbc89f6fcc6eedbdfc6d47e84566ccb8c67d7849f89d9d511ec31bbc->leave($__internal_dbf9a3e1cbc89f6fcc6eedbdfc6d47e84566ccb8c67d7849f89d9d511ec31bbc_prof);

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
