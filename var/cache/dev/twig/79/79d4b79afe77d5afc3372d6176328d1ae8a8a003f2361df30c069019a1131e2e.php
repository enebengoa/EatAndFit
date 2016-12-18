<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_49948e4548be65d957365dd9c066bd3a1f7aefe6a9e15d504fdfb53962bd1441 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_ab3b9f63d3c95f1a45845a7fd75a8f34cdcecb682ea5e4c0a7b925f512fc48e8 = $this->env->getExtension("native_profiler");
        $__internal_ab3b9f63d3c95f1a45845a7fd75a8f34cdcecb682ea5e4c0a7b925f512fc48e8->enter($__internal_ab3b9f63d3c95f1a45845a7fd75a8f34cdcecb682ea5e4c0a7b925f512fc48e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab3b9f63d3c95f1a45845a7fd75a8f34cdcecb682ea5e4c0a7b925f512fc48e8->leave($__internal_ab3b9f63d3c95f1a45845a7fd75a8f34cdcecb682ea5e4c0a7b925f512fc48e8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5acebddebef9f1098d82e7939f7eab75b4c6165cb84789c578e2739b00aed3a5 = $this->env->getExtension("native_profiler");
        $__internal_5acebddebef9f1098d82e7939f7eab75b4c6165cb84789c578e2739b00aed3a5->enter($__internal_5acebddebef9f1098d82e7939f7eab75b4c6165cb84789c578e2739b00aed3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5acebddebef9f1098d82e7939f7eab75b4c6165cb84789c578e2739b00aed3a5->leave($__internal_5acebddebef9f1098d82e7939f7eab75b4c6165cb84789c578e2739b00aed3a5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
";
    }
}
