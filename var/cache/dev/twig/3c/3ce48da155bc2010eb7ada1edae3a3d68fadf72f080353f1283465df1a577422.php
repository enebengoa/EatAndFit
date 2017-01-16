<?php

/* @User/OrdenCompra/add2.html.twig */
class __TwigTemplate_c188d9eb7c1b6066dfd86d3d156f577c0a197673cd19f372692a50bacf3edce7 extends Twig_Template
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
        $__internal_1012585578b44e618342d5713512d98c295b94053ef1acc943836a7d887da9f7 = $this->env->getExtension("native_profiler");
        $__internal_1012585578b44e618342d5713512d98c295b94053ef1acc943836a7d887da9f7->enter($__internal_1012585578b44e618342d5713512d98c295b94053ef1acc943836a7d887da9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/OrdenCompra/add2.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")), 'form_start', array("class" => "ajaxForm", "action" => $this->env->getExtension('routing')->getPath("App_user_addOrdenCompraLista", array("id" => $this->getAttribute((isset($context["lista"]) ? $context["lista"] : $this->getContext($context, "lista")), "id", array()))), "attr" => array("class" => "ajaxForm")));
        echo "

";
        // line 3
        $this->loadTemplate("UserBundle:OrdenCompra:form2.html.twig", "@User/OrdenCompra/add2.html.twig", 3)->display(array_merge($context, array("formOrdenCompra" => (isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")))));
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formOrdenCompra"]) ? $context["formOrdenCompra"] : $this->getContext($context, "formOrdenCompra")), 'form_end');
        echo "
";
        
        $__internal_1012585578b44e618342d5713512d98c295b94053ef1acc943836a7d887da9f7->leave($__internal_1012585578b44e618342d5713512d98c295b94053ef1acc943836a7d887da9f7_prof);

    }

    public function getTemplateName()
    {
        return "@User/OrdenCompra/add2.html.twig";
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
