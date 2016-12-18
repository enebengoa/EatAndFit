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
        $__internal_3c30634495bae3fdfae02c3f3e54e7195c4b3ae2212db726559d6d4059621b9d = $this->env->getExtension("native_profiler");
        $__internal_3c30634495bae3fdfae02c3f3e54e7195c4b3ae2212db726559d6d4059621b9d->enter($__internal_3c30634495bae3fdfae02c3f3e54e7195c4b3ae2212db726559d6d4059621b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Comentario:form.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_3c30634495bae3fdfae02c3f3e54e7195c4b3ae2212db726559d6d4059621b9d->leave($__internal_3c30634495bae3fdfae02c3f3e54e7195c4b3ae2212db726559d6d4059621b9d_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_605f03c0865b9c8ea7c928b0c63b57d4466e02cc9f354c11f5eca1388f161550 = $this->env->getExtension("native_profiler");
        $__internal_605f03c0865b9c8ea7c928b0c63b57d4466e02cc9f354c11f5eca1388f161550->enter($__internal_605f03c0865b9c8ea7c928b0c63b57d4466e02cc9f354c11f5eca1388f161550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_605f03c0865b9c8ea7c928b0c63b57d4466e02cc9f354c11f5eca1388f161550->leave($__internal_605f03c0865b9c8ea7c928b0c63b57d4466e02cc9f354c11f5eca1388f161550_prof);

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
