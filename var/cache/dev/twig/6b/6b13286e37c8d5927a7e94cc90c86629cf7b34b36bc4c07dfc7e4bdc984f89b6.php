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
        $__internal_feceb5bbd807d97a4071332090e5a72de56882c252c7b83690d66afbb4057af0 = $this->env->getExtension("native_profiler");
        $__internal_feceb5bbd807d97a4071332090e5a72de56882c252c7b83690d66afbb4057af0->enter($__internal_feceb5bbd807d97a4071332090e5a72de56882c252c7b83690d66afbb4057af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feceb5bbd807d97a4071332090e5a72de56882c252c7b83690d66afbb4057af0->leave($__internal_feceb5bbd807d97a4071332090e5a72de56882c252c7b83690d66afbb4057af0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f33fecd27071ed39574fae736467a0da4da3720858280591e8c29f92cb57bd16 = $this->env->getExtension("native_profiler");
        $__internal_f33fecd27071ed39574fae736467a0da4da3720858280591e8c29f92cb57bd16->enter($__internal_f33fecd27071ed39574fae736467a0da4da3720858280591e8c29f92cb57bd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f33fecd27071ed39574fae736467a0da4da3720858280591e8c29f92cb57bd16->leave($__internal_f33fecd27071ed39574fae736467a0da4da3720858280591e8c29f92cb57bd16_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_74fc855c18aa0bf36586d1ecf4150aed0c8448da76e0b6e4e826d81512f22d64 = $this->env->getExtension("native_profiler");
        $__internal_74fc855c18aa0bf36586d1ecf4150aed0c8448da76e0b6e4e826d81512f22d64->enter($__internal_74fc855c18aa0bf36586d1ecf4150aed0c8448da76e0b6e4e826d81512f22d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_74fc855c18aa0bf36586d1ecf4150aed0c8448da76e0b6e4e826d81512f22d64->leave($__internal_74fc855c18aa0bf36586d1ecf4150aed0c8448da76e0b6e4e826d81512f22d64_prof);

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
