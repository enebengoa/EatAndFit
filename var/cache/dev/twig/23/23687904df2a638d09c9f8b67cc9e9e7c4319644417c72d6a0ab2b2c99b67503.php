<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_857e67feb2ebbd1b309e81fbec5abab97382b794bc0b954d95950ed27ec14630 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_5dcc842137e9ce49bde1cdd03e7f12f1130128d2e5b000da6ce74ffff775bc87 = $this->env->getExtension("native_profiler");
        $__internal_5dcc842137e9ce49bde1cdd03e7f12f1130128d2e5b000da6ce74ffff775bc87->enter($__internal_5dcc842137e9ce49bde1cdd03e7f12f1130128d2e5b000da6ce74ffff775bc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dcc842137e9ce49bde1cdd03e7f12f1130128d2e5b000da6ce74ffff775bc87->leave($__internal_5dcc842137e9ce49bde1cdd03e7f12f1130128d2e5b000da6ce74ffff775bc87_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1bf8f2cd364eac16d72fa1e0651ce5c54d99dc40ce006d7707887ac8d22c420a = $this->env->getExtension("native_profiler");
        $__internal_1bf8f2cd364eac16d72fa1e0651ce5c54d99dc40ce006d7707887ac8d22c420a->enter($__internal_1bf8f2cd364eac16d72fa1e0651ce5c54d99dc40ce006d7707887ac8d22c420a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_1bf8f2cd364eac16d72fa1e0651ce5c54d99dc40ce006d7707887ac8d22c420a->leave($__internal_1bf8f2cd364eac16d72fa1e0651ce5c54d99dc40ce006d7707887ac8d22c420a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
