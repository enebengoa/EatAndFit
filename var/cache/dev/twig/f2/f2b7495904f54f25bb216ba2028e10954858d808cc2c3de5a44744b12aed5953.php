<?php

/* AdminBundle:TemaForo:add.html.twig */
class __TwigTemplate_7c063056ba81d1a557dadf60a6a2fcab9c41ea366baab9e025864fa7dfb43d5e extends Twig_Template
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
        $__internal_4d390a047d3a3e2ae84cb8b09f02f00dd94b89e841c910539b0cde7094a22b6e = $this->env->getExtension("native_profiler");
        $__internal_4d390a047d3a3e2ae84cb8b09f02f00dd94b89e841c910539b0cde7094a22b6e->enter($__internal_4d390a047d3a3e2ae84cb8b09f02f00dd94b89e841c910539b0cde7094a22b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:TemaForo:add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_admin_addTemaForo"), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("AdminBundle:TemaForo:form.html.twig", "AdminBundle:TemaForo:add.html.twig", 3)->display(array_merge($context, array("formForo" => (isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")), 'form_end');
        
        $__internal_4d390a047d3a3e2ae84cb8b09f02f00dd94b89e841c910539b0cde7094a22b6e->leave($__internal_4d390a047d3a3e2ae84cb8b09f02f00dd94b89e841c910539b0cde7094a22b6e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:TemaForo:add.html.twig";
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
        return "{{ form_start(formForo, {'class': 'ajaxForm', 'action': path('App_admin_addTemaForo'), 'attr': {'class': 'ajaxForm'}}) }}

{% include \"AdminBundle:TemaForo:form.html.twig\"  with {'formForo': formForo} %}

{{ form_end(formForo) }}";
    }
}
