<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_d4399a31ffb879769d01c3cf698d0a2c5607d9db818bbed41c6e27fc3a25e7d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_2b6259523116480bc6a28403b7503dfb90a05f84795bc856c3ba9a9bc903f062 = $this->env->getExtension("native_profiler");
        $__internal_2b6259523116480bc6a28403b7503dfb90a05f84795bc856c3ba9a9bc903f062->enter($__internal_2b6259523116480bc6a28403b7503dfb90a05f84795bc856c3ba9a9bc903f062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b6259523116480bc6a28403b7503dfb90a05f84795bc856c3ba9a9bc903f062->leave($__internal_2b6259523116480bc6a28403b7503dfb90a05f84795bc856c3ba9a9bc903f062_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d65ad78274b9c769adbd712bda534f2e5a744b4029749797993798dfc935d782 = $this->env->getExtension("native_profiler");
        $__internal_d65ad78274b9c769adbd712bda534f2e5a744b4029749797993798dfc935d782->enter($__internal_d65ad78274b9c769adbd712bda534f2e5a744b4029749797993798dfc935d782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_d65ad78274b9c769adbd712bda534f2e5a744b4029749797993798dfc935d782->leave($__internal_d65ad78274b9c769adbd712bda534f2e5a744b4029749797993798dfc935d782_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
