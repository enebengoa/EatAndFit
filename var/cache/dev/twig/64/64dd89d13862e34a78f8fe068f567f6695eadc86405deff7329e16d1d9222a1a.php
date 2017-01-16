<?php

/* AdminBundle:Utensilio:modify.html.twig */
class __TwigTemplate_157ceb885ff79bfefe61a47e820f7f0c6d7253b10f2d45d752a56291c4e34d7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Utensilio:modify.html.twig", 1);
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
        $__internal_32f5f51458e0675ce2da5cd8776944a0e7074b91132b2f9b340f36e3286d8f2e = $this->env->getExtension("native_profiler");
        $__internal_32f5f51458e0675ce2da5cd8776944a0e7074b91132b2f9b340f36e3286d8f2e->enter($__internal_32f5f51458e0675ce2da5cd8776944a0e7074b91132b2f9b340f36e3286d8f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Utensilio:modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32f5f51458e0675ce2da5cd8776944a0e7074b91132b2f9b340f36e3286d8f2e->leave($__internal_32f5f51458e0675ce2da5cd8776944a0e7074b91132b2f9b340f36e3286d8f2e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_338fab7ebf16506f3451f15d4abf8893ace37674fae5e25db034b4ebd5839529 = $this->env->getExtension("native_profiler");
        $__internal_338fab7ebf16506f3451f15d4abf8893ace37674fae5e25db034b4ebd5839529->enter($__internal_338fab7ebf16506f3451f15d4abf8893ace37674fae5e25db034b4ebd5839529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar utensilio ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_338fab7ebf16506f3451f15d4abf8893ace37674fae5e25db034b4ebd5839529->leave($__internal_338fab7ebf16506f3451f15d4abf8893ace37674fae5e25db034b4ebd5839529_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dcd41462b716e2bbb7a84046b4931e15681713f7bb19553f510c02dbee5d6732 = $this->env->getExtension("native_profiler");
        $__internal_dcd41462b716e2bbb7a84046b4931e15681713f7bb19553f510c02dbee5d6732->enter($__internal_dcd41462b716e2bbb7a84046b4931e15681713f7bb19553f510c02dbee5d6732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_dcd41462b716e2bbb7a84046b4931e15681713f7bb19553f510c02dbee5d6732->leave($__internal_dcd41462b716e2bbb7a84046b4931e15681713f7bb19553f510c02dbee5d6732_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc876f604eda2daec7bc6e42b46f510c06b3c94fb6bff60e997d2afeca52a926 = $this->env->getExtension("native_profiler");
        $__internal_fc876f604eda2daec7bc6e42b46f510c06b3c94fb6bff60e997d2afeca52a926->enter($__internal_fc876f604eda2daec7bc6e42b46f510c06b3c94fb6bff60e997d2afeca52a926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">UTENSILIOS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar utensilio \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        echo "\"
                                            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("App_admin_listUtensilio");
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formUtensilio"]) ? $context["formUtensilio"] : $this->getContext($context, "formUtensilio")), 'form_start');
        echo "
                                        ";
        // line 30
        $this->loadTemplate("AdminBundle:Utensilio:form.html.twig", "AdminBundle:Utensilio:modify.html.twig", 30)->display($context);
        // line 31
        echo "                                    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formUtensilio"]) ? $context["formUtensilio"] : $this->getContext($context, "formUtensilio")), 'form_end');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_fc876f604eda2daec7bc6e42b46f510c06b3c94fb6bff60e997d2afeca52a926->leave($__internal_fc876f604eda2daec7bc6e42b46f510c06b3c94fb6bff60e997d2afeca52a926_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Utensilio:modify.html.twig";
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

{% block title %}Ver/Modificar utensilio {{entidad.nombre}}{% endblock %}
{% block stylesheets %}
{{ parent() }}
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">UTENSILIOS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Ver/Modificar utensilio \"{{entidad.nombre}}\"
                                            <a href=\"{{ path('App_admin_listUtensilio')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                    {{ form_start(formUtensilio)}}
                                        {% include \"AdminBundle:Utensilio:form.html.twig\" %}
                                    {{ form_end(formUtensilio) }}
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
