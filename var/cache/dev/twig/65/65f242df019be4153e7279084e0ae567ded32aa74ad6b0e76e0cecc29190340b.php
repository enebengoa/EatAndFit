<?php

/* AdminBundle:Comentario:form.html.twig */
class __TwigTemplate_347aaafd871f47829946560b2b021f5e0925fd3525d8b50040dc93f755e5d03c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd8e24cf3893e7c4e9565e13c8c1078497bf55b1a94ce42269ff7a9139a3241e = $this->env->getExtension("native_profiler");
        $__internal_fd8e24cf3893e7c4e9565e13c8c1078497bf55b1a94ce42269ff7a9139a3241e->enter($__internal_fd8e24cf3893e7c4e9565e13c8c1078497bf55b1a94ce42269ff7a9139a3241e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Comentario:form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_fd8e24cf3893e7c4e9565e13c8c1078497bf55b1a94ce42269ff7a9139a3241e->leave($__internal_fd8e24cf3893e7c4e9565e13c8c1078497bf55b1a94ce42269ff7a9139a3241e_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_bd914add551eced7078cb11aed3cc7d34b818b0fe412f30d6565b8ff79912e26 = $this->env->getExtension("native_profiler");
        $__internal_bd914add551eced7078cb11aed3cc7d34b818b0fe412f30d6565b8ff79912e26->enter($__internal_bd914add551eced7078cb11aed3cc7d34b818b0fe412f30d6565b8ff79912e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "\t<form class=\"blogger\" method=\"post\" >
\t";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t
\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</form>

";
        
        $__internal_bd914add551eced7078cb11aed3cc7d34b818b0fe412f30d6565b8ff79912e26->leave($__internal_bd914add551eced7078cb11aed3cc7d34b818b0fe412f30d6565b8ff79912e26_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Comentario:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  43 => 5,  38 => 3,  35 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "{% block body %}
\t<form class=\"blogger\" method=\"post\" >
\t{{ form_start(form) }}

        {{ form_errors(form) }}
\t\t
\t{{ form_end(form) }}
\t</form>

{% endblock %}
";
    }
}
