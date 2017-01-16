<?php

/* @Admin/TemaForo/form.html.twig */
class __TwigTemplate_c4d98325f6494d059ad868aeb7de9b4623bda081dec276e148b51c37d0ebf64a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be13a2ac444293d679087fb11aecc8cf7af5a5746a0577493a78b85b8dd48fcb = $this->env->getExtension("native_profiler");
        $__internal_be13a2ac444293d679087fb11aecc8cf7af5a5746a0577493a78b85b8dd48fcb->enter($__internal_be13a2ac444293d679087fb11aecc8cf7af5a5746a0577493a78b85b8dd48fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/TemaForo/form.html.twig"));

        // line 1
        echo "
\t<div class=\"form-group\">
\t\t";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")), "nombre", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")), "descripcion", array()), 'row');
        echo "
\t</div>
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")), 'errors');
        echo "
\t\t
";
        
        $__internal_be13a2ac444293d679087fb11aecc8cf7af5a5746a0577493a78b85b8dd48fcb->leave($__internal_be13a2ac444293d679087fb11aecc8cf7af5a5746a0577493a78b85b8dd48fcb_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/TemaForo/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  32 => 6,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "
\t<div class=\"form-group\">
\t\t{{ form_row(formForo.nombre) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(formForo.descripcion) }}
\t</div>
        {{ form_errors(formForo) }}
\t\t
";
    }
}
