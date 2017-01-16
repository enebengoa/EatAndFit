<?php

/* @User/Foro/add.html.twig */
class __TwigTemplate_a8c4f6e4f880cf53de67d3db171e9ff4f420c717216abbf7e5d1eebe815a2375 extends Twig_Template
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
        $__internal_cbc24c85a63457b3e6c44b5fa6a3ecc98bc7a6a707949ffb8fbb0f687376fa0d = $this->env->getExtension("native_profiler");
        $__internal_cbc24c85a63457b3e6c44b5fa6a3ecc98bc7a6a707949ffb8fbb0f687376fa0d->enter($__internal_cbc24c85a63457b3e6c44b5fa6a3ecc98bc7a6a707949ffb8fbb0f687376fa0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Foro/add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_user_addForo"), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("UserBundle:Foro:form.html.twig", "@User/Foro/add.html.twig", 3)->display(array_merge($context, array("formForo" => (isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formForo"]) ? $context["formForo"] : $this->getContext($context, "formForo")), 'form_end');
        
        $__internal_cbc24c85a63457b3e6c44b5fa6a3ecc98bc7a6a707949ffb8fbb0f687376fa0d->leave($__internal_cbc24c85a63457b3e6c44b5fa6a3ecc98bc7a6a707949ffb8fbb0f687376fa0d_prof);

    }

    public function getTemplateName()
    {
        return "@User/Foro/add.html.twig";
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
