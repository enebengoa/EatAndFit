<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_8127420cb7e3e88fe2245f6aaa8b1d9043e96884bb7b449b1b359557d6f14093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_da31f38986d4c92f05a7d5b1513ad4d3923899a114c0f021d776abf335c1e240 = $this->env->getExtension("native_profiler");
        $__internal_da31f38986d4c92f05a7d5b1513ad4d3923899a114c0f021d776abf335c1e240->enter($__internal_da31f38986d4c92f05a7d5b1513ad4d3923899a114c0f021d776abf335c1e240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da31f38986d4c92f05a7d5b1513ad4d3923899a114c0f021d776abf335c1e240->leave($__internal_da31f38986d4c92f05a7d5b1513ad4d3923899a114c0f021d776abf335c1e240_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1edac61f2d5d34f0002a0411f97ab0806ee6e859c2ab6bc9e5accc93e930882a = $this->env->getExtension("native_profiler");
        $__internal_1edac61f2d5d34f0002a0411f97ab0806ee6e859c2ab6bc9e5accc93e930882a->enter($__internal_1edac61f2d5d34f0002a0411f97ab0806ee6e859c2ab6bc9e5accc93e930882a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_1edac61f2d5d34f0002a0411f97ab0806ee6e859c2ab6bc9e5accc93e930882a->leave($__internal_1edac61f2d5d34f0002a0411f97ab0806ee6e859c2ab6bc9e5accc93e930882a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
";
    }
}
