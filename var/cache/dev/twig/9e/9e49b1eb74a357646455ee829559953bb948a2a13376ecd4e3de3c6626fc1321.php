<?php

/* UserBundle:Comentario:form.html.twig */
class __TwigTemplate_3d1759e68bc6324a7bd5220b674392c13d91d9a54d9ba791b8feb90818b6ddfc extends Twig_Template
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
        $__internal_a72d9ef4f74474b7a82acf4fa6d396d4d5d8d4e7b334bb42c8596011b57a072c = $this->env->getExtension("native_profiler");
        $__internal_a72d9ef4f74474b7a82acf4fa6d396d4d5d8d4e7b334bb42c8596011b57a072c->enter($__internal_a72d9ef4f74474b7a82acf4fa6d396d4d5d8d4e7b334bb42c8596011b57a072c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Comentario:form.html.twig"));

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
        
        $__internal_a72d9ef4f74474b7a82acf4fa6d396d4d5d8d4e7b334bb42c8596011b57a072c->leave($__internal_a72d9ef4f74474b7a82acf4fa6d396d4d5d8d4e7b334bb42c8596011b57a072c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Comentario:form.html.twig";
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
