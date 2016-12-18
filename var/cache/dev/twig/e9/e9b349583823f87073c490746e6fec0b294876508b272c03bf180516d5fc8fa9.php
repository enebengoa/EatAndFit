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
        $__internal_ba7ee4bfd64407d0f7405129f15e1d66cc63e2436506266a8156abba57bf2570 = $this->env->getExtension("native_profiler");
        $__internal_ba7ee4bfd64407d0f7405129f15e1d66cc63e2436506266a8156abba57bf2570->enter($__internal_ba7ee4bfd64407d0f7405129f15e1d66cc63e2436506266a8156abba57bf2570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ba7ee4bfd64407d0f7405129f15e1d66cc63e2436506266a8156abba57bf2570->leave($__internal_ba7ee4bfd64407d0f7405129f15e1d66cc63e2436506266a8156abba57bf2570_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_64db64e00762129704831a9f8c62e65ce00e1f6dbce67c9b31ea54f49edc3dd3 = $this->env->getExtension("native_profiler");
        $__internal_64db64e00762129704831a9f8c62e65ce00e1f6dbce67c9b31ea54f49edc3dd3->enter($__internal_64db64e00762129704831a9f8c62e65ce00e1f6dbce67c9b31ea54f49edc3dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_64db64e00762129704831a9f8c62e65ce00e1f6dbce67c9b31ea54f49edc3dd3->leave($__internal_64db64e00762129704831a9f8c62e65ce00e1f6dbce67c9b31ea54f49edc3dd3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a9022a821a89864936e917f56f4ae117e0dbe847af7ba48e34e0381d2787d850 = $this->env->getExtension("native_profiler");
        $__internal_a9022a821a89864936e917f56f4ae117e0dbe847af7ba48e34e0381d2787d850->enter($__internal_a9022a821a89864936e917f56f4ae117e0dbe847af7ba48e34e0381d2787d850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a9022a821a89864936e917f56f4ae117e0dbe847af7ba48e34e0381d2787d850->leave($__internal_a9022a821a89864936e917f56f4ae117e0dbe847af7ba48e34e0381d2787d850_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5a4fd1eed5dabfe7a203202e6479a66b39e48f537b191bc6644eadfe2df4ee75 = $this->env->getExtension("native_profiler");
        $__internal_5a4fd1eed5dabfe7a203202e6479a66b39e48f537b191bc6644eadfe2df4ee75->enter($__internal_5a4fd1eed5dabfe7a203202e6479a66b39e48f537b191bc6644eadfe2df4ee75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5a4fd1eed5dabfe7a203202e6479a66b39e48f537b191bc6644eadfe2df4ee75->leave($__internal_5a4fd1eed5dabfe7a203202e6479a66b39e48f537b191bc6644eadfe2df4ee75_prof);

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
