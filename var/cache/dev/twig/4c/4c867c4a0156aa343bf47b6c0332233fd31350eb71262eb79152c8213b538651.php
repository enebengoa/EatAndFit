<?php

/* @User/OrdenCompra/form2.html.twig */
class __TwigTemplate_f4b692777597d488be55c43f70b9fc752494d354c4c799c136490341f77bde9e extends Twig_Template
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
        $__internal_536df5d7608004584570a55cd09f2edcaccc76115314eddf340ccc739df8f1a5 = $this->env->getExtension("native_profiler");
        $__internal_536df5d7608004584570a55cd09f2edcaccc76115314eddf340ccc739df8f1a5->enter($__internal_536df5d7608004584570a55cd09f2edcaccc76115314eddf340ccc739df8f1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/OrdenCompra/form2.html.twig"));

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
        
        $__internal_536df5d7608004584570a55cd09f2edcaccc76115314eddf340ccc739df8f1a5->leave($__internal_536df5d7608004584570a55cd09f2edcaccc76115314eddf340ccc739df8f1a5_prof);

    }

    public function getTemplateName()
    {
        return "@User/OrdenCompra/form2.html.twig";
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