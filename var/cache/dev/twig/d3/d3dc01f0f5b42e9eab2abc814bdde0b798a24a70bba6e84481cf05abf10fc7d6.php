<?php

/* @User/Lista/form.html.twig */
class __TwigTemplate_6d24730625de6d5e57f2cd3ef9f793d6271a0c9d97f47a5814ac3c4709a27fa6 extends Twig_Template
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
        $__internal_744f220b99a22c594bd37c67f86f59fe296cbbb7ec29ff580a6710e01136d05e = $this->env->getExtension("native_profiler");
        $__internal_744f220b99a22c594bd37c67f86f59fe296cbbb7ec29ff580a6710e01136d05e->enter($__internal_744f220b99a22c594bd37c67f86f59fe296cbbb7ec29ff580a6710e01136d05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Lista/form.html.twig"));

        // line 1
        echo "\t<div class=\"form-group\">
\t\t";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")), "nombre", array()), 'row');
        echo "
\t</div>
\t\t ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formLista"]) ? $context["formLista"] : $this->getContext($context, "formLista")), 'errors');
        echo "

";
        
        $__internal_744f220b99a22c594bd37c67f86f59fe296cbbb7ec29ff580a6710e01136d05e->leave($__internal_744f220b99a22c594bd37c67f86f59fe296cbbb7ec29ff580a6710e01136d05e_prof);

    }

    public function getTemplateName()
    {
        return "@User/Lista/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "\t<div class=\"form-group\">
\t\t{{ form_row(formLista.nombre) }}
\t</div>
\t\t {{ form_errors(formLista) }}

";
    }
}
