<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_fd74839e2d4771077f9c7ae8668f25a712b3a2b3a1b7e310ea413a5bc363acc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_605d32cf95b51cb5b9183668a560e2f4c91ca433ed1cde7ccef93a494d4e188b = $this->env->getExtension("native_profiler");
        $__internal_605d32cf95b51cb5b9183668a560e2f4c91ca433ed1cde7ccef93a494d4e188b->enter($__internal_605d32cf95b51cb5b9183668a560e2f4c91ca433ed1cde7ccef93a494d4e188b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_605d32cf95b51cb5b9183668a560e2f4c91ca433ed1cde7ccef93a494d4e188b->leave($__internal_605d32cf95b51cb5b9183668a560e2f4c91ca433ed1cde7ccef93a494d4e188b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_896880c1aa1add79399dbb114d7a578b39bc699e8d0ab1e14c8fe9154ceae0ac = $this->env->getExtension("native_profiler");
        $__internal_896880c1aa1add79399dbb114d7a578b39bc699e8d0ab1e14c8fe9154ceae0ac->enter($__internal_896880c1aa1add79399dbb114d7a578b39bc699e8d0ab1e14c8fe9154ceae0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_896880c1aa1add79399dbb114d7a578b39bc699e8d0ab1e14c8fe9154ceae0ac->leave($__internal_896880c1aa1add79399dbb114d7a578b39bc699e8d0ab1e14c8fe9154ceae0ac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ed988606527602793ae4daf6ec4a0e313153ca45619beaf1e5eed40c683289f = $this->env->getExtension("native_profiler");
        $__internal_5ed988606527602793ae4daf6ec4a0e313153ca45619beaf1e5eed40c683289f->enter($__internal_5ed988606527602793ae4daf6ec4a0e313153ca45619beaf1e5eed40c683289f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5ed988606527602793ae4daf6ec4a0e313153ca45619beaf1e5eed40c683289f->leave($__internal_5ed988606527602793ae4daf6ec4a0e313153ca45619beaf1e5eed40c683289f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
