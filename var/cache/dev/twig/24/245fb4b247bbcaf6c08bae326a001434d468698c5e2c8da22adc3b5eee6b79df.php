<?php

/* @Admin/Tecnica/add.html.twig */
class __TwigTemplate_710bc311702200d24e6397215f897b7d51ec8421b45bc8cd3b5079f0252bf195 extends Twig_Template
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
        $__internal_cbd4d4c64450a6bdd7305ad232b966a1bc664f72dfaa5b3f205f4012e40f9c5c = $this->env->getExtension("native_profiler");
        $__internal_cbd4d4c64450a6bdd7305ad232b966a1bc664f72dfaa5b3f205f4012e40f9c5c->enter($__internal_cbd4d4c64450a6bdd7305ad232b966a1bc664f72dfaa5b3f205f4012e40f9c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Tecnica/add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formTecnica"]) ? $context["formTecnica"] : $this->getContext($context, "formTecnica")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_admin_addTecnica"), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("AdminBundle:Tecnica:form.html.twig", "@Admin/Tecnica/add.html.twig", 3)->display(array_merge($context, array("formTecnica" => (isset($context["formTecnica"]) ? $context["formTecnica"] : $this->getContext($context, "formTecnica")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formTecnica"]) ? $context["formTecnica"] : $this->getContext($context, "formTecnica")), 'form_end');
        
        $__internal_cbd4d4c64450a6bdd7305ad232b966a1bc664f72dfaa5b3f205f4012e40f9c5c->leave($__internal_cbd4d4c64450a6bdd7305ad232b966a1bc664f72dfaa5b3f205f4012e40f9c5c_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Tecnica/add.html.twig";
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
        return "{{ form_start(formTecnica, {'class': 'ajaxForm', 'action': path('App_admin_addTecnica'), 'attr': {'class': 'ajaxForm'}}) }}

{% include \"AdminBundle:Tecnica:form.html.twig\"  with {'formTecnica': formTecnica} %}

{{ form_end(formTecnica) }}";
    }
}
