<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_603a24afd454d5e8d076ef86f55665d12ebeb56cdc874f63a663372a897348cd extends Twig_Template
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
        $__internal_8c6d9eba8ffff31b88836e9941792efca48c5abeeac452524faf84382e2227e1 = $this->env->getExtension("native_profiler");
        $__internal_8c6d9eba8ffff31b88836e9941792efca48c5abeeac452524faf84382e2227e1->enter($__internal_8c6d9eba8ffff31b88836e9941792efca48c5abeeac452524faf84382e2227e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_8c6d9eba8ffff31b88836e9941792efca48c5abeeac452524faf84382e2227e1->leave($__internal_8c6d9eba8ffff31b88836e9941792efca48c5abeeac452524faf84382e2227e1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
