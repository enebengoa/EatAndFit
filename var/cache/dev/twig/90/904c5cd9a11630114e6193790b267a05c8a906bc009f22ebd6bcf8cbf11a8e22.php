<?php

/* @Admin/Comentario/form.html.twig */
class __TwigTemplate_9e421232eaa2fa1b575267a5f062647c735329a072020050e64c0b1c25b5283f extends Twig_Template
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
        $__internal_262dca57ac119c57773d81e4a1157d3e1ce5d8d4ebc27fed3ab4623d53c9682a = $this->env->getExtension("native_profiler");
        $__internal_262dca57ac119c57773d81e4a1157d3e1ce5d8d4ebc27fed3ab4623d53c9682a->enter($__internal_262dca57ac119c57773d81e4a1157d3e1ce5d8d4ebc27fed3ab4623d53c9682a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Comentario/form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_262dca57ac119c57773d81e4a1157d3e1ce5d8d4ebc27fed3ab4623d53c9682a->leave($__internal_262dca57ac119c57773d81e4a1157d3e1ce5d8d4ebc27fed3ab4623d53c9682a_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_e5b457007fc170ca39cf37b39c99d0fb0492551a58733ef00b2fa90e7e5e0be7 = $this->env->getExtension("native_profiler");
        $__internal_e5b457007fc170ca39cf37b39c99d0fb0492551a58733ef00b2fa90e7e5e0be7->enter($__internal_e5b457007fc170ca39cf37b39c99d0fb0492551a58733ef00b2fa90e7e5e0be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "\t<form class=\"blogger\" method=\"post\" >
\t";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

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
        
        $__internal_e5b457007fc170ca39cf37b39c99d0fb0492551a58733ef00b2fa90e7e5e0be7->leave($__internal_e5b457007fc170ca39cf37b39c99d0fb0492551a58733ef00b2fa90e7e5e0be7_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Comentario/form.html.twig";
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

        {{ form_errors(form) }}
\t\t
\t{{ form_end(form) }}
\t</form>

{% endblock %}
";
    }
}
