<?php

/* @Admin/TemaForo/form.html.twig */
class __TwigTemplate_c4d98325f6494d059ad868aeb7de9b4623bda081dec276e148b51c37d0ebf64a extends Twig_Template
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
        $__internal_caba16030c90c6ff7bbd1025b659303bd1a2e04ea0e692d0f00651ead86ef4b3 = $this->env->getExtension("native_profiler");
        $__internal_caba16030c90c6ff7bbd1025b659303bd1a2e04ea0e692d0f00651ead86ef4b3->enter($__internal_caba16030c90c6ff7bbd1025b659303bd1a2e04ea0e692d0f00651ead86ef4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/TemaForo/form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_caba16030c90c6ff7bbd1025b659303bd1a2e04ea0e692d0f00651ead86ef4b3->leave($__internal_caba16030c90c6ff7bbd1025b659303bd1a2e04ea0e692d0f00651ead86ef4b3_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_2c92c30813cdf6b23b0f3f2cfbcf952547718cef69e5de1ab4b8b9a891d5aa93 = $this->env->getExtension("native_profiler");
        $__internal_2c92c30813cdf6b23b0f3f2cfbcf952547718cef69e5de1ab4b8b9a891d5aa93->enter($__internal_2c92c30813cdf6b23b0f3f2cfbcf952547718cef69e5de1ab4b8b9a891d5aa93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "\t<form class=\"blogger\" method=\"post\" >
\t";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t<div class=\"form-group\">
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'row');
        echo "
\t</div>
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t
\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</form>

";
        
        $__internal_2c92c30813cdf6b23b0f3f2cfbcf952547718cef69e5de1ab4b8b9a891d5aa93->leave($__internal_2c92c30813cdf6b23b0f3f2cfbcf952547718cef69e5de1ab4b8b9a891d5aa93_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/TemaForo/form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  54 => 10,  49 => 8,  43 => 5,  38 => 3,  35 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "{% block body %}
\t<form class=\"blogger\" method=\"post\" >
\t{{ form_start(form) }}
\t<div class=\"form-group\">
\t\t{{ form_row(form.nombre) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.descripcion) }}
\t</div>
        {{ form_errors(form) }}
\t\t
\t{{ form_end(form) }}
\t</form>

{% endblock %}
";
    }
}
