<?php

/* UserBundle:Menu:add.html.twig */
class __TwigTemplate_490241c6eeb41dcd5d75de9f5d25855fcb42b855a760ff883327cd9d9d7365ff extends Twig_Template
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
        $__internal_2be04513732ce23635856fe52f268b8bbc45f077dc21a3c13861e666abfb7dd1 = $this->env->getExtension("native_profiler");
        $__internal_2be04513732ce23635856fe52f268b8bbc45f077dc21a3c13861e666abfb7dd1->enter($__internal_2be04513732ce23635856fe52f268b8bbc45f077dc21a3c13861e666abfb7dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Menu:add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_user_addMenu"), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("UserBundle:Menu:form.html.twig", "UserBundle:Menu:add.html.twig", 3)->display(array_merge($context, array("formMenu" => (isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formMenu"]) ? $context["formMenu"] : $this->getContext($context, "formMenu")), 'form_end');
        echo "
";
        
        $__internal_2be04513732ce23635856fe52f268b8bbc45f077dc21a3c13861e666abfb7dd1->leave($__internal_2be04513732ce23635856fe52f268b8bbc45f077dc21a3c13861e666abfb7dd1_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Menu:add.html.twig";
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
        return "{{ form_start(formMenu, {'class': 'ajaxForm', 'action': path('App_user_addMenu'), 'attr': {'class': 'ajaxForm'}}) }}

{% include \"UserBundle:Menu:form.html.twig\"  with {'formMenu': formMenu} %}

{{ form_end(formMenu) }}
";
    }
}
