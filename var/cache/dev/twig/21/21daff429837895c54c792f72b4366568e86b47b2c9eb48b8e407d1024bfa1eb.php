<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_89e36690517c2cc5c3f84eb57bbfdba414bc2a5ed321421f0f35ebb3fa566d16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_dbbb14e4d8b7886d75a50a28d6a772f530c8bad984244b20e77a2fdbe0b76cc2 = $this->env->getExtension("native_profiler");
        $__internal_dbbb14e4d8b7886d75a50a28d6a772f530c8bad984244b20e77a2fdbe0b76cc2->enter($__internal_dbbb14e4d8b7886d75a50a28d6a772f530c8bad984244b20e77a2fdbe0b76cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbbb14e4d8b7886d75a50a28d6a772f530c8bad984244b20e77a2fdbe0b76cc2->leave($__internal_dbbb14e4d8b7886d75a50a28d6a772f530c8bad984244b20e77a2fdbe0b76cc2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12e0d5aa728175aad875cfd2e098f1071816cff12ff600714c0d4d8aebc6d92c = $this->env->getExtension("native_profiler");
        $__internal_12e0d5aa728175aad875cfd2e098f1071816cff12ff600714c0d4d8aebc6d92c->enter($__internal_12e0d5aa728175aad875cfd2e098f1071816cff12ff600714c0d4d8aebc6d92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_12e0d5aa728175aad875cfd2e098f1071816cff12ff600714c0d4d8aebc6d92c->leave($__internal_12e0d5aa728175aad875cfd2e098f1071816cff12ff600714c0d4d8aebc6d92c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
