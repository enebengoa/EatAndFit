<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8026c01a92f4f44cea1eb24ffc4997c50fb7999962c3e2d7633cdfdf28409389 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5402ef6cde202857c5d3763855b93b40c79ac1368bd24308e452e026cc79d4f = $this->env->getExtension("native_profiler");
        $__internal_d5402ef6cde202857c5d3763855b93b40c79ac1368bd24308e452e026cc79d4f->enter($__internal_d5402ef6cde202857c5d3763855b93b40c79ac1368bd24308e452e026cc79d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5402ef6cde202857c5d3763855b93b40c79ac1368bd24308e452e026cc79d4f->leave($__internal_d5402ef6cde202857c5d3763855b93b40c79ac1368bd24308e452e026cc79d4f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa80c9526dc34c07f1269809fe9bf3b9e86da5e5f15cf599dad6cb3c183f7372 = $this->env->getExtension("native_profiler");
        $__internal_aa80c9526dc34c07f1269809fe9bf3b9e86da5e5f15cf599dad6cb3c183f7372->enter($__internal_aa80c9526dc34c07f1269809fe9bf3b9e86da5e5f15cf599dad6cb3c183f7372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aa80c9526dc34c07f1269809fe9bf3b9e86da5e5f15cf599dad6cb3c183f7372->leave($__internal_aa80c9526dc34c07f1269809fe9bf3b9e86da5e5f15cf599dad6cb3c183f7372_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d718dad5517421d754dfcd49c45a99208703b5456ac37633ebb44a69b38407a = $this->env->getExtension("native_profiler");
        $__internal_0d718dad5517421d754dfcd49c45a99208703b5456ac37633ebb44a69b38407a->enter($__internal_0d718dad5517421d754dfcd49c45a99208703b5456ac37633ebb44a69b38407a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0d718dad5517421d754dfcd49c45a99208703b5456ac37633ebb44a69b38407a->leave($__internal_0d718dad5517421d754dfcd49c45a99208703b5456ac37633ebb44a69b38407a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd5bd005f6377e0902b0a3a80b6db52df9b9fffbdf4f29d683bc329728acfbf7 = $this->env->getExtension("native_profiler");
        $__internal_dd5bd005f6377e0902b0a3a80b6db52df9b9fffbdf4f29d683bc329728acfbf7->enter($__internal_dd5bd005f6377e0902b0a3a80b6db52df9b9fffbdf4f29d683bc329728acfbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_dd5bd005f6377e0902b0a3a80b6db52df9b9fffbdf4f29d683bc329728acfbf7->leave($__internal_dd5bd005f6377e0902b0a3a80b6db52df9b9fffbdf4f29d683bc329728acfbf7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
