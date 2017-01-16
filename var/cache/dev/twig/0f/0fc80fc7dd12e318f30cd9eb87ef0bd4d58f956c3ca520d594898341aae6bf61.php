<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_3fd2e099858041c83e6444e74eaa4f7387d7a4510c3e3fb395871acd0ca59bf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_6da282b8b11598c39aac06b186acd116c096512eb6566d7e8623996d3000bbb4 = $this->env->getExtension("native_profiler");
        $__internal_6da282b8b11598c39aac06b186acd116c096512eb6566d7e8623996d3000bbb4->enter($__internal_6da282b8b11598c39aac06b186acd116c096512eb6566d7e8623996d3000bbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6da282b8b11598c39aac06b186acd116c096512eb6566d7e8623996d3000bbb4->leave($__internal_6da282b8b11598c39aac06b186acd116c096512eb6566d7e8623996d3000bbb4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ffc5df682de353469ecee22514f05be21cf7a6ea7bbb25a0d6defb6fbe5b900 = $this->env->getExtension("native_profiler");
        $__internal_2ffc5df682de353469ecee22514f05be21cf7a6ea7bbb25a0d6defb6fbe5b900->enter($__internal_2ffc5df682de353469ecee22514f05be21cf7a6ea7bbb25a0d6defb6fbe5b900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_2ffc5df682de353469ecee22514f05be21cf7a6ea7bbb25a0d6defb6fbe5b900->leave($__internal_2ffc5df682de353469ecee22514f05be21cf7a6ea7bbb25a0d6defb6fbe5b900_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
