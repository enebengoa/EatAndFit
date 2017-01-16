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
        $__internal_9edf1ed7492079d2b4463f0dcd9755506d7e51e31e595dfe3ab9149c783678b5 = $this->env->getExtension("native_profiler");
        $__internal_9edf1ed7492079d2b4463f0dcd9755506d7e51e31e595dfe3ab9149c783678b5->enter($__internal_9edf1ed7492079d2b4463f0dcd9755506d7e51e31e595dfe3ab9149c783678b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Menu:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9edf1ed7492079d2b4463f0dcd9755506d7e51e31e595dfe3ab9149c783678b5->leave($__internal_9edf1ed7492079d2b4463f0dcd9755506d7e51e31e595dfe3ab9149c783678b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a70aa6fc7cdf726664b5f8ad146c85965b62930605150c024817305bbabc01ce = $this->env->getExtension("native_profiler");
        $__internal_a70aa6fc7cdf726664b5f8ad146c85965b62930605150c024817305bbabc01ce->enter($__internal_a70aa6fc7cdf726664b5f8ad146c85965b62930605150c024817305bbabc01ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir menú ";
        
        $__internal_a70aa6fc7cdf726664b5f8ad146c85965b62930605150c024817305bbabc01ce->leave($__internal_a70aa6fc7cdf726664b5f8ad146c85965b62930605150c024817305bbabc01ce_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b0e8c0aaf3074fde1826fce2ff13b9bf10945b9fcf6101e831bcebd652ec6e68 = $this->env->getExtension("native_profiler");
        $__internal_b0e8c0aaf3074fde1826fce2ff13b9bf10945b9fcf6101e831bcebd652ec6e68->enter($__internal_b0e8c0aaf3074fde1826fce2ff13b9bf10945b9fcf6101e831bcebd652ec6e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_b0e8c0aaf3074fde1826fce2ff13b9bf10945b9fcf6101e831bcebd652ec6e68->leave($__internal_b0e8c0aaf3074fde1826fce2ff13b9bf10945b9fcf6101e831bcebd652ec6e68_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a1dd54e0aab6c1e3c24b1a3fbdfd03fc9ddcf6adf1005863be776b5361ccdd1 = $this->env->getExtension("native_profiler");
        $__internal_0a1dd54e0aab6c1e3c24b1a3fbdfd03fc9ddcf6adf1005863be776b5361ccdd1->enter($__internal_0a1dd54e0aab6c1e3c24b1a3fbdfd03fc9ddcf6adf1005863be776b5361ccdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a1dd54e0aab6c1e3c24b1a3fbdfd03fc9ddcf6adf1005863be776b5361ccdd1->leave($__internal_0a1dd54e0aab6c1e3c24b1a3fbdfd03fc9ddcf6adf1005863be776b5361ccdd1_prof);

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
