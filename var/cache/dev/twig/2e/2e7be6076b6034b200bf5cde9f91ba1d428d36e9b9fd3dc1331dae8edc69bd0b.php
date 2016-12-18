<?php

/* @Admin/TipoReceta/form.html.twig */
class __TwigTemplate_04a129781b5d5eb2cc1a220645548956cb030c14aa63ef7c08d69b93281fab22 extends Twig_Template
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
        $__internal_f773bfff88fd25fedca26ae8229faac1baf1a4fa095718db61faf7546958b1b0 = $this->env->getExtension("native_profiler");
        $__internal_f773bfff88fd25fedca26ae8229faac1baf1a4fa095718db61faf7546958b1b0->enter($__internal_f773bfff88fd25fedca26ae8229faac1baf1a4fa095718db61faf7546958b1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/TipoReceta/form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_f773bfff88fd25fedca26ae8229faac1baf1a4fa095718db61faf7546958b1b0->leave($__internal_f773bfff88fd25fedca26ae8229faac1baf1a4fa095718db61faf7546958b1b0_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_a64a58611bf25a3ba44e2fe5fa3ea58940416c98a8f5062fd6ea251aa2b4accb = $this->env->getExtension("native_profiler");
        $__internal_a64a58611bf25a3ba44e2fe5fa3ea58940416c98a8f5062fd6ea251aa2b4accb->enter($__internal_a64a58611bf25a3ba44e2fe5fa3ea58940416c98a8f5062fd6ea251aa2b4accb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t
\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</form>

";
        
        $__internal_a64a58611bf25a3ba44e2fe5fa3ea58940416c98a8f5062fd6ea251aa2b4accb->leave($__internal_a64a58611bf25a3ba44e2fe5fa3ea58940416c98a8f5062fd6ea251aa2b4accb_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/TipoReceta/form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  49 => 8,  43 => 5,  38 => 3,  35 => 2,  23 => 1,);
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
