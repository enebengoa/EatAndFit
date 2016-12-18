<?php

/* @Admin/Comentario/form.html.twig */
class __TwigTemplate_9e421232eaa2fa1b575267a5f062647c735329a072020050e64c0b1c25b5283f extends Twig_Template
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
        $__internal_094ccb01016ad6edb170e82ea05b84b7bb55bfdd60fbc000e28e175c5905257d = $this->env->getExtension("native_profiler");
        $__internal_094ccb01016ad6edb170e82ea05b84b7bb55bfdd60fbc000e28e175c5905257d->enter($__internal_094ccb01016ad6edb170e82ea05b84b7bb55bfdd60fbc000e28e175c5905257d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Comentario/form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_094ccb01016ad6edb170e82ea05b84b7bb55bfdd60fbc000e28e175c5905257d->leave($__internal_094ccb01016ad6edb170e82ea05b84b7bb55bfdd60fbc000e28e175c5905257d_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_d2854ce19dff9c0bd4f93ca531b4906803ecc2a1085c128a072a5380e3030c0e = $this->env->getExtension("native_profiler");
        $__internal_d2854ce19dff9c0bd4f93ca531b4906803ecc2a1085c128a072a5380e3030c0e->enter($__internal_d2854ce19dff9c0bd4f93ca531b4906803ecc2a1085c128a072a5380e3030c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d2854ce19dff9c0bd4f93ca531b4906803ecc2a1085c128a072a5380e3030c0e->leave($__internal_d2854ce19dff9c0bd4f93ca531b4906803ecc2a1085c128a072a5380e3030c0e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Comentario/form.html.twig";
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
