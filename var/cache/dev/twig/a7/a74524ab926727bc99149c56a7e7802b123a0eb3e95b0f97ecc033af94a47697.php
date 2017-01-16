<?php

/* @Admin/TemaForo/add.html.twig */
class __TwigTemplate_305691a5db1550fbad06aa1b7b752513b4795ec9fc6d460db4de58a4b1c3f986 extends Twig_Template
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
        $__internal_c8fa9f31812c71cfed28ecd111386d7ef04815e06e91f39cec81240128112a54 = $this->env->getExtension("native_profiler");
        $__internal_c8fa9f31812c71cfed28ecd111386d7ef04815e06e91f39cec81240128112a54->enter($__internal_c8fa9f31812c71cfed28ecd111386d7ef04815e06e91f39cec81240128112a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/TemaForo/add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_admin_addTemaForo"), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("AdminBundle:TemaForo:form.html.twig", "@Admin/TemaForo/add.html.twig", 3)->display(array_merge($context, array("formForo" => (isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")), 'form_end');
        
        $__internal_c8fa9f31812c71cfed28ecd111386d7ef04815e06e91f39cec81240128112a54->leave($__internal_c8fa9f31812c71cfed28ecd111386d7ef04815e06e91f39cec81240128112a54_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/TemaForo/add.html.twig";
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
