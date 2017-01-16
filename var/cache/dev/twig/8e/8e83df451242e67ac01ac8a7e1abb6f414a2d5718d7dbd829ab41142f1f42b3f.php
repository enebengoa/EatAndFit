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
        $__internal_53e27192a1f0801e67164d126a58d447f7931e68a62b285bf3a9d2e392a917db = $this->env->getExtension("native_profiler");
        $__internal_53e27192a1f0801e67164d126a58d447f7931e68a62b285bf3a9d2e392a917db->enter($__internal_53e27192a1f0801e67164d126a58d447f7931e68a62b285bf3a9d2e392a917db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_53e27192a1f0801e67164d126a58d447f7931e68a62b285bf3a9d2e392a917db->leave($__internal_53e27192a1f0801e67164d126a58d447f7931e68a62b285bf3a9d2e392a917db_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1849af761b3c512e2bf299bd1e7bbfcf1e60ebdf388ab09691915f0f3482d7c5 = $this->env->getExtension("native_profiler");
        $__internal_1849af761b3c512e2bf299bd1e7bbfcf1e60ebdf388ab09691915f0f3482d7c5->enter($__internal_1849af761b3c512e2bf299bd1e7bbfcf1e60ebdf388ab09691915f0f3482d7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_1849af761b3c512e2bf299bd1e7bbfcf1e60ebdf388ab09691915f0f3482d7c5->leave($__internal_1849af761b3c512e2bf299bd1e7bbfcf1e60ebdf388ab09691915f0f3482d7c5_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7141e6608377769175c6deacc11dd70da71290eecd1e599ea9a34e5f2dd78c59 = $this->env->getExtension("native_profiler");
        $__internal_7141e6608377769175c6deacc11dd70da71290eecd1e599ea9a34e5f2dd78c59->enter($__internal_7141e6608377769175c6deacc11dd70da71290eecd1e599ea9a34e5f2dd78c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7141e6608377769175c6deacc11dd70da71290eecd1e599ea9a34e5f2dd78c59->leave($__internal_7141e6608377769175c6deacc11dd70da71290eecd1e599ea9a34e5f2dd78c59_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9a6e5b0914d7babc310aa275280926b1e19124bf4927a551feb4bc8a0725bdc9 = $this->env->getExtension("native_profiler");
        $__internal_9a6e5b0914d7babc310aa275280926b1e19124bf4927a551feb4bc8a0725bdc9->enter($__internal_9a6e5b0914d7babc310aa275280926b1e19124bf4927a551feb4bc8a0725bdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9a6e5b0914d7babc310aa275280926b1e19124bf4927a551feb4bc8a0725bdc9->leave($__internal_9a6e5b0914d7babc310aa275280926b1e19124bf4927a551feb4bc8a0725bdc9_prof);

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
