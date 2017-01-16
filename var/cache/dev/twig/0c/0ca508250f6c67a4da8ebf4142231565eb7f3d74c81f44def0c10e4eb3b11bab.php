<?php

/* @User/Menu/add.html.twig */
class __TwigTemplate_6d3969b42eaa215a8f653ae0dcecf1c4f62ceb88dc5a4b77172fd4066e00dc9f extends Twig_Template
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
        $__internal_130723bf63aa35534e5c88e52dbf4d7248bd8868be5377026341478c32ff7d12 = $this->env->getExtension("native_profiler");
        $__internal_130723bf63aa35534e5c88e52dbf4d7248bd8868be5377026341478c32ff7d12->enter($__internal_130723bf63aa35534e5c88e52dbf4d7248bd8868be5377026341478c32ff7d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Menu/add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_user_addMenu"), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("UserBundle:Menu:form.html.twig", "@User/Menu/add.html.twig", 3)->display(array_merge($context, array("formMenu" => (isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), 'form_end');
        echo "
";
        
        $__internal_130723bf63aa35534e5c88e52dbf4d7248bd8868be5377026341478c32ff7d12->leave($__internal_130723bf63aa35534e5c88e52dbf4d7248bd8868be5377026341478c32ff7d12_prof);

    }

    public function getTemplateName()
    {
        return "@User/Menu/add.html.twig";
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
        return "{{ form_start(formMenu, {'class': 'ajaxForm', 'action': path('App_user_addMenu'), 'attr': {'class': 'ajaxForm'}}) }}

{% include \"UserBundle:Menu:form.html.twig\"  with {'formMenu': formMenu} %}

{{ form_end(formMenu) }}
";
    }
}
