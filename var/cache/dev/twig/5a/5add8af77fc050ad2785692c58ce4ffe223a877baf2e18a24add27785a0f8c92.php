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
        $__internal_16c797cf4482c633d81a4286bcb5ed6060881b202e763b5e645471672c383fb5 = $this->env->getExtension("native_profiler");
        $__internal_16c797cf4482c633d81a4286bcb5ed6060881b202e763b5e645471672c383fb5->enter($__internal_16c797cf4482c633d81a4286bcb5ed6060881b202e763b5e645471672c383fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Utensilio/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16c797cf4482c633d81a4286bcb5ed6060881b202e763b5e645471672c383fb5->leave($__internal_16c797cf4482c633d81a4286bcb5ed6060881b202e763b5e645471672c383fb5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b7d2a840439a49f91c5f49fa7d027bf97d70e08dd6010524df13d528f1c03f8 = $this->env->getExtension("native_profiler");
        $__internal_0b7d2a840439a49f91c5f49fa7d027bf97d70e08dd6010524df13d528f1c03f8->enter($__internal_0b7d2a840439a49f91c5f49fa7d027bf97d70e08dd6010524df13d528f1c03f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ver/Modificar utensilio ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entidad"]) ? $context["entidad"] : $this->getContext($context, "entidad")), "nombre", array()), "html", null, true);
        
        $__internal_0b7d2a840439a49f91c5f49fa7d027bf97d70e08dd6010524df13d528f1c03f8->leave($__internal_0b7d2a840439a49f91c5f49fa7d027bf97d70e08dd6010524df13d528f1c03f8_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87bd54cb87b205d24a438b0a9f7e590023a33eb662045b3b2b2d3f59ace4de29 = $this->env->getExtension("native_profiler");
        $__internal_87bd54cb87b205d24a438b0a9f7e590023a33eb662045b3b2b2d3f59ace4de29->enter($__internal_87bd54cb87b205d24a438b0a9f7e590023a33eb662045b3b2b2d3f59ace4de29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_87bd54cb87b205d24a438b0a9f7e590023a33eb662045b3b2b2d3f59ace4de29->leave($__internal_87bd54cb87b205d24a438b0a9f7e590023a33eb662045b3b2b2d3f59ace4de29_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_27b5f0316471bdda00c41919b973e731450406bd426d473dd13a73a61474aa5f = $this->env->getExtension("native_profiler");
        $__internal_27b5f0316471bdda00c41919b973e731450406bd426d473dd13a73a61474aa5f->enter($__internal_27b5f0316471bdda00c41919b973e731450406bd426d473dd13a73a61474aa5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:Utensilio:form.html.twig", "@Admin/Utensilio/modify.html.twig", 29)->display($context);
        // line 30
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>       
";
        
        $__internal_27b5f0316471bdda00c41919b973e731450406bd426d473dd13a73a61474aa5f->leave($__internal_27b5f0316471bdda00c41919b973e731450406bd426d473dd13a73a61474aa5f_prof);

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
        return array (  101 => 30,  99 => 29,  88 => 21,  84 => 20,  70 => 8,  64 => 7,  55 => 5,  49 => 4,  36 => 3,  11 => 1,);
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
                                        {% include \"AdminBundle:Utensilio:form.html.twig\" %}
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
