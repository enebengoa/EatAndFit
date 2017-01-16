<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_5f2feeee9a5f3dee3f49049e439816a51112e37188050c93a401f96c6243be4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_56f64d3bd9f51db1109c2c13318c85d1beaf41bd38f9bafb148df2d82d7546cf = $this->env->getExtension("native_profiler");
        $__internal_56f64d3bd9f51db1109c2c13318c85d1beaf41bd38f9bafb148df2d82d7546cf->enter($__internal_56f64d3bd9f51db1109c2c13318c85d1beaf41bd38f9bafb148df2d82d7546cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56f64d3bd9f51db1109c2c13318c85d1beaf41bd38f9bafb148df2d82d7546cf->leave($__internal_56f64d3bd9f51db1109c2c13318c85d1beaf41bd38f9bafb148df2d82d7546cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8666f67c1e31f3ecd5d08eae8b8530aaaf1b4ca206c843290e93c62885c4be00 = $this->env->getExtension("native_profiler");
        $__internal_8666f67c1e31f3ecd5d08eae8b8530aaaf1b4ca206c843290e93c62885c4be00->enter($__internal_8666f67c1e31f3ecd5d08eae8b8530aaaf1b4ca206c843290e93c62885c4be00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_8666f67c1e31f3ecd5d08eae8b8530aaaf1b4ca206c843290e93c62885c4be00->leave($__internal_8666f67c1e31f3ecd5d08eae8b8530aaaf1b4ca206c843290e93c62885c4be00_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
