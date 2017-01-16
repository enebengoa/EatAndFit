<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_803941ad8716e8b28fd68af4a603bffeffeaedd1b9033f3fd01e64f5680fd9dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_7f59aeead262ed28676a929a0b8ddc2cc6100eec23c9676ff152df2a11929390 = $this->env->getExtension("native_profiler");
        $__internal_7f59aeead262ed28676a929a0b8ddc2cc6100eec23c9676ff152df2a11929390->enter($__internal_7f59aeead262ed28676a929a0b8ddc2cc6100eec23c9676ff152df2a11929390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f59aeead262ed28676a929a0b8ddc2cc6100eec23c9676ff152df2a11929390->leave($__internal_7f59aeead262ed28676a929a0b8ddc2cc6100eec23c9676ff152df2a11929390_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e714b8f719edf1c1c9c467abd44e5ba7a4a5d99d6d638f385aa6e68b7bed8f56 = $this->env->getExtension("native_profiler");
        $__internal_e714b8f719edf1c1c9c467abd44e5ba7a4a5d99d6d638f385aa6e68b7bed8f56->enter($__internal_e714b8f719edf1c1c9c467abd44e5ba7a4a5d99d6d638f385aa6e68b7bed8f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e714b8f719edf1c1c9c467abd44e5ba7a4a5d99d6d638f385aa6e68b7bed8f56->leave($__internal_e714b8f719edf1c1c9c467abd44e5ba7a4a5d99d6d638f385aa6e68b7bed8f56_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
