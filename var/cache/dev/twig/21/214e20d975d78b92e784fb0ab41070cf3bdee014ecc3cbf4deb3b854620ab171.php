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
        $__internal_b920436902e25c7f78def4b6b63ade899a572241164b77533eea73302fc1aa25 = $this->env->getExtension("native_profiler");
        $__internal_b920436902e25c7f78def4b6b63ade899a572241164b77533eea73302fc1aa25->enter($__internal_b920436902e25c7f78def4b6b63ade899a572241164b77533eea73302fc1aa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b920436902e25c7f78def4b6b63ade899a572241164b77533eea73302fc1aa25->leave($__internal_b920436902e25c7f78def4b6b63ade899a572241164b77533eea73302fc1aa25_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e8ac2f2dcc13e0b257cb7b6803bde8372f8fb8ca0a987ec26ddb96dc5b81ad0 = $this->env->getExtension("native_profiler");
        $__internal_6e8ac2f2dcc13e0b257cb7b6803bde8372f8fb8ca0a987ec26ddb96dc5b81ad0->enter($__internal_6e8ac2f2dcc13e0b257cb7b6803bde8372f8fb8ca0a987ec26ddb96dc5b81ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6e8ac2f2dcc13e0b257cb7b6803bde8372f8fb8ca0a987ec26ddb96dc5b81ad0->leave($__internal_6e8ac2f2dcc13e0b257cb7b6803bde8372f8fb8ca0a987ec26ddb96dc5b81ad0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_59a001089b262e0a4756e1366d7309cdabbba7d1fd960bd632010dbe8c577082 = $this->env->getExtension("native_profiler");
        $__internal_59a001089b262e0a4756e1366d7309cdabbba7d1fd960bd632010dbe8c577082->enter($__internal_59a001089b262e0a4756e1366d7309cdabbba7d1fd960bd632010dbe8c577082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_59a001089b262e0a4756e1366d7309cdabbba7d1fd960bd632010dbe8c577082->leave($__internal_59a001089b262e0a4756e1366d7309cdabbba7d1fd960bd632010dbe8c577082_prof);

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
