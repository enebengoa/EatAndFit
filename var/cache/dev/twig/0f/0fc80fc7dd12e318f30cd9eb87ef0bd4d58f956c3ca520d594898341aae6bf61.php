<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_3fd2e099858041c83e6444e74eaa4f7387d7a4510c3e3fb395871acd0ca59bf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_d54c66bb54b4968dcd6a59350db08a08df1f44ad66d1e9985d36fd5404612495 = $this->env->getExtension("native_profiler");
        $__internal_d54c66bb54b4968dcd6a59350db08a08df1f44ad66d1e9985d36fd5404612495->enter($__internal_d54c66bb54b4968dcd6a59350db08a08df1f44ad66d1e9985d36fd5404612495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d54c66bb54b4968dcd6a59350db08a08df1f44ad66d1e9985d36fd5404612495->leave($__internal_d54c66bb54b4968dcd6a59350db08a08df1f44ad66d1e9985d36fd5404612495_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c989cac585720b13408b9a9fca17b50244e0ffb01002d6d3511f2cd8ecd88f7 = $this->env->getExtension("native_profiler");
        $__internal_8c989cac585720b13408b9a9fca17b50244e0ffb01002d6d3511f2cd8ecd88f7->enter($__internal_8c989cac585720b13408b9a9fca17b50244e0ffb01002d6d3511f2cd8ecd88f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8c989cac585720b13408b9a9fca17b50244e0ffb01002d6d3511f2cd8ecd88f7->leave($__internal_8c989cac585720b13408b9a9fca17b50244e0ffb01002d6d3511f2cd8ecd88f7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
