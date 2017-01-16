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
        $__internal_3d0bfb5e25c0026938cb27259832ec0a308119546a580eca61fb936ee4b02c45 = $this->env->getExtension("native_profiler");
        $__internal_3d0bfb5e25c0026938cb27259832ec0a308119546a580eca61fb936ee4b02c45->enter($__internal_3d0bfb5e25c0026938cb27259832ec0a308119546a580eca61fb936ee4b02c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d0bfb5e25c0026938cb27259832ec0a308119546a580eca61fb936ee4b02c45->leave($__internal_3d0bfb5e25c0026938cb27259832ec0a308119546a580eca61fb936ee4b02c45_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e027f68b3ed4fd83ff6c183535f442d9d91fb1f05daec1955c4284eb7c6d55a1 = $this->env->getExtension("native_profiler");
        $__internal_e027f68b3ed4fd83ff6c183535f442d9d91fb1f05daec1955c4284eb7c6d55a1->enter($__internal_e027f68b3ed4fd83ff6c183535f442d9d91fb1f05daec1955c4284eb7c6d55a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_e027f68b3ed4fd83ff6c183535f442d9d91fb1f05daec1955c4284eb7c6d55a1->leave($__internal_e027f68b3ed4fd83ff6c183535f442d9d91fb1f05daec1955c4284eb7c6d55a1_prof);

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
