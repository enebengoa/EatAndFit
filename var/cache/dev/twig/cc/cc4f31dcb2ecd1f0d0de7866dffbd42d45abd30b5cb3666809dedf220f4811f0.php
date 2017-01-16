<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_f539991f555f7ee0311c22388b97e39701559e5274a6a2070e66963d228b9e4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_9b7960eb1f1ee709c0a67d6aac3475d2a0c493648bb37c8646de66cec4bb279d = $this->env->getExtension("native_profiler");
        $__internal_9b7960eb1f1ee709c0a67d6aac3475d2a0c493648bb37c8646de66cec4bb279d->enter($__internal_9b7960eb1f1ee709c0a67d6aac3475d2a0c493648bb37c8646de66cec4bb279d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b7960eb1f1ee709c0a67d6aac3475d2a0c493648bb37c8646de66cec4bb279d->leave($__internal_9b7960eb1f1ee709c0a67d6aac3475d2a0c493648bb37c8646de66cec4bb279d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14439455f1f6c148ab6c7b6d519579afd9ed7b0b420b4dccff319f1840236dbd = $this->env->getExtension("native_profiler");
        $__internal_14439455f1f6c148ab6c7b6d519579afd9ed7b0b420b4dccff319f1840236dbd->enter($__internal_14439455f1f6c148ab6c7b6d519579afd9ed7b0b420b4dccff319f1840236dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_14439455f1f6c148ab6c7b6d519579afd9ed7b0b420b4dccff319f1840236dbd->leave($__internal_14439455f1f6c148ab6c7b6d519579afd9ed7b0b420b4dccff319f1840236dbd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
";
    }
}
