<?php

/* UserBundle:OrdenCompra:add2.html.twig */
class __TwigTemplate_2c40b3a50e19efef96444662a9fcecf52a8dad94c69c86994bc5d89ea44187e0 extends Twig_Template
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
        $__internal_17513a83ec839939a2931933a2c3b8ea5155aa1a9cd8ef3a4da5271e423c752e = $this->env->getExtension("native_profiler");
        $__internal_17513a83ec839939a2931933a2c3b8ea5155aa1a9cd8ef3a4da5271e423c752e->enter($__internal_17513a83ec839939a2931933a2c3b8ea5155aa1a9cd8ef3a4da5271e423c752e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:OrdenCompra:add2.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_user_addOrdenCompraLista", array("id" => $this->getAttribute((isset($context["lista"]) ? $context["lista"] : $this->getContext($context, "lista")), "id", array()))), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("UserBundle:OrdenCompra:form2.html.twig", "UserBundle:OrdenCompra:add2.html.twig", 3)->display(array_merge($context, array("formOrdenCompra" => (isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")))));
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")), 'form_end');
        echo "
";
        
        $__internal_17513a83ec839939a2931933a2c3b8ea5155aa1a9cd8ef3a4da5271e423c752e->leave($__internal_17513a83ec839939a2931933a2c3b8ea5155aa1a9cd8ef3a4da5271e423c752e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:OrdenCompra:add2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  27 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(formOrdenCompra, {'class': 'ajaxForm', 'action': path('App_user_addOrdenCompraLista',{id : lista.id}), 'attr': {'class': 'ajaxForm'}}) }}

{% include \"UserBundle:OrdenCompra:form2.html.twig\"  with {'formOrdenCompra': formOrdenCompra} %}
{{ form_end(formOrdenCompra) }}
";
    }
}
