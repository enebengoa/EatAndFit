<?php

/* AdminBundle:TipoReceta:form.html.twig */
class __TwigTemplate_7f068454e6d233b4bf2695ddf400737241c180fc9e51a2d3ea57b3c9402b73c9 extends Twig_Template
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
        $__internal_448949846c35534ce4273f3d615e7c9fcb8187757ca5cb45ce1dfd9e3f666508 = $this->env->getExtension("native_profiler");
        $__internal_448949846c35534ce4273f3d615e7c9fcb8187757ca5cb45ce1dfd9e3f666508->enter($__internal_448949846c35534ce4273f3d615e7c9fcb8187757ca5cb45ce1dfd9e3f666508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:TipoReceta:form.html.twig"));

        // line 1
        echo "
\t<div class=\"form-group\">
\t\t";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTipo"]) ? $context["formTipo"] : $this->getContext($context, "formTipo")), "nombre", array()), 'row');
        echo "
\t</div>

        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formTipo"]) ? $context["formTipo"] : $this->getContext($context, "formTipo")), 'errors');
        echo "
\t\t

";
        
        $__internal_448949846c35534ce4273f3d615e7c9fcb8187757ca5cb45ce1dfd9e3f666508->leave($__internal_448949846c35534ce4273f3d615e7c9fcb8187757ca5cb45ce1dfd9e3f666508_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:TipoReceta:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "
\t<div class=\"form-group\">
\t\t{{ form_row(formTipo.nombre) }}
\t</div>

        {{ form_errors(formTipo) }}
\t\t

";
    }
}
