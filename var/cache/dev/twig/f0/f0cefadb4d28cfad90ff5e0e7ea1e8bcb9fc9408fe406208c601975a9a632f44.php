<?php

/* @User/OrdenCompra/form.html.twig */
class __TwigTemplate_51cc92ac12b066aebd0f7f8d2823a97bb822d8a00c6ba3d45a6961d717107094 extends Twig_Template
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
        $__internal_a23c5b8e03b3241f7e83c66062454367a288c25d2abe6e2132894240c9b6822b = $this->env->getExtension("native_profiler");
        $__internal_a23c5b8e03b3241f7e83c66062454367a288c25d2abe6e2132894240c9b6822b->enter($__internal_a23c5b8e03b3241f7e83c66062454367a288c25d2abe6e2132894240c9b6822b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/OrdenCompra/form.html.twig"));

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
        
        $__internal_a23c5b8e03b3241f7e83c66062454367a288c25d2abe6e2132894240c9b6822b->leave($__internal_a23c5b8e03b3241f7e83c66062454367a288c25d2abe6e2132894240c9b6822b_prof);

    }

    public function getTemplateName()
    {
        return "@User/OrdenCompra/form.html.twig";
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
