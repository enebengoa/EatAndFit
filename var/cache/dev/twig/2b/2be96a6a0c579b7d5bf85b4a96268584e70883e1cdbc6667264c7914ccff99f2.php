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
        $__internal_18bdeb5cbe013168302b63f32f62b135fcff1261a35df02d745d1fd6bc22aa0e = $this->env->getExtension("native_profiler");
        $__internal_18bdeb5cbe013168302b63f32f62b135fcff1261a35df02d745d1fd6bc22aa0e->enter($__internal_18bdeb5cbe013168302b63f32f62b135fcff1261a35df02d745d1fd6bc22aa0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:OrdenCompra:form.html.twig"));

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
        
        $__internal_18bdeb5cbe013168302b63f32f62b135fcff1261a35df02d745d1fd6bc22aa0e->leave($__internal_18bdeb5cbe013168302b63f32f62b135fcff1261a35df02d745d1fd6bc22aa0e_prof);

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
