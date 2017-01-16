<?php

/* UserBundle:OrdenCompra:form.html.twig */
class __TwigTemplate_f696177427eb6900ae078b0cd16b00b799fceade51c064b4ad490101716b0910 extends Twig_Template
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
        $__internal_70a3c551e9907dbf229c7839289db25b7d2c22c8f84037bdd29b7836d3406fad = $this->env->getExtension("native_profiler");
        $__internal_70a3c551e9907dbf229c7839289db25b7d2c22c8f84037bdd29b7836d3406fad->enter($__internal_70a3c551e9907dbf229c7839289db25b7d2c22c8f84037bdd29b7836d3406fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:OrdenCompra:form.html.twig"));

        // line 1
        echo "\t<div class=\"form-group\">
\t\t";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")), "cantidad", array()), 'row');
        echo "
\t</div>
\t\t ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")), 'errors');
        echo "

";
        
        $__internal_70a3c551e9907dbf229c7839289db25b7d2c22c8f84037bdd29b7836d3406fad->leave($__internal_70a3c551e9907dbf229c7839289db25b7d2c22c8f84037bdd29b7836d3406fad_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:OrdenCompra:form.html.twig";
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
\t\t{{ form_row(formOrdenCompra.cantidad) }}
\t</div>
\t\t {{ form_errors(formOrdenCompra) }}

";
    }
}
