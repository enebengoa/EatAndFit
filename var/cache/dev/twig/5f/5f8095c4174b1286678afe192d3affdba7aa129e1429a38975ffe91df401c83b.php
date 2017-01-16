<?php

/* @Admin/HoraIngesta/add.html.twig */
class __TwigTemplate_c5ab387369aa2e076b8f1983f7bb5cba1a7f5d5e82c8c3c1a9e03130badbc9d2 extends Twig_Template
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
        $__internal_8b710968a6c541dee999a6d9facb914574436c9b7afaadb16d6efc40a0d9d5e5 = $this->env->getExtension("native_profiler");
        $__internal_8b710968a6c541dee999a6d9facb914574436c9b7afaadb16d6efc40a0d9d5e5->enter($__internal_8b710968a6c541dee999a6d9facb914574436c9b7afaadb16d6efc40a0d9d5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/HoraIngesta/add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHora"]) ? $context["formHora"] : $this->getContext($context, "formHora")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_admin_addHoraIngesta"), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("AdminBundle:HoraIngesta:form.html.twig", "@Admin/HoraIngesta/add.html.twig", 3)->display(array_merge($context, array("formHora" => (isset($context["formHora"]) ? $context["formHora"] : $this->getContext($context, "formHora")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formHora"]) ? $context["formHora"] : $this->getContext($context, "formHora")), 'form_end');
        
        $__internal_8b710968a6c541dee999a6d9facb914574436c9b7afaadb16d6efc40a0d9d5e5->leave($__internal_8b710968a6c541dee999a6d9facb914574436c9b7afaadb16d6efc40a0d9d5e5_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/HoraIngesta/add.html.twig";
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
        return "{{ form_start(formHora, {'class': 'ajaxForm', 'action': path('App_admin_addHoraIngesta'), 'attr': {'class': 'ajaxForm'}}) }}

{% include \"AdminBundle:HoraIngesta:form.html.twig\"  with {'formHora': formHora} %}

{{ form_end(formHora) }}";
    }
}
