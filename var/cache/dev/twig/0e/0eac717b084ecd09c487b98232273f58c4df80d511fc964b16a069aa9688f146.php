<?php

/* @User/Puntuacion/form.html.twig */
class __TwigTemplate_b8b58620bb26840da67776a75f85e1e67b8a125d50bd0a63be4c99f64dc02b20 extends Twig_Template
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
        $__internal_3fbd2c3ae33b1214423d05efba375965d9739c1de9b53a0b7b6e5fbb5ddec432 = $this->env->getExtension("native_profiler");
        $__internal_3fbd2c3ae33b1214423d05efba375965d9739c1de9b53a0b7b6e5fbb5ddec432->enter($__internal_3fbd2c3ae33b1214423d05efba375965d9739c1de9b53a0b7b6e5fbb5ddec432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Puntuacion/form.html.twig"));

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
        
        $__internal_3fbd2c3ae33b1214423d05efba375965d9739c1de9b53a0b7b6e5fbb5ddec432->leave($__internal_3fbd2c3ae33b1214423d05efba375965d9739c1de9b53a0b7b6e5fbb5ddec432_prof);

    }

    public function getTemplateName()
    {
        return "@User/Puntuacion/form.html.twig";
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
