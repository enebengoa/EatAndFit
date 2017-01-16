<?php

/* AdminBundle:Ingrediente:add.html.twig */
class __TwigTemplate_b231a8cac1f251cdec2b3abcd72e3bea66e0a3f4279118d18f53e60673e31913 extends Twig_Template
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
        $__internal_d6c17c62f6860d1018721a08f06c571fef03da6166faa8302c4b5644e35b514b = $this->env->getExtension("native_profiler");
        $__internal_d6c17c62f6860d1018721a08f06c571fef03da6166faa8302c4b5644e35b514b->enter($__internal_d6c17c62f6860d1018721a08f06c571fef03da6166faa8302c4b5644e35b514b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Ingrediente:add.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_admin_addIngrediente"), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("AdminBundle:Ingrediente:form.html.twig", "AdminBundle:Ingrediente:add.html.twig", 3)->display(array_merge($context, array("formIngrediente" => (isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")))));
        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formIngrediente"]) ? $context["formIngrediente"] : $this->getContext($context, "formIngrediente")), 'form_end');
        
        $__internal_d6c17c62f6860d1018721a08f06c571fef03da6166faa8302c4b5644e35b514b->leave($__internal_d6c17c62f6860d1018721a08f06c571fef03da6166faa8302c4b5644e35b514b_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Ingrediente:add.html.twig";
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
