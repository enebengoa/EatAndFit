<?php

/* UserBundle:SubMenu:add.html.twig */
class __TwigTemplate_85578a5e4323503f6c9e11b58effde4c8ae105fb3cd3d06f25577adc7ca80b83 extends Twig_Template
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
        $__internal_c0d60e82dc6d3af0ff295c8842fcc2fde199d6e48f390616677861d4aeaf703b = $this->env->getExtension("native_profiler");
        $__internal_c0d60e82dc6d3af0ff295c8842fcc2fde199d6e48f390616677861d4aeaf703b->enter($__internal_c0d60e82dc6d3af0ff295c8842fcc2fde199d6e48f390616677861d4aeaf703b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:SubMenu:add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSubMenu"]) ? $context["formSubMenu"] : $this->getContext($context, "formSubMenu")), 'form_start', array("class" => "ajaxForm", "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("UserBundle:SubMenu:form.html.twig", "UserBundle:SubMenu:add.html.twig", 3)->display(array_merge($context, array("formSubMenu" => (isset($context["formSubMenu"]) ? $context["formSubMenu"] : $this->getContext($context, "formSubMenu")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSubMenu"]) ? $context["formSubMenu"] : $this->getContext($context, "formSubMenu")), 'form_end');
        echo "
";
        
        $__internal_c0d60e82dc6d3af0ff295c8842fcc2fde199d6e48f390616677861d4aeaf703b->leave($__internal_c0d60e82dc6d3af0ff295c8842fcc2fde199d6e48f390616677861d4aeaf703b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:SubMenu:add.html.twig";
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
        return "{{ form_start(formSubMenu, {'class': 'ajaxForm',  'attr': {'class': 'ajaxForm'}}) }}

{% include \"UserBundle:SubMenu:form.html.twig\"  with {'formSubMenu': formSubMenu} %}

{{ form_end(formSubMenu) }}
";
    }
}
