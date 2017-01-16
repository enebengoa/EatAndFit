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
        $__internal_e77e23a6112719d2565de5e5f8c31c65b2ec9df612158fa77f9b0666736794f2 = $this->env->getExtension("native_profiler");
        $__internal_e77e23a6112719d2565de5e5f8c31c65b2ec9df612158fa77f9b0666736794f2->enter($__internal_e77e23a6112719d2565de5e5f8c31c65b2ec9df612158fa77f9b0666736794f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:HoraIngesta:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e77e23a6112719d2565de5e5f8c31c65b2ec9df612158fa77f9b0666736794f2->leave($__internal_e77e23a6112719d2565de5e5f8c31c65b2ec9df612158fa77f9b0666736794f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6395dfb9fa71ce83c8630b6c9c89c9b8fa9522ad992d5e3f2e756fdc6d15469b = $this->env->getExtension("native_profiler");
        $__internal_6395dfb9fa71ce83c8630b6c9c89c9b8fa9522ad992d5e3f2e756fdc6d15469b->enter($__internal_6395dfb9fa71ce83c8630b6c9c89c9b8fa9522ad992d5e3f2e756fdc6d15469b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar hora de ingesta ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_6395dfb9fa71ce83c8630b6c9c89c9b8fa9522ad992d5e3f2e756fdc6d15469b->leave($__internal_6395dfb9fa71ce83c8630b6c9c89c9b8fa9522ad992d5e3f2e756fdc6d15469b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57ae2601a37f3eed0a5238b3dbe8563108b92dde47e27c9e9d65bd7f3ff9b627 = $this->env->getExtension("native_profiler");
        $__internal_57ae2601a37f3eed0a5238b3dbe8563108b92dde47e27c9e9d65bd7f3ff9b627->enter($__internal_57ae2601a37f3eed0a5238b3dbe8563108b92dde47e27c9e9d65bd7f3ff9b627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_57ae2601a37f3eed0a5238b3dbe8563108b92dde47e27c9e9d65bd7f3ff9b627->leave($__internal_57ae2601a37f3eed0a5238b3dbe8563108b92dde47e27c9e9d65bd7f3ff9b627_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_449196ecabccf85d6c70af9b1a50548119065892580c9dbf1e8c9e5ca0463c99 = $this->env->getExtension("native_profiler");
        $__internal_449196ecabccf85d6c70af9b1a50548119065892580c9dbf1e8c9e5ca0463c99->enter($__internal_449196ecabccf85d6c70af9b1a50548119065892580c9dbf1e8c9e5ca0463c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:HoraIngesta:form.html.twig", "AdminBundle:HoraIngesta:modify.html.twig", 30)->display($context);
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
        
        $__internal_449196ecabccf85d6c70af9b1a50548119065892580c9dbf1e8c9e5ca0463c99->leave($__internal_449196ecabccf85d6c70af9b1a50548119065892580c9dbf1e8c9e5ca0463c99_prof);

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
