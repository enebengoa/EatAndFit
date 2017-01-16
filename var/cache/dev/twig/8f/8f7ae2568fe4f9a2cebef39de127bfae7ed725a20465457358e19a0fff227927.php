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
        $__internal_0361e9da481f7101368f8c25e6261014c2314eedd9edf78674eba981419f3ab3 = $this->env->getExtension("native_profiler");
        $__internal_0361e9da481f7101368f8c25e6261014c2314eedd9edf78674eba981419f3ab3->enter($__internal_0361e9da481f7101368f8c25e6261014c2314eedd9edf78674eba981419f3ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Puntuacion/show.html.twig"));

        // line 1
        echo $this->env->getExtension('star_rating_extension')->rating((isset($context["puntuacionMedia"]) ? $context["puntuacionMedia"] : $this->getContext($context, "puntuacionMedia")));
        
        $__internal_0361e9da481f7101368f8c25e6261014c2314eedd9edf78674eba981419f3ab3->leave($__internal_0361e9da481f7101368f8c25e6261014c2314eedd9edf78674eba981419f3ab3_prof);

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
