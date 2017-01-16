<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_9d7bc5822b639770486e3dd08c3962757ee39c61feeed24ea6c4e6ce13d5a042 extends Twig_Template
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
        $__internal_18c404f9d35b794cf19fdef08848c6c16273a5e98d4c099689d0aadda7486ce7 = $this->env->getExtension("native_profiler");
        $__internal_18c404f9d35b794cf19fdef08848c6c16273a5e98d4c099689d0aadda7486ce7->enter($__internal_18c404f9d35b794cf19fdef08848c6c16273a5e98d4c099689d0aadda7486ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_18c404f9d35b794cf19fdef08848c6c16273a5e98d4c099689d0aadda7486ce7->leave($__internal_18c404f9d35b794cf19fdef08848c6c16273a5e98d4c099689d0aadda7486ce7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f02ad2e64ceac28bffd38b7293027dd136b92ecc4e80fa49ff7e4cf06fa5d989 = $this->env->getExtension("native_profiler");
        $__internal_f02ad2e64ceac28bffd38b7293027dd136b92ecc4e80fa49ff7e4cf06fa5d989->enter($__internal_f02ad2e64ceac28bffd38b7293027dd136b92ecc4e80fa49ff7e4cf06fa5d989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f02ad2e64ceac28bffd38b7293027dd136b92ecc4e80fa49ff7e4cf06fa5d989->leave($__internal_f02ad2e64ceac28bffd38b7293027dd136b92ecc4e80fa49ff7e4cf06fa5d989_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8ac4feae7bbc4f73c8e024eb54633b33393e68aca1ce0e4228a27308a13794cd = $this->env->getExtension("native_profiler");
        $__internal_8ac4feae7bbc4f73c8e024eb54633b33393e68aca1ce0e4228a27308a13794cd->enter($__internal_8ac4feae7bbc4f73c8e024eb54633b33393e68aca1ce0e4228a27308a13794cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8ac4feae7bbc4f73c8e024eb54633b33393e68aca1ce0e4228a27308a13794cd->leave($__internal_8ac4feae7bbc4f73c8e024eb54633b33393e68aca1ce0e4228a27308a13794cd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2a97e6c1222220713db1e2ed3c4c1af12fd64ea9d1b2ef5731e609122885facb = $this->env->getExtension("native_profiler");
        $__internal_2a97e6c1222220713db1e2ed3c4c1af12fd64ea9d1b2ef5731e609122885facb->enter($__internal_2a97e6c1222220713db1e2ed3c4c1af12fd64ea9d1b2ef5731e609122885facb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2a97e6c1222220713db1e2ed3c4c1af12fd64ea9d1b2ef5731e609122885facb->leave($__internal_2a97e6c1222220713db1e2ed3c4c1af12fd64ea9d1b2ef5731e609122885facb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
