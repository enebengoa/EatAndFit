<?php

/* AdminBundle:TipoReceta:form.html.twig */
class __TwigTemplate_7f068454e6d233b4bf2695ddf400737241c180fc9e51a2d3ea57b3c9402b73c9 extends Twig_Template
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
        $__internal_c2f9a75d6bec5e85e93ce26f9252b1c6096d33675c27d1a1a53dbe66da2d5e10 = $this->env->getExtension("native_profiler");
        $__internal_c2f9a75d6bec5e85e93ce26f9252b1c6096d33675c27d1a1a53dbe66da2d5e10->enter($__internal_c2f9a75d6bec5e85e93ce26f9252b1c6096d33675c27d1a1a53dbe66da2d5e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:TipoReceta:form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_c2f9a75d6bec5e85e93ce26f9252b1c6096d33675c27d1a1a53dbe66da2d5e10->leave($__internal_c2f9a75d6bec5e85e93ce26f9252b1c6096d33675c27d1a1a53dbe66da2d5e10_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_a5c3b2655489189effbe142640ad37ece9951944b4025f2bf16928886ca78386 = $this->env->getExtension("native_profiler");
        $__internal_a5c3b2655489189effbe142640ad37ece9951944b4025f2bf16928886ca78386->enter($__internal_a5c3b2655489189effbe142640ad37ece9951944b4025f2bf16928886ca78386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t
\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</form>

";
        
        $__internal_a5c3b2655489189effbe142640ad37ece9951944b4025f2bf16928886ca78386->leave($__internal_a5c3b2655489189effbe142640ad37ece9951944b4025f2bf16928886ca78386_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:TipoReceta:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  49 => 8,  43 => 5,  38 => 3,  35 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "{% block body %}
\t<form class=\"blogger\" method=\"post\" >
\t{{ form_start(form) }}
\t<div class=\"form-group\">
\t\t{{ form_row(form.nombre) }}
\t</div>

        {{ form_errors(form) }}
\t\t
\t{{ form_end(form) }}
\t</form>

{% endblock %}
";
    }
}
