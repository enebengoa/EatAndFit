<?php

/* UserBundle:Puntuacion:form.html.twig */
class __TwigTemplate_a639e70aeedc346cd48277c944151cde1ba68cc8d60efe14bec23099233d0eac extends Twig_Template
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
        $__internal_d035069425ba8fdf4ee8a0b7d84f78ce37de4e0aeb3c0ea9162dab0bdbe2f2ec = $this->env->getExtension("native_profiler");
        $__internal_d035069425ba8fdf4ee8a0b7d84f78ce37de4e0aeb3c0ea9162dab0bdbe2f2ec->enter($__internal_d035069425ba8fdf4ee8a0b7d84f78ce37de4e0aeb3c0ea9162dab0bdbe2f2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Puntuacion:form.html.twig"));

        // line 1
        echo "

\t<div class=\"form-group\">
\t\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "puntuacion", array()), 'row');
        echo "
\t</div>

        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'errors');
        echo "


";
        
        $__internal_d035069425ba8fdf4ee8a0b7d84f78ce37de4e0aeb3c0ea9162dab0bdbe2f2ec->leave($__internal_d035069425ba8fdf4ee8a0b7d84f78ce37de4e0aeb3c0ea9162dab0bdbe2f2ec_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Puntuacion:form.html.twig";
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
\t\t{{ form_row(form2.puntuacion) }}
\t</div>

        {{ form_errors(form2) }}


";
    }
}
