<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dc67386087b26a74a05d87259c2a04e14d50d5ff1a4e95810c0174d82502d54c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52da49db9adccac9b6cc0786567e3df7fdced6ce74b4f04c4a18b3e8fa1f0db4 = $this->env->getExtension("native_profiler");
        $__internal_52da49db9adccac9b6cc0786567e3df7fdced6ce74b4f04c4a18b3e8fa1f0db4->enter($__internal_52da49db9adccac9b6cc0786567e3df7fdced6ce74b4f04c4a18b3e8fa1f0db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52da49db9adccac9b6cc0786567e3df7fdced6ce74b4f04c4a18b3e8fa1f0db4->leave($__internal_52da49db9adccac9b6cc0786567e3df7fdced6ce74b4f04c4a18b3e8fa1f0db4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d36aa81eff09dfa657d6dbade7b55ce9e7a152228f7a543452e3f35804016c0a = $this->env->getExtension("native_profiler");
        $__internal_d36aa81eff09dfa657d6dbade7b55ce9e7a152228f7a543452e3f35804016c0a->enter($__internal_d36aa81eff09dfa657d6dbade7b55ce9e7a152228f7a543452e3f35804016c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d36aa81eff09dfa657d6dbade7b55ce9e7a152228f7a543452e3f35804016c0a->leave($__internal_d36aa81eff09dfa657d6dbade7b55ce9e7a152228f7a543452e3f35804016c0a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_62bfbe125f537d442b457afa6dc958b005aa093446d8680357a8dab028762e69 = $this->env->getExtension("native_profiler");
        $__internal_62bfbe125f537d442b457afa6dc958b005aa093446d8680357a8dab028762e69->enter($__internal_62bfbe125f537d442b457afa6dc958b005aa093446d8680357a8dab028762e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_62bfbe125f537d442b457afa6dc958b005aa093446d8680357a8dab028762e69->leave($__internal_62bfbe125f537d442b457afa6dc958b005aa093446d8680357a8dab028762e69_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f56734ebd5b2c36b8728efe28e7b8c64eecf0f8ed4bece6a874a5a647d35673a = $this->env->getExtension("native_profiler");
        $__internal_f56734ebd5b2c36b8728efe28e7b8c64eecf0f8ed4bece6a874a5a647d35673a->enter($__internal_f56734ebd5b2c36b8728efe28e7b8c64eecf0f8ed4bece6a874a5a647d35673a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f56734ebd5b2c36b8728efe28e7b8c64eecf0f8ed4bece6a874a5a647d35673a->leave($__internal_f56734ebd5b2c36b8728efe28e7b8c64eecf0f8ed4bece6a874a5a647d35673a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
