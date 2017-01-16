<?php

/* @Admin/SubMenu/form.html.twig */
class __TwigTemplate_f5906e5d9b390f451ff52360fe4f18176b57529e215024497e473cf09774abca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e19f42e3035d611190b55f66d11afc95437f174fa8d7338acfe58a082895d88 = $this->env->getExtension("native_profiler");
        $__internal_7e19f42e3035d611190b55f66d11afc95437f174fa8d7338acfe58a082895d88->enter($__internal_7e19f42e3035d611190b55f66d11afc95437f174fa8d7338acfe58a082895d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/SubMenu/form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_7e19f42e3035d611190b55f66d11afc95437f174fa8d7338acfe58a082895d88->leave($__internal_7e19f42e3035d611190b55f66d11afc95437f174fa8d7338acfe58a082895d88_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_7788c6c540d8484c973624d017efb911676b03fc42850cf1741550ffd1455835 = $this->env->getExtension("native_profiler");
        $__internal_7788c6c540d8484c973624d017efb911676b03fc42850cf1741550ffd1455835->enter($__internal_7788c6c540d8484c973624d017efb911676b03fc42850cf1741550ffd1455835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "\t<form class=\"blogger\" method=\"post\" >
\t";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t
\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</form>

";
        
        $__internal_7788c6c540d8484c973624d017efb911676b03fc42850cf1741550ffd1455835->leave($__internal_7788c6c540d8484c973624d017efb911676b03fc42850cf1741550ffd1455835_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/SubMenu/form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  43 => 5,  38 => 3,  35 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "{% block body %}
\t<form class=\"blogger\" method=\"post\" >
\t{{ form_start(form) }}
\t
        {{ form_errors(form) }}
\t\t
\t{{ form_end(form) }}
\t</form>

{% endblock %}
";
    }
}
