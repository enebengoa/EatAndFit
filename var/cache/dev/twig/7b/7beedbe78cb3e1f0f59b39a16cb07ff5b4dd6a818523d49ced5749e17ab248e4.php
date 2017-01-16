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
        $__internal_bfe364d7f0b07b7299ecc2ea0dc4346c91aec46c4793697d93642488cdce1a63 = $this->env->getExtension("native_profiler");
        $__internal_bfe364d7f0b07b7299ecc2ea0dc4346c91aec46c4793697d93642488cdce1a63->enter($__internal_bfe364d7f0b07b7299ecc2ea0dc4346c91aec46c4793697d93642488cdce1a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Puntuacion:show.html.twig"));

        // line 1
        echo $this->env->getExtension('star_rating_extension')->rating((isset($context["puntuacionMedia"]) ? $context["puntuacionMedia"] : $this->getContext($context, "puntuacionMedia")));
        
        $__internal_bfe364d7f0b07b7299ecc2ea0dc4346c91aec46c4793697d93642488cdce1a63->leave($__internal_bfe364d7f0b07b7299ecc2ea0dc4346c91aec46c4793697d93642488cdce1a63_prof);

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
