<?php

/* UserBundle:Puntuacion:form.html.twig */
class __TwigTemplate_a639e70aeedc346cd48277c944151cde1ba68cc8d60efe14bec23099233d0eac extends Twig_Template
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
        $__internal_02be017683ffb99037e8084948786cf336839befdf4da03125751b401ffafbb1 = $this->env->getExtension("native_profiler");
        $__internal_02be017683ffb99037e8084948786cf336839befdf4da03125751b401ffafbb1->enter($__internal_02be017683ffb99037e8084948786cf336839befdf4da03125751b401ffafbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Puntuacion:form.html.twig"));

        // line 1
        echo "

\t<div class=\"form-group\">
\t\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "puntuacion", array()), 'row');
        echo "
\t</div>

        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'errors');
        echo "


";
        
        $__internal_02be017683ffb99037e8084948786cf336839befdf4da03125751b401ffafbb1->leave($__internal_02be017683ffb99037e8084948786cf336839befdf4da03125751b401ffafbb1_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Puntuacion:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "

\t<div class=\"form-group\">
\t\t{{ form_row(form2.puntuacion) }}
\t</div>

        {{ form_errors(form2) }}


";
    }
}
