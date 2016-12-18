<?php

/* UserBundle:Puntuacion:add.html.twig */
class __TwigTemplate_ea4ac818c1e69e896a08760e284ed9004a95543dd373bc835296aceb66185a0b extends Twig_Template
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
        $__internal_39f0542a5b2738d9f4449ff05fbbf8ad1b0bd1e529aab0cfe1b8d74c5826cf61 = $this->env->getExtension("native_profiler");
        $__internal_39f0542a5b2738d9f4449ff05fbbf8ad1b0bd1e529aab0cfe1b8d74c5826cf61->enter($__internal_39f0542a5b2738d9f4449ff05fbbf8ad1b0bd1e529aab0cfe1b8d74c5826cf61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Puntuacion:add.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_start', array("class" => "ajaxForm2", "action" => $this->env->getExtension('routing')->getPath("App_user_add_puntuacion", array("id2" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id", array()), "user2" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "attr" => array("class" => "ajaxForm2")));
        echo "

";
        // line 5
        $this->loadTemplate("UserBundle:Puntuacion:form.html.twig", "UserBundle:Puntuacion:add.html.twig", 5)->display(array_merge($context, array("form2" => (isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")))));
        // line 6
        echo "
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_end');
        echo "
";
        
        $__internal_39f0542a5b2738d9f4449ff05fbbf8ad1b0bd1e529aab0cfe1b8d74c5826cf61->leave($__internal_39f0542a5b2738d9f4449ff05fbbf8ad1b0bd1e529aab0cfe1b8d74c5826cf61_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Puntuacion:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  32 => 6,  30 => 5,  25 => 3,  22 => 2,);
    }

    public function getSource()
    {
        return "{# src/App/UserBundle/Resources/views/Puntuacion/add.html.twig #}

{{ form_start(form2, {'class': 'ajaxForm2', 'action': path('App_user_add_puntuacion', { 'id2' : receta.id,'user2': app.user.id }), 'attr': {'class': 'ajaxForm2'}}) }}

{% include \"UserBundle:Puntuacion:form.html.twig\"  with {'form2': form2} %}

{{ form_end(form2) }}
";
    }
}
