<?php

/* @User/Menu/form.html.twig */
class __TwigTemplate_4c35d5444bbbbccf47f67443462c9933735fd6de6e8edb06b025045f37556a0d extends Twig_Template
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
        $__internal_8eed737b332dcaa6b9d8b51c39713cda3c7bf8dd16d6d7de4204ea5f3171b028 = $this->env->getExtension("native_profiler");
        $__internal_8eed737b332dcaa6b9d8b51c39713cda3c7bf8dd16d6d7de4204ea5f3171b028->enter($__internal_8eed737b332dcaa6b9d8b51c39713cda3c7bf8dd16d6d7de4204ea5f3171b028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Menu/form.html.twig"));

        // line 1
        echo "\t<div class=\"form-group\">
\t\t";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), "nombre", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), "descripcion", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), "publico", array()), 'label');
        echo "</br>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), "publico", array()), 'widget');
        echo "
\t</div>
\t\t ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), 'errors');
        echo "

";
        
        $__internal_8eed737b332dcaa6b9d8b51c39713cda3c7bf8dd16d6d7de4204ea5f3171b028->leave($__internal_8eed737b332dcaa6b9d8b51c39713cda3c7bf8dd16d6d7de4204ea5f3171b028_prof);

    }

    public function getTemplateName()
    {
        return "@User/Menu/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  37 => 8,  31 => 5,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "\t<div class=\"form-group\">
\t\t{{ form_row(formMenu.nombre) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(formMenu.descripcion) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_label(formMenu.publico) }}</br>{{ form_widget(formMenu.publico) }}
\t</div>
\t\t {{ form_errors(formMenu) }}

";
    }
}
