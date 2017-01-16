<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_86a545250ff207f483b025b0fb30c0c9e1581659b38570226a5a44c1b5916ecb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_5ac31ce894669be9283efe8029416e7298c4ee9c767242deac7c19f4d7e648ee = $this->env->getExtension("native_profiler");
        $__internal_5ac31ce894669be9283efe8029416e7298c4ee9c767242deac7c19f4d7e648ee->enter($__internal_5ac31ce894669be9283efe8029416e7298c4ee9c767242deac7c19f4d7e648ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ac31ce894669be9283efe8029416e7298c4ee9c767242deac7c19f4d7e648ee->leave($__internal_5ac31ce894669be9283efe8029416e7298c4ee9c767242deac7c19f4d7e648ee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_79619a1c77373ee1811239194f9daf246442a09b72a222c663c3fbb282c9eb92 = $this->env->getExtension("native_profiler");
        $__internal_79619a1c77373ee1811239194f9daf246442a09b72a222c663c3fbb282c9eb92->enter($__internal_79619a1c77373ee1811239194f9daf246442a09b72a222c663c3fbb282c9eb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_79619a1c77373ee1811239194f9daf246442a09b72a222c663c3fbb282c9eb92->leave($__internal_79619a1c77373ee1811239194f9daf246442a09b72a222c663c3fbb282c9eb92_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_45cda81e1d4c4f3c46e5a7aa9e4bffc115727c69490f750d4ad6f0bdfe068fea = $this->env->getExtension("native_profiler");
        $__internal_45cda81e1d4c4f3c46e5a7aa9e4bffc115727c69490f750d4ad6f0bdfe068fea->enter($__internal_45cda81e1d4c4f3c46e5a7aa9e4bffc115727c69490f750d4ad6f0bdfe068fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_45cda81e1d4c4f3c46e5a7aa9e4bffc115727c69490f750d4ad6f0bdfe068fea->leave($__internal_45cda81e1d4c4f3c46e5a7aa9e4bffc115727c69490f750d4ad6f0bdfe068fea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
