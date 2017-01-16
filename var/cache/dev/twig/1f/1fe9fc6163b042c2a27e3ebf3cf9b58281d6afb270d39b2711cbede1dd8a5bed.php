<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_19f25dbf736f3f50dbaf834d15ebc933b647c49c7754107c8dfb05a49047c6f1 extends Twig_Template
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
        $__internal_8f8f7a28461ae60434f195f4a88b10923bf8f0b64c2b4300ee04dec31d7a82cd = $this->env->getExtension("native_profiler");
        $__internal_8f8f7a28461ae60434f195f4a88b10923bf8f0b64c2b4300ee04dec31d7a82cd->enter($__internal_8f8f7a28461ae60434f195f4a88b10923bf8f0b64c2b4300ee04dec31d7a82cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8f8f7a28461ae60434f195f4a88b10923bf8f0b64c2b4300ee04dec31d7a82cd->leave($__internal_8f8f7a28461ae60434f195f4a88b10923bf8f0b64c2b4300ee04dec31d7a82cd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cddd4bae7cafce2bf73ec4f516570b2ef59f1985cb590745a32a6f4efaf44bde = $this->env->getExtension("native_profiler");
        $__internal_cddd4bae7cafce2bf73ec4f516570b2ef59f1985cb590745a32a6f4efaf44bde->enter($__internal_cddd4bae7cafce2bf73ec4f516570b2ef59f1985cb590745a32a6f4efaf44bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_cddd4bae7cafce2bf73ec4f516570b2ef59f1985cb590745a32a6f4efaf44bde->leave($__internal_cddd4bae7cafce2bf73ec4f516570b2ef59f1985cb590745a32a6f4efaf44bde_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a9d9fc8d46070b86ebd1dbd6ac2bc952ed7c5d5b2da6021f07a00819f4548588 = $this->env->getExtension("native_profiler");
        $__internal_a9d9fc8d46070b86ebd1dbd6ac2bc952ed7c5d5b2da6021f07a00819f4548588->enter($__internal_a9d9fc8d46070b86ebd1dbd6ac2bc952ed7c5d5b2da6021f07a00819f4548588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a9d9fc8d46070b86ebd1dbd6ac2bc952ed7c5d5b2da6021f07a00819f4548588->leave($__internal_a9d9fc8d46070b86ebd1dbd6ac2bc952ed7c5d5b2da6021f07a00819f4548588_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fd66792a0511210624169fe75472bd63714a52e251a497d142fe0001f1ef9f93 = $this->env->getExtension("native_profiler");
        $__internal_fd66792a0511210624169fe75472bd63714a52e251a497d142fe0001f1ef9f93->enter($__internal_fd66792a0511210624169fe75472bd63714a52e251a497d142fe0001f1ef9f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fd66792a0511210624169fe75472bd63714a52e251a497d142fe0001f1ef9f93->leave($__internal_fd66792a0511210624169fe75472bd63714a52e251a497d142fe0001f1ef9f93_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
