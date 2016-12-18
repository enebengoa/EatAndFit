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
        $__internal_73ad85d33405185cd84dbf6be2c7b2fd1965d2222a19395768e481d901cdde22 = $this->env->getExtension("native_profiler");
        $__internal_73ad85d33405185cd84dbf6be2c7b2fd1965d2222a19395768e481d901cdde22->enter($__internal_73ad85d33405185cd84dbf6be2c7b2fd1965d2222a19395768e481d901cdde22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73ad85d33405185cd84dbf6be2c7b2fd1965d2222a19395768e481d901cdde22->leave($__internal_73ad85d33405185cd84dbf6be2c7b2fd1965d2222a19395768e481d901cdde22_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c58d99a452eba4fded815f8e9523f5a37ea0d5d79f88e8d5a07e86e2a56e1c2e = $this->env->getExtension("native_profiler");
        $__internal_c58d99a452eba4fded815f8e9523f5a37ea0d5d79f88e8d5a07e86e2a56e1c2e->enter($__internal_c58d99a452eba4fded815f8e9523f5a37ea0d5d79f88e8d5a07e86e2a56e1c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_c58d99a452eba4fded815f8e9523f5a37ea0d5d79f88e8d5a07e86e2a56e1c2e->leave($__internal_c58d99a452eba4fded815f8e9523f5a37ea0d5d79f88e8d5a07e86e2a56e1c2e_prof);

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
