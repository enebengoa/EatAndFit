<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_d316911d30f2463ed08b42a55286f73e593387bc9aae3601b7461340f29e8bcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_0af5cab85fc08848375711dfe8045e053761f933b493032e18d4e9a00c0d2376 = $this->env->getExtension("native_profiler");
        $__internal_0af5cab85fc08848375711dfe8045e053761f933b493032e18d4e9a00c0d2376->enter($__internal_0af5cab85fc08848375711dfe8045e053761f933b493032e18d4e9a00c0d2376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0af5cab85fc08848375711dfe8045e053761f933b493032e18d4e9a00c0d2376->leave($__internal_0af5cab85fc08848375711dfe8045e053761f933b493032e18d4e9a00c0d2376_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20b9b3e5d15ee8e7c84ef21c47e5ea7fb1520065550b5a6f9446129c117ee99f = $this->env->getExtension("native_profiler");
        $__internal_20b9b3e5d15ee8e7c84ef21c47e5ea7fb1520065550b5a6f9446129c117ee99f->enter($__internal_20b9b3e5d15ee8e7c84ef21c47e5ea7fb1520065550b5a6f9446129c117ee99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_20b9b3e5d15ee8e7c84ef21c47e5ea7fb1520065550b5a6f9446129c117ee99f->leave($__internal_20b9b3e5d15ee8e7c84ef21c47e5ea7fb1520065550b5a6f9446129c117ee99f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
