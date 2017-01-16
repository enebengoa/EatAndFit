<?php

/* AdminBundle:HoraIngesta:form.html.twig */
class __TwigTemplate_dde64d7af0a13f0e7d888c671fa8e9bc2ac4cf77fac640c6dcf5f379cebb55f2 extends Twig_Template
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
        $__internal_ce3cc03a4a81a0455f5b3d09022d582d6aab5ffbe8cda1571162e307506dee4e = $this->env->getExtension("native_profiler");
        $__internal_ce3cc03a4a81a0455f5b3d09022d582d6aab5ffbe8cda1571162e307506dee4e->enter($__internal_ce3cc03a4a81a0455f5b3d09022d582d6aab5ffbe8cda1571162e307506dee4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:HoraIngesta:form.html.twig"));

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
        
        $__internal_ce3cc03a4a81a0455f5b3d09022d582d6aab5ffbe8cda1571162e307506dee4e->leave($__internal_ce3cc03a4a81a0455f5b3d09022d582d6aab5ffbe8cda1571162e307506dee4e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:HoraIngesta:form.html.twig";
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
