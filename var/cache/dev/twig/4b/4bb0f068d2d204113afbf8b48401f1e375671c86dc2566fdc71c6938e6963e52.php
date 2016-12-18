<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_9cb3badbb76c28a380c368834bdbca2a50b3ef79f678e874ca6e3cb40208b30c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_28b02449c2b5b046bddd3283df536ce44f0c94ffb31c64ca6dd5599dfb30bde1 = $this->env->getExtension("native_profiler");
        $__internal_28b02449c2b5b046bddd3283df536ce44f0c94ffb31c64ca6dd5599dfb30bde1->enter($__internal_28b02449c2b5b046bddd3283df536ce44f0c94ffb31c64ca6dd5599dfb30bde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28b02449c2b5b046bddd3283df536ce44f0c94ffb31c64ca6dd5599dfb30bde1->leave($__internal_28b02449c2b5b046bddd3283df536ce44f0c94ffb31c64ca6dd5599dfb30bde1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ffc9a02fbd7e9fbb00575f92adf7c3788b492993025fc8f61229464920d28f19 = $this->env->getExtension("native_profiler");
        $__internal_ffc9a02fbd7e9fbb00575f92adf7c3788b492993025fc8f61229464920d28f19->enter($__internal_ffc9a02fbd7e9fbb00575f92adf7c3788b492993025fc8f61229464920d28f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_ffc9a02fbd7e9fbb00575f92adf7c3788b492993025fc8f61229464920d28f19->leave($__internal_ffc9a02fbd7e9fbb00575f92adf7c3788b492993025fc8f61229464920d28f19_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
