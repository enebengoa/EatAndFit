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
        $__internal_f54c323a0a8581758bc21482440145451c6d1710770ebc1c7dbcd1c98aa9dbdb = $this->env->getExtension("native_profiler");
        $__internal_f54c323a0a8581758bc21482440145451c6d1710770ebc1c7dbcd1c98aa9dbdb->enter($__internal_f54c323a0a8581758bc21482440145451c6d1710770ebc1c7dbcd1c98aa9dbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f54c323a0a8581758bc21482440145451c6d1710770ebc1c7dbcd1c98aa9dbdb->leave($__internal_f54c323a0a8581758bc21482440145451c6d1710770ebc1c7dbcd1c98aa9dbdb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7ceced65df3dc2cb374b5f38b115e0359a8488b1e4df1604ba2c48bfc2e5a70 = $this->env->getExtension("native_profiler");
        $__internal_e7ceced65df3dc2cb374b5f38b115e0359a8488b1e4df1604ba2c48bfc2e5a70->enter($__internal_e7ceced65df3dc2cb374b5f38b115e0359a8488b1e4df1604ba2c48bfc2e5a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e7ceced65df3dc2cb374b5f38b115e0359a8488b1e4df1604ba2c48bfc2e5a70->leave($__internal_e7ceced65df3dc2cb374b5f38b115e0359a8488b1e4df1604ba2c48bfc2e5a70_prof);

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
