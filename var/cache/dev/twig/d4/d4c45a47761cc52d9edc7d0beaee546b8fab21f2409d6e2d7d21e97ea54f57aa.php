<?php

/* AdminBundle:Tecnica:add.html.twig */
class __TwigTemplate_2339c03e1d89ff8a58731a2e19bfe3e5823502e33365bc362a7aedc99fb549e3 extends Twig_Template
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
        $__internal_664c69b564f577b90b76079ec5a3e7c4938c007a0a101fcbeb8dc0c50983a161 = $this->env->getExtension("native_profiler");
        $__internal_664c69b564f577b90b76079ec5a3e7c4938c007a0a101fcbeb8dc0c50983a161->enter($__internal_664c69b564f577b90b76079ec5a3e7c4938c007a0a101fcbeb8dc0c50983a161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Tecnica:add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formTecnica"]) ? $context["formTecnica"] : $this->getContext($context, "formTecnica")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_admin_addTecnica"), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("AdminBundle:Tecnica:form.html.twig", "AdminBundle:Tecnica:add.html.twig", 3)->display(array_merge($context, array("formTecnica" => (isset($context["formTecnica"]) ? $context["formTecnica"] : $this->getContext($context, "formTecnica")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formTecnica"]) ? $context["formTecnica"] : $this->getContext($context, "formTecnica")), 'form_end');
        
        $__internal_664c69b564f577b90b76079ec5a3e7c4938c007a0a101fcbeb8dc0c50983a161->leave($__internal_664c69b564f577b90b76079ec5a3e7c4938c007a0a101fcbeb8dc0c50983a161_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Tecnica:add.html.twig";
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
