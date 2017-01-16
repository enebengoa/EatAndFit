<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_857e67feb2ebbd1b309e81fbec5abab97382b794bc0b954d95950ed27ec14630 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bfd4c2c0e1e1e70e825d82d89304dcb803b502d6fa9b115c75fc2c6cea2e6ea = $this->env->getExtension("native_profiler");
        $__internal_6bfd4c2c0e1e1e70e825d82d89304dcb803b502d6fa9b115c75fc2c6cea2e6ea->enter($__internal_6bfd4c2c0e1e1e70e825d82d89304dcb803b502d6fa9b115c75fc2c6cea2e6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bfd4c2c0e1e1e70e825d82d89304dcb803b502d6fa9b115c75fc2c6cea2e6ea->leave($__internal_6bfd4c2c0e1e1e70e825d82d89304dcb803b502d6fa9b115c75fc2c6cea2e6ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f73ed94e6a58adbdf392b6a81c6310f59f98533a748ced919cfa66a9e9762a6 = $this->env->getExtension("native_profiler");
        $__internal_9f73ed94e6a58adbdf392b6a81c6310f59f98533a748ced919cfa66a9e9762a6->enter($__internal_9f73ed94e6a58adbdf392b6a81c6310f59f98533a748ced919cfa66a9e9762a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_9f73ed94e6a58adbdf392b6a81c6310f59f98533a748ced919cfa66a9e9762a6->leave($__internal_9f73ed94e6a58adbdf392b6a81c6310f59f98533a748ced919cfa66a9e9762a6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
