<?php

/* AdminBundle:HoraIngesta:form.html.twig */
class __TwigTemplate_dde64d7af0a13f0e7d888c671fa8e9bc2ac4cf77fac640c6dcf5f379cebb55f2 extends Twig_Template
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
        $__internal_ce2e57b316948078b05afbfb9f43e3f503bcb3a222b6337625f001db7974fa3f = $this->env->getExtension("native_profiler");
        $__internal_ce2e57b316948078b05afbfb9f43e3f503bcb3a222b6337625f001db7974fa3f->enter($__internal_ce2e57b316948078b05afbfb9f43e3f503bcb3a222b6337625f001db7974fa3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:HoraIngesta:form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_ce2e57b316948078b05afbfb9f43e3f503bcb3a222b6337625f001db7974fa3f->leave($__internal_ce2e57b316948078b05afbfb9f43e3f503bcb3a222b6337625f001db7974fa3f_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_6d5bc84c668ef3ecf375a4eeb45f0cc2ee73061337f1a25ded8f9d262d006af2 = $this->env->getExtension("native_profiler");
        $__internal_6d5bc84c668ef3ecf375a4eeb45f0cc2ee73061337f1a25ded8f9d262d006af2->enter($__internal_6d5bc84c668ef3ecf375a4eeb45f0cc2ee73061337f1a25ded8f9d262d006af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "\t<form class=\"blogger\" method=\"post\" >
\t";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t<div class=\"form-group\">
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "
\t</div>
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t
\t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</form>

";
        
        $__internal_6d5bc84c668ef3ecf375a4eeb45f0cc2ee73061337f1a25ded8f9d262d006af2->leave($__internal_6d5bc84c668ef3ecf375a4eeb45f0cc2ee73061337f1a25ded8f9d262d006af2_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:HoraIngesta:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  48 => 7,  43 => 5,  38 => 3,  35 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "{% block body %}
\t<form class=\"blogger\" method=\"post\" >
\t{{ form_start(form) }}
\t<div class=\"form-group\">
\t\t{{ form_row(form.nombre) }}
\t</div>
        {{ form_errors(form) }}
\t\t
\t{{ form_end(form) }}
\t</form>

{% endblock %}
";
    }
}
