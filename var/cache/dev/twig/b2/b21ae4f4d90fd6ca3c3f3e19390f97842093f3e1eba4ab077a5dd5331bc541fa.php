<?php

/* @Admin/Utensilio/add.html.twig */
class __TwigTemplate_abdca3e5bad960d3c9d1d8df4af3587ab38bd01ec0888aa9b2e61c6d228073ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Utensilio/add.html.twig", 1);
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
        $__internal_fcc022ba88a531d603e16e7d6f66f00f146b139ed3a5bc70d2cd3d10e4261106 = $this->env->getExtension("native_profiler");
        $__internal_fcc022ba88a531d603e16e7d6f66f00f146b139ed3a5bc70d2cd3d10e4261106->enter($__internal_fcc022ba88a531d603e16e7d6f66f00f146b139ed3a5bc70d2cd3d10e4261106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Utensilio/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcc022ba88a531d603e16e7d6f66f00f146b139ed3a5bc70d2cd3d10e4261106->leave($__internal_fcc022ba88a531d603e16e7d6f66f00f146b139ed3a5bc70d2cd3d10e4261106_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45ac9531106d0db2060fd2e9f8d30ab395d214f5a42cacad6eb65bf6fec7a4f9 = $this->env->getExtension("native_profiler");
        $__internal_45ac9531106d0db2060fd2e9f8d30ab395d214f5a42cacad6eb65bf6fec7a4f9->enter($__internal_45ac9531106d0db2060fd2e9f8d30ab395d214f5a42cacad6eb65bf6fec7a4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir utensilio ";
        
        $__internal_45ac9531106d0db2060fd2e9f8d30ab395d214f5a42cacad6eb65bf6fec7a4f9->leave($__internal_45ac9531106d0db2060fd2e9f8d30ab395d214f5a42cacad6eb65bf6fec7a4f9_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba52fc1b3220e0da17576c107521017b362b05d401dc916a6b8e08cfb024ebf4 = $this->env->getExtension("native_profiler");
        $__internal_ba52fc1b3220e0da17576c107521017b362b05d401dc916a6b8e08cfb024ebf4->enter($__internal_ba52fc1b3220e0da17576c107521017b362b05d401dc916a6b8e08cfb024ebf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_ba52fc1b3220e0da17576c107521017b362b05d401dc916a6b8e08cfb024ebf4->leave($__internal_ba52fc1b3220e0da17576c107521017b362b05d401dc916a6b8e08cfb024ebf4_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b99eaaf167e1cd8d6b5211550268d4b3ba836f169006dd48f516937b3a95e7b6 = $this->env->getExtension("native_profiler");
        $__internal_b99eaaf167e1cd8d6b5211550268d4b3ba836f169006dd48f516937b3a95e7b6->enter($__internal_b99eaaf167e1cd8d6b5211550268d4b3ba836f169006dd48f516937b3a95e7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
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
                                        <div class=\"title\">Añadir nuevo utensilio
                                            <a href=\"";
        // line 22
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
        // line 30
        $this->loadTemplate("AdminBundle:Utensilio:form.html.twig", "@Admin/Utensilio/add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_b99eaaf167e1cd8d6b5211550268d4b3ba836f169006dd48f516937b3a95e7b6->leave($__internal_b99eaaf167e1cd8d6b5211550268d4b3ba836f169006dd48f516937b3a95e7b6_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Utensilio/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  99 => 30,  88 => 22,  73 => 9,  67 => 8,  58 => 6,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'baseadmin.html.twig' %}

{% block title %}Añadir utensilio {% endblock %}
{% block stylesheets %}
{{ parent() }}
\t<link href=\"{{ asset('css/form.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
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
                                        <div class=\"title\">Añadir nuevo utensilio
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
