<?php

/* @User/Comentario/add.html.twig */
class __TwigTemplate_777f3061eb8dbaee29422bfb77677c3c0a2ea2df8863e2a46a2ac452920c84cb extends Twig_Template
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
        $__internal_ff89d020e4c7876c62f4fd533f5c3d6aefb264f82606dab5dffa838a9126b9ba = $this->env->getExtension("native_profiler");
        $__internal_ff89d020e4c7876c62f4fd533f5c3d6aefb264f82606dab5dffa838a9126b9ba->enter($__internal_ff89d020e4c7876c62f4fd533f5c3d6aefb264f82606dab5dffa838a9126b9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Comentario/add.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_user_add_comentario", array("id" => $this->getAttribute((isset($context["receta"]) ? $context["receta"] : $this->getContext($context, "receta")), "id", array()), "user" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 5
        $this->loadTemplate("UserBundle:Comentario:form.html.twig", "@User/Comentario/add.html.twig", 5)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 6
        echo "
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_ff89d020e4c7876c62f4fd533f5c3d6aefb264f82606dab5dffa838a9126b9ba->leave($__internal_ff89d020e4c7876c62f4fd533f5c3d6aefb264f82606dab5dffa838a9126b9ba_prof);

    }

    public function getTemplateName()
    {
        return "@User/Comentario/add.html.twig";
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
        return "{# src/App/UserBundle/Resources/views/Comentario/add.html.twig #}

{{ form_start(form, {'class': 'ajaxForm', 'action': path('App_user_add_comentario', { 'id' : receta.id,'user': app.user.id }), 'attr': {'class': 'ajaxForm'}}) }}

{% include \"UserBundle:Comentario:form.html.twig\"  with {'form': form} %}

{{ form_end(form) }}
";
    }
}
