<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_999adba7e340676cb9a07fc00abe42fbd00f80a8ad26ef8b22a7b969a63f2750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_a898090fd3e2a5d91497d2cbe5312d9901d894985872aa1c35a90314a040a3f7 = $this->env->getExtension("native_profiler");
        $__internal_a898090fd3e2a5d91497d2cbe5312d9901d894985872aa1c35a90314a040a3f7->enter($__internal_a898090fd3e2a5d91497d2cbe5312d9901d894985872aa1c35a90314a040a3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a898090fd3e2a5d91497d2cbe5312d9901d894985872aa1c35a90314a040a3f7->leave($__internal_a898090fd3e2a5d91497d2cbe5312d9901d894985872aa1c35a90314a040a3f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2e7c421474f7ce851be2c049633db68486b4f4ffdecf4661d19b816f8926259 = $this->env->getExtension("native_profiler");
        $__internal_b2e7c421474f7ce851be2c049633db68486b4f4ffdecf4661d19b816f8926259->enter($__internal_b2e7c421474f7ce851be2c049633db68486b4f4ffdecf4661d19b816f8926259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b2e7c421474f7ce851be2c049633db68486b4f4ffdecf4661d19b816f8926259->leave($__internal_b2e7c421474f7ce851be2c049633db68486b4f4ffdecf4661d19b816f8926259_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
