<?php

/* @Admin/Utensilio/modify.html.twig */
class __TwigTemplate_018aa562857aa49f0adc29cddccd883013cbab5dc67d875533dde0d7c81c3f9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Utensilio/modify.html.twig", 1);
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
        $__internal_3e8651c59cf46fbc10515aa6bbdc0eae2ae2f6ea6a90a06f3338403fe420570d = $this->env->getExtension("native_profiler");
        $__internal_3e8651c59cf46fbc10515aa6bbdc0eae2ae2f6ea6a90a06f3338403fe420570d->enter($__internal_3e8651c59cf46fbc10515aa6bbdc0eae2ae2f6ea6a90a06f3338403fe420570d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Utensilio/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e8651c59cf46fbc10515aa6bbdc0eae2ae2f6ea6a90a06f3338403fe420570d->leave($__internal_3e8651c59cf46fbc10515aa6bbdc0eae2ae2f6ea6a90a06f3338403fe420570d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9f6814d93b084e5bc2291841bf562c65699f711afeded58064aa2f651e41f14 = $this->env->getExtension("native_profiler");
        $__internal_e9f6814d93b084e5bc2291841bf562c65699f711afeded58064aa2f651e41f14->enter($__internal_e9f6814d93b084e5bc2291841bf562c65699f711afeded58064aa2f651e41f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar utensilio ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_e9f6814d93b084e5bc2291841bf562c65699f711afeded58064aa2f651e41f14->leave($__internal_e9f6814d93b084e5bc2291841bf562c65699f711afeded58064aa2f651e41f14_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d16c1b6292bedc8b9efd9cce39aa22fb9015f4f8e6a4ea13006049aeeec30e2a = $this->env->getExtension("native_profiler");
        $__internal_d16c1b6292bedc8b9efd9cce39aa22fb9015f4f8e6a4ea13006049aeeec30e2a->enter($__internal_d16c1b6292bedc8b9efd9cce39aa22fb9015f4f8e6a4ea13006049aeeec30e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_d16c1b6292bedc8b9efd9cce39aa22fb9015f4f8e6a4ea13006049aeeec30e2a->leave($__internal_d16c1b6292bedc8b9efd9cce39aa22fb9015f4f8e6a4ea13006049aeeec30e2a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_47fc37349085e0f3612276498a68cf676a139d22087de06e28669b25dafed615 = $this->env->getExtension("native_profiler");
        $__internal_47fc37349085e0f3612276498a68cf676a139d22087de06e28669b25dafed615->enter($__internal_47fc37349085e0f3612276498a68cf676a139d22087de06e28669b25dafed615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:Utensilio:form.html.twig", "@Admin/Utensilio/modify.html.twig", 30)->display($context);
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
        
        $__internal_47fc37349085e0f3612276498a68cf676a139d22087de06e28669b25dafed615->leave($__internal_47fc37349085e0f3612276498a68cf676a139d22087de06e28669b25dafed615_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Utensilio/modify.html.twig";
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
