<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_66b12460c94a8c12a77cf48a3500d9ae342ff9b6a31502551ec52034a80512ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a71ab4bcc30ce5117630d70b16ffa302946d82d761f9bc8c5e0903104e4afca0 = $this->env->getExtension("native_profiler");
        $__internal_a71ab4bcc30ce5117630d70b16ffa302946d82d761f9bc8c5e0903104e4afca0->enter($__internal_a71ab4bcc30ce5117630d70b16ffa302946d82d761f9bc8c5e0903104e4afca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a71ab4bcc30ce5117630d70b16ffa302946d82d761f9bc8c5e0903104e4afca0->leave($__internal_a71ab4bcc30ce5117630d70b16ffa302946d82d761f9bc8c5e0903104e4afca0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ff79f91b8182c14dd27663d3c82e087794a723991f0bd474ef65a457b7f8759 = $this->env->getExtension("native_profiler");
        $__internal_8ff79f91b8182c14dd27663d3c82e087794a723991f0bd474ef65a457b7f8759->enter($__internal_8ff79f91b8182c14dd27663d3c82e087794a723991f0bd474ef65a457b7f8759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8ff79f91b8182c14dd27663d3c82e087794a723991f0bd474ef65a457b7f8759->leave($__internal_8ff79f91b8182c14dd27663d3c82e087794a723991f0bd474ef65a457b7f8759_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_de73f6a7690b81e1140f8072394c299bd610ec4feb3c037ba1d3fff202593df7 = $this->env->getExtension("native_profiler");
        $__internal_de73f6a7690b81e1140f8072394c299bd610ec4feb3c037ba1d3fff202593df7->enter($__internal_de73f6a7690b81e1140f8072394c299bd610ec4feb3c037ba1d3fff202593df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_de73f6a7690b81e1140f8072394c299bd610ec4feb3c037ba1d3fff202593df7->leave($__internal_de73f6a7690b81e1140f8072394c299bd610ec4feb3c037ba1d3fff202593df7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bfa987c16da21e20e1a873b35dd3d3aa08249508b05f4216d7c582c11b294d16 = $this->env->getExtension("native_profiler");
        $__internal_bfa987c16da21e20e1a873b35dd3d3aa08249508b05f4216d7c582c11b294d16->enter($__internal_bfa987c16da21e20e1a873b35dd3d3aa08249508b05f4216d7c582c11b294d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bfa987c16da21e20e1a873b35dd3d3aa08249508b05f4216d7c582c11b294d16->leave($__internal_bfa987c16da21e20e1a873b35dd3d3aa08249508b05f4216d7c582c11b294d16_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
