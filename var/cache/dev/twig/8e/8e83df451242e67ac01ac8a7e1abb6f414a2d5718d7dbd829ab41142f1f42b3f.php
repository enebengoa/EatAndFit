<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_f8331a1085f15f394fe58be9a4000cd132fc334569b3f1523092ccd694c25846 extends Twig_Template
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
        $__internal_70593894fbeb12b16289289fbac693434f24f743ad5afcc833224ae6ad32e116 = $this->env->getExtension("native_profiler");
        $__internal_70593894fbeb12b16289289fbac693434f24f743ad5afcc833224ae6ad32e116->enter($__internal_70593894fbeb12b16289289fbac693434f24f743ad5afcc833224ae6ad32e116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_70593894fbeb12b16289289fbac693434f24f743ad5afcc833224ae6ad32e116->leave($__internal_70593894fbeb12b16289289fbac693434f24f743ad5afcc833224ae6ad32e116_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bbdaae9dd1cce501047f21b26a8cff97dfd983a3867e679ba9ee0d3128ccf82d = $this->env->getExtension("native_profiler");
        $__internal_bbdaae9dd1cce501047f21b26a8cff97dfd983a3867e679ba9ee0d3128ccf82d->enter($__internal_bbdaae9dd1cce501047f21b26a8cff97dfd983a3867e679ba9ee0d3128ccf82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_bbdaae9dd1cce501047f21b26a8cff97dfd983a3867e679ba9ee0d3128ccf82d->leave($__internal_bbdaae9dd1cce501047f21b26a8cff97dfd983a3867e679ba9ee0d3128ccf82d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8e57a9d91ea3fb9f9b8969ce2bd189958d2e2010edea908b3cb9d657e4b3aa02 = $this->env->getExtension("native_profiler");
        $__internal_8e57a9d91ea3fb9f9b8969ce2bd189958d2e2010edea908b3cb9d657e4b3aa02->enter($__internal_8e57a9d91ea3fb9f9b8969ce2bd189958d2e2010edea908b3cb9d657e4b3aa02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8e57a9d91ea3fb9f9b8969ce2bd189958d2e2010edea908b3cb9d657e4b3aa02->leave($__internal_8e57a9d91ea3fb9f9b8969ce2bd189958d2e2010edea908b3cb9d657e4b3aa02_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0c10e85a73d46fa8ea933e57138bca4e72ea7f86a523b5b75dc467d2db81c903 = $this->env->getExtension("native_profiler");
        $__internal_0c10e85a73d46fa8ea933e57138bca4e72ea7f86a523b5b75dc467d2db81c903->enter($__internal_0c10e85a73d46fa8ea933e57138bca4e72ea7f86a523b5b75dc467d2db81c903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0c10e85a73d46fa8ea933e57138bca4e72ea7f86a523b5b75dc467d2db81c903->leave($__internal_0c10e85a73d46fa8ea933e57138bca4e72ea7f86a523b5b75dc467d2db81c903_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
