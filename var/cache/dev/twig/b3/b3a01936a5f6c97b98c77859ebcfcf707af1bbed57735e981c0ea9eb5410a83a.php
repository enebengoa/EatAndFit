<?php

/* UserBundle:Foro:add.html.twig */
class __TwigTemplate_6508cf5905d96bf8eb7a6444c21c2cfd05f60c50e200e1034194c11149b4a211 extends Twig_Template
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
        $__internal_aeb84f2214752d4ab1dbeb27b6faa575e04e8209ec26685ead41ca0435c437ef = $this->env->getExtension("native_profiler");
        $__internal_aeb84f2214752d4ab1dbeb27b6faa575e04e8209ec26685ead41ca0435c437ef->enter($__internal_aeb84f2214752d4ab1dbeb27b6faa575e04e8209ec26685ead41ca0435c437ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Foro:add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_user_addForo"), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("UserBundle:Foro:form.html.twig", "UserBundle:Foro:add.html.twig", 3)->display(array_merge($context, array("formForo" => (isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")), 'form_end');
        
        $__internal_aeb84f2214752d4ab1dbeb27b6faa575e04e8209ec26685ead41ca0435c437ef->leave($__internal_aeb84f2214752d4ab1dbeb27b6faa575e04e8209ec26685ead41ca0435c437ef_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Foro:add.html.twig";
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
        return "{{ form_start(formForo, {'class': 'ajaxForm', 'action': path('App_user_addForo'), 'attr': {'class': 'ajaxForm'}}) }}

{% include \"UserBundle:Foro:form.html.twig\"  with {'formForo': formForo} %}

{{ form_end(formForo) }}";
    }
}
