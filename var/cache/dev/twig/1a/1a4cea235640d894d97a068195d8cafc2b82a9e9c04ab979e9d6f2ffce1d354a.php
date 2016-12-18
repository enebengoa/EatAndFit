<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1b6b3c64f1c58b1b68a3fb9266d8c275b82b59d4aa871506bd145f948aed9885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_c63c079f7109ce832fcaad6e2670e67c943c050e760493282ec908bdfe0ee353 = $this->env->getExtension("native_profiler");
        $__internal_c63c079f7109ce832fcaad6e2670e67c943c050e760493282ec908bdfe0ee353->enter($__internal_c63c079f7109ce832fcaad6e2670e67c943c050e760493282ec908bdfe0ee353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c63c079f7109ce832fcaad6e2670e67c943c050e760493282ec908bdfe0ee353->leave($__internal_c63c079f7109ce832fcaad6e2670e67c943c050e760493282ec908bdfe0ee353_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8be81448477424d5835c50c0bf3495bf958d302587cfbd3b3a26db12097cee39 = $this->env->getExtension("native_profiler");
        $__internal_8be81448477424d5835c50c0bf3495bf958d302587cfbd3b3a26db12097cee39->enter($__internal_8be81448477424d5835c50c0bf3495bf958d302587cfbd3b3a26db12097cee39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8be81448477424d5835c50c0bf3495bf958d302587cfbd3b3a26db12097cee39->leave($__internal_8be81448477424d5835c50c0bf3495bf958d302587cfbd3b3a26db12097cee39_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_747b4401400773e7c89b0469dd2b056f8521695112a71b653957d0055620bfd5 = $this->env->getExtension("native_profiler");
        $__internal_747b4401400773e7c89b0469dd2b056f8521695112a71b653957d0055620bfd5->enter($__internal_747b4401400773e7c89b0469dd2b056f8521695112a71b653957d0055620bfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_747b4401400773e7c89b0469dd2b056f8521695112a71b653957d0055620bfd5->leave($__internal_747b4401400773e7c89b0469dd2b056f8521695112a71b653957d0055620bfd5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a1f772dc73d522d0fe1694ec8e5b1686f3cb563debdbbf89a4289ea2a67cef5 = $this->env->getExtension("native_profiler");
        $__internal_1a1f772dc73d522d0fe1694ec8e5b1686f3cb563debdbbf89a4289ea2a67cef5->enter($__internal_1a1f772dc73d522d0fe1694ec8e5b1686f3cb563debdbbf89a4289ea2a67cef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1a1f772dc73d522d0fe1694ec8e5b1686f3cb563debdbbf89a4289ea2a67cef5->leave($__internal_1a1f772dc73d522d0fe1694ec8e5b1686f3cb563debdbbf89a4289ea2a67cef5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
