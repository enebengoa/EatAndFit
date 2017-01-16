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
        $__internal_870c34fa3af9c405b42a3c7d1cbedc0e675e81d6d16e7498d94492f47a4cc169 = $this->env->getExtension("native_profiler");
        $__internal_870c34fa3af9c405b42a3c7d1cbedc0e675e81d6d16e7498d94492f47a4cc169->enter($__internal_870c34fa3af9c405b42a3c7d1cbedc0e675e81d6d16e7498d94492f47a4cc169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_870c34fa3af9c405b42a3c7d1cbedc0e675e81d6d16e7498d94492f47a4cc169->leave($__internal_870c34fa3af9c405b42a3c7d1cbedc0e675e81d6d16e7498d94492f47a4cc169_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_04ce1547e64ae734f40b1d5a81912e8410d227071bde412c24b3ef89f67ff9e7 = $this->env->getExtension("native_profiler");
        $__internal_04ce1547e64ae734f40b1d5a81912e8410d227071bde412c24b3ef89f67ff9e7->enter($__internal_04ce1547e64ae734f40b1d5a81912e8410d227071bde412c24b3ef89f67ff9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_04ce1547e64ae734f40b1d5a81912e8410d227071bde412c24b3ef89f67ff9e7->leave($__internal_04ce1547e64ae734f40b1d5a81912e8410d227071bde412c24b3ef89f67ff9e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c130a52c0df1ce056c10b421ce8453077df8e232d5eb2699a77c6a04dd46474 = $this->env->getExtension("native_profiler");
        $__internal_9c130a52c0df1ce056c10b421ce8453077df8e232d5eb2699a77c6a04dd46474->enter($__internal_9c130a52c0df1ce056c10b421ce8453077df8e232d5eb2699a77c6a04dd46474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9c130a52c0df1ce056c10b421ce8453077df8e232d5eb2699a77c6a04dd46474->leave($__internal_9c130a52c0df1ce056c10b421ce8453077df8e232d5eb2699a77c6a04dd46474_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fce443d94bdb698dac0e71c9be038d55fe84db0ca4aec1a0da865f08d976ba86 = $this->env->getExtension("native_profiler");
        $__internal_fce443d94bdb698dac0e71c9be038d55fe84db0ca4aec1a0da865f08d976ba86->enter($__internal_fce443d94bdb698dac0e71c9be038d55fe84db0ca4aec1a0da865f08d976ba86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fce443d94bdb698dac0e71c9be038d55fe84db0ca4aec1a0da865f08d976ba86->leave($__internal_fce443d94bdb698dac0e71c9be038d55fe84db0ca4aec1a0da865f08d976ba86_prof);

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
