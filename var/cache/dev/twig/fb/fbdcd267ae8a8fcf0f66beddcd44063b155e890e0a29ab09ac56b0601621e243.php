<?php

/* UserBundle:Lista:form.html.twig */
class __TwigTemplate_5da21c7fee2922f4bf2d55c5aa67fbd33cc63411e91ec9bcc75a24de1992133b extends Twig_Template
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
        $__internal_2954ff0602675f2ebba76910e3587e210261015815aaf08771615feb4ec0c697 = $this->env->getExtension("native_profiler");
        $__internal_2954ff0602675f2ebba76910e3587e210261015815aaf08771615feb4ec0c697->enter($__internal_2954ff0602675f2ebba76910e3587e210261015815aaf08771615feb4ec0c697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Lista:form.html.twig"));

        // line 1
        echo "\t<div class=\"form-group\">
\t\t";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")), "nombre", array()), 'row');
        echo "
\t</div>
\t\t ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")), 'errors');
        echo "

";
        
        $__internal_2954ff0602675f2ebba76910e3587e210261015815aaf08771615feb4ec0c697->leave($__internal_2954ff0602675f2ebba76910e3587e210261015815aaf08771615feb4ec0c697_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Lista:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "\t<div class=\"form-group\">
\t\t{{ form_row(formLista.nombre) }}
\t</div>
\t\t {{ form_errors(formLista) }}

";
    }
}
