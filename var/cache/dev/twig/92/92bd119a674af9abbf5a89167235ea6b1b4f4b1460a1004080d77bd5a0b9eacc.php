<?php

/* @Admin/Menu/add.html.twig */
class __TwigTemplate_7a966bf57cfc9282143375f15a1d8481f35d87925ec7d6c138bc04e929f0cbd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseadmin.html.twig", "@Admin/Menu/add.html.twig", 1);
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
        $__internal_5c0974dc1dcd890c24d962fe6011511fc7b03fa87d1a02df58e6c249ce414a03 = $this->env->getExtension("native_profiler");
        $__internal_5c0974dc1dcd890c24d962fe6011511fc7b03fa87d1a02df58e6c249ce414a03->enter($__internal_5c0974dc1dcd890c24d962fe6011511fc7b03fa87d1a02df58e6c249ce414a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Menu/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c0974dc1dcd890c24d962fe6011511fc7b03fa87d1a02df58e6c249ce414a03->leave($__internal_5c0974dc1dcd890c24d962fe6011511fc7b03fa87d1a02df58e6c249ce414a03_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a5c3dd30c98d4e6726e5258efd88dde6d22e894bdca28ba5929870e61d5bfd6 = $this->env->getExtension("native_profiler");
        $__internal_9a5c3dd30c98d4e6726e5258efd88dde6d22e894bdca28ba5929870e61d5bfd6->enter($__internal_9a5c3dd30c98d4e6726e5258efd88dde6d22e894bdca28ba5929870e61d5bfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir menú ";
        
        $__internal_9a5c3dd30c98d4e6726e5258efd88dde6d22e894bdca28ba5929870e61d5bfd6->leave($__internal_9a5c3dd30c98d4e6726e5258efd88dde6d22e894bdca28ba5929870e61d5bfd6_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff30315d21ba8b7307e756efacefa01c6f4574d85dada8ae1a6c76cd42d200e0 = $this->env->getExtension("native_profiler");
        $__internal_ff30315d21ba8b7307e756efacefa01c6f4574d85dada8ae1a6c76cd42d200e0->enter($__internal_ff30315d21ba8b7307e756efacefa01c6f4574d85dada8ae1a6c76cd42d200e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_ff30315d21ba8b7307e756efacefa01c6f4574d85dada8ae1a6c76cd42d200e0->leave($__internal_ff30315d21ba8b7307e756efacefa01c6f4574d85dada8ae1a6c76cd42d200e0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcc0ae6302c51ca248ab2bdfc243b9b5f193f3107e9781b68c27b64316ecc6e9 = $this->env->getExtension("native_profiler");
        $__internal_fcc0ae6302c51ca248ab2bdfc243b9b5f193f3107e9781b68c27b64316ecc6e9->enter($__internal_fcc0ae6302c51ca248ab2bdfc243b9b5f193f3107e9781b68c27b64316ecc6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("AdminBundle:Menu:form.html.twig", "@Admin/Menu/add.html.twig", 30)->display($context);
        // line 31
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <div>
";
        
        $__internal_fcc0ae6302c51ca248ab2bdfc243b9b5f193f3107e9781b68c27b64316ecc6e9->leave($__internal_fcc0ae6302c51ca248ab2bdfc243b9b5f193f3107e9781b68c27b64316ecc6e9_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Menu/add.html.twig";
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
