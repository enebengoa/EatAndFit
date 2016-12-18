<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_722feb618993ebaf89a8f6e339bc3193bd7200c5eb4a4833c8997c7ef9a4f66e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_5584294c98a7eef7ee9745ce086308c6384ccf9f8a74555646ff8f297e170056 = $this->env->getExtension("native_profiler");
        $__internal_5584294c98a7eef7ee9745ce086308c6384ccf9f8a74555646ff8f297e170056->enter($__internal_5584294c98a7eef7ee9745ce086308c6384ccf9f8a74555646ff8f297e170056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5584294c98a7eef7ee9745ce086308c6384ccf9f8a74555646ff8f297e170056->leave($__internal_5584294c98a7eef7ee9745ce086308c6384ccf9f8a74555646ff8f297e170056_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_753369aa13cff4227f125aecb097b5febfe55aa210cac3bcb1f76223727ffc8e = $this->env->getExtension("native_profiler");
        $__internal_753369aa13cff4227f125aecb097b5febfe55aa210cac3bcb1f76223727ffc8e->enter($__internal_753369aa13cff4227f125aecb097b5febfe55aa210cac3bcb1f76223727ffc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_753369aa13cff4227f125aecb097b5febfe55aa210cac3bcb1f76223727ffc8e->leave($__internal_753369aa13cff4227f125aecb097b5febfe55aa210cac3bcb1f76223727ffc8e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
