<?php

/* AdminBundle:Menu:add.html.twig */
class __TwigTemplate_1d2456858cf601a3fa323a4f5e3610570cd6a3795fbaace2bc9ce9e33c897557 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "AdminBundle:Menu:add.html.twig", 1);
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
        $__internal_3398d1cb5d269f10aa18792f3e72c6cdb5ee40958c2bc99865412c2698d78466 = $this->env->getExtension("native_profiler");
        $__internal_3398d1cb5d269f10aa18792f3e72c6cdb5ee40958c2bc99865412c2698d78466->enter($__internal_3398d1cb5d269f10aa18792f3e72c6cdb5ee40958c2bc99865412c2698d78466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Menu:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3398d1cb5d269f10aa18792f3e72c6cdb5ee40958c2bc99865412c2698d78466->leave($__internal_3398d1cb5d269f10aa18792f3e72c6cdb5ee40958c2bc99865412c2698d78466_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9bab2a8b6d217f8ab29a9b7c238369e22e5148aaaa05235f9709392fba909af = $this->env->getExtension("native_profiler");
        $__internal_e9bab2a8b6d217f8ab29a9b7c238369e22e5148aaaa05235f9709392fba909af->enter($__internal_e9bab2a8b6d217f8ab29a9b7c238369e22e5148aaaa05235f9709392fba909af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir menú ";
        
        $__internal_e9bab2a8b6d217f8ab29a9b7c238369e22e5148aaaa05235f9709392fba909af->leave($__internal_e9bab2a8b6d217f8ab29a9b7c238369e22e5148aaaa05235f9709392fba909af_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77892d365a4106a0eaf2a1c8f400bfff97218f4b5be4438dd09b5620c219dc3e = $this->env->getExtension("native_profiler");
        $__internal_77892d365a4106a0eaf2a1c8f400bfff97218f4b5be4438dd09b5620c219dc3e->enter($__internal_77892d365a4106a0eaf2a1c8f400bfff97218f4b5be4438dd09b5620c219dc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_77892d365a4106a0eaf2a1c8f400bfff97218f4b5be4438dd09b5620c219dc3e->leave($__internal_77892d365a4106a0eaf2a1c8f400bfff97218f4b5be4438dd09b5620c219dc3e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2784f35565ebafd179ca0269a63d247fae28ee8c4924ac153b76d3b6018d90f = $this->env->getExtension("native_profiler");
        $__internal_b2784f35565ebafd179ca0269a63d247fae28ee8c4924ac153b76d3b6018d90f->enter($__internal_b2784f35565ebafd179ca0269a63d247fae28ee8c4924ac153b76d3b6018d90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">MENÚS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nuevo menú 
                                            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("App_admin_listMenu");
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
        $this->loadTemplate("AdminBundle:Menu:form.html.twig", "AdminBundle:Menu:add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_b2784f35565ebafd179ca0269a63d247fae28ee8c4924ac153b76d3b6018d90f->leave($__internal_b2784f35565ebafd179ca0269a63d247fae28ee8c4924ac153b76d3b6018d90f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Menu:add.html.twig";
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

{% block title %}Añadir menú {% endblock %}
{% block stylesheets %}
{{ parent() }}
\t<link href=\"{{ asset('css/form.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}
{% block body %}
<!-- Main Content -->
        <div class=\"container-fluid\">
                <div class=\"side-body\">
                    <div class=\"page-title\">
                        <span class=\"title\">MENÚS</span>
                        <div class=\"description\"></div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <div class=\"card-title\">
                                        <div class=\"title\">Añadir nuevo menú 
                                            <a href=\"{{ path('App_admin_listMenu')}}\">
                                                <span class=\"glyphicon glyphicon-arrow-up\"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"card-body\">
                                        {% include \"AdminBundle:Menu:form.html.twig\" %}
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
