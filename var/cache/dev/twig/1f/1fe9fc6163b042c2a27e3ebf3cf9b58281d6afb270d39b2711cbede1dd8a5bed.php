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
        $__internal_bdf0bda75ca04da260716ef55141fd07a0578a8f3e3ca150e8085f33bf840ec1 = $this->env->getExtension("native_profiler");
        $__internal_bdf0bda75ca04da260716ef55141fd07a0578a8f3e3ca150e8085f33bf840ec1->enter($__internal_bdf0bda75ca04da260716ef55141fd07a0578a8f3e3ca150e8085f33bf840ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bdf0bda75ca04da260716ef55141fd07a0578a8f3e3ca150e8085f33bf840ec1->leave($__internal_bdf0bda75ca04da260716ef55141fd07a0578a8f3e3ca150e8085f33bf840ec1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1db7bde271cf331f4f0d56f961db52a9aa4f60bd3b963dd898fe24d53a768f07 = $this->env->getExtension("native_profiler");
        $__internal_1db7bde271cf331f4f0d56f961db52a9aa4f60bd3b963dd898fe24d53a768f07->enter($__internal_1db7bde271cf331f4f0d56f961db52a9aa4f60bd3b963dd898fe24d53a768f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_1db7bde271cf331f4f0d56f961db52a9aa4f60bd3b963dd898fe24d53a768f07->leave($__internal_1db7bde271cf331f4f0d56f961db52a9aa4f60bd3b963dd898fe24d53a768f07_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ec2f1768ad370c4aa88f65aea993c571ef1088aeacbb50c12a77989dcfdf71bd = $this->env->getExtension("native_profiler");
        $__internal_ec2f1768ad370c4aa88f65aea993c571ef1088aeacbb50c12a77989dcfdf71bd->enter($__internal_ec2f1768ad370c4aa88f65aea993c571ef1088aeacbb50c12a77989dcfdf71bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ec2f1768ad370c4aa88f65aea993c571ef1088aeacbb50c12a77989dcfdf71bd->leave($__internal_ec2f1768ad370c4aa88f65aea993c571ef1088aeacbb50c12a77989dcfdf71bd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fd85d1e00d3271b8dc69fd070b0741c2b455e4872e4d9b2da28111887ed4b7b7 = $this->env->getExtension("native_profiler");
        $__internal_fd85d1e00d3271b8dc69fd070b0741c2b455e4872e4d9b2da28111887ed4b7b7->enter($__internal_fd85d1e00d3271b8dc69fd070b0741c2b455e4872e4d9b2da28111887ed4b7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fd85d1e00d3271b8dc69fd070b0741c2b455e4872e4d9b2da28111887ed4b7b7->leave($__internal_fd85d1e00d3271b8dc69fd070b0741c2b455e4872e4d9b2da28111887ed4b7b7_prof);

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
