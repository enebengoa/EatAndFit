<?php

/* @User/Comentario/form.html.twig */
class __TwigTemplate_d65ffd19f39e30750018ce1143a3ccf2621fdd0d495f2a18ba53c819317343c4 extends Twig_Template
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
        $__internal_0fbb96c6ba328e424a8d026549d70e3de004d995cf1dbeebf66aba53534b5eab = $this->env->getExtension("native_profiler");
        $__internal_0fbb96c6ba328e424a8d026549d70e3de004d995cf1dbeebf66aba53534b5eab->enter($__internal_0fbb96c6ba328e424a8d026549d70e3de004d995cf1dbeebf66aba53534b5eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Comentario/form.html.twig"));

        // line 1
        echo "

\t<div class=\"form-group\">
\t\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenido", array()), 'row');
        echo "
\t</div>

        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "


";
        
        $__internal_0fbb96c6ba328e424a8d026549d70e3de004d995cf1dbeebf66aba53534b5eab->leave($__internal_0fbb96c6ba328e424a8d026549d70e3de004d995cf1dbeebf66aba53534b5eab_prof);

    }

    public function getTemplateName()
    {
        return "@User/Comentario/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "

\t<div class=\"form-group\">
\t\t{{ form_row(form.contenido) }}
\t</div>

        {{ form_errors(form) }}


";
    }
}
