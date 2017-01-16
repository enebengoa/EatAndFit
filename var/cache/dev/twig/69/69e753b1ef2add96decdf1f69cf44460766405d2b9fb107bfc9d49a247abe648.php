<?php

/* @Admin/Tecnica/form.html.twig */
class __TwigTemplate_2642572f202886d146c8d0510a1cb477ae5bd513c5972edb1a451dd7fba661fb extends Twig_Template
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
        $__internal_3e305b6e0c16abd08a074131cb943d69c6bfab0739c8c6d4dbf3fc350e5869cf = $this->env->getExtension("native_profiler");
        $__internal_3e305b6e0c16abd08a074131cb943d69c6bfab0739c8c6d4dbf3fc350e5869cf->enter($__internal_3e305b6e0c16abd08a074131cb943d69c6bfab0739c8c6d4dbf3fc350e5869cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Tecnica/form.html.twig"));

        // line 1
        echo "
\t<div class=\"form-group\">
\t\t";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTecnica"]) ? $context["formTecnica"] : $this->getContext($context, "formTecnica")), "nombre", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTecnica"]) ? $context["formTecnica"] : $this->getContext($context, "formTecnica")), "descripcion", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTecnica"]) ? $context["formTecnica"] : $this->getContext($context, "formTecnica")), "vid", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formTecnica"]) ? $context["formTecnica"] : $this->getContext($context, "formTecnica")), "utensilios", array()), 'row');
        echo "
\t</div>

        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formTecnica"]) ? $context["formTecnica"] : $this->getContext($context, "formTecnica")), 'errors');
        echo "

";
        
        $__internal_3e305b6e0c16abd08a074131cb943d69c6bfab0739c8c6d4dbf3fc350e5869cf->leave($__internal_3e305b6e0c16abd08a074131cb943d69c6bfab0739c8c6d4dbf3fc350e5869cf_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Tecnica/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  44 => 12,  38 => 9,  32 => 6,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "
\t<div class=\"form-group\">
\t\t{{ form_row(formTecnica.nombre) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(formTecnica.descripcion) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(formTecnica.vid) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(formTecnica.utensilios) }}
\t</div>

        {{ form_errors(formTecnica) }}

";
    }
}
