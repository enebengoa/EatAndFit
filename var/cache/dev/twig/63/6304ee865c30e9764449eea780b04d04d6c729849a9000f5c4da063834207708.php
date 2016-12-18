<?php

/* UserBundle:OrdenCompra:form2.html.twig */
class __TwigTemplate_c3c22ee5cbe90edb22ee04553701b137be71a2f1d6fbe1571c6c455c19a9c01f extends Twig_Template
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
        $__internal_45af16588063777213f475dedc92a5b56321a826e352c896d148a4dbae3d7e73 = $this->env->getExtension("native_profiler");
        $__internal_45af16588063777213f475dedc92a5b56321a826e352c896d148a4dbae3d7e73->enter($__internal_45af16588063777213f475dedc92a5b56321a826e352c896d148a4dbae3d7e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:OrdenCompra:form2.html.twig"));

        // line 1
        echo "\t<div class=\"form-group\">
\t\t";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")), "Ingrediente", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")), "cantidad", array()), 'row');
        echo "
\t</div>
\t\t ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")), 'errors');
        echo "

";
        
        $__internal_45af16588063777213f475dedc92a5b56321a826e352c896d148a4dbae3d7e73->leave($__internal_45af16588063777213f475dedc92a5b56321a826e352c896d148a4dbae3d7e73_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:OrdenCompra:form2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 5,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "\t<div class=\"form-group\">
\t\t{{ form_row(formOrdenCompra.Ingrediente) }}
\t</div>
\t<div class=\"form-group\">
\t\t{{ form_row(formOrdenCompra.cantidad) }}
\t</div>
\t\t {{ form_errors(formOrdenCompra) }}

";
    }
}
