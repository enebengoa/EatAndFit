<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_cd1683e0a71d255c7ad1ec7317eba9eede017c79d39cf915c4d050dd0791651f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98f06842b569ad0ada221e69aace27258c1fbc11b1014c07c06d54bc77f07a0d = $this->env->getExtension("native_profiler");
        $__internal_98f06842b569ad0ada221e69aace27258c1fbc11b1014c07c06d54bc77f07a0d->enter($__internal_98f06842b569ad0ada221e69aace27258c1fbc11b1014c07c06d54bc77f07a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_98f06842b569ad0ada221e69aace27258c1fbc11b1014c07c06d54bc77f07a0d->leave($__internal_98f06842b569ad0ada221e69aace27258c1fbc11b1014c07c06d54bc77f07a0d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_32c55ee8333ed82f91c95a0b604de150645ab9cc0e058b377947b872589be714 = $this->env->getExtension("native_profiler");
        $__internal_32c55ee8333ed82f91c95a0b604de150645ab9cc0e058b377947b872589be714->enter($__internal_32c55ee8333ed82f91c95a0b604de150645ab9cc0e058b377947b872589be714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_32c55ee8333ed82f91c95a0b604de150645ab9cc0e058b377947b872589be714->leave($__internal_32c55ee8333ed82f91c95a0b604de150645ab9cc0e058b377947b872589be714_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9a7fcfe743c02c517080278f252aa21b49259f390d9cf5f7a10e51e39143ce59 = $this->env->getExtension("native_profiler");
        $__internal_9a7fcfe743c02c517080278f252aa21b49259f390d9cf5f7a10e51e39143ce59->enter($__internal_9a7fcfe743c02c517080278f252aa21b49259f390d9cf5f7a10e51e39143ce59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9a7fcfe743c02c517080278f252aa21b49259f390d9cf5f7a10e51e39143ce59->leave($__internal_9a7fcfe743c02c517080278f252aa21b49259f390d9cf5f7a10e51e39143ce59_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b5f76b3b1615400cc7e04a92b642cdc5a517109cf30a674832647d758ca6018d = $this->env->getExtension("native_profiler");
        $__internal_b5f76b3b1615400cc7e04a92b642cdc5a517109cf30a674832647d758ca6018d->enter($__internal_b5f76b3b1615400cc7e04a92b642cdc5a517109cf30a674832647d758ca6018d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b5f76b3b1615400cc7e04a92b642cdc5a517109cf30a674832647d758ca6018d->leave($__internal_b5f76b3b1615400cc7e04a92b642cdc5a517109cf30a674832647d758ca6018d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
