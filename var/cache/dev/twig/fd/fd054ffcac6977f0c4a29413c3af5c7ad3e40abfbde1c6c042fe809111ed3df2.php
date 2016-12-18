<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_fe56628269aaa39aeb465ffedbf1afca024b8660a2afe80e59128c3323849683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_77ce00bb5ecc3e93fd7fbba1e795e72814fe95ce752bbd17a45ff7e52ebb7ade = $this->env->getExtension("native_profiler");
        $__internal_77ce00bb5ecc3e93fd7fbba1e795e72814fe95ce752bbd17a45ff7e52ebb7ade->enter($__internal_77ce00bb5ecc3e93fd7fbba1e795e72814fe95ce752bbd17a45ff7e52ebb7ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77ce00bb5ecc3e93fd7fbba1e795e72814fe95ce752bbd17a45ff7e52ebb7ade->leave($__internal_77ce00bb5ecc3e93fd7fbba1e795e72814fe95ce752bbd17a45ff7e52ebb7ade_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_86e13bf13328658165e47edb7a598424368bace7ad1f5ec07c4aa3094fe6dcb4 = $this->env->getExtension("native_profiler");
        $__internal_86e13bf13328658165e47edb7a598424368bace7ad1f5ec07c4aa3094fe6dcb4->enter($__internal_86e13bf13328658165e47edb7a598424368bace7ad1f5ec07c4aa3094fe6dcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_86e13bf13328658165e47edb7a598424368bace7ad1f5ec07c4aa3094fe6dcb4->leave($__internal_86e13bf13328658165e47edb7a598424368bace7ad1f5ec07c4aa3094fe6dcb4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
