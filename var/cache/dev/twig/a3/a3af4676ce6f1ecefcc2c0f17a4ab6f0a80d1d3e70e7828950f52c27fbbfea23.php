<?php

/* @Admin/HoraIngesta/form.html.twig */
class __TwigTemplate_309917a4e22a64c9beb606bd183081c824b9e087df73924da77eb09360c00402 extends Twig_Template
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
        $__internal_652442d42006977bf9f64aea67193d648a521948b4b7f623b38b78ae9612b50f = $this->env->getExtension("native_profiler");
        $__internal_652442d42006977bf9f64aea67193d648a521948b4b7f623b38b78ae9612b50f->enter($__internal_652442d42006977bf9f64aea67193d648a521948b4b7f623b38b78ae9612b50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/HoraIngesta/form.html.twig"));

        // line 1
        echo "
\t<div class=\"form-group\">
\t\t";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formHora"]) ? $context["formHora"] : $this->getContext($context, "formHora")), "nombre", array()), 'row');
        echo "
\t</div>
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formHora"]) ? $context["formHora"] : $this->getContext($context, "formHora")), 'errors');
        echo "

";
        
        $__internal_652442d42006977bf9f64aea67193d648a521948b4b7f623b38b78ae9612b50f->leave($__internal_652442d42006977bf9f64aea67193d648a521948b4b7f623b38b78ae9612b50f_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/HoraIngesta/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "
\t<div class=\"form-group\">
\t\t{{ form_row(formHora.nombre) }}
\t</div>
        {{ form_errors(formHora) }}

";
    }
}
