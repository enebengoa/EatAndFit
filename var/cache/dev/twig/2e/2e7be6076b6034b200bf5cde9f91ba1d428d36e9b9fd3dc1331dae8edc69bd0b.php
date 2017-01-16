<?php

/* @Admin/TipoReceta/form.html.twig */
class __TwigTemplate_04a129781b5d5eb2cc1a220645548956cb030c14aa63ef7c08d69b93281fab22 extends Twig_Template
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
        $__internal_7dd5849890f8f79b9c47c826966becf6273f0c5a2c4b9e54ade1fe248d70c64e = $this->env->getExtension("native_profiler");
        $__internal_7dd5849890f8f79b9c47c826966becf6273f0c5a2c4b9e54ade1fe248d70c64e->enter($__internal_7dd5849890f8f79b9c47c826966becf6273f0c5a2c4b9e54ade1fe248d70c64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/TipoReceta/form.html.twig"));

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
        
        $__internal_7dd5849890f8f79b9c47c826966becf6273f0c5a2c4b9e54ade1fe248d70c64e->leave($__internal_7dd5849890f8f79b9c47c826966becf6273f0c5a2c4b9e54ade1fe248d70c64e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/TipoReceta/form.html.twig";
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
