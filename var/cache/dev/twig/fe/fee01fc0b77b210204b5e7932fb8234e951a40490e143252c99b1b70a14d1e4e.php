<?php

/* AdminBundle:Tecnica:form.html.twig */
class __TwigTemplate_8bfd24b539f1ec499e0dd1a59609153a84f9c1295005093bc7bd778f99c549c6 extends Twig_Template
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
        $__internal_18239bad301eac12d240f9cd1d4b3bc134ccbe8702dd89d6b542c5c5f4cdf084 = $this->env->getExtension("native_profiler");
        $__internal_18239bad301eac12d240f9cd1d4b3bc134ccbe8702dd89d6b542c5c5f4cdf084->enter($__internal_18239bad301eac12d240f9cd1d4b3bc134ccbe8702dd89d6b542c5c5f4cdf084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Tecnica:form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_18239bad301eac12d240f9cd1d4b3bc134ccbe8702dd89d6b542c5c5f4cdf084->leave($__internal_18239bad301eac12d240f9cd1d4b3bc134ccbe8702dd89d6b542c5c5f4cdf084_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_8b6bb21019db5547ca3460b8924e994739c3f53f3faaeb17449b428d87e15ab1 = $this->env->getExtension("native_profiler");
        $__internal_8b6bb21019db5547ca3460b8924e994739c3f53f3faaeb17449b428d87e15ab1->enter($__internal_8b6bb21019db5547ca3460b8924e994739c3f53f3faaeb17449b428d87e15ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaCreacion", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vid", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "utensilios", array()), 'row');
        echo "
\t</div>

        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t
\t";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</form>

";
        
        $__internal_8b6bb21019db5547ca3460b8924e994739c3f53f3faaeb17449b428d87e15ab1->leave($__internal_8b6bb21019db5547ca3460b8924e994739c3f53f3faaeb17449b428d87e15ab1_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Tecnica:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  73 => 20,  67 => 17,  61 => 14,  55 => 11,  49 => 8,  43 => 5,  38 => 3,  35 => 2,  23 => 1,);
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
\t\t{{ form_row(form.fechaCreacion) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.descripcion) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.vid) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(form.utensilios) }}
\t</div>

        {{ form_errors(form) }}
\t\t
\t{{ form_end(form) }}
\t</form>

{% endblock %}
";
    }
}
