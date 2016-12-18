<?php

/* @Admin/Tecnica/form.html.twig */
class __TwigTemplate_2642572f202886d146c8d0510a1cb477ae5bd513c5972edb1a451dd7fba661fb extends Twig_Template
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
        $__internal_aca02512f420f2cef8f5bfe3ccac273f4c973d7d51c75201cf2124d2e62156c0 = $this->env->getExtension("native_profiler");
        $__internal_aca02512f420f2cef8f5bfe3ccac273f4c973d7d51c75201cf2124d2e62156c0->enter($__internal_aca02512f420f2cef8f5bfe3ccac273f4c973d7d51c75201cf2124d2e62156c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Tecnica/form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_aca02512f420f2cef8f5bfe3ccac273f4c973d7d51c75201cf2124d2e62156c0->leave($__internal_aca02512f420f2cef8f5bfe3ccac273f4c973d7d51c75201cf2124d2e62156c0_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_1420ab3e298fcc74d0be16de925be8c50aefcbd783601ddf74ff5f4c704d06db = $this->env->getExtension("native_profiler");
        $__internal_1420ab3e298fcc74d0be16de925be8c50aefcbd783601ddf74ff5f4c704d06db->enter($__internal_1420ab3e298fcc74d0be16de925be8c50aefcbd783601ddf74ff5f4c704d06db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1420ab3e298fcc74d0be16de925be8c50aefcbd783601ddf74ff5f4c704d06db->leave($__internal_1420ab3e298fcc74d0be16de925be8c50aefcbd783601ddf74ff5f4c704d06db_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Tecnica/form.html.twig";
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
