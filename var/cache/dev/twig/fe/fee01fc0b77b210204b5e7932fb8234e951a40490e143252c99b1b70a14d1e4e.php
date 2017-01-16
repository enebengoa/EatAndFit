<?php

/* AdminBundle:Tecnica:form.html.twig */
class __TwigTemplate_8bfd24b539f1ec499e0dd1a59609153a84f9c1295005093bc7bd778f99c549c6 extends Twig_Template
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
        $__internal_8f0fc042a284b13bd932bb560fbb328790c211a8398c13ce7e4089e21805f8cd = $this->env->getExtension("native_profiler");
        $__internal_8f0fc042a284b13bd932bb560fbb328790c211a8398c13ce7e4089e21805f8cd->enter($__internal_8f0fc042a284b13bd932bb560fbb328790c211a8398c13ce7e4089e21805f8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Tecnica:form.html.twig"));

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
        
        $__internal_8f0fc042a284b13bd932bb560fbb328790c211a8398c13ce7e4089e21805f8cd->leave($__internal_8f0fc042a284b13bd932bb560fbb328790c211a8398c13ce7e4089e21805f8cd_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Tecnica:form.html.twig";
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
