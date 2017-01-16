<?php

/* @Admin/TipoReceta/add.html.twig */
class __TwigTemplate_a11ad8052ebdc74654cc0be2a19bb6c4e2fadf7d25a263d3a3ab7843e8ad6a35 extends Twig_Template
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
        $__internal_455fea16fa3392cb62bb031fb72c6de7b4981dae4a5eb3eebbcd5a31212eec4f = $this->env->getExtension("native_profiler");
        $__internal_455fea16fa3392cb62bb031fb72c6de7b4981dae4a5eb3eebbcd5a31212eec4f->enter($__internal_455fea16fa3392cb62bb031fb72c6de7b4981dae4a5eb3eebbcd5a31212eec4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/TipoReceta/add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formTipo"]) ? $context["formTipo"] : $this->getContext($context, "formTipo")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_admin_addTipoReceta"), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("AdminBundle:TipoReceta:form.html.twig", "@Admin/TipoReceta/add.html.twig", 3)->display(array_merge($context, array("formTipo" => (isset($context["formTipo"]) ? $context["formTipo"] : $this->getContext($context, "formTipo")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formTipo"]) ? $context["formTipo"] : $this->getContext($context, "formTipo")), 'form_end');
        
        $__internal_455fea16fa3392cb62bb031fb72c6de7b4981dae4a5eb3eebbcd5a31212eec4f->leave($__internal_455fea16fa3392cb62bb031fb72c6de7b4981dae4a5eb3eebbcd5a31212eec4f_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/TipoReceta/add.html.twig";
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
        return "{{ form_start(formTipo, {'class': 'ajaxForm', 'action': path('App_admin_addTipoReceta'), 'attr': {'class': 'ajaxForm'}}) }}

{% include \"AdminBundle:TipoReceta:form.html.twig\"  with {'formTipo': formTipo} %}

{{ form_end(formTipo) }}";
    }
}
