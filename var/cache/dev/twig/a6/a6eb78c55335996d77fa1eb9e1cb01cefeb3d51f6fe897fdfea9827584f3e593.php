<?php

/* @User/Lista/add.html.twig */
class __TwigTemplate_563acc1239e499603fe79fed20ba4bf84fe62f5dda857d12e80f82d14eb179fe extends Twig_Template
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
        $__internal_3d3caf6a90017b0c4196e8f0d47dd1baa6dc36088b36b1bad95badd9689a5162 = $this->env->getExtension("native_profiler");
        $__internal_3d3caf6a90017b0c4196e8f0d47dd1baa6dc36088b36b1bad95badd9689a5162->enter($__internal_3d3caf6a90017b0c4196e8f0d47dd1baa6dc36088b36b1bad95badd9689a5162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Lista/add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_user_addLista"), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("UserBundle:Lista:form.html.twig", "@User/Lista/add.html.twig", 3)->display(array_merge($context, array("formLista" => (isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")), 'form_end');
        echo "
";
        
        $__internal_3d3caf6a90017b0c4196e8f0d47dd1baa6dc36088b36b1bad95badd9689a5162->leave($__internal_3d3caf6a90017b0c4196e8f0d47dd1baa6dc36088b36b1bad95badd9689a5162_prof);

    }

    public function getTemplateName()
    {
        return "@User/Lista/add.html.twig";
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
        return "{{ form_start(formLista, {'class': 'ajaxForm', 'action': path('App_user_addLista'), 'attr': {'class': 'ajaxForm'}}) }}

{% include \"UserBundle:Lista:form.html.twig\"  with {'formLista': formLista} %}

{{ form_end(formLista) }}
";
    }
}
