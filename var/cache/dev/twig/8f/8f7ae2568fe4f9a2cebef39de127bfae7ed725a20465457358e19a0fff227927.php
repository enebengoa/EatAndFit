<?php

/* @User/Puntuacion/show.html.twig */
class __TwigTemplate_4694e4c0b0bbc286664b43e05dd974e3d1bd1735f33a44c0c16c4a84e86ad1cb extends Twig_Template
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
        $__internal_80a3eb9a2bd78cbef8cfe477ece825661a51dffd9c4262f4c52afb4111644cb0 = $this->env->getExtension("native_profiler");
        $__internal_80a3eb9a2bd78cbef8cfe477ece825661a51dffd9c4262f4c52afb4111644cb0->enter($__internal_80a3eb9a2bd78cbef8cfe477ece825661a51dffd9c4262f4c52afb4111644cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Puntuacion/show.html.twig"));

        // line 1
        echo $this->env->getExtension('star_rating_extension')->rating((isset($context["puntuacionMedia"]) ? $context["puntuacionMedia"] : $this->getContext($context, "puntuacionMedia")));
        
        $__internal_80a3eb9a2bd78cbef8cfe477ece825661a51dffd9c4262f4c52afb4111644cb0->leave($__internal_80a3eb9a2bd78cbef8cfe477ece825661a51dffd9c4262f4c52afb4111644cb0_prof);

    }

    public function getTemplateName()
    {
        return "@User/Puntuacion/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ puntuacionMedia|rating() }}";
    }
}
