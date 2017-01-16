<?php

/* AdminBundle:TipoReceta:add.html.twig */
class __TwigTemplate_88e1b3bc41a1c295ffc5ffe191f1fccd4222b3372d60305c861dc89ce999565f extends Twig_Template
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
        $__internal_588885bd1005723a5075c2c2b8a7888d99201a128075a8cea70a26d26830fbb9 = $this->env->getExtension("native_profiler");
        $__internal_588885bd1005723a5075c2c2b8a7888d99201a128075a8cea70a26d26830fbb9->enter($__internal_588885bd1005723a5075c2c2b8a7888d99201a128075a8cea70a26d26830fbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:TipoReceta:add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formTipo"]) ? $context["formTipo"] : $this->getContext($context, "formTipo")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_admin_addTipoReceta"), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("AdminBundle:TipoReceta:form.html.twig", "AdminBundle:TipoReceta:add.html.twig", 3)->display(array_merge($context, array("formTipo" => (isset($context["formTipo"]) ? $context["formTipo"] : $this->getContext($context, "formTipo")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formTipo"]) ? $context["formTipo"] : $this->getContext($context, "formTipo")), 'form_end');
        
        $__internal_588885bd1005723a5075c2c2b8a7888d99201a128075a8cea70a26d26830fbb9->leave($__internal_588885bd1005723a5075c2c2b8a7888d99201a128075a8cea70a26d26830fbb9_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:TipoReceta:add.html.twig";
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
