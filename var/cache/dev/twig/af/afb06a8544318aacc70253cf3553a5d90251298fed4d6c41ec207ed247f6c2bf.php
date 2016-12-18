<?php

/* UserBundle:Lista:add.html.twig */
class __TwigTemplate_670cd74f5b7ac1b58bb674c0575e3d16ca81f53514c093d9dbe73729b030eeb2 extends Twig_Template
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
        $__internal_eea2d2849520696b350fdeaac655e15eda778a1fd89bf9cdea76b31677eead1b = $this->env->getExtension("native_profiler");
        $__internal_eea2d2849520696b350fdeaac655e15eda778a1fd89bf9cdea76b31677eead1b->enter($__internal_eea2d2849520696b350fdeaac655e15eda778a1fd89bf9cdea76b31677eead1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Lista:add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_user_addLista"), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("UserBundle:Lista:form.html.twig", "UserBundle:Lista:add.html.twig", 3)->display(array_merge($context, array("formLista" => (isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")), 'form_end');
        echo "
";
        
        $__internal_eea2d2849520696b350fdeaac655e15eda778a1fd89bf9cdea76b31677eead1b->leave($__internal_eea2d2849520696b350fdeaac655e15eda778a1fd89bf9cdea76b31677eead1b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Lista:add.html.twig";
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
        return "{{ form_start(formLista, {'class': 'ajaxForm', 'action': path('App_user_addLista'), 'attr': {'class': 'ajaxForm'}}) }}

{% include \"UserBundle:Lista:form.html.twig\"  with {'formLista': formLista} %}

{{ form_end(formLista) }}
";
    }
}
