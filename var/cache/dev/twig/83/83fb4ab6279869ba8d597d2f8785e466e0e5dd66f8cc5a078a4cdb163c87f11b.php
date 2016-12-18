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
        $__internal_6246c368da22eed6ab77f9ffd7f0a6be74352d0b6b1121b90c417b3f9f5c5756 = $this->env->getExtension("native_profiler");
        $__internal_6246c368da22eed6ab77f9ffd7f0a6be74352d0b6b1121b90c417b3f9f5c5756->enter($__internal_6246c368da22eed6ab77f9ffd7f0a6be74352d0b6b1121b90c417b3f9f5c5756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6246c368da22eed6ab77f9ffd7f0a6be74352d0b6b1121b90c417b3f9f5c5756->leave($__internal_6246c368da22eed6ab77f9ffd7f0a6be74352d0b6b1121b90c417b3f9f5c5756_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_31fca17489475bee665683fb24b70a2cfa485b1251edb4e19106d5d09c8a725f = $this->env->getExtension("native_profiler");
        $__internal_31fca17489475bee665683fb24b70a2cfa485b1251edb4e19106d5d09c8a725f->enter($__internal_31fca17489475bee665683fb24b70a2cfa485b1251edb4e19106d5d09c8a725f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_31fca17489475bee665683fb24b70a2cfa485b1251edb4e19106d5d09c8a725f->leave($__internal_31fca17489475bee665683fb24b70a2cfa485b1251edb4e19106d5d09c8a725f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cce5ad3156dcee04b18ec8fc27d6fc1606db24cbb11d2ead43f48e4e0fb369f1 = $this->env->getExtension("native_profiler");
        $__internal_cce5ad3156dcee04b18ec8fc27d6fc1606db24cbb11d2ead43f48e4e0fb369f1->enter($__internal_cce5ad3156dcee04b18ec8fc27d6fc1606db24cbb11d2ead43f48e4e0fb369f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cce5ad3156dcee04b18ec8fc27d6fc1606db24cbb11d2ead43f48e4e0fb369f1->leave($__internal_cce5ad3156dcee04b18ec8fc27d6fc1606db24cbb11d2ead43f48e4e0fb369f1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c7acc990eea1c35d59421d6b17880f0f5e750404957ac6ca7004de6357a13dd4 = $this->env->getExtension("native_profiler");
        $__internal_c7acc990eea1c35d59421d6b17880f0f5e750404957ac6ca7004de6357a13dd4->enter($__internal_c7acc990eea1c35d59421d6b17880f0f5e750404957ac6ca7004de6357a13dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c7acc990eea1c35d59421d6b17880f0f5e750404957ac6ca7004de6357a13dd4->leave($__internal_c7acc990eea1c35d59421d6b17880f0f5e750404957ac6ca7004de6357a13dd4_prof);

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
