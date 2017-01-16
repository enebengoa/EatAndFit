<?php

/* @Admin/Ingrediente/add.html.twig */
class __TwigTemplate_dd66182bf2b4631619918d8b740c208851558a64017b83b3d43eaddd9f60c594 extends Twig_Template
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
        $__internal_489ef9041b5ac8c73a85d3e4b1047b4121ff6e94044cf1c3cdcf8a656c79d264 = $this->env->getExtension("native_profiler");
        $__internal_489ef9041b5ac8c73a85d3e4b1047b4121ff6e94044cf1c3cdcf8a656c79d264->enter($__internal_489ef9041b5ac8c73a85d3e4b1047b4121ff6e94044cf1c3cdcf8a656c79d264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Ingrediente/add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_admin_addIngrediente"), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("AdminBundle:Ingrediente:form.html.twig", "@Admin/Ingrediente/add.html.twig", 3)->display(array_merge($context, array("formIngrediente" => (isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")), 'form_end');
        
        $__internal_489ef9041b5ac8c73a85d3e4b1047b4121ff6e94044cf1c3cdcf8a656c79d264->leave($__internal_489ef9041b5ac8c73a85d3e4b1047b4121ff6e94044cf1c3cdcf8a656c79d264_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Ingrediente/add.html.twig";
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
        return "{{ form_start(formIngrediente, {'class': 'ajaxForm', 'action': path('App_admin_addIngrediente'), 'attr': {'class': 'ajaxForm'}}) }}

{% include \"AdminBundle:Ingrediente:form.html.twig\"  with {'formIngrediente': formIngrediente} %}

{{ form_end(formIngrediente) }}";
    }
}
