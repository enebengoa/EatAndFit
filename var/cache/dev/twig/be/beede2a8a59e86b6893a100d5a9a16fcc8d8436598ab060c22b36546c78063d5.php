<?php

/* UserBundle:OrdenCompra:add.html.twig */
class __TwigTemplate_af585e47f68357ade601c8b5e9ed05c5823caa90ec8c39d7ce089f188282d32d extends Twig_Template
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
        $__internal_9acbf7db42f1b0bdb3b4f98e71ee8c0cc8ee33291c55fe2f6ba79ce097d5dc74 = $this->env->getExtension("native_profiler");
        $__internal_9acbf7db42f1b0bdb3b4f98e71ee8c0cc8ee33291c55fe2f6ba79ce097d5dc74->enter($__internal_9acbf7db42f1b0bdb3b4f98e71ee8c0cc8ee33291c55fe2f6ba79ce097d5dc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:OrdenCompra:add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")), 'form_start', array("class" => "ajaxForm", "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("UserBundle:OrdenCompra:form.html.twig", "UserBundle:OrdenCompra:add.html.twig", 3)->display(array_merge($context, array("formOrdenCompra" => (isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")), 'form_end');
        echo "
";
        
        $__internal_9acbf7db42f1b0bdb3b4f98e71ee8c0cc8ee33291c55fe2f6ba79ce097d5dc74->leave($__internal_9acbf7db42f1b0bdb3b4f98e71ee8c0cc8ee33291c55fe2f6ba79ce097d5dc74_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:OrdenCompra:add.html.twig";
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
