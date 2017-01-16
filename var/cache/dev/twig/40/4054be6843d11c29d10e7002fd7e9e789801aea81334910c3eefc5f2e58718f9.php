<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_722feb618993ebaf89a8f6e339bc3193bd7200c5eb4a4833c8997c7ef9a4f66e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_a11d699a8fc67d86f9ba45cd8282a0ca69f62c689ad303b7af62cdf891c171e8 = $this->env->getExtension("native_profiler");
        $__internal_a11d699a8fc67d86f9ba45cd8282a0ca69f62c689ad303b7af62cdf891c171e8->enter($__internal_a11d699a8fc67d86f9ba45cd8282a0ca69f62c689ad303b7af62cdf891c171e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a11d699a8fc67d86f9ba45cd8282a0ca69f62c689ad303b7af62cdf891c171e8->leave($__internal_a11d699a8fc67d86f9ba45cd8282a0ca69f62c689ad303b7af62cdf891c171e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b55f08912752322e6b5924b695325b25157848253e9d36543bef97f9b5c103e6 = $this->env->getExtension("native_profiler");
        $__internal_b55f08912752322e6b5924b695325b25157848253e9d36543bef97f9b5c103e6->enter($__internal_b55f08912752322e6b5924b695325b25157848253e9d36543bef97f9b5c103e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_b55f08912752322e6b5924b695325b25157848253e9d36543bef97f9b5c103e6->leave($__internal_b55f08912752322e6b5924b695325b25157848253e9d36543bef97f9b5c103e6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
