<?php

/* @User/OrdenCompra/add.html.twig */
class __TwigTemplate_41dd3e9cd109cd985a43a9a0397f232bbd137da6b22de41bb2733bd5b89cd09c extends Twig_Template
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
        $__internal_a0a8f7e134e89c468727007894a445e2c127df3c0de3de1d73b13c49d174efca = $this->env->getExtension("native_profiler");
        $__internal_a0a8f7e134e89c468727007894a445e2c127df3c0de3de1d73b13c49d174efca->enter($__internal_a0a8f7e134e89c468727007894a445e2c127df3c0de3de1d73b13c49d174efca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/OrdenCompra/add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")), 'form_start', array("class" => "ajaxForm", "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("UserBundle:OrdenCompra:form.html.twig", "@User/OrdenCompra/add.html.twig", 3)->display(array_merge($context, array("formOrdenCompra" => (isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")), 'form_end');
        echo "
";
        
        $__internal_a0a8f7e134e89c468727007894a445e2c127df3c0de3de1d73b13c49d174efca->leave($__internal_a0a8f7e134e89c468727007894a445e2c127df3c0de3de1d73b13c49d174efca_prof);

    }

    public function getTemplateName()
    {
        return "@User/OrdenCompra/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  29 => 4,  27 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(formOrdenCompra, {'class': 'ajaxForm',  'attr': {'class': 'ajaxForm'}}) }}

{% include \"UserBundle:OrdenCompra:form.html.twig\"  with {'formOrdenCompra': formOrdenCompra} %}

{{ form_end(formOrdenCompra) }}
";
    }
}
