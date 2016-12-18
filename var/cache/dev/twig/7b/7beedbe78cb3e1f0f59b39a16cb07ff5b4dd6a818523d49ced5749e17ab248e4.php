<?php

/* UserBundle:Puntuacion:show.html.twig */
class __TwigTemplate_b8b0c57721b773444831cafcba1ce3ebdea8a91718764d1b170642cd4f9fcac0 extends Twig_Template
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
        $__internal_1d5a884660ddee35e447ba8acb4b6a023f4b3aacc79dff83693aec9776870ac5 = $this->env->getExtension("native_profiler");
        $__internal_1d5a884660ddee35e447ba8acb4b6a023f4b3aacc79dff83693aec9776870ac5->enter($__internal_1d5a884660ddee35e447ba8acb4b6a023f4b3aacc79dff83693aec9776870ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Puntuacion:show.html.twig"));

        // line 1
        echo $this->env->getExtension('star_rating_extension')->rating((isset($context["puntuacionMedia"]) ? $context["puntuacionMedia"] : $this->getContext($context, "puntuacionMedia")));
        
        $__internal_1d5a884660ddee35e447ba8acb4b6a023f4b3aacc79dff83693aec9776870ac5->leave($__internal_1d5a884660ddee35e447ba8acb4b6a023f4b3aacc79dff83693aec9776870ac5_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Puntuacion:show.html.twig";
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
