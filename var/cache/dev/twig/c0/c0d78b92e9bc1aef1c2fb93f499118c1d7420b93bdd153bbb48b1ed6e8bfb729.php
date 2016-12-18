<?php

/* @Admin/Utensilio/form.html.twig */
class __TwigTemplate_84772ca30fc01af4edb8ddf07f2cd82d7ba4fdd0c2a819fa50f07d91422409e0 extends Twig_Template
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
        $__internal_bd4d6a49b64a61985f97c84000efe33e14ac78a5eac2b6a9e413ca52c0c19859 = $this->env->getExtension("native_profiler");
        $__internal_bd4d6a49b64a61985f97c84000efe33e14ac78a5eac2b6a9e413ca52c0c19859->enter($__internal_bd4d6a49b64a61985f97c84000efe33e14ac78a5eac2b6a9e413ca52c0c19859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Utensilio/form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_bd4d6a49b64a61985f97c84000efe33e14ac78a5eac2b6a9e413ca52c0c19859->leave($__internal_bd4d6a49b64a61985f97c84000efe33e14ac78a5eac2b6a9e413ca52c0c19859_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_d2ec69c9a9bf7351e3c0fab778a1b527d064d4b0e136e96d400fe5bc5cf6fa2d = $this->env->getExtension("native_profiler");
        $__internal_d2ec69c9a9bf7351e3c0fab778a1b527d064d4b0e136e96d400fe5bc5cf6fa2d->enter($__internal_d2ec69c9a9bf7351e3c0fab778a1b527d064d4b0e136e96d400fe5bc5cf6fa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t<div class=\"form-group\">
\t\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rating", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'row');
        echo "
\t</div>
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_d2ec69c9a9bf7351e3c0fab778a1b527d064d4b0e136e96d400fe5bc5cf6fa2d->leave($__internal_d2ec69c9a9bf7351e3c0fab778a1b527d064d4b0e136e96d400fe5bc5cf6fa2d_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Utensilio/form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  64 => 15,  59 => 13,  53 => 10,  47 => 7,  41 => 4,  35 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "{% block body %}
\t{{ form_start(form) }}
\t<div class=\"form-group\">
\t\t{{ form_row(form.nombre) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.descripcion) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.rating) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.imagen) }}
\t</div>
        {{ form_errors(form) }}
\t{{ form_end(form) }}
{% endblock %}
";
    }
}
